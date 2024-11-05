<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('reportconnect.php');
    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO `report_admin` (`sender_rp`, `products_rp`, `status_rp`, `time_rp`, `created_rp`, `updated_rp`) 
            VALUES (
                    '".htmlspecialchars($_POST['sender_rp'], ENT_QUOTES, 'UTF-8')."', 
                    '".htmlspecialchars($_POST['products_rp'], ENT_QUOTES, 'UTF-8')."', 
                    '".$_POST['status_rp']."', 
                    '".$_POST['time_rp']."', 
                    '".date("Y-m-d H:i:s")."', 
                    '".date("Y-m-d H:i:s")."')";
        
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("เพิ่มข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= ../user.php');
        } else {
            echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= ../user.php');
        }
    }
    mysqli_close($conn);
?>