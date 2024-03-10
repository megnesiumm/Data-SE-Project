<?php
    require('connect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM personnel_infomation WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        if(!$row){
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }

    if(isset($_POST['Delete'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM personnel_infomation WHERE id='$id'";

        if(mysqli_query($connect, $sql)){
            echo "Record deleted successfully";
            echo "<br><a href='Display.php'>Back</a>";
        } else {
            echo "Error deleting record: " . mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete</title>
</head>
<body>
<h1>Delete</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Delete information</legend>
            <label for="Name">Name:</label><br>
            <input type="text" name="Name" id="Name" value="<?php echo $row['Name']; ?>" readonly><br>
            <label for="Age">Age:</label><br>
            <input type="text" name="Age" id="Age" value="<?php echo $row['Age']; ?>" readonly><br>
            <label for="Sex">Sex:</label><br>
            <input type="text" name="Sex" id="Sex" value="<?php echo $row['Sex']; ?>" readonly><br>
            <button type="submit" name="Delete">Delete</button>   
        </fieldset>
    </form>
</body>
</html>
