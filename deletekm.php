<?php
include_once('functions.php');

if (isset($_GET['del'])) {
    $km_id = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->deletekm($km_id);

    if( $sql){
        echo "<script>alert('DELETE Successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }

}

?>