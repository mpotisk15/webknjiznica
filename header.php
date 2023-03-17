<div class="menu">
  <div class="heading-div">
    <h1 class="heading">Web Knjižnica</h1>
  </div>
  
  <div class="navi">
    <div class="linkovi">
      <a href="index.php?page=pocetna">Pocetna</a>

      <?php 

        if(!isset($_SESSION["username"])) {
          echo '<a href="index.php?page=prijava">Prijava</a>';
        } else {
          echo '<a href="index.php?page=odjava">Odjava</a>';
        }
      ?>
      
      
    </div>
  </div>
  
  <div class="gumbi">
   <a href="index.php?page=kosarica"> <button class="shop-btn"><a style="text-decoration:none; color:white;" href="index.php?page=ducan">Shop</a></button> </a> 
  </div>
</div>

<div class="center-part">
  <div class="heading-real">
    <h1>Najjeftiniji izbor tenisica, <br> sve na jednom mjestu!</h1>
  </div>
</div>
