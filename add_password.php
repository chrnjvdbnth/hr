<?php
    include 'init.php';

    if(isset($_POST['update'])){
        $eid = $_POST['id'];
        $pass = $_POST['pass'];
        if(!empty($eid) && !empty($pass)){
            $getFromU->create('employee', array('emp_id' => $eid , 'password' => $pass));
        }
    }
?>

<html>
<title>password</title>
<head></head>
<body>
    <form action="" method="post">
    employeeID:<input type="text" name="id"><br>
    password:<input type="text" name="pass"><br>
    <input type="submit" value="update" name="update">
    </form>
</body>
</html>