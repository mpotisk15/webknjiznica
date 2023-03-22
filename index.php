<?php
  session_start();
  
  if($_SERVER["REQUEST_METHOD"]=="POST" && $_GET["page"] == "prijava"){
        $pdo=require_once("connect.php");
        if(isset($_POST["submit-login"])){
            $username=$_POST["username-login"];
            $pass=$_POST["password-login"];
            $sql="SELECT * FROM users";
            $statement=$pdo->query($sql);
            $result=$statement->fetchAll();
            if($result){
                foreach($result as $row){
                if($username==$row["username"] && password_verify($pass, $row["password"])){
                    $_SESSION["username"]=$row["username"];
                }
            }
        }
    }
  }

if(isset($_POST["change"])) {
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
}
?>

<html>
  <head>
    <title>Edijev Podrum</title>
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
        }
        else if($page=="kontakt"){
          require_once("kontakt.php");
        }else if($page == "ne_kontakt") {
          require_once("ne_kontakt.html");
        }
        else if($page=="onama"){
          require_once("onama.html"); 
        }else if($page=="prijava"){
          require_once("prijava.php");
        }else if($page=="uspjesna"){
          require_once("uspjesna.html");
        } else if($page=="neuspjesna") {
          require_once("neuspjesna.html");
        }else if($page=="kosarica") {
          require_once("kosarica.php");
        }else if($page=="ducan") {
          require_once("ducan.php");
        } else if($page =="odjava") {
          require_once("odjava.php");
        }else if($page =="registracija") {
          require_once("registracija.php");
        }else if($page =="promjenapod") {
          require_once("promjenapod.php");
        }
        ?>
   
        
       </main>
    <footer><?php require_once("footer.php")?></footer>
    <script src="script.js"></script>
  </body>
</html>