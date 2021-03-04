<?php
    $servername = "localhost";
    $username = "root";
    $password = "bhanu183";
    $conn = new mysqli($servername, $username, $password,"Bank_Server");
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $q="CREATE TABLE User_Details(SNO int(4) auto_increment NOT NULL,NAME varchar(80),Email varchar(50),PHNO varchar(15),BRANCH varchar(20),BALANCE INT(8),PRIMARY KEY(SNO))";
    if($conn->query($q)==TRUE)
        echo "Table Created";
    else   
        echo $conn->error;

    $dat="INSERT INTO User_Details VALUES(1,'Bhanu','bhanu1000@gmail.com','9347619384','Guntur Branch',60000),
            (2,'Krishna','krishna2323@gmail.com','7896541230','Kottayam Branch',10000),
            (3,'Pradeep','deepu4848@gmail.com','9753987842','GMC Branch',80000),
            (4,'Chandu','chandusai@gmail.com','8529637415','Vijayawada Branch',60000),
            (5,'Vinay','Viany3@gmail.com','7897619355','Nellore Branch',20200),
            (6,'Jahnavi','jahnavi2002@gmail.com','9635709384','Guntur Branch',55000),
            (7,'Sri Devi','sridevi1976@gmail.com','7569144155','Amaravathi Branch',60870),
            (8,'Rajkumar.V','raj009@gmail.com','741258384','Ponnur Branch',70059),
            (9,'Balaji','balaji789@gmail.com','9347600084','Bapatla Branch',35000),
            (10,'Eshwar','eshwarm@gmail.com','9632619384','Guntur Branch',10000),
            (11,'Narendra','narri@gmail.com','934768529','Vizag Branch',100080),
            (12,'Vishnu','vishnu890@gmail.com','7857619384','Kollam Branch',78200),
            (13,'Prasad','prasad3333@gmail.com','8523697412','Hyderbad Branch',100500),
            (14,'Satish Kumar','satishk@gmail.com','989619384','Chennai Branch',60000),
            (15,'Michael','michaeljhon@gmail.com','7415906324','Delhi Branch',60000)";
    
    
    if($conn->query($dat)==TRUE)
        echo "Data Inserted";
    else   
        echo $conn->error;
    
?>