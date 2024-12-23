<?php
/**
 * The MySQL Improved driver extends the Database_Library to provide 
 * interaction with a MySQL database
 */

ini_set('mysql.connect_timeout', 3000);
ini_set('default_socket_timeout', 3000); 

class MySQLDriver extends DatabaseLibrary
{
    /**
     * Connection holds MySQLi resource
     */
    private $connection;

    /**
     * Query to perform
     */
    private $query;

    /**
     * Result holds data retrieved from server
     */
    private $result;

    private $whereClause;

    /**
     * Create new connection to database
     */ 
    public function connect()
    {
        $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if ($this->connection->connect_error) {
            throw new Exception("Connection failed: " . $this->connection->connect_error);
        }

        return true;
    }

    /**
     * Break connection to database
     */
    public function disconnect()
    {
        $this->connection->close();
        return true;
    }

    /**
     * Prepare query to execute
     * 
     * @param string $queryIn
     */
    public function prepare($queryIn)
    {
        $this->query = $queryIn;
        return true;
    }

    /**
     * Execute a prepared query
     */
    public function query()
    {
        if (isset($this->query)) {
            $this->result = $this->connection->query($this->query);
            return $this->result;
        }
        return false;
    }

    public function lastInsertedId()
    {
        return $this->connection->insert_id;
    }

    /**
     * Fetch all rows from the query result
     * 
     * @param int $resultType
     */
    public function fetchAll($resultType = MYSQLI_NUM)
    {
        if ($this->result) {
            $res = [];
            while ($obj = $this->result->fetch_object()) {
                $res[] = $obj;
            }
            return $res;
        }
        return false;
    }

    /**
     * Fetch a row from the query result
     * 
     * @param string $type
     */ 
    public function fetch($type = 'object')
    {
        if (isset($this->result)) {
            switch ($type) {
                case 'array':
                    return $this->result->fetch_array();
                case 'object':
                default:
                    return $this->result->fetch_object();
            }
        }
        return false;
    }

    /**
     * Sanitize data to be used in a query
     * 
     * @param string $data
     */
    public function escape($data)
    {
        return $this->connection->real_escape_string($data);
    }

    public function where($field, $val)
    {
        $this->whereClause = "WHERE $field = '" . $this->escape($val) . "'";
        return true;
    }

    public function andWhere($field, $val)
    {
        $this->whereClause .= " AND $field = '" . $this->escape($val) . "'";
        return true;
    }

    public function insert($table, $data)
    {
        $columns = array_keys($data);
        $values = array_map([$this, 'escape'], array_values($data));

        $query = "INSERT INTO $table (" . implode(',', $columns) . ") VALUES ('" . implode("', '", $values) . "')";
        $this->result = $this->connection->query($query);
        return $this->result;
    }

    public function update($table, $data)
    {
        $valueSets = [];
        foreach ($data as $key => $value) {
            $valueSets[] = "$key = '" . $this->escape($value) . "'";
        }

        $query = "UPDATE $table SET " . implode(",", $valueSets) . " " . $this->whereClause;
        $this->result = $this->connection->query($query);
        return $this->result;
    }

    public function delete($table)
    {
        $query = "DELETE FROM $table " . $this->whereClause;
        $this->result = $this->connection->query($query);
        return $this->result;
    }
}
