<?php

class BillingController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->registry->products_model = products_model::getInstance();
        $this->registry->services_model = services_model::getInstance();
        $this->registry->invoices_model = invoices_model::getInstance();
        $this->registry->payments_model = payments_model::getInstance();
        $this->registry->clients_model = clients_model::getInstance();
        $this->registry->users_activities = users_activities::getInstance();
    }

    public function index(){
        // Handle the content management index view
        $this->registry->template->show('admin/billing/index.view.php');
    }

    public function products()
    {
        $per_page = 10;
        $start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
        $products = $this->registry->products_model->get_limit_data($per_page, $start);
        $this->registry->template->products = $products;
        $this->registry->template->show('admin/billing/products.view.php');
    }

    public function services()
    {
        $per_page = 10;
        $start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
        $services = $this->registry->services_model->get_limit_data($per_page, $start);
        $this->registry->template->services = $services;
        $this->registry->template->show('admin/billing/services.view.php');
    }

    public function subscriptions()
    {
        $per_page = 10;
        $start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
        
        // Get active services that are subscription-based
        $subscriptions = $this->registry->services_model->get_limit_data($per_page, $start, 
            (object)['column' => 'services_type', 'value' => 'subscription']);
            
        $this->registry->template->subscriptions = $subscriptions;
        $this->registry->template->show('admin/billing/subscriptions.view.php');
    }

    public function clients()
    {
        $per_page = 10;
        $start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
        
        // Get clients with pagination
        $clients = $this->registry->clients_model->get_limit_data($per_page, $start);
        $total_clients = $this->registry->clients_model->count_all();
        
        // Search functionality
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $clients = $this->registry->clients_model->search($_GET['search']);
            $total_clients = count($clients);
        }
        
        // Set template variables
        $this->registry->template->clients = $clients;
        $this->registry->template->total_clients = $total_clients;
        $this->registry->template->per_page = $per_page;
        $this->registry->template->current_page = floor($start / $per_page) + 1;
        $this->registry->template->total_pages = ceil($total_clients / $per_page);
        
        $this->registry->template->show('admin/billing/clients.view.php');
    }

    public function invoices()
    {
        $per_page = 10;
        $start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
        $invoices = $this->registry->invoices_model->get_limit_data($per_page, $start);
        $this->registry->template->invoices = $invoices;
        $this->registry->template->show('admin/billing/invoices.view.php');
    }

    public function payments()
    {
        $per_page = 10;
        $start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
        $payments = $this->registry->payments_model->get_limit_data($per_page, $start);
        $this->registry->template->payments = $payments;
        $this->registry->template->show('admin/billing/payments.view.php');
    }

    public function reports()
    {
        // Get summary data for reports
        $total_clients = $this->registry->clients_model->count_all();
        $active_clients = count($this->registry->clients_model->get_active_clients());
        
        // Get recent activities
        $recent_activities = $this->registry->users_activities->getActivitiesAfterTimestamp(
            date('Ymd_His', strtotime('-30 days')) . '_users_activities'
        );
        
        // Calculate revenue
        $month_start = date('Y-m-01 00:00:00');
        $month_payments = $this->registry->payments_model->get_payments_after_date($month_start);
        $monthly_revenue = array_sum(array_column($month_payments, 'payments_amount'));
        
        // Set template variables
        $this->registry->template->total_clients = $total_clients;
        $this->registry->template->active_clients = $active_clients;
        $this->registry->template->recent_activities = $recent_activities;
        $this->registry->template->monthly_revenue = $monthly_revenue;
        
        $this->registry->template->show('admin/billing/reports.view.php');
    }

    public function billClientForProduct($clientId, $productId)
    {
        // Create invoice for product
        $product = $this->registry->products_model->get_limit_data(1, 0, (object)['column' => 'products_id', 'value' => $productId])[0];
        $invoiceData = [
            'invoices_clients_id' => $clientId,
            'invoices_amount' => $product['products_price'],
            'invoices_description' => "Purchase of " . $product['products_name'],
            'invoices_created_at' => date('Y-m-d H:i:s')
        ];
        $this->registry->invoices_model->create($invoiceData);
        return $this->registry->invoices_model->lastInsertedId();
    }

    public function payForService($clientId, $serviceId)
    {
        // Create payment for service
        $service = $this->registry->services_model->get_limit_data(1, 0, (object)['column' => 'services_id', 'value' => $serviceId])[0];
        $paymentData = [
            'payments_clients_id' => $clientId,
            'payments_amount' => $service['services_price'],
            'payments_description' => "Payment for " . $service['services_name'],
            'payments_payment_date' => date('Y-m-d H:i:s')
        ];
        $this->registry->payments_model->create($paymentData);
        return $this->registry->payments_model->lastInsertedId();
    }

    public function invoiceForRecurringService($clientId, $subscriptionId)
    {
        // Create invoice for recurring service
        $service = $this->registry->services_model->get_limit_data(1, 0, (object)['column' => 'services_id', 'value' => $subscriptionId])[0];
        $invoiceData = [
            'invoices_clients_id' => $clientId,
            'invoices_amount' => $service['services_price'],
            'invoices_description' => "Recurring service: " . $service['services_name'],
            'invoices_created_at' => date('Y-m-d H:i:s')
        ];
        $this->registry->invoices_model->create($invoiceData);
        return $this->registry->invoices_model->lastInsertedId();
    }

    public function takePaymentForRecurringService($clientId, $subscriptionId)
    {
        // Create payment for recurring service
        $service = $this->registry->services_model->get_limit_data(1, 0, (object)['column' => 'services_id', 'value' => $subscriptionId])[0];
        $paymentData = [
            'payments_clients_id' => $clientId,
            'payments_amount' => $service['services_price'],
            'payments_description' => "Recurring payment for " . $service['services_name'],
            'payments_payment_date' => date('Y-m-d H:i:s')
        ];
        $this->registry->payments_model->create($paymentData);
        return $this->registry->payments_model->lastInsertedId();
    }


    public function getClientBillingHistory($clientId)
    {
        $client = $this->registry->clients_model->get_by_id($clientId);
        if (!$client) {
            return false;
        }
        
        // Get all invoices and payments for the client
        $invoices = $this->registry->invoices_model->get_limit_data(100, 0, 
            (object)['column' => 'invoices_clients_id', 'value' => $clientId]);
        $payments = $this->registry->payments_model->get_limit_data(100, 0, 
            (object)['column' => 'payments_clients_id', 'value' => $clientId]);
            
        return [
            'client' => $client,
            'invoices' => $invoices,
            'payments' => $payments
        ];
    }

    public function generateMonthlyInvoices()
    {
        // Get all active subscriptions
        $active_clients = $this->registry->clients_model->get_active_clients();
        $processed = [];
        
        foreach ($active_clients as $client) {
            // Get client's active subscriptions
            $subscriptions = $this->registry->services_model->get_client_subscriptions($client['clients_id']);
            
            foreach ($subscriptions as $subscription) {
                $invoice_id = $this->invoiceForRecurringService(
                    $client['clients_id'], 
                    $subscription['services_id']
                );
                
                if ($invoice_id) {
                    $processed[] = [
                        'client_id' => $client['clients_id'],
                        'subscription_id' => $subscription['services_id'],
                        'invoice_id' => $invoice_id
                    ];
                }
            }
        }
        
        return $processed;
    }

    public function searchTransactions($term)
    {
        $results = [
            'invoices' => $this->registry->invoices_model->search($term),
            'payments' => $this->registry->payments_model->search($term)
        ];
        
        return $results;
    }
}
?>
