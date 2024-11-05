<?php 
  /**
   **** AppzStory Free Code ****
  * PHP MySQLi Procedural style CRUD
  * 
  * @link https://appzstory.dev
  * @author Yothin Sapsamran (Jame AppzStory Studio)
  */
  
  /** เชื่อมต่อฐานข้อมูล */
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  /** ตรวจสอบข้อผิดพลาดต่างๆ */
  if (mysqli_connect_errno()) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูล MySQL ได้: " . mysqli_connect_error();
    exit();
  }
  

  

?>