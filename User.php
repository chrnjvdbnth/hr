<?php

    class User{
        protected $pdo;

        function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function login($emp_id, $password){
            $stmt = $this->pdo->prepare("SELECT `emp_id` FROM `employee` WHERE `emp_id` = :emp_id AND `password`=:password");
            $stmt->bindParam(":emp_id",$emp_id,PDO::PARAM_INT);
            $stmt->bindParam(":password",$password,PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();

            if($count>0){
                return true;
            }
            else{
                return false;
            }
        }

        public function create($table, $fields = array()){
            $columns = implode(',', array_keys($fields));
            $values = ':'.implode(', :', array_keys($fields));
            $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
            //echo $sql;
            if($stmt = $this->pdo->prepare($sql)){
                foreach($fields as $key => $data){
                    $stmt->bindValue(':'.$key,$data);
                }
                $stmt->execute();
            }
        }

        public function return_feedback_types(){
            $stmt = $this->pdo->prepare("SELECT `feedback_name` FROM `feedback_convert`");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function previous_feedback($user_id){
            $stmt = $this->pdo->prepare("SELECT `status` , `feedback_type` , `anonymous` FROM `feedback` WHERE `feedback_by` = :user_id");
            $stmt->bindParam(":user_id",$user_id,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function feedback_que_rating($feedback_type){
            $stmt = $this->pdo->prepare("SELECT `Q1` , `Q2` , `Q3` , `Q4` FROM `feedback_que` WHERE `feedback_type` = :feedback_type");
            $stmt->bindParam(":feedback_type",$feedback_type,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function fetchDetails($eid){
            $stmt = $this->pdo->prepare("SELECT * FROM `hr_database` WHERE `emp_id` = :eid");
            $stmt->bindParam(":eid",$eid,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>