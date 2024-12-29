<?php

class clients_model
{
    static $instance;
    private $db;
    public $table = 'clients';
    public $table_id = 'clients_id';
    public $order = 'DESC';


    public function __construct()
    {
        $this->db = new MySQLDriver;

        //connect to database
        $this->db->connect();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get_all()
    {
        $query = "SELECT * FROM {$this->table} ORDER BY clients_created_at DESC";
        $this->db->query();

        $results = $this->db->fetchAll('array');

        return $results;
    }

    public function get_by_id($id)
    {
        $id = (int)$id;
        $query = "SELECT * FROM {$this->table} WHERE clients_id = {$id} LIMIT 1";
        return $this->db->query($query)->fetch_assoc();
    }

    public function get_limit_data($limit, $start, $where = null)
    {
        $query = "SELECT * FROM {$this->table}";

        if ($where !== null) {
            $query .= " WHERE {$where->column} = '{$where->value}'";
        }

        $query .= " ORDER BY clients_created_at DESC LIMIT {$start}, {$limit}";
        $this->db->query();

        $results = $this->db->fetchAll('array');

        return $results;
    }

    public function create($data)
    {
        $columns = [];
        $values = [];

        foreach ($data as $column => $value) {
            $columns[] = $column;
            $values[] = "'" . $this->db->real_escape_string($value) . "'";
        }

        $columns = implode(', ', $columns);
        $values = implode(', ', $values);

        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        return $this->db->query($query);
    }

    public function update($id, $data)
    {
        $id = (int)$id;
        $updates = [];

        foreach ($data as $column => $value) {
            $updates[] = "{$column} = '" . $this->db->real_escape_string($value) . "'";
        }

        $updates = implode(', ', $updates);
        $query = "UPDATE {$this->table} SET {$updates} WHERE clients_id = {$id}";
        return $this->db->query($query);
    }

    public function delete($id)
    {
        $id = (int)$id;
        $query = "DELETE FROM {$this->table} WHERE clients_id = {$id}";
        return $this->db->query($query);
    }

    public function count_all()
    {
        $query = "SELECT COUNT(*) as total FROM {$this->table}";
        $this->db->query();

        $result = $this->db->fetch('array');
        if($result === false) {
            return 0;
        }
        return $result['total'];
    }

    public function get_by_email($email)
    {
        $email = $this->db->real_escape_string($email);
        $query = "SELECT * FROM {$this->table} WHERE clients_email = '{$email}' LIMIT 1";
        return $this->db->query($query)->fetch_assoc();
    }

    public function get_active_clients()
    {
        $query = "SELECT * FROM {$this->table} WHERE clients_status = 'active' ORDER BY clients_name ASC";
        $this->db->query();

        $results = $this->db->fetchAll('array');

        return $results;
    }

    public function search($term)
    {
        $term = $this->db->real_escape_string($term);
        $query = "SELECT * FROM {$this->table}
                 WHERE clients_name LIKE '%{$term}%'
                 OR clients_email LIKE '%{$term}%'
                 OR clients_company LIKE '%{$term}%'
                 ORDER BY clients_name ASC";
        $this->db->query();

        $results = $this->db->fetchAll('array');

        return $results;
    }
}