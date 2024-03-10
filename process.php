<?php include 'connect.php';?>
<?php
  $Name = $_POST['Name'];
  $Age = $_POST['Age'];
  $Sex = $_POST['Sex'];
 

?>
<?php
    require('connect.php');

    if(isset($_POST['Name']) && isset($_POST['Age']) && isset($_POST['Sex'])){
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Sex = $_POST['Sex'];

        $sql = "INSERT INTO personnel_infomation (Name, Age, Sex) VALUES ('$Name', '$Age', '$Sex')";

        if(mysqli_query($connect, $sql)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Complete</title>
</head>
<body>
<form action="menu.php" method="post">
        <button type="submit" style="border: none;  padding: 0; color: blue; text-decoration: underline;">Back to menu</button>
    </form>
    </form>
</body>
</html>
