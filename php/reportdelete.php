<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('reportconnect.php');
    if (isset($_GET['id_rp'])) {
        $sql = "DELETE FROM report_admin WHERE id_rp= '".mysqli_real_escape_string($conn, $_GET['id_rp'])."' ";
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= ../report.php');
        } else {
            echo '<script> alert("ลบข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= ../');
        }
    }
    mysqli_close($conn);
?>