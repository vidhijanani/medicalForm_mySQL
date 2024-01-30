<?php
    try{
        $conn = mysqli_connect("localhost", "root", "", "vidhiii");
        if(!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }
    }catch(Exception $e){
        echo "<pre>",print_r($th->getMessage()),"</pre>";
        die();
        }







