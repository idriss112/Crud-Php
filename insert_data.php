<?php 
    if(isset($_POST['add_students'])){
        $f_name =$POST['f_name'];
        $l_name =$POST['l_name'];
        $age =$POST['age'];

        if($f_name == "" || empty($f_name)){
            header('location:index.php?message=you need to fill in the first name');
        }
    }

    
?>