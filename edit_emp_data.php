<?php
    include 'init.php';

    if(isset($_POST['enter'])){
        if(!empty($_POST['eid'])){  
            $id = $_POST['eid'];
            $obj = $getFromU->fetchDetails($id);
            foreach($obj as $objs){
                echo "NAME: ";
                echo $objs->emp_name;
                echo "<br>";
                echo "Department: ";
                echo $objs->Department;
                echo "<br>";
                echo "PHONE NUMBER: ";
                echo $objs->phone_no;
                echo "<br>";
                echo "POST: ";
                echo $objs->emp_post;
                echo "<br>";
            }
        }
    }
?>
<html>
<head>
<title>edit data</title>
</head>
<body>
    <form action="" method="post">
        Enter Employee ID:<input type="text" name="eid">
        <input type="submit" value="enter" name="enter">
    </form> 
</body>
</html>