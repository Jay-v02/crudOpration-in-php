<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CrudData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Edit Users</h1>
        <form autocomplete="off" method="post">
            <?php 
            require 'config.php';
            $id = $_GET['id'];
            $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `users` WHERE user_id = $id"));
            ?>
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $rows['user_id']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $rows['username']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $rows['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">gender</label>
                <select class="form-select" id="gender" value>
                    <option value="male" <?php if($rows['gender'] == "male") echo "selected"; ?>>Male</option>
                    <option value="female" <?php if($rows['gender'] == "female") echo "selected"; ?>>Female</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="submitData('edit')">edit</button>
        </form>
        <a href="index.php">Go to home</a>
    </div>

    <?php require 'script.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>