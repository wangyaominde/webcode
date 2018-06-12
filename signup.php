<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

    $uname=$_POST['name'];//post获取表单里的name
    $upassword=$_POST['password'];//post获取表单里的password

    include('connect.php');//链接数据库
    $q="insert into user(uname,upaswd) values ('$uname','$upassword')";//向数据库插入表单传来的值的sql
    if (mysqli_query($conn,$q)){
        echo "注册成功";//成功输出注册成功
    }else{
    	die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }

    

    mysql_close($con);//关闭数据库

?>
