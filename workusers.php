<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('php/workconnect.php');
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G&W</title>
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
                    <div class="col-lg-10">
                        <h1 class="G&W"pb-4"> คิวงาน </h1>
                        
                        
                        <span class="float-end" >มีคิวงานทั้งหมด <?php echo mysqli_num_rows($result) ?> รายการ </span>     
                    </div>
                    <div class="col-lg-10">
                        <div class="table-responsive" >
                            <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                    <th>รายการที่</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>ชื่อผู้ส่ง</th>
                                    <th>รายละเอียด</th>
                                    <th>ราคา</th>
                                    <th>จำนวน</th>
                                    
                                </tr>
                                </thead>
                                
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)):?>
                                    <tr class="text-center">
                                        <td> <?php echo $row['id'] ?> </td>
                                        <td> <?php echo $row['name'] ?> </td>
                                        <td> <?php echo $row['sender'] ?> </td>
                                        <td> <?php echo $row['detail'] ?> </td>
                                        <td> <?php echo $row['price'] ?> </td>
                                        <td> <?php echo $row['amount'] ?> </td>
                                        
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="my-modal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>ชื่อสินค้า: <?php echo $row['name'] ?></p>
                                                    <p>ชื่อผู้ส่ง: <?php echo $row['sender'] ?></p>
                                                    <p>รายละเอียด: <?php echo $row['detail'] ?></p>
                                                    <p>ราคา: <?php echo $row['price'] ?> บาท</p>
                                                    <p>จำนวน: <?php echo $row['amount'] ?> รายการ</p>
                                                    
                                                    <hr>
                                                    <p>วันที่สร้าง: <?php echo dateThai($row['created_at']) ?></p>
                                                    <p>วันที่แก้ไข: <?php echo dateThai($row['updated_at']) ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                </tbody>
                            </table>   
                            
                            <?php 
                                else: 
                                    echo "<p class='mt-5'>ไม่มีข้อมูลในฐานข้อมูล</p>"; 
                                endif; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <a href="user.php" class="btn btn-danger">กลับ</a>
            </div>
            
        </div>
    </div>
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php mysqli_close($conn) ?>
</body>
</html>