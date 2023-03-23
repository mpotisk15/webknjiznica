<?php
    if($page == "978-953-0-61222-8" && isset($_SESSION["email"]) && isset($_GET["action"]) && $_GET["action"] == "rezerviraj"){
        $datum_rezervacije = $_POST["datum"];
        $id = $_SESSION["email"];
        $id_knjiga = $_POST["id_knjiga"];
        $sql = "INSERT INTO posudbe (email, id_knjiga, datum_rezervacije) VALUES (?,?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute(["$id","$id_knjiga","$datum_rezervacije"]);
    }
?>

<html>
  <head>
    <title>Web Knjižnica</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
    </header>
        <main>
            <?php
                $pdo = require_once("connect.php");
                $sql="SELECT * FROM knjige WHERE isbn='978-953-0-61222-8'";
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
                                <form method="post" action="/978-953-0-61222-8?action=rezerviraj">
                                    <input name="datum" type="date"> <br><br>
                                    <input type="submit" value="Rezerviraj">
                                </form>
                            </div>
                          </div>
                            
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
    </style>
    <footer><?php require_once("footer.php")?></footer>
    <script src="script.js"></script>
  </body>
</html>