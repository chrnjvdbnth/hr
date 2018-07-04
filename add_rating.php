<?php
    include 'init.php';

    if(isset($_POST['register'])){
        $feedback_id = $_POST['feedback_id'];
        $q1 = $_POST['Q1'];
        $q2 = $_POST['Q2'];
        $q3 = $_POST['Q3'];
        $q4 = $_POST['Q4'];
        if(!empty($q1) && !empty($q2) && !empty($q3) && !empty($q4)){
            $getFromU->create('rating',array('feedback_id' => $feedback_id, 'Q1' => $q1, 'Q2' => $q2, 'Q3' => $q3, 'Q4' => $q4));
        }
    }
?>

<html>
<title>add_rating</title>
<head></head>
<body>
    <form action="" method="post">
    feedback_id:<input type="text" name="feedback_id"><br>
    Q1:<select name="Q1">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select><br>
    Q2:<select name="Q2">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select><br>
    Q3:<select name="Q3">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select><br>
    Q4:<select name="Q4">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select><br>
    <input type="submit" value="register" name="register">
    </form>
</body>
</html>