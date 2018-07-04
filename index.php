<?php
    include 'init.php';

    if(isset($_POST['login'])){
        $id = $_POST['login1'];
        $pw = $_POST['login2'];
        if(!empty($id) && !empty($pw)){
            if($getFromU->login($id,$pw)){
                $error1 = 'success';
            }
            else{
                $error1 = 'failed';
            }   
        }
    }
?>
<html>
<title>login</title>
<head></head>
<body>
    <form action="" method="post">
    emp_id:<input type="text" name="login1"><br>
    password:<input type="text" name="login2"><br>
    <input type="submit" value="login" name="login">
    </form>
    <?php
        if(isset($error1)){
            echo $error1;
        }
    ?>
</body>
</html>
