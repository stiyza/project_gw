<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('workconnect.php');
    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO `products` (`name`,`sender`, `detail`, `price`, `amount`, `created_at`, `updated_at`) 
            VALUES (
                    '".htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')."', 
                    '".$_POST['sender']."',
                    '".htmlspecialchars($_POST['detail'], ENT_QUOTES, 'UTF-8')."', 
                    '".$_POST['price']."', 
                    '".$_POST['amount']."', 
                    '".date("Y-m-d H:i:s")."', 
                    '".date("Y-m-d H:i:s")."')";
        
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("เพิ่มข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= ../work.php');
        } else {
            echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= ../work-create.php');
        }
    }
    mysqli_close($conn);
?>