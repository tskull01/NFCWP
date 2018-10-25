<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>NFCWP University Involvement</title>
  </head>
  <body>
    <!--NAV-->
    <?php
    include("header.php");
    ?>
    <!--CONTENT-->
  <div class="container" id="univeristy" style="background-color:#f9f8f0;padding-top:50px;margin-top:30px;margin-bottom:30px;">
    <h3 class="text-center" style="padding-top:40px;padding-bottom:10px;">Universities Can Get Involved</h3>
     <div class="row">
       <div class="col">
         <p class="text-center" style="line-height:200%;">The National Family Court Watch Project is being used by Interns in various programs at various universities. This project has been used as                   classroom project with success and extreme interest by students and professors alike.</p>
         <p class="text-center" style="padding-bottom:10px;">If you are interested in using our program for your classroom or intern program please contact us. </p>
         <form action="mailer3.php" method="post">
                <div class="form-group">
                  <label for="name" class="col-2 col-form-label">Name</label>
                    <div class="col-12">
                      <input class="form-control" type="text" value="" id="name">
                        </div>
                    </div>
                <div class="form-group">
                  <label for="uniName" class="col-2 col-form-label">Name of University</label>
                      <div class="col-12">
                        <input class="form-control" type="text" value="" id="uniName">
                      </div>
                    </div>
           <div class="form-group">
                  <label for="professor" class="col-form-label">Professor or Program Director</label>
                      <div class="col-12">
                        <input class="form-control" type="text" value="" id="professor">
                      </div>
                    </div>
           <div class="form-group">
                  <label for="address" class="col-form-label">Address</label>
                      <div class="col-12">
                        <input class="form-control" type="text" value="" id="address">
                      </div>
                    </div>
          <div class="form-group">
            <label for="stateSelect">State</label>
             <select class="form-control col-12" id="stateSelect">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
          </div>
           <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label> Phone</label>
                    <input type="number" class="form-control" id="number" placeholder="">
                </div>
           <div class="form-group">
                    <label for="interest">What is your interest in the program?</label>
                    <textarea class="form-control" id="interest" rows="3"></textarea>
                </div>
           <div class="form-group">
                    <label for="present">Is there an interest in having us come present the project?</label>
                    <textarea class="form-control" id="present" rows="3"></textarea>
                </div>
           <div class="form-group">
                    <label for="project">How did you hear about our project?</label>
                    <textarea class="form-control" id="project" rows="3"></textarea>
                </div>
         </form>
         <div class="col-12 text-center" style="padding-top:5px;padding-bottom:40px;">
         <button type="submit" class="btn btn-primary align-center">Submit</button>
         </div>
     </div>
  </div>
    </div>
    <!--FOOTER-->
    <?php
    include("footer.php");
    ?>
    <script>
        function validateForm() {
            var x = document.forms["mailer3.php"]["name"].value;
            var y = document.forms["mailer3.php"]["email"].value;
            var a = document.forms["mailer3.php"]["number"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
            if(y == ""){
                alert("Email must be filled out");
                return false;
            }
            if(a == ""){
                alert("Please enter a valid phone number")
                return false;
            }
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>