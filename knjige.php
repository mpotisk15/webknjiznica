<div>
  <h1 style="text-align: center;">Knjige</h1>
  <div  class="hh">
    <?php 
      $pdo = require_once("connect.php");
      $sql = "SELECT * FROM knjige";
      $statement = $pdo -> query($sql);
      $result = $statement -> fetchAll();
      if($result){
      foreach($result as $artikl) {
        echo 
        '
        <div class="cc">    
          <div>
            <img src="'.$artikl["slika_url"].'"> <br>
<hr>
            <span><b>Naziv:</b> '. $artikl["ime"] .'</span> <br>
            <span><b>Autor:</b> '. $artikl["autor"] .'</span> <br><br>
            <form method="post">
              <a class="button" href="index.php?page='.$artikl["isbn"].'">
                REZERVIRAJ
              </a>
            </form>
          </div>
        </div>
        
        ';
        }
      }
    ?>
<style>
  .hh {
    display: flex;
    justify-content:center;
    gap: 10px;
    overflow-x: scroll;
  }

  .hh img {
    width: 200px;
    height: auto;
    margin: 10px;
    
  }

  .cc {
    border: 2px solid black;
    margin: 30px;
    text-align: center;
  }

  .zzz {
  background-color:#1565c0;
  border: none;
  color: white;
  padding: 7px 15px;
  margin:5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    cursor:pointer;
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
  </div>
</div>
