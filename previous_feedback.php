<?php
    include 'init.php';

    $pf = $getFromU->previous_feedback(2);                    //pass user_id as set by the session
    foreach($pf as $pfs){
        echo $pfs->status;
        echo "          ";
        echo $pfs->feedback_type;
        echo "          ";
        echo $pfs->anonymous;
        echo "<br>";
    }        
?>