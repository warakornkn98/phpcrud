<?php
    require("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMIN</title>
</head>
<body>
    <h1>ข้อมูล</h1>
    <a href="add_form.php">เพิ่มข้อมูล</a>
    <table border="1">
        <tr>
            <th width="5%">ลำดับ</th>
            <th width="25%">รูปภาพ</th>
            <th width="15%">ชื่อ</th>
            <th width="15%">Role</th>
            <th width="40%">เนื้อหา</th>
        </tr>
        <?php
            $sql = "SELECT * FROM agent";

            $result = mysqli_query($conn,$sql);
            $i=1;
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<tr>";
                        echo"<td><center>".$i."</center></td>";
                        echo"<td><center><img src='../img/agent/".$row['name'].".jpg' width='300' height='' ></center></td>";
                        echo"<td><center>".$row['name']."</center></td>";
                        echo"<td><center>".$row['role']."</center></td>";
                        echo"<td>".$row['content']."</td>";
                        echo"<td><a href='edit_form.php?id=".$row['id']."'>แก้ไข</a></td>";

                        echo"<td><a href='data.php?delete_id=".$row['id'].
                        "'onclick='return confirm(\"คุณต้องการลบข้อมูลหรือไม่\")'>ลบ</a></td>";
                    echo"</tr>";
                    $i++;
                }

            }else{
                echo "EMPTY DATA";
            }

        ?>
    </table>
</body>
</html>