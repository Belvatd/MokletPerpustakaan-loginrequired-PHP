<?php
    session_start();

    if(session_destroy()){
        header("Location: index_petugas.php");
    }
?>