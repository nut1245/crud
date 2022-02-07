<?php
include_once('functions.php');
$updatedata = new DB_con();
if (isset($_POST['update'])) {
    $group_id = $_GET['id'];
    $group_name = $_POST['group_name'];
    $group_pic = $_POST['group_pic'];

    $sql = $updatedata->update($group_name , $group_pic ,$group_id);

    if ($sql) {
        echo "<script>alert('UPDATE Successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Please try again!');</script>";
        echo "<script>window.location.href='update.php'</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Update</h1>
        <hr>
        <?php

        $group_id = $_GET['id'];
        $updateid = new DB_con();
        $sql = $updateid->fetchonerecord($group_id);
        while ($row = mysqli_fetch_array($sql)) {

        ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-lable">group_name</label>
                    <input type="text" class="form-control" name="group_name" value="<?php echo $row['group_name']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-lable">group_pic</label>
                    <input type="text" class="form-control" name="group_pic" value="<?php echo $row['group_pic']; ?>">
                </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success" required>update</button>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>