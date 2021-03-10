<?php 
session_start();
        if(isset($_POST['Email'])){
                  include("condb.php");
                  $Email = $_POST['Email'];
                  $Password = $_POST['Password'];

                  $sql="SELECT * FROM users 
                  WHERE  Email='".$Email."' 
                  AND  Password='".$Password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["Name"] = $row["Name"];
                      $_SESSION["Status"] = $row["Status"];

                      if($_SESSION["Status"]=="admin"){ 

                        Header("Location: ../Admin/homepageAdmin.php");
                      }
                  if ($_SESSION["Status"]=="member"){ 

                        Header("Location: ../Member/homepage/homepage.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" Email หรือ  Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>