<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="crime_db";
    //create connections
    $conn=mysqli_connect($servername,$username,$password, $db);
    //check connection
    if(!$conn){
      die("connection failed:".mysqli_connect_error());
    }
    // echo "connection successfuly";

    // To show blog in the table
    $sql = "SELECT * FROM Blog";
    $query = mysqli_query($conn, $sql);


    // Taking the data from the form
    if(isset($_REQUEST["blog_insert"])){
        $title =$_REQUEST["blogTitle"];
        $subTitle =$_REQUEST["subTitle"];
        $author =$_REQUEST["author"];
        $fimage =$_REQUEST["fimage"];
        $description =$_REQUEST["description"];
        $addimage =$_REQUEST["addimage"];
        $opt_description =$_REQUEST["opt_description"];


        $sql = "INSERT INTO Blog(title, sub_title, author, featured_image, description1, add_image, description2) VALUES('$title', '$subTitle', '$author', '$fimage', '$description', '$addimage', '$opt_description')" ;
        mysqli_query($conn, $sql);
        
        header('Location: blog.php?info = added');
        exit();
    }

    //for deleting from table
    // $blog_id = $_REQUEST['id'];
    // $delete = "DELETE FROM Blog WHERE blog_id = '$blog_id'";

    // $query = mysqli_query($conn, $delete);

    // if($query){
    //   echo "Deleted";
    // }
    // else{
    //   echo "Failed";
    // }
    
  //   if(isset($_REQUEST["id"])){
  //     $id =$_REQUEST["id"];
      

  //     $delete = "DELETE FROM blog WHERE blog_id = $id ";
  //     mysqli_query($conn, $delete);
      
  //     header("Location: blog.php?info = deleted");
  //     exit();
  // }



  // For deleting data
  if(isset($_REQUEST["delete"])){
    $id =$_REQUEST["id"];
    

    $delete = "DELETE FROM blog WHERE blog_id = '$id' ";
    mysqli_query($conn, $delete);
    
    header("Location: blog.php?info = deleted");
    exit();
}


?>