<?php require("connect.php")?>

<html>
<head>
<title>Display</title>
</head>
<body>
<h1>Display Data</h1>
<form action="Result.php" method="post">
    <label for="Search">Search : </label>
    <input type="text" name="Search" id="Search">
    <button type="submit">Submit</button>

</form>

    <table border="1">
        <tr>
            <th width="100"> <div align="center">Name </div></th>
            <th width="100"> <div align="center">Age </div></th>
            <th width="100"> <div align="center">Sex </div></th>
        </tr>
        <?php
       $sql = "SELECT * FROM personnel_infomation";
         $result = mysqli_query($connect, $sql);
         $i = 1;
         if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["Age"] . "</td>";
                    echo "<td>" . $row["Sex"] . "</td>";
                    echo "<td><a href='Delete.php?id=".$row["id"]."'onclick='return confirm(\"คุณต้องการจะลบรายชื่อนี้ใช่หรือไม่\")'>Delete</a></td>";
                    echo "<td><a href='Edit.php?id=".$row["id"]."'>Edit</a></td>";
                    
                    
                    echo "</tr>";
                    $i++;

                }

         }else{
             echo "No record found";
         }
         
        ?>
    </table>
    <form action="menu.php" method="post">
        <button type="submit" style="border: none;  padding: 0; color: blue; text-decoration: underline;">Back to main</button>
    </form>
</body>

</html>