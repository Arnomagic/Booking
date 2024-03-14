<?php
    session_start();

    if(!isset($_SESSION['admin_login'])){
        header("location: ../index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta chaset="UTF-8">
    <title>Page Title</title>
</head>
<body>

    <div class="text-center mt-5">
        <div class="container">
            <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <h1>
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h1>
                </div>
            <?php endif ?>

            <h1>
                <?php if(isset($_SESSION['admin_login'])) { ?>
                Welcome, <?php echo $_SESSION['admin_login']; } ?>
            </h1>
            <a href="../logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>