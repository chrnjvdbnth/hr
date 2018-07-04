<?php
    include 'init.php';

    if(isset($_POST['click'])){
        $fd = $_POST['dept'];
        $obj = $getFromU->feedback_que_rating($fd);
        foreach($obj as $objs){
            echo $objs->Q1;
            echo "<br>";
            echo $objs->Q2;
            echo "<br>";
            echo $objs->Q3;
            echo "<br>";
            echo $objs->Q4;
            echo "<br>";
        }
    }
?>
<html>
<title>feedback_que</title>
<head></head>
<body>
    <form action="" method="post">
    feedback_type:<select name="dept">
    <option value="1">food</option>
    <option value="2">infrastructure</option>
    <option value="3">boss</option>
    <option value="4">work</option>
    </select><br>
    <input type="submit" value="click" name="click">
    </form>
</body>
</html>