<?php
    function signin($u , $p , $full){
        $con = mysqli_connect('localhost' , 'root' , '' , 'webadvance') or die('Khong The Ket Noi Toi Database');
        $querry = mysqli_query($con , "select * from users where username = '$u' and password = '$p'") or die('Khong the truy van database');
        $dem = mysqli_num_rows($querry);
        if($dem == 0){
            $querry = mysqli_query($con,"INSERT INTO users (username, password , full_name) VALUE ('$u' , '$p' , '$full')") or
        die('Khong the truy van database');
        return true;   
    }else{
        return false;
    }
    mysqli_close($con);
    }
?>