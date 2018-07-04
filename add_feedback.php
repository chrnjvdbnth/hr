<?php
    include 'init.php';

    if(isset($_POST['add'])){
        $id = $_POST['id'];
        $feedback = $_POST['feedback'];
        $feedback_for = $_POST['ff'];
        $anonymous = $_POST['anonymous'];
        if(!empty($id) && !empty($feedback) && !empty($feedback_for) && !empty($anonymous)){
            $getFromU->create('feedback', array( 'status' => $feedback, 'feedback_by' => $id, 'feedback_type' => $feedback_for, 'anonymous' => $anonymous));
        }
    }
?>
<html>
<title>add_feedback</title>
<head></head>
<body>
    <form action="" method="post">
    employeeID:<input type="text" name="id"><br>
    feedback:<input type="text" name="feedback"><br>
    feedback_for:<select name="ff">
    <option value="food">food</option>
    <option value="infrastructure">infrastructure</option> 
    <option value="boss">boss</option>
    <option value="work">work</option>
    </select><br>
    anonymous(Y/N):<select name="anonymous">
    <option value="YES">YES</option>
    <option value="NO">NO</option>
    </select><br>
    <input type="submit" value="add" name="add">
    </form>
</body>
</html>