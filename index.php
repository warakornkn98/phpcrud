<?php
    include 'connection/connection.php';

    $sql = "SELECT * FROM users";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
    <div class="d-flex align-items-center">
        <h1>ข้อมูลผู้ใช้งาน</h1>
        <a href="form_add_user.php">
            <button type="button" class="btn btn-outline-success btn-sm mx-3">เพิ่ม</button>
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">อีเมล</th>
                <th scope="col">ชื่อจริง</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">สถานะ</th>
                <th scope="col">เครื่องมือ</th>
            </tr>
        </thead>
        
        <tbody>
        
            <?php foreach ($result as $user) { ?>
                <tr>
                
                    <th scope="row"><?=$user['id'];?></th>
                    <td><?=$user['email'];?></td>
                    <td><?=$user['fname'];?></td>
                    <td><?=$user['lname'];?></td>
                    <td><?=$user['role'];?></td>
                    <td>
                        <a href="form_edit_user.php?iduser=<?=$user['id'];?>"><button class="btn btn-primary">แก้ไข</button></a>
                        <a href="form_chang_password.php?iduser=<?=$user['id'];?>"><button class="btn btn-success">เปลี่ยนรหัสผ่าน</button></a>
                        <a href="services/delete_user.php?iduser=<?=$user['id'];?>"><button class="btn btn-danger">ลบ</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php 
        if(!$result) {
            echo "<h3>ไม่มีข้อมูลผู้ใช้งาน</h3>";
        }
    ?>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>