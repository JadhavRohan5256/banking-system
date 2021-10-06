<?php
  include 'conn.php';
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $phone = mysqli_real_escape_string($conn,$_POST['phone']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $des = mysqli_real_escape_string($conn,$_POST['description']);
  $sql = "insert into contact(name,phone,email,description) value('$name',$phone,'$email','$des')";
  $result = mysqli_query($conn,$sql) or die("query can not fire");
  if($result){
    mysqli_close($conn);
    header('location:'.$hosting.'/index.php');
}
else{
    mysqli_close($conn);
}


?>