<?php
session_start();
include('config/db_access.php');
$usr = $_POST['user'];
$pin = $_POST['pin'];
$err= 'Alert';

if (empty($usr) && empty($pin) ) {

    $_SESSION['alert'] = $err;
    header('Location: ../');
    exit;
}

$sql = "SELECT * 
FROM crc_user_employ us
WHERE us.user = '$usr' AND us.pin = '$pin'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    $_SESSION['user'] = $row;
    header('Location: ../cpanel/home');

  }
}else {
    $_SESSION['alert'] = $err;
    header('Location: ../');
    exit;
}
$conn->close();

?>