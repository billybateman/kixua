<?php

class tasks_model
{
    public $table = 'tasks';
    public $table_id = 'tasks_id';
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
        $this->db->connect();
   }

   public function get_limit_data($limit, $start, $q = null, $joins = null, $order = null){
        $where = "";
        if($q != null){
                $where = " WHERE `$this->table`.`$q->column` LIKE '%$q->value%' ";
        }

        $joins = "";
        if($joins != null){
            $joins = " JOIN $joins ";
        }
        if($order != null){
            $order = " ORDER BY $order ";
        }else{
            $order = " ORDER BY $this->table_id DESC";
        }
        $sql = "SELECT * FROM $this->table $joins $where $order LIMIT $start, $limit";
        $this->db->prepare($sql);
        $this->db->query();

        $results = $this->db->fetchAll('array');

        return $results;
    }

    public function total_rows($q = null, $joins = null){
        $where = "";
        if($q != null){
            $where = " WHERE `$this->table`.`$q->column` LIKE '%$q->value%' ";
        }
        $joins = "";
        if($joins != null){
            $joins = " JOIN $joins ";
        }
        $sql = "SELECT COUNT(*) AS `total_row` FROM $this->table $joins $where";
        $this->db->prepare($sql);
        $this->db->query();
        $result = $this->db->fetch('object');

        return (int)$result->total_row;
    }

    public function get_by_column($column, $value, $q = null, $joins = null, $order = null){
        $where = "";
        if($q != null){
            $where = " AND `$this->table`.`$q->column` LIKE '%$q->value%' ";
        }
        $joins = "";
        if($joins != null){
            $joins = " JOIN $joins ";
        }
        $order = "";
        if($order != null){
            $order = " ORDER BY $order ";
        }else{
            $order = " ORDER BY $this->table_id DESC";
        }
        $sql = "SELECT * FROM $this->table $joins WHERE `$column` = '$value' $where $order";
        $this->db->prepare($sql);
        $this->db->query();
        $result = $this->db->fetchAll('array');
    
        return $result;
    }

    function create($data){
        return $this->db->insert($this->table, $data);
    }

    function lastInsertedId(){
         $this->db->lastInsertedId();
     }

    function update($id, $data){
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
    }

    function delete($id){
       $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
    }

    function get_all(){
        $sql = "SELECT * FROM $this->table";
        $this->db->prepare($sql);
        $this->db->query();
        return $this->db->fetchAll('array');
    }
}
?>