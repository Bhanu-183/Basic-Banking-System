<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./indexstyle.css">
    <title>USERS LIST</title>
</head>
<?php
    $servername="localhost";
    $username="root";
    $password="bhanu183";
    $conn=new mysqli($servername,$username,$password,"Bank_Server");
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $q="SELECT * FROM User_Details order by SNO";
    echo '<table border="0" style="margin-top:-1150px" cellspacing="2" cellpadding="15" class="table table-striped"> 
    <thead>
      <tr> 
          <th> <font face="Arial">SNO</font> </th> 
          <th> <font face="Arial">NAME</font> </th> 
          <th> <font face="Arial">Email</font> </th> 
          <th> <font face="Arial">PHNO</font> </th> 
          <th> <font face="Arial">BRANCH</font> </th> 
          <th> <font face="Arial">BALANCE</font> </th> 
      </tr>
      </thead>';
    $result=$conn->query($q);
    while ($row = $result->fetch_assoc())
    {
        echo '<tr> 
                <td>'.$row['SNO'].'</td> 
                <td>'.$row['NAME'].'</td> 
                <td>'.$row['Email'].'</td> 
                <td>'.$row['PHNO'].'</td> 
                <td>'.$row['BRANCH'].'</td> 
                <td>'.$row['BALANCE'].'</td> 
            </tr>';
    }
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $sname=$_POST['sname'];
        $rname=$_POST['rname'];
        $amt=$_POST['amt'];
        $dt=date("d/m/Y");
        $query="INSERT INTO Transactions (SENDER_NAME,RECEIVER_NAME,DATE,AMOUNT) VALUES ('".$sname."','".$rname."','".$dt."','".$amt."')";
        if($conn->query($query)==TRUE)
            echo "<script>alert('TRANSACTION COMPLETED!!!');</script>";
        else    
            echo "<script>alert('$conn->error');</script>";       
    }   
    ?>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <ul class="navbar-nav" id="myDIV">
            <li class="nav-item btns">
                <a class="nav-link btns" href="./index.php">HOME</a>
            </li>
            <li class="nav-item btns">
                <a class="nav-link active" href="./userslist.php">USERS LIST</a>
            </li>
            <li class="nav-item btns">
                <a class="nav-link" href="./transactions.php">ALL TRANSACTIONS</a>
            </li>
            <li class="nav-item btns">
                <a class="nav-link" href="#foot">CONTACT US</a>
            </li>
            <button class="btn btn-lg btn-outline-success" style="margin-left: 950px;" id='myBtn'>TRANSFER MONEY</button>
        </ul>
    </nav>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="color: white;">TRANSFER MONEY</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="form-group">
                        <label for="sname">Senders Name:</label>
                        <input type="text" class="form-control" id="sname" placeholder="Enter Senders Name" name="sname">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Recivers Name:</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Enter Reciever Name" name="rname">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">₹</span>
                        </div>
                        <input type="number" class="form-control" name="amt" placeholder="Enter Amount" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group" style="margin-top:20px;margin-left:230px">
                        <button type="submit" class='btn btn-success'>TRANSFER</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <footer class="text-center text-white" style="margin-top: 1000px;background-color: black;">
        <div class="container p-4" id="foot">
            <section class="mb-4">
                <a href="https://www.facebook.com/thesparksfoundation.info" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="https://twitter.com/home?lang=en" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/company/the-sparks-foundation/" class="fa fa-linkedin"></a>
            </section>
            <p style="color: white;">© 2020 Copyright:</p>
            <p class="text-white">Westeros Bakings System</p>
    </footer>
</body>
<script>
    var modal = document.getElementById("myModal"); 
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function ()
    {
        modal.style.display = "block";
    }
    span.onclick = function () {
        modal.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</html>