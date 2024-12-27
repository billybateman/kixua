
<?php

class MigrationsModel
{
    public $table = 'migrations';
    public $table_id = 'migrations_id';
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

    public function browse(){
        $sql = "SELECT * FROM migrations ORDER BY migrations_created_date DESC";
        $this->db->prepare($sql);
        return $this->db->query()->fetchAll();
    }

    function create($data){
        // Run the migration query here
        $sql = "$data";
        $this->db->prepare($sql);
        $this->db->query();

        // Insert the migration into the database
        $data = array(
            'migrations_query' => $data,
            'migrations_created_date' => date('Y-m-d H:i:s')
        );
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