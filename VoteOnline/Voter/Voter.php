<?php 
  session_start();
  require 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6" style="width:100%; margin: auto; background: ;">
           <?php 
              $id =$_SESSION['vid'];
              require "../EC/dbh.inc.php";

              $sql = "SELECT * FROM voter_image WHERE id = $id";
              $result = mysqli_query($connection, $sql);
              $row = mysqli_fetch_array($result);

              if($row != null){
                echo '<div style="width: 100%; padding: 5px; margin: 20px auto;">'; //border: 1px solid #cbcbcb;
                echo "<img src='VoterImage/".$row['image']."' hight = 150px; width = 150>";
                echo "<p>".$row['text']."</p>"; 
                echo "</div>";
              }
           ?>
          <h3>Welcome voter Mr. <?php echo $_SESSION['voter']; ?></h3>
            <p>This example shows how voter will perform his jobs.This example shows how voter will perform his jobs.</p>
            <p>This example shows how voter will perform his jobs.This example shows how voter will perform his jobs.</p>
          <br>
        </div>

        <div class="col-sm-5" style="background: bisque;">
             <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="votingVoting11.jpg" >
                </div>
                <div class="carousel-item">
                  <img src="voting22.jpg" >
                </div>
                <div class="carousel-item">
                  <img src="voting.jpg" >
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
            <br><p>The carousel of online voting system. The carousel of online voting system. The carousel of online voting system.</p>  
        </div>
    </div>
</div>

<div style="width: 100%; margin: auto; text-align: ; padding: 20px; background: ; color: orange">
  <?php
    require 'footer.php';
  ?>
</div>


