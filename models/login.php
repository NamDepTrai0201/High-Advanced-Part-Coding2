<?php
  function login($u , $p){
    $con = mysqli_connect('localhost' , 'root' , '' , 'webadvance') or die('Khong the ket noi toi database');
    $querry = mysqli_query($con , "select * from users where username = '$u' and password = '$p'") or die('Khong the ket noi toi database');
    $dem = mysqli_num_rows($querry);
    if($dem == 1){
        $SESSION['username'] = $u;
        // echo $_SESSION['username'];
        return true;
    }else{
        return false;
    }
    mysqli_close($con);
  }
?>