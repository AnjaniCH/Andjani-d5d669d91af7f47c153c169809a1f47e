<?php

    include "connection.php";

    $query_select = "SELECT * FROM m_user where username = '".$_POST['username']."'";
    $result = $mysqli->query($query_select);
    $get_data = $result->fetch_assoc();

    if($get_data){
        $lastLogin = date('d-m-Y H:i:s', strtotime($get_data['last_login']));

        echo "Hai <b>". $get_data['username']."</b>, waktu login terakhir anda ".$lastLogin ;
    }
    else{
        echo "Gagal Cek Login!";
    }

?>