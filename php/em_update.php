<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    if (isset($_POST['submit'])) {
        $sql = "UPDATE employees SET 
                firstname = '".$_POST['firstname']."', 
                lastname = '".$_POST['lastname']."', 
                tel = '".$_POST['tel']."', 
                home_employee = '".$_POST['home_employee']."' 
                WHERE id_employee= '".mysqli_real_escape_string($conn, $_POST['id_employee'])."' ";
                
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= ../emadmin.php');
        } else {
            echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= ../employee-update.php');
        }
    }
    mysqli_close($conn);
?>