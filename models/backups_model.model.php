<?php

class backups_model {
    public $table = 'backups';
    public $table_id = 'id';
    public $order = 'DESC';
    
    /**
    * Holds instance of database connection
    */
   static $instance;
   private $db;


   public static function getInstance()
   {
           if(self::$instance ==  null){
                   self::$instance = new self();
           }
           return self::$instance;
   }

   private function __clone(){} 
   public function __construct()
   {
           $this->db = new MySQLDriver;
           
            //connect to database
            $this->db->connect();
   }

    public function getAllBackups() {
        $this->db->prepare("SELECT * FROM backups");
        $this->db->query();
        return $this->db->fetchAll('array');
    }

    public function createBackup($filename) {
        $this->db->prepare("INSERT INTO backups (filename, created_at) VALUES ('".$filename."', NOW())");
        return $this->db->query();
    }

    public function deleteBackup($id) {
        $stmt = $this->db->prepare("DELETE FROM backups WHERE id = '".$id."'");
        return $this->db->query();
    }

    public function getBackup($id) {
        $this->db->prepare("SELECT * FROM backups WHERE id = '".$id."'");
        $this->db->query();
        return $this->db->fetch('array');
    }

    public function browse(){
        $sql = "SELECT * FROM migrations ORDER BY migrations_created_date DESC";
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
        //$image = $this->get_by_id($id);
        //$image_file = $image->migrations_file;

        //$image_file = str_replace(CDN_URL, CDN_FOLDER, $image_file);
        //unlink($image_file);

        $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
    }
}
?>
