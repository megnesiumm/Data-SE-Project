<?php
    require('connect.php');

    if(isset($_POST['Search'])){
        $searchTerm = $_POST['Search'];
        $sql = "SELECT * FROM personnel_infomation WHERE Name LIKE '%$searchTerm%' OR Age LIKE '%$searchTerm%' OR Sex LIKE '%$searchTerm%'";
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "<h2>Results</h2>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th><div align='center'>Name</div></th>";
            echo "<th><div align='center'>Age</div></th>";
            echo "<th><div align='center'>Sex</div></th>";
            echo "</tr>";

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Age']."</td>";
                echo "<td>".$row['Sex']."</td>";
                echo "<td><a href='Delete.php?id=".$row["id"]."'onclick='return confirm(\"คุณต้องการจะลบรายชื่อนี้ใช่หรือไม่\")'>Delete</a></td>";
                echo "<td><a href='Edit.php?id=".$row["id"]."'>Edit</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No results found.";
        }
    }
?>

