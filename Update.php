<?php include('header.php'); ?>
<?php include ('dbcon.php');?>

<?php 
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query ="select * from students where id = $id";
                $result = mysqli_query($connection,$query);

                if(!$result){
                    die("query Failed".mysqli_error());
                }
                if($row = mysqli_fetch_assoc($result)) {
                    $userid = $row["id"];
                    $fname = $row["first_name"];
                    $lname = $row["last_name"];
                    $age = $row["age"];
                } else {
                    echo "<p>No data found for the given ID.</p>";
                    $fname = $lname = $age = ""; // Clear values to avoid undefined variable warnings
                }
            }
        ?>
        <?php 
            if(isset($_POST['update_students'])){
                
                $fname = $_POST['f_name'];
                $lname = $_POST['l_name'];
                $age = $_POST['age'];

                $query = "update `students` set `first_name`='$fname',`last_name`='$lname',`age`='$age' 
                where `id` = $id";

                $result = mysqli_query($connection,$query);

                if(!$result){
                    die("Query Failed: " . mysqli_error($connection));
                }
                else{
                    header('location:index.php?update_msg=you have successfully updated the data.');
                    exit();
                }
            }
        ?>
        <form action="Update.php?id=<?php echo $id;?>" method="POST">
                <div class="form-group">
                                        <label for="f_name">First Name</label>
                                        <input type="text" name="f_name" class="form-control" value="<?php echo htmlspecialchars($fname); ?>"></div>
                <div class="form-group">                        
                                        <label for="l_name">Last Name</label>
                                        <input type="text" name="l_name" class="form-control" value="<?php echo htmlspecialchars($lname); ?>"></div>
                <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" name="age" class="form-control" value="<?php echo htmlspecialchars($age); ?>">
                                        </div>
                <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
                
                

        </form>

<?php include('footer.php'); ?>