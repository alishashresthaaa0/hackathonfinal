<?php 

if (isset($_POST['submit'])) {

    $target= "../imgs/".basename($_FILES['photo']['name']);

      include_once 'dbh-inc.php';

       
      $name=$_POST['name'];
      $image=$_FILES['photo']['name'];
      $title=$_POST['title'];
       $shortdescribe=$_POST['shortdescribe'];

      $description=$_POST['description'];



      //for image file to be uploaded
      $fileExt= explode('.', $image);
      $fileActualExt=strtolower(end($fileExt));
      $allowed= array('jpg' ,'jpeg' );

      

              if(!in_array($fileActualExt,  $allowed))
              {
                  header("Location:../upload.php?upload=photoExtension");
                  exit();
              }
              else{
                
    
$sql = "INSERT INTO insertcatalog (name, photo, title,  description) 
                                        VALUES ('$name', '$image', '$title' , '$description')";
                          mysqli_query($conn, $sql);

                          if(move_uploaded_file($_FILES['photo']['tmp_name'], 
                            $target))
                          {
                            header("Location: ../browsed.php?upload=success");
                          exit();
                      
                          }
                          else{
                                header("Location: ../insertdiscovernepal.php?upload=error");
                          exit();
                          }
                         
                    
                    
                  }
       
   }
   else
   {
     header("Location: ../upload.php");
     exit();
   }



     
 ?>