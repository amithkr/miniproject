<?php
include("header.php");
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/1.jpg" alt="G R H S S KOTTAKKAL" width="460" height="345">
      <div class="carousel-caption">
          <h3>G R H S S KOTTAKKAL</h3>
          <p></p>
      </div> 
    </div>
    <div class="item">
      <img src="img/2.jpg" alt="G R H S S KOTTAKKAL" width="460" height="345">
      <div class="carousel-caption">
          <h3>G R H S S KOTTAKKAL</h3>
          <p></p>
      </div>
    </div>
    <div class="item">
      <img src="img/3.jpg" alt="G R H S S KOTTAKKAL" width="460" height="345">
      <div class="carousel-caption">
          <h3>G R H S S KOTTAKKAL</h3>
          <p></p>
      </div>
    </div>
    <div class="item">
      <img src="img/4.jpg" alt="G R H S S KOTTAKKAL" width="460" height="345">
      <div class="carousel-caption">
          <h3>G R H S S KOTTAKKAL</h3>
          <p></p>
      </div>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid">
  <div class="row upcomingevent hidden-sm hidden-xs">
    <div class="col-md-1 ">
    </div>
    <div class="col-md-2   wow swing   rounded">    
      <CENTER>UPCOMING EVENTS</CENTER>
    </div>
    <div class="col-md-6 upcoming">
      <marquee direction="left">
        <?php
                $sql="SELECT * FROM news ";
                $result=mysqli_query($db,$sql)or die(mysqli_error());
                while($row=mysqli_fetch_array($result)){
                echo "<h5>".$row['heading']."</h5>";
                }
        ?>
      </marquee>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row homeblock"></div>    
  <div class="row home">
    <div class="col-md-1"></div>
    <div class="col-md-6 home">
    
            </br>
            <h3>WELCOME TO GRHSS Kottakkal</h3>
            </br>
            <p>Any educational institution adds something to the culture. It always modify and moulds the generation. Govt HSS  situates on the bank of kunthippuzha. It has been moulding the generation in and around pulamanthole since 1957. Sri EMS Namboothirippad, the first chief minister of Kerala sanctioned the school.Sri P T Bhaskarappanicker the malabar distict board president played a key role for sanctioning it</p>
            </br>
   
  </div>
  <div class="col-md-4 newsblock">
    <h2>News & Events</h2>
      
              <marquee direction="up" scrolldelay="100">
                <?php
                $sql="SELECT * FROM news ";
                $result=mysqli_query($db,$sql)or die(mysqli_error());
                while($row=mysqli_fetch_array($result)){
                echo "<h3>".$row['heading']."</h3>";
                echo "<h5>".$row['info']."</h5>";
                echo "-----------------------------------------------------------------------";
                }
                ?>
              </marquee>
      
              <a href="news.php" align="right">Read More</a>
     
  </div>
</div>
<div class="row homemessage">
  <div class="col-md-1">
  </div>
  <div class="col-md-5 messageblock">
    <center><h2>Principal's Message</h2></center>
    <img src="cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
    <div class="jumbotron">    
              <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
    </div>
  </div>
  <div class="col-md-5 messageblock">
            <center><h2>Headmaster's Message</h2></center>
            <img src="cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
            <div class="jumbotron">      
              <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
            </div>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>
    </div>
  
<?php
include("footer.php");
?>