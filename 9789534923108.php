<?php
    if($page == "9789534923108" && isset($_SESSION["email"])){
        if(isset($_POST["rezerviraj"])){
            $pdo = require_once("connect.php");
            $datum_rezervacije = $_POST["datum"];
            $id = $_SESSION["email"];
            $id_knjiga = "5";
            $sql = "INSERT INTO posudbe (email, id_knjiga, datum_rezervacije, timestamp) VALUES (?,?,?,NOW())";
            $statement = $pdo->prepare($sql);
            $statement->execute(["$id","$id_knjiga","$datum_rezervacije"]);
            die(header("Location:index.php?page=rezervirano"));
        }
    }
?>

<html>
  <head>
    <title>Web Knjižnica</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <main>
            <?php
                $pdo = require_once("connect.php");
                $sql="SELECT * FROM knjige WHERE isbn='9789534923108'";
                $statement=$pdo->query($sql);
                $result=$statement->fetchAll();
                if($result){
                    foreach($result as $artikl) {
                        echo 
                        '
                        <div class="cc">    
                          <div>

                          <div class="container">
                            <div class="image">
                                <br> <img class="slikicaknjige" src="'.$artikl["slika_url"].'">
                            </div>
                            <div class="text">
                                <h1>Naziv:</h1> '. $artikl["ime"] .' <br>
                                <h2>Autor:</h2> '. $artikl["autor"] .' <br><br>
                                <form method="post">
                                    <input name="datum" type="date"> <br><br>
                                    <input name="rezerviraj" type="submit" value="Rezerviraj">
                                </form>
                                <br>
                            </div>
                          </div>
                            <br><a class="button" href="https://www.hrlektire.com/wp-content/uploads/2018/09/aralica_duse_robova.pdf">Digitalno izdanje</a><br><br>
                            <span class="tekstoknjizi"><b>Izdavač:</b> '. $artikl["izdavac"] .'</span> <br>
                            <span class="tekstoknjizi"><b>Godina:</b> '. $artikl["godina"] .'</span> <br>
                            <span class="tekstoknjizi"><b>Broj stranica:</b> '. $artikl["broj_stranica"] .'</span> <br>
                            <span class="tekstoknjizi"><b>ISBN:</b> '. $artikl["isbn"] .'</span> <br>
                          </div>
                        </div>
                        ';
                        }
                }
            ?>
       </main>
    <style>
        .slikicaknjige{
            width: 55%;
            border: 10px solid black;
        }
        .tekstoknjizi{
            font-size: 20px;
        }
        .nazivknjige{
            vertical-align: text-top;
            font-size: 20px;
        }
        .cc{
            border: 2px solid black;
            margin: 30px;
            text-align: center;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .text{
            padding-left: 20px;
        }
        .button{
            width: 115px;
            height: 25px;
            background: #4E9CAF;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            line-height: 25px;
            text-decoration: none;
        }
    </style>
    <footer><?php require_once("footer.php")?></footer>
    <script src="script.js"></script>
  </body>
</html>