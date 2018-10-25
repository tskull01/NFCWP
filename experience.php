<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>NFCWP Share Your Experience</title>
  </head>
  <body>
    <!--NAV-->
    <?php
    include("header.php");
    ?>
    <!--FORM-->
    <div class="container" id="experience" style="margin-left:9%; padding-right:3%;margin-top:5%;margin-bottom:5%; padding-top: 3%;background-color:#f9f8f0;">
        <h4 class="text-center">Share Your Experience</h4>
    <div class="row">
      <div class="col-md-12">
        <form action="mailer2.php" method="post">
                <div class="form-group">
                  <label for="name" class="col-2 col-form-label">Name</label>
                    <div class="col-12">
                      <input class="form-control" type="text" id="name" required>
                        </div>
                    </div>
                <div class="form-group">
                  <label for="caseNumber" class="col-2 col-form-label">Case Number</label>
                      <div class="col-12">
                        <input class="form-control" type="text" value="" id="caseNumber">
                      </div>
                    </div>
          <div class="form-group">
            <label for="stateSelect">State</label>
             <select class="form-control" id="stateSelect">
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
             <label  for="professional" class="col-form-label"> Are you a family court professional?</label>
          <div class="form-check">
    <label class="form-check-label" style="padding-right:25px;">
      <input type="checkbox" class="form-check-input">
      Yes
    </label>
            <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      No
    </label>
  </div>
          </div>
          <div class="form-group">
            <label for="select" class="col-2 col-form-label">If yes - please choose</label>
            <select class="form-control" id="select">
              <option></option>
             <option>Judge</option>
             <option>Friend of the Court</option>
             <option>Attorny</option>
             <option>Lawyer for Child</option>
             <option>Custody Evaluator</option>
            </select>
          </div>
          <div class="form-group">
              <label for="court" class="col-2 col-form-label">Court</label>
                    <div class="col-12">
                 <input class="form-control" type="text" value="" id="court">
              </div>
           </div>
          <div class="form-group">
              <label for="judge" class="col-2 col-form-label">Judges Name</label>
                    <div class="col-12">
                 <input class="form-control" type="text" value="" id="judge">
              </div>
           </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label> Phone</label>
                    <input type="number" class="form-control" id="number" required>
                </div>
                <div class="form-group">
                    <label for="parties">Parties Involved</label>
                    <textarea class="form-control" id="parties" rows="2"></textarea>
                </div>
          <div class="form-group">
                    <label for="comment">Brief Accolade, Complaint or Comment</label>
                    <textarea class="form-control" id="comment" rows="3"></textarea>
                </div>
          <div class="form-group">
             <label  for="example-text-input" class="col-form-label"> Did you have an evaluator GAL Parent Coordinator appointed to your case?</label>
          <div class="form-check">
    <label class="form-check-label" style="padding-right:25px;">
      <input type="checkbox" class="form-check-input">
      Yes
    </label>
            <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      No
    </label>
  </div>
          </div>
          <div class="form-group">
            <label for="professionals" class="col-form-label">Did you have other professionals appointed to your case?</label>
            <select class="form-control" id="professionals">
              <option></option>
             <option>Custody Evaluator</option>
             <option>Attorny for Child (GAL)</option>
             <option>Non Legal GAL</option>
             <option>Parent Coordinator</option>
            </select>
          </div>
          <div class="form-group">
              <label for="length" class="col-form-label">How long were these parties involved in your family law case?</label>
                    <div class="col-12">
                 <input class="form-control" type="text" value="" id="length">
              </div>
           </div>
          <div class="form-group">
              <label for="pay" class="col-form-label">How much did you pay these professionals?</label>
                    <div class="col">
                 <input class="form-control" type="text" value="" id="pay">
              </div>
           </div>
          <div class="form-group">
              <label for="pay2" class="col-form-label">How much did the other side pay for these professionals?</label>
                    <div class="col-12">
                 <input class="form-control" type="text" value="" id="pay2">
              </div>
           </div>
          <div class="form-group">
              <label for="case" class="col-form-label">How long has your case been in the family court?</label>
                    <div class="col-12">
                 <input class="form-control" type="text" value="" id="case">
              </div>
           </div>
            </form>
        <div class="col-12 text-center" style="padding-top:5px;padding-bottom:40px;">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
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
    var x = document.forms["mailer2.php"]["name"].value;
      var y = document.forms["mailer2.php"]["email"].value;
        var a = document.forms["mailer2.php"]["number"].value;
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