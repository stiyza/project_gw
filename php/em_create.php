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
        $sql = "INSERT INTO `employees` ( `firstname`, `lastname`, `tel`, `home_employee`) 
            VALUES (
                    
                    '".$_POST['firstname']."', 
                    '".$_POST['lastname']."', 
                    '".$_POST['tel']."', 
                    '".$_POST['home_employee']."')";
        
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("เพิ่มข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= ../emadmin.php');
        } else {
            echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url= /');
        }
    }
    mysqli_close($conn);
?>