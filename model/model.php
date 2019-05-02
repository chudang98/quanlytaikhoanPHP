<?php
    class Model{
        public function fetch($sql){
            global $connect;   
            $result = mysqli_query($connect, $sql);
            $arr = array();
            while($row = mysqli_fetch_array($result))
                $arr[] = $row;
            return $arr;
        }

        public function Success($sql){
            global $connect;
            $result = mysqli_query($connect, $sql);
            return $result;
            // return $result;
        }
    }

?>