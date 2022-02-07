<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if ( isset($_POST['insertkm'])){
        $km_name = $_POST['km_name'];
        $km_pic = $_POST['km_pic'];
        $km_group = $_POST['km_group'];

        $sql = $insertdata->insertkm($km_name , $km_pic, $km_group);

        if( $sql){
            echo "<script>alert('Record Inserted Successfully');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else {
            echo "<script>alert('Please try again!');</script>";
            echo "<script>window.location.href='insertkm.php'</script>";
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
    <a href="index.php" class="btn btn-danger mt-3">ย้อนกลับ</a>
    <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-lable">km_name</label>
                <input type="text" class="form-control" name="km_name" required>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-lable">km_pic</label>
                <input type="text" class="form-control" name="km_pic">
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-lable">km_group</label>
                <input type="text" class="form-control" name="km_group" required>
            </div>
            <button type="submit" name="insertkm" class="btn btn-primary" required>Insert</button>
        </form>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>