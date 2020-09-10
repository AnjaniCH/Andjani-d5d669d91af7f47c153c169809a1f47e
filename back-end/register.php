<?php
    include "connection.php";
    
    $query = "SELECT * FROM m_user where username = '".$_POST['inputUsername']."'";
    $result = $mysqli->query($query);
    $get_data = $result->fetch_assoc();
    if($get_data){
        echo $_POST['inputUsername']."</b> sudah digunakan<br><br>";        
    }
    else{
        $password = md5($_POST['inputPassword']); 
        $queryInsert = "insert into m_user(username, password) values('".$_POST['inputUsername']."', '".$password."')";
        $mysqli->query($queryInsert);
        echo "Anda Berhasil Menambahkan User!";
    }
?>