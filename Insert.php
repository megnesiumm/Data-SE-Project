<html>
<head>
<title>Insert  </title>
<style>
    label {
        display: inline-block;
        width: 100px;
        margin-bottom: 10px;
    }
</style>
</head>
<body>
<h1>Insert Data</h1>
<form action="process.php" method="post">
    <label for="Name">Name</label>
    <input type="text" name="Name" id="Name"><br>
    <label for="Age">Age</label>
    <input type="text" name="Age" id="Age"><br>
    <label for="Sex">Sex</label>
    <select name="Sex" id="Sex">
        <option value="" selected disabled>เลือก</option>
        <option value="ชาย">ชาย</option>
        <option value="หญิง">หญิง</option>
    </select><br>
    <button type="submit">Submit</button>
</form>

    <form action="menu.php" method="post">
        <button type="submit" style="border: none;  padding: 0; color: blue; text-decoration: underline;">Back to main</button>
    </form>

</body>
</html>
