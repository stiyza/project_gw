<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('php/reportconnect.php');
    $sql = "SELECT * FROM report_admin";
    $result = mysqli_query($conn, $sql);
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
                    <div class="col-lg-10">
                        <h1 class="pb-4"> G&W </h1>
                        
                        <span class="float-end" >มีข้อมูลส่งงาน <?php echo mysqli_num_rows($result) ?> รายการ </span>     
                    </div>
                    <div class="col-lg-10">
                        <div class="table-responsive" >
                            <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                    <th>รายการ</th>
                                    <th>ชื่อผู้ส่ง</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>สถานะ</th>
                                    <th>เวลาส่งถึงจุดหมาย</th>
                                    <th>จัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)):?>
                                    <tr class="text-center">
                                        <td> <?php echo $row['id_rp'] ?> </td>
                                        <td> <?php echo $row['sender_rp'] ?> </td>
                                        <td> <?php echo $row['products_rp'] ?> </td>
                                        <td> <?php echo $row['status_rp']  ?> </td>
                                        <td> <?php echo $row['time_rp'] ?> </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#my-modal<?php echo $row['id_rp'] ?>" 
                                                        style="width: 105px;"> รายละเอียด </button>
                                                
                                                <a href="php/reportdelete.php?id_rp=<?php echo $row['id_rp'] ?>" class="btn btn-danger"> ลบ </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="my-modal<?php echo $row['id_rp'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>ชื่อคนส่ง: <?php echo $row['sender_rp'] ?></p>
                                                    <p>ชื่อสินค้า: <?php echo $row['products_rp'] ?></p>
                                                    <p>สถานะ: <?php echo $row['status_rp']?></p>
                                                    <p>เวลาส่งถึงจุดหมาย: <?php echo $row['time_rp']?> </p>
                                                    
                                                    <hr>
                                                    <p>วันที่ส่งงาน: <?php echo dateThai($row['created_rp']) ?></p>  
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
            <a href="admin.php" class="btn btn-danger">กลับ</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php mysqli_close($conn) ?>
</body>
</html>