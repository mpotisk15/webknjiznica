<div class="container">
  <div class="row">
    <div class="col">
        <div class="login-form">
            <div class="color-div">
                <h1>Registracija</h1>
                <div class="form-div">
                  <form method="POST">
                  <div>
                    <label for="registration-username">Korisničko ime:</label>
                    <input type="text" name="registration-username">
                  </div>
                    
                  <br>
                    
                  <div>
                    <label for="registration-password">Lozinka:</label>
                    <input type="password" name="registration-password">
                  </div>

                    <br>
                  
                  <div>
                    <label for="registration-email">E-mail:</label>
                    <input type="email" placeholder="ime.prezime@skole.hr" name="registration-email">
                  </div>

                    <br>
                  
                  <div>
                    <label for="registration-name">Ime:</label>
                    <input type="text" name="registration-name">
                  </div>

                    <br>
                  
                  <div>
                    <label for="registration-surname">Prezime:</label>
                    <input type="text" name="registration-surname">
                  </div>

                    <br>
                  
                  <div>
                    <label for="registration-address">Adresa:</label>
                    <input type="text" name="registration-address">
                  </div>

                    <br>

                  <div>
                    <label for="registration-phone">Broj mobitela:</label>
                    <input type="text" name="registration-phone">
                  </div>

                    <br>
                    
                  <button name="submit-registration" class="btn btn-warning" type="submit">Registriraj se</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<?php
  $pdo=require_once("connect.php");
  if(isset($_POST["submit-registration"])){
    $username=$_POST["registration-username"];
    $password=password_hash($_POST["registration-password"], PASSWORD_BCRYPT);
    $email=$_POST["registration-email"];
    $name=$_POST["registration-name"];
    $surname=$_POST["registration-surname"];
    $address=$_POST["registration-address"];
    $phone=$_POST["registration-phone"];
    $sql="INSERT INTO users(username,password,email,name,surname,address,phone,timestamp) VALUE (:username, :password, :email, :name, :surname, :address, :phone, NOW())";
    $statement=$pdo->prepare($sql);
    $statement->execute(["username"=> "$username", "password"=>"$password", "email"=> "$email", "name"=> "$name", "surname"=> "$surname", "address"=> "$address", "phone"=>"$phone"]);
  }
  //ISPIS SVIH USERA
  // $sql="SELECT * FROM users";
  // $statement=$pdo->query($sql);
  // $result=$statement->fetchAll();
  // if($result){
  //   foreach($result as $row){
  //     echo $row["username"]." | ".$row["password"]." | ".$row["email"]." | ".$row["name"]." | ".$row["surname"]. " | ".$row["address"]."<br>";
  //   }
  // }
?>