<?php 
    include 'dbcon.php';

    if(isset($_POST['add_students'])){
        $f_name =$_POST['f_name'];
        $l_name =$_POST['l_name'];
        $age =$_POST['age'];

        if(($f_name == "" || empty($f_name)) ||( $l_name == "" || empty($l_name)) || ( $age == "" || empty($age))){
            header('location:index.php?message=something is Missing');
        }
        else{
            $query = "INSERT INTO `students` (`first_name`, `last_name`, `age`) VALUES('$f_name', '$l_name', '$age')";
            $result = mysqli_query($connection,$query);

            if(!$result){
                die("Query Failed".mysqli_error());
            }
            else{
                header('location:index.php?insert_msg=you data has been added successfully');
            }
        }
    }

    
?>