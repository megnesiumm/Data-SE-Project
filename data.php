<?php
    require('connect.php');

    if(isset($_POST['Name'])){
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Sex = $_POST['Sex'];

        $sql = "INSERT INTO personnel_infomation (id, Name, Age, Sex)
        VALUES (NULL, '$Name', '$Age', '$Sex')";
        
        if (mysqli_query($connect, $sql)) {
            echo "New record created successfully";
            echo "<br><a href='Display.php'>Back</a>";
        } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }

    if(isset($_POST['Edit'])){
        $id = $_POST['id'];
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Sex = $_POST['Sex'];

        $sql = "UPDATE personnel_infomation SET Name='$Name', Age='$Age', Sex='$Sex' WHERE id='$id'";
        
        if (mysqli_query($connect, $sql)) {
            echo "Record updated successfully";
            echo "<br><a href='Display.php'>Back</a>";
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM personnel_infomation WHERE id = '$id'";
        if(mysqli_query($connect, $sql)){
            echo "Record deleted successfully";
            echo "<br><a href='Display.php'>Back</a>";
        } else {
            echo "Error deleting record: " . mysqli_error($connect);
        }
    }
    
?>
