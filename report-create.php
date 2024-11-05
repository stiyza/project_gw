<!--
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
-->
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
                    <h1 class="mb-5"> G&W </h1>
                    <h3>ส่งงาน</h3>
                    <form class="row gy-4" action="php/reportcreate.php" method="POST">
                        <div class="col-md-12">
                            <label for="sender_rp" class="form-label">ชื่อผู้ส่ง</label>
                            <input type="text" class="form-control" id="sender_rp" name="sender_rp" placeholder="ชื่อผู้ส่ง" required>
                        </div>
                        <div class="col-md-12">
                            <label for="products_rp" class="form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" id="products_rp" name="products_rp" placeholder="รายละเอียด" required>
                        </div>
                        <div class="col-md-6">
                            <label for="status_rp" class="form-label">สถานะ</label>
                            <input type="text" class="form-control" id="status_rp" name="status_rp" placeholder="ส่งเรียบร้อย,สินค้าเสียหาย, อื่นๆ" required>
                        </div>
                        <div class="col-md-6">
                            <label for="time_rp" class="form-label">เวลาส่งถึงจุดหมาย</label>
                            <input type="text" class="form-control" id="time_rp" name="time_rp" placeholder="เวลาที่ส่งถึงจุดหมาย" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">ส่ง</button>
                        </div>
                    </form>
                    <a href="user.php" class="btn btn-danger">ยกเลิก</a>
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