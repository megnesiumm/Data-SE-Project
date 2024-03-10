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

    if(isset($_POST['Save'])){
        $id = $_GET['id'];
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Sex = $_POST['Sex'];

        $sql = "UPDATE personnel_infomation SET Name='$Name', Age='$Age', Sex='$Sex' WHERE id='$id'";
        
        if(mysqli_query($connect, $sql)){
            echo "Record updated successfully";
            echo "<br><a href='Display.php'>Back</a>";
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>
<h1>Edit</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Edit information</legend>
            <label for="Name">Name:</label><br>
            <input type="text" name="Name" id="Name" value="<?php echo $row['Name']; ?>"><br>
            <label for="Age">Age:</label><br>
            <input type="text" name="Age" id="Age" value="<?php echo $row['Age']; ?>"><br>
            <label for="Sex">Sex:</label><br>
            <select name="Sex" id="Sex">
                <option value="" selected disabled>เลือก</option>
                <option value="ชาย" <?php if($row['Sex'] === 'ชาย') echo 'selected'; ?>>ชาย</option>
                <option value="หญิง" <?php if($row['Sex'] === 'หญิง') echo 'selected'; ?>>หญิง</option>
            </select><br>
            <button type="submit" name="Save">Save</button>   
        </fieldset>
    </form>
</body>
</html>
