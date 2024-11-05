<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('php/connect.php');
    if(!isset($_GET['id_employee'])){
        header("location: ./");
        exit();
    }
    $sql = "SELECT * FROM employees WHERE id_employee = '".mysqli_real_escape_string($conn, $_GET['id_employee'])."' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQLi Procedural style CRUD </title>
    <!-- favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <!-- Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #F5F8FF;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <div class="container">
        <div class="shadow rounded p-5 bg-body h-100">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5"></h1>
                    <h3>แก้ไขข้อมูลพนักงาน</h3>
                    <form class="row gy-4" action="php/em_update.php" method="POST">
                        <div class="col-md-12">
                            <label for="firstname" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="ชื่อ" value="<?php echo $row['firstname'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="lastname" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล" value="<?php echo $row['lastname'] ?>"required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="tel" class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" id="tel" name="tel" placeholder="เบอร์โทร" value="<?php echo $row['tel'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="home_employee" class="form-label">ที่อยู่</label>
                            <textarea type="text" class="form-control" id="home_employee" name="home_employee" rows="5" placeholder="ที่อยู่" required><?php echo $row['home_employee'] ?></textarea>
                        </div>
                        <input type="hidden" name="id_employee" value="<?php echo $_GET['id_employee'] ?>" >
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                        </div>
                    </form>
                    <a href="emadmin.php" class="btn btn-danger">ยกเลิก</a>
                </div>  
            </div>
        </div>
        
    </div>
</div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>