<?php
  $conn = new mysqli("localhost", "root", "", "ifc");
  $conn2 = mysqli_connect("localhost", "root", "", "ifc");
  date_default_timezone_set("Asia/Jakarta");
  echo date("l")." ";
  echo date("d-m-Y") . " ";
  echo date("H:i:s");

  function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}
?>
