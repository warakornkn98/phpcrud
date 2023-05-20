<!DOCTYPE html>
<html>
<head>
    <title>ADMIN | เพิ่มข้อมูล</title>
</head>
<body>
    <form action="data.php" method="post">
        <fieldset>

        <legend>ข้อมูล</legend>
        <label>ชื่อ : </label><br>
        <input type="text" name="name"><br>
        <label>Role : </label><br>
        <input type="text" name="role"><br>
        <label>เนื้อหา : </label><br>
        <textarea name="content" rows="5" cols="30"></textarea><br>

        <input type="submit" value="บันทึกข้อมูล">

        </fieldset>

    </form>
</body>
</html>