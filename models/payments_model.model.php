<?php

class payments_model
{
    public $table = 'payments';
    public $table_id = 'payments_id';
    public $order = 'DESC';

    static $instance;
    private $db;

    public static function getInstance(){
           if(self::$instance ==  null){
                   self::$instance = new self();
           }
           return self::$instance;
   }

   private function __clone(){} 

   public function __construct(){
        $this->db = new MySQLDriver;

        //connect to database
        $this->db->connect();
   }

    public function get_limit_data($per_page, $start, $q = null){
        $where = "";
        if($q != null){
                $where = " WHERE `$this->table`.`$q->column` LIKE '%$q->value%' ";
        }
        $sql = "SELECT * FROM $this->table $where LIMIT $start, $per_page ORDER BY $this->table_id DESC";
        $this->db->prepare($sql);
        $this->db->query();

        $results = $this->db->fetchAll('array');

        return $results;
    }

    function create($data){
        return $this->db->insert($this->table, $data);
    }

     // insert data
     function lastInsertedId(){
         $this->db->lastInsertedId();
     }

    // update data
    function update($id, $data){
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id){
       $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
    }

    /**
     * Get all payments after a specific date
     * @param string $date Date in MySQL format (YYYY-MM-DD HH:MM:SS)
     * @return array Array of payments
     */
    public function get_payments_after_date($date) {
        $date = $this->db->escape($date);
        $sql = "SELECT * FROM {$this->table} WHERE payments_payment_date >= '$date' ORDER BY payments_payment_date ASC";
        $this->db->prepare($sql);
        $this->db->query();
        
        return $this->db->fetchAll('array');
    }
}
?>
