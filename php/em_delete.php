<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    if (isset($_GET['id_employee'])) {
        $sql = "DELETE FROM employees WHERE id_employee = '".mysqli_real_escape_string($conn, $_GET['id_employee'])."' ";
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= ../emadmin.php');
        } else {
            echo '<script> alert("ลบข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= ../');
        }
    }
    mysqli_close($conn);
?>