<?php
/**
 * The DatabaseLibrary handles database interaction for the application
 */
abstract class DatabaseLibrary
{
    abstract protected function connect();
    abstract protected function disconnect();
    abstract protected function prepare($query);
    abstract protected function query();
    abstract protected function lastInsertedId();
    abstract protected function fetch($type = 'object');
    abstract protected function fetchAll($type = 'object');
    abstract protected function escape($data);
    abstract protected function insert($table, $data);
}
?>
