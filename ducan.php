<div>
  <h1 style="text-align: center;">Shop</h1>
  <div  class="hh">
    <?php 
      $pdo = require_once("connect.php");
      $sql = "SELECT * FROM items";
      $statement = $pdo -> query($sql);
      $result = $statement -> fetchAll();
      if($result){
      foreach($result as $artikl) {
        echo 
        '
        <div class="cc">    
          <div>
            <img src="'.$artikl["image_url"].'"> <br>
<hr>
            <span><b>Naziv:</b> '. $artikl["name"] .'</span> <br>
            <span><b>Cijena:</b> '. $artikl["price"] .'</span> <br><br>
            <form method="post">
              <input type="submit" name="addtocart" value="Add to cart">
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
</style>
  </div>
</div>
