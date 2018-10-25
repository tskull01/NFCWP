
<nav class="navbar navbar-toggleable-md navbar-light bg-white">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img class="navbar-brand" src="images/logo.png" width="130" height="70" style="border-radius: 15%"/>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <li class="nav-item item">
            <a class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown item">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                <a class="dropdown-item" href="#who">Who we are</a>
                <a class="dropdown-item" href="#board">Board of Directors </a>
                <a class="dropdown-item" href="#university">University Involvement</a>
            </div>
            </li>
            <li class="nav-item item">
            <a class="nav-link" href="#news">News</a>
            </li>
            <li class="nav-item dropdown item">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Get Involved
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#experience">Share your Experience</a>
                <a class="dropdown-item" href="#volunteer">Volunteer Application</a>
                <a class="dropdown-item" href="#" disabled>Events</a>
                <a class="dropdown-item" href="community%20support.pdf">Community Support</a>
            </div>
            </li>
            <li class="nav-item item">
            <a class="nav-link" href="#" disabled>Resources</a>
            </li>
        </ul>
    </div>
    <span class="navbar-text text-right">
      <button type="button" class="btn btn-secondary"><a href="#contact" style="color:black;text-decoration:none;">Contact</a></button>
            </span>
    <span class="navbar-text text-right">
         <button type="button" class="btn btn-warning" style="margin: 0.5em" id="donate" href="donate.php">Donate</button>
    </span>
</nav>
<?php
include("donate.php");
?>