<?php
include 'functions/password_generator.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head/head.php'; ?>
</head>

<body>
    <?php include 'components/body/header.php'; ?>
    <div class="container mt-5 p-3 shadow-lg">
        <?php
        if (isset($_GET['number'])) {
            $password_length = (int)$_GET['number'];

            $random_password = generateRandomPassword($password_length);

            echo '<div class="alert bg-primary bg-opacity-50 text-white mt-3" role="alert">';
            echo 'La password generata è: ' . $random_password;
            echo '</div>';
        } else {

            header("Location: index.php");
            exit();
        }
        ?>
    </div>
</body>

</html>