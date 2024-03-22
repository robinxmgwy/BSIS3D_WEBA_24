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
    
 }
}
