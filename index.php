<?php
  session_start();

/*  if($_GET["page"] == "knjige") {
    if(!isset($_SESSION["email"]) || $_SESSION["email"] != "admin") {
        die(header("Location: index.php?page=ne_knjige"));
    }
  }*/


  if($_SERVER["REQUEST_METHOD"]=="POST" && $_GET["page"] == "prijava"){
        $pdo=require_once("connect.php");
        if(isset($_POST["submit-login"])){
            $email=$_POST["email-login"];
            $pass=$_POST["lozinka-login"];
            $sql="SELECT * FROM korisnici";
            $statement=$pdo->query($sql);
            $result=$statement->fetchAll();
            if($result){
                foreach($result as $row){
                if($email==$row["email"] && $pass==$row["lozinka"]){
                    $_SESSION["email"]=$row["email"];
                }
            }
        }
    }
  }

/*if(isset($_POST["change"])) {
  $username = $_POST["username_ch"];
  $password = $_POST["password_ch"];
  $email = $_POST["email_ch"];
  $name = $_POST["name_ch"];
  $surname = $_POST["surname_ch"];
  $address = $_POST["address_ch"];

  $sql = "UPDATE users SET username=?, password=?, email=?, name=?, surname=?, address=? WHERE username=?";
  $statement = $pdo->prepare($sql);
  $statement -> execute(["$username", "$password", "$email", "$name", "$surname", "$address", "$u"]);

  $_SESSION["username"] = $username;
}*/
?>

<html>
  <head>
    <title>Web Knjižnica</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <?php require_once("header.php")?>
    </header>
    <main>
    <?php 
        $page=$_GET['page'];
        if($page=="pocetna" || !isset($page)){
          require_once("pocetna.html");
        }else if($page=="prijava"){
          require_once("prijava.php");
        }else if($page=="uspjesna"){
          require_once("uspjesna.html");
        }else if($page=="neuspjesna") {
          require_once("neuspjesna.html");
        }else if($page =="odjava") {
          require_once("odjava.php");
        }else if($page =="knjige") {
          require_once("knjige.php");
        }else if($page =="viseoknjizi") {
          require_once("viseoknjizi.php");
        }else if($page =="978-953-0-61222-8") {
          require_once("978-953-0-61222-8.php");
        }else if($page =="978-953-0-60756-9") {
          require_once("978-953-0-60756-9.php");
        }else if($page =="978-953358018-0") {
          require_once("978-953358018-0.php");
        }else if($page =="978-953358526-0") {
          require_once("978-953358526-0.php");
        }else if($page =="9789534923108") {
          require_once("9789534923108.php");
        }else if($page =="rezervirano") {
          require_once("rezervirano.php");
        }
        ?>
   
        
       </main>
    <footer><?php require_once("footer.php")?></footer>
    <script src="script.js"></script>
  </body>
</html>