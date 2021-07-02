<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
  </head>
  <script>
    function navtoggle() {
      bar = document.getElementById("sbar");
      if (bar.style.display != "block") {
        bar.style.display = "block";
        console.log("oo");
      } else {
        bar.style.display = "none";
      }
    }
  </script>
  <body>
    <section class="navsection">
      <button onclick="navtoggle()" class="hamburger">☰</button>
      <div class="logo">
        <h1>Quiz Hub</h1>
      </div>
      <nav>
          <?php
            echo $_SESSION['username'];

          ?>
      </nav>
      <img src="https://www.freeiconspng.com/uploads/customers-icon-3.png" height="40px" usemap="#pp" />
      <map name="pp">
        <area shape="circle" coords="0,0,40" 
        title=<?php
            echo $_SESSION['username'];

          ?> />
      </map>
    </section>
    <div id="sbar" class="sidebar">
      <ol style="color: white; padding-top: 20px">
      <li><a href="adminDashboard.php">HOME</a></li>
        <li><a href="#">INSTRUCTIONS</a></li>
        <li><a href="#">RESULTS</a></li>
        <li><a href="adminProfile.php">PROFILE</a></li>
        <li><a href="adminSettings.php">SETTINGS</a></li>
        <li><a href="feedback.php">FEEDBACK</a></li>
        <li><a href="logout.php">LOG OUT</a></li>
      </ol>
    </div>
    <div class="box">
      <div class="topleft">
        <h1>Feedback View</h1>
      </div>

      <style>
          
table {
    margin-top: 50px;
    margin-left: 100px;
  width: 100%;
  border-collapse: collapse;
  font-size: 20px;
 
}
th {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid #d3d3d3;
}
td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #d3d3d3;
}
      </style>
     
      <table>

<tr>
   <th>Id</th>
   <th>Name</th>
   <th>Email</th>
   <th>Subject</th>
   <th>Message</th>
</tr>

<?php
   $con=mysqli_connect('127.0.0.1:3307','root');
   if($con){
       // echo "connection done";
   }else{
       echo "no connection";
   }
   mysqli_select_db($con,'userdb');
   $q=" select * from feedback ";
   $result=mysqli_query($con,$q);
   $num=mysqli_num_rows($result);
   while ($row = $result->fetch_assoc()) {
?>

<tr>
   <td><?php echo $row['id'];?></td>
   <td><?php echo $row['name'];?></td>
   <td><?php echo $row['email'];?></td>
   <td><?php echo $row['subject'];?></td>
   <td><?php echo $row['message'];?></td>
</tr>
   
<?php
   }
?>

</table>

      
    
  </body>
</html>
