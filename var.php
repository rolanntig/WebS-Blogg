<?php 
 //credentials for db
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "users";

 //connects to db
 $conn = mysqli_connect($servername,$username,$password,$dbname);

    //Creates User Database
        /*
        $conn = mysqli_connect($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

        $sql = "CREATE DATABASE Users";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
          } else {
            echo "Error creating database: " . $conn->error;
          }
        */


    //MySQL Table maker
    
        /*$conn = mysqli_connect($servername,$username,$password,$dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
          
        //Creates user table for user
        $sql = "CREATE TABLE user (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(20) NOT NULL,
        email VARCHAR(50),
        pass VARCHAR(20),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if (mysqli_query($conn, $sql)) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }   

        mysqli_close($conn);*/

        /*
        //Creates user table for post/images
        $sql = "CREATE TABLE images (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            image_url VARCHAR(255) NOT NULL,
            caption VARCHAR(255),
            username VARCHAR(255)
          )";
          
    
            if (mysqli_query($conn, $sql)) {
                echo "Table MyGuests created successfully";
            } else {
                echo "Error creating table: " . mysqli_error($conn);
            }   
    
            mysqli_close($conn);*/
?>