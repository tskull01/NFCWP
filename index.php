<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>NFCWP Home</title>
</head>
<body>

<?php
include("header.php");
?>

<!--CAROUSEL-->
<div class="container" style="padding-top:3%;padding-bottom:2%;" id="home">
    <div class="row">
        <div class="col-12 col-lg">
            <div id="carouselExampleControls index" class="carousel-fade carousel slide" data-ride="carousel" style="align-items: center;margin-left:0px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 h-100" src="images/slide1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-100" src="images/slide2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-100" src="images/slide1.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="section-a" style="text-align: center; margin-top: -4%;color:black !important; ">
    <div class="container">
        <div class="row">
            <div class="col">
                <h6 class="text-muted text-center font-weight-light" style="border-bottom:1px solid rgba(98, 107, 117, .5);line-height: 500%;">Featured Story</h6>
                <button type="button" class="btn btn-outline-secondary">Read More</button>
            </div>
            <div class="col">
                <h6 class="text-muted text-center font-weight-light" style="border-bottom:1px solid rgba(98, 107, 117, .5);line-height: 500%;">Recent News</h6>
                <div class="row text-left" style="line-height: 300%;padding-top: 4%;margin-left:0px;">
                    <div class="col-10"><h5>B.C. Sisters' Deaths Spark Debate On How Judges Handle Domestic Violence</h5></div><div class="col-2"><a href="#" style="color:black;margin-left:2%;"><i class="fas fa-arrow-right"></i></a></div>
                </div>
                <div class="row text-left" style="line-height: 300%; padding-top: 4%;margin-left:4px;">
                    <div class="col-10"> <h5>Parental Alienation and the Bystander Effect</h5></div><div class="col-2"><a href="#" style="color:black;margin-left:2%;"><i class="fas fa-arrow-right"></i></a></div>
                </div>
                <div class="row text-left" style="line-height: 300%; padding-top: 4%;margin-left:4px;">
                    <div class="col"> <h5>UC Davis spent thousands to scrub pepper-spray references from Internet</h5></div><div class="col-2"><a href="#" style="color:black;margin-left:2%;"><i class="fas fa-arrow-right"></i></a></div>
                </div>
                <button type="button" class="btn btn-outline-secondary" style="margin-top:4%;">More News</button>
            </div>
        </div>
    </div>
</section>
  
  <section style="padding:50px;border-top:1px solid #FFFDF9;border-bottom:1px solid #FFFDF9;width:100%; background-color:#f9f8f0;">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="text-muted" style="border-bottom:1px solid #C6CCD4;font-size:14.5px;padding-bottom:15px;">ABOUT US</h6>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <h6 style="padding-top:20px;line-height:200%; font-size:105%;">In 2004 Renee Beeker, a mother of six, founded the National Family Court Watch Project in Milford, Michigan. The National Family Court Watch Project believes that large-scale data will reveal national trends and ignite a call for change in the family court system. The NFCWP is the first known program to use a standardized observational instrument nationwide. We observe and report trends that the data collection reveals. Like criminal courts, but perhaps more so, family courts are capable of protecting or endangering, and supporting or disrupting, even devastating, the lives of children and adults. The ultimate goal is to work with the public and judicial system to create methods and procedures that help resolve the problems we are finding in family courts across the country.  </h6>
        </div>
      </div>
    </div> 
  </section>

<section id="donate" style="background-image: url(images/toddlers2.jpg);background-repeat: no-repeat; background-size: 100%;
margin-top: 3%;margin-bottom: 3%; margin-right: 6%; margin-left: 6%;text-align: center;padding: 12%; background-color:black;">
    <div class="container">
        <div class="row ">
            <div class="col">
                <h3 style="color:white; text-shadow: 2px 2px 4px #000000;">Help to to provide an impartial assessment of the effectiveness of family courts in dealing with custody, visitation, support and property issues.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-outline-secondary" style="margin-top:8%; color:white;text-shadow: 2px 2px 4px #000000;">Donate</button>
            </div>
        </div>
    </div>
</section>
<?php
include("footer.php");
?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
 
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>