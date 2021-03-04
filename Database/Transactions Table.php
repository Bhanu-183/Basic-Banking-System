<?php
   $servername = "localhost";
   $username = "root";
   $password = "bhanu183";
   $conn = new mysqli($servername, $username, $password,"Bank_Server");
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $q="CREATE TABLE Transactions(SNO int(4) auto_increment NOT NULL,SENDER_NAME varchar(80),RECEIVER_NAME varchar(80),DATE varchar(12),AMOUNT INT(8),PRIMARY KEY(SNO))";
    if($conn->query($q)==TRUE)
        echo "Table Created <br>";
    else    
        echo $conn->error;
    $dat="INSERT INTO Transactions VALUES(1,'Bhanu','Raj Kumar','04/02/2021',50000),
    (2,'Krishna','Pradeep','08/01/2021',8000),
    (3,'Bhanu','Eshwar','10/02/2021',500),
    (4,'Prasad','Satish Kumar','15/02/2021',8540),
    (5,'Bhanu','Chandu','08/03/2021',4500),
    (6,'Sri Devi','Vinay','01/03/2021',6900),
    (7,'Vishnu','Narendra','04/03/2021',2500),
    (8,'Rajkumar','Eshwar','10/03/2021',7405),
    (9,'Balaji','Bhanu','16/03/2021',3300),
    (10,'Michael','Raj Kumar','20/03/2021',500)";
    if($conn->query($dat)==TRUE)
        echo "Data Inserted";
    else   
        echo $conn->error;
    
?>