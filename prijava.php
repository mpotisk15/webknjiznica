<div class="form_prijava">
      <h3>E-mail:</h3>
        <form action="" method="post">
          <input type="text" class="email" placeholder="ime.prezime@skole.hr" name="email-login">
          <b><h3>Password:</h3></b>
          <input type="password" class="lozinka" placeholder="*******" name="lozinka-login">
          <br><br> <button name="submit-login" class="btn btn-warning" type="submit">Prijavi se</button>
        </form> 
</div>
<?php 
  //ISPIS SVIH USERA
  /*$pdo = require_once("connect.php");
  $sql="SELECT * FROM korisnici";
  $statement=$pdo->query($sql);
  $result=$statement->fetchAll();
  if($result){
    foreach($result as $row){
      echo $row["id_korisnik"]." | ".$row["ime"]." | ".$row["prezime"]." | ".$row["razred"]." | ".$row["email"]. " | ".$row["lozinka"]."<br>";
    }
  }*/
        ?>