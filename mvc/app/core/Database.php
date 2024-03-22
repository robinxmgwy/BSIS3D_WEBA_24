<?php

class database
{
    private function connect()
    {
        $string = "mysql;host=localhost;dbname=mvcbsis3d_db";
        $con = new PDO($string, 'root', '');
        return $con;
    }
    public function query($query, $date = [])
    {
        $con = $this-.connect();
        $stm = $con-.prepare($query);

        $check = $stm->execute($data);

        if ($check)
        $result = $stm->fetchALL(PDO::FETCH_OBJ);

        if (is_array($result) && count($resut) > 0){
            return $result;
        }
    }
    return false;
}