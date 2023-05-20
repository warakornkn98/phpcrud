<?php
    require("connect.php");
    //add
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $content = $_POST['content'];
        $role = $_POST['role'];
    $sql = "INSERT INTO agent (id,name,content,role)
        VALUES (null,'$name','$content','$role')";

        if(mysqli_query($conn,$sql)){
            echo "เพิ่มข้อมูลสำเร็จ";
            echo "<br><a href='index.php'>หน้าข้อมูล</a>";

        }else{
            echo("Error:" .$sql."<br>".mysqli_error($conn));
        }
    }
    //edit
    if(isset($_POST['edit_name'])){
        $name = $_POST['edit_name'];
        $content = $_POST['edit_content'];
        $role = $_POST['edit_role'];
        $id = $_POST['edit_form_id'];

        $sql = "UPDATE agent SET name='$name', content='$content', role='$role' WHERE id=$id";

        if(mysqli_query($conn,$sql)){
            echo "บันทึกข้อมูลสำเร็จ";
            echo "<br><a href='index.php'>หน้าข้อมูล</a>";

        }else{
            echo("Error updating record:" .mysqli_error($conn));
        }
    }
    //del
    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
        
        $sql = "DELETE FROM agent WHERE id=$id";

        if(mysqli_query($conn,$sql)){
            echo "ลบข้อมูลสำเร็จ";
            echo "<br><a href='index.php'>หน้าข้อมูล</a>";

        }else{
            echo("Error deletings record:" .mysqli_error($conn));
        }
    }

    
?>