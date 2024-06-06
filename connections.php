
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = $_POST['name'];
  $date = $_POST['date'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $conn = new mysqli('localhost', 'root', '', 'conect');

  if ($conn) 
  {
    $sql = "INSERT INTO connect_with_me (name, date, email, message) VALUES ('$name', '$date', '$email', '$message')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      
    }
    else
      die(mysql_error($con));
    }

 else 
 {
    die(mysql_error($con));
 }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<header>
        <div class="head">
        My Portfolio
        </div>
            <nav>
                <a href="#about"><i class="fa-solid fa-user "></i> About me</a>
                <a href="#Certificate"><i class="fa-solid fa-paperclip"></i> Certificates</a>
                <a href="#projects"><i class="fas fa-file-lines"></i> My Projects</a>
                <a href="#profiles"><i class="fas fa-globe"></i> Links</a>
                <a href="#contact"><i class="fa-solid fa-envelope"></i> Contact</a>
        </nav>
</header>
    <span>
        <br>
        <br>
        <center><img src='p3.gif' width='250px' height='250px'></center>
    <p style="font-size: 50px;">
        <center><strong>Thank you for the message, <?php echo $name?>! </strong></center>
    </p></span>
    <form action="portfolio.php" method="post">
    <center><button type="submit">Go Back</button></center>
</form>
</body>
</html>
