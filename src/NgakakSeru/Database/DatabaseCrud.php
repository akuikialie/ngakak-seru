<?php

namespace NgakakSeru\Database;

class DatabaseCrud
{

    /*
    * Insert values into the table
    */

	public function insert($pdo, $table,$rows=null)
    {
        $command = 'INSERT INTO '.$table;
        $row = null; $value=null;
        foreach ($rows as $key => $nilainya)
        {
          $row  .=",".$key;
          $value        .=", :".$key;
        }
       
        $command .="(".substr($row,1).")";
        $command .="VALUES(".substr($value,1).")";
         
   
        $stmt =  $pdo->prepare($command);
        $stmt->execute($rows);
        $rowcount = $stmt->rowCount();
        return $rowcount;
    }

    /*
    * Uddate Record
    */
    public function update($pdo, $tabel, $fild = null ,$where = null)
    {
         $update = 'UPDATE '.$tabel.' SET ';
         $set=null; $value=null;
         foreach($fild as $key => $values)
         {
                 $set .= ', '.$key. ' = :'.$key;
                 $value .= ', ":'.$key.'":"'.$values.'"';
         }
         $update .= substr(trim($set),1);
         $json = '{'.substr($value,1).'}';
         $param = json_decode($json,true);
         
         if($where != null)
         {
            $update .= ' WHERE '.$where;
         }
         
         $query = $pdo->prepare($update);
         $query->execute($param);
         $rowcount = $query->rowCount();
        return $rowcount;
    }

    /*
    * Delete records from the database.
    */
    public function delete($pdo, $tabel,$where=null)
    {
        $command = 'DELETE FROM '.$tabel;
       
        $list = Array(); $parameter = null;
        foreach ($where as $key => $value)
        {
          $list[] = "$key = :$key";
          $parameter .= ', ":'.$key.'":"'.$value.'"';
        }
        $command .= ' WHERE '.implode(' AND ',$list);
   
        $json = "{".substr($parameter,1)."}";
        $param = json_decode($json,true);
                       
        $query = $pdo->prepare($command);
        $query->execute($param);
        $rowcount = $query->rowCount();
        return $rowcount;
    }

        /*
    * Selects information from the database.
    */
    public function select($table, $rows, $where = null, $order = null, $limit= null)
    {
        $command = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $command .= ' WHERE '.$where;
        if($order != null)
            $command .= ' ORDER BY '.$order;            
        if($limit != null)
            $command .= ' LIMIT '.$limit;
               
        $query = parent::prepare($command);
        $query->execute();
       
        $posts = array();
        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
                 $posts[] = $row;
        }
        $result = json_encode(array('post'=>$posts));
        return $result;
    }
}
