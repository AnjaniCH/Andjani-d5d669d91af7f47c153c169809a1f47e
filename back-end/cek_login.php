<?php
    include "connection.php";

    $pass = md5($_POST['inputPassword']);
    $query_select = "SELECT * FROM m_user where username = '".$_POST['inputUsername']."' and password = '".$pass."'";
    $result = $mysqli->query($query_select);
    $get_data = $result->fetch_assoc();
    if($get_data){
        $query_update = "update m_user set last_login ='".date('Y-m-d H:i:s')."' where id_user = '".$get_data['id_user']."'";
        $mysqli->query($query_update);
        echo "Anda Berhasil Login!";
    }
    else{
        echo "Anda Gagal Login!";
    }
?>