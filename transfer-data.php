<?php
    include 'conn.php';
   $Sname =mysqli_real_escape_string($conn,$_POST['name']);
   $Semail = mysqli_real_escape_string($conn,$_POST['email']);
   $Rname = mysqli_real_escape_string($conn,$_POST['Rname']);
   $Remail = mysqli_real_escape_string($conn,$_POST['Rmail']);
   $ammount = mysqli_real_escape_string($conn,$_POST['ammount']);
   $des = mysqli_real_escape_string($conn,$_POST['description']);
   
   $sql = "select *from customer where email = '$Semail'";
   $result = mysqli_query($conn,$sql) or die('Query Error');
    if(mysqli_num_rows($result)>0){
        while($res = mysqli_fetch_assoc($result)){
            $id = $res['customer_id'];
            if($res['balance']>$ammount){
                $sql1 = "insert into transaction(sender_name,receiver_name,sender_email,receiver_email,ammount,Note) values($id,'$Rname',$id,'$Remail',$ammount,'$des');";
                $sql1.= "UPDATE customer SET balance = balance-$ammount where email = '$Semail';";
                
                $check = "Select * from customer where email = '$Remail'";
                $R_result = mysqli_query($conn,$check) or die("R_query not fire");
                if(mysqli_num_rows($R_result)>0){
                    $sql1.= " UPDATE customer SET balance = balance+$ammount where email ='$Remail'";
                }
                if(mysqli_multi_query($conn,$sql1)){
                    header('location:'.$hosting.'/history.php');
                    mysqli_close($conn);
                }else{
                    die('multi query can not fire');
                    mysqli_close($conn);
                }
            }else{
                echo "<h2 style='color:#ff0000;text-align:center;'>Balance insufficient<h2>";
                mysqli_close($conn);
            }
        }
    }
?>