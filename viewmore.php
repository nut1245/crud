<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Index page</title>
</head>

<body>
    <div class="container">
        <h1>ข้อมูลกลุ่ม<h1>
                <a href="insertkm.php" class="btn btn-success">เพิ่มข้อมูลเพิ่มเติม</a>
                <hr>
                <table id="mytable" class="table table-bordered table-striped">
                    <thead>
                        <th>ลำดับ</th>
                        <th>ชื่อ</th>
                        <th>รูปภาพ</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </thead>
                    <tbody>
                        <?php
                        include_once('functions.php');
                        $fetchdata = new DB_con();
                        $group_id = $_GET['id'];
                        $sql = $fetchdata->viewmore($group_id);
                        while ($row = mysqli_fetch_array($sql)) {

                        ?>
                            <tr>
                                <td><?php echo $row['km_id']; ?></td>
                                <td><?php echo $row['km_name']; ?></td>
                                
                                <td><img src="<?php echo $row['km_pic']; ?>" width="200" height="100"></td>
                                <td><a href="updatekm.php?id=<?php echo $row['km_id']; ?>" class="btn btn-primary">แก้ไข</a>
                                </td>
                                <td><a href="deletekm.php?del=<?php echo $row['km_id']; ?>" class="btn btn-danger">ลบ</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>