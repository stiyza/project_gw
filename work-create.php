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
                    <h1 class="mb-5">  </h1>
                    <h3>เพิ่มคิวงาน</h3>
                    <form class="row gy-4" action="php/workcreate.php" method="POST">
                        <div class="col-md-12">
                            <label for="name" class="form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อสินค้า" required>
                        </div>
                        <div class="col-md-12">
                            <label for="sender" class="form-label">ชื่อผู้ส่ง</label>
                            <input type="text" class="form-control" id="sender" name="sender" placeholder="ชื่อผู้ส่ง" required>
                        </div>

                        <div class="col-md-12">
                            <label for="detail" class="form-label">รายละเอียด</label>
                            <textarea type="text" class="form-control" id="detail" name="detail" rows="5" placeholder="รายละเอียด" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="form-label">ราคา</label>
                            <input type="text" class="form-control" id="price" name="price"  placeholder="ราคา" required>
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="form-label">น้ำหนัก</label>
                            <input type="text" class="form-control" id="amount" name="amount"  placeholder="น้ำหนัก" required>
                        </div>
                        <div class="col-12">
                           <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">เพิ่มคิวงาน</button>
                        </div>
                        <div class="col-12">
                        <a href="work.php" class="btn btn-danger">ยกเลิก</a>
                        </div>
                    </form>
                    
                </div>  
            </div>
        </div>
        <p class="fw-bolder text-secondary text-center">
           <span class="text-danger fs-3" style="vertical-align: sub;">
            <a class="border-bottom border-2 border-primary text-decoration-none" href="https://appzstory.dev"></a>
        </p>
    </div>
</div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>