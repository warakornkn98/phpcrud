<?php
    require("connect.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql ="SELECT * FROM agent WHERE id = $id";

        $row =mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($row);
        if(!$result){
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>ADMIN | แก้ไขข้อมูล</title>
</head>
<body>
    <form action="data.php" method="post">
        <fieldset>

        <legend>ข้อมูล</legend>

        <label>ชื่อ : </label><br>
        <input type="text" name="edit_name" required value="<?php echo $result['name']?>"><br>
        <label>Role : </label><br>
        <input type="text" name="edit_role" required value="<?php echo $result['role']?>"><br>
        <label>เนื้อหา : </label><br>
        <textarea name="edit_content" rows="5" cols="30" required> <?php echo $result['content']?></textarea><br>

        <input type="hidden" name="edit_form_id" value="<?php echo $result['id']?>">
        
        <input type="submit" value="บันทึกข้อมูล">

        </fieldset>

    </form>
</body>
</html>