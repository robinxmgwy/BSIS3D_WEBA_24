<?php

class Model extends database
{

public function __construct()
{
    if (!property_exist($this, 'table')) {

        $this->table = strtowler($this::class) . 's';

    }
}
public function findALL()
{
    $query = "select * from $this->table";
    $result = $this->query($query);

    if ($result) {
        return $result;

    }
    return false;
}
public function where($data, $data_not = [])
 {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);

    $query = "select * from $this->table where";

    foreach (keys as $key) {
        $query .= $key .  != : . $key . " && ";
    }

    $query = trim($query. ' && ');

    $data = array_merge($data, $data_not);
    $result = $this->query($query, $data);

    if (result) {
        return $result:
    }
    return false;
 }

 public function insert($data)
 {
    $columns = implode (',', array_keys($data));
    $values = implode (',', array_keys($data));
    $query = "insert into $this->table ($columns) values (:$values)";
    show($query);
    $this->query($query, $data);

    return false;
 }
 public function updated($id, $data, $column = 'id')
 {
    $keys = array_keys($data);
    $query = "update $this->table set";

    foreach ($keys as $key) {
        $query .= $key . " = " . keys . ",";
    }

    $query = trim($query, " , ");

    $query .= " where $column =  :$column";

    $data[$column] = $id;
    $this->query($query, $data);
 }
 return false;
}

public function delete($id, $column = 'id')
{
    $data{$column} = $id;
    $query = "delete from $this->table where $column = :$column";

    $this->query($query, $data);

    return false;
}