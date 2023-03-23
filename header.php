<div class="menu">
  <div class="heading-div">
    <h1 class="heading">Knjižnica</h1>
  </div>
  
  <div class="navi">
    <div class="linkovi">
      <a href="index.php?page=pocetna">Početna</a>

      <?php 

        if(!isset($_SESSION["email"])) {
          echo '<a href="index.php?page=prijava">Prijava</a>';
        } else {
          echo '<a href="index.php?page=odjava">Odjava</a>';
        }
      ?>
      
      
    </div>
  </div>
  
  <div class="gumbi">
    <button class="shop-btn"><a style="text-decoration:none; color:white;" href="index.php?page=knjige">Knjige</a></button> </a> 
  </div>
</div>

<div class="center-part">
  <div class="heading-real">
    <h1>Rezervirajte svoje knjige online, <br> ili čitajte uz pomoć digitalnog izdanja knjige!</h1>
  </div>
</div>
