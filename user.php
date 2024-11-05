<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
<header>
        <nav class="navbar">
            <div class="container">
                <h1 class="logo">G&W</h1>
                <ul class="nav-links">
                    <li><a href="workusers.php">คิวงาน</a></li>
                    <li><a href="report-create.php">ส่งงาน</a></li>
                    <li><a href="logout.php">ออกจากระบบ</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <h2>Welcome to G&W</h2>
    </main>


<div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id_us = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>

        
        
    </div>
</body>
</html>