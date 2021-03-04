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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>THE WESTEROS BANK</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<?php
    $sname=$rname="";
    $amt=0;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $sname=$_POST['sname'];
        $rname=$_POST['rname'];
        $amt=$_POST['amt'];
        $servername="localhost";
        $username="root";
        $password="bhanu183";
        $dt=date("d/m/Y");
        $conn=new mysqli($servername,$username,$password,"Bank_Server");
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
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
                <a class="nav-link btns active" href="./index.php">HOME</a>
            </li>
            <li class="nav-item btns">
                <a class="nav-link" href="./userlist.php">USERS LIST</a>
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

    <div class="hero">
        <h1 class="heading">WESTEROS BANK</h1>
    </div>

    <div class="container" style="margin-top: 120px;">
        <h1 style="margin-left:400px;font-weight: 700;">OUR SERVICES</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="margin-top: 50px;" data-aos="fade-right">
                <img src="./img2.jpg" alt=""
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.5);">
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <h1 style="margin-top: 170px;">
                    SAVINGS
                </h1>
                <h4>
                    Our Savings Account is designed to fulfil your different needs in every stage of life.You can enjoy
                    an unmatched online banking experience 24x7.
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <h1 style="margin-top: 200px;margin-left: 470px;">
                    INVESTMENT
                </h1>
                <h4>Investment account is a monetary account, which you can use for such transactions with financial
                    assets, the taxation of income earned on which you would like to postpone.
                </h4>
            </div>
            <div class="col-md-6" style="margin-top:100px;" data-aos="fade-left">
                <h4>
                    <img src="./img3.jpg" alt="" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.5);">
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="margin-top: 100px;" data-aos="fade-right">
                <img src="./img4.jpg" alt="" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.5);">
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <h1 style="margin-top: 230px;">
                    TRANSACTIONS
                </h1>
                <h4>
                    We provide a wide range of options for your transactions like at the bank,through UPI,online
                    banking,ATMs etc..
                </h4>
            </div>
        </div>
    </div>



    <footer class="text-center text-white" style="margin-top: 80px;background-color: black;">
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
    <!-- Footer -->

</body>






<script>
    AOS.init
    ({
        duration: 1200,
    })


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