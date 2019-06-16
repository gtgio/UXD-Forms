<!DOCTYPE HTML>
<html>
<title>UXD Forms</title>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta name="author" content="Giovanni Martelli">
<head>
<style>
.error {color: #FF0000;}
.optional {color: #FF0000;}

body {
  background-color: grey;
}
h2 {
        margin-top: 0;
        border: 1px solid #CCC;
        border-radius: 10px;
        background-color: lightgrey;
        text-align: center;
        color: white;
        text-shadow: 2px 2px 2px #000000
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    form {
        margin: 0 auto;
        width: 460px;
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
        background-color: white;
        box-shadow: 0 0 30px ;
    }

    div+div {
        margin-top: 1em;
    }

    label span {
        display: inline-block;
        width: 120px;
        text-align: right;
    }

    input, textarea {
        font: 1em sans-serif;
        width: 250px;
        box-sizing: border-box;
        border: 1px solid #999;
    }

    input[type=checkbox], input[type=radio] {
        width: auto;
        border: none;
    }

    input:focus, textarea:focus {
        border-color: #000;
    }

    textarea {
        vertical-align: top;
        height: 5em;
        resize: vertical;
    }

    fieldset {
        width: 250px;
        box-sizing: border-box;
        margin-left: 136px;
        border: 1px solid #999;
    }

    button {
        margin: 20px 0 0 124px;
        cursor: pointer;
    }


        .field-wrapper{
            margin: 2px 0 2px 0;
            padding: 0;
        }

        .confirm-message{
            margin: 0;
            padding: 0;
            font-size: .8em;
        }

        #submit {
          width: 226px;
          margin: 2px;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: lightgrey;
          cursor: pointer;
        }

        #reset {
          width: 226px;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: lightgrey;
          cursor: pointer;
        }

        .title {
          margin-bottom: 10px;
          margin-top: -3px;
          padding: 10px;
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: lightgrey;
          text-align: center;
          color: white;
          text-shadow: 2px 2px 2px #000000
        }

        #personal {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #contact {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #interests {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #inputs {
          margin: 0 auto;
          margin-top: 50px;
          width: 460px;
          padding: 1em;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: white;
          box-shadow: 0 0 30px ;
        }

        .inputans {
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: #dedede;
          padding: 10px;
        }

        #tips {
          width: 226px;
          border: 1px solid #CCC;
          border-radius: 1em;
          background-color: lightgrey;
          font-size: 1.2em;
        }

</style>
</head>
<body>

<?php

$fnameErr = $lnameErr = $emailErr = $genderErr = $birthErr = $password2Err = $confirm2Err = $phoneErr = $musicErr = $payErr = "";
$fname = $lname = $email = $gender = $birth = $password = $confirm2 = $phone = $mobile = $street = $number = $place = $music = $pay = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["birth"])) {
    $birthErr = "Date of Birth is required";
  } else {
    $birth = test_input($_POST["birth"]);
  }

  if (empty($_POST["password"])) {
    $password2Err = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["confirm"])) {
    $confirm2Err = "Password Confirmation is required";
  } else {
    $confirm = test_input($_POST["confirm"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Telephone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["mobile"])) {
    $mobileErr = "";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }

  if (empty($_POST["place"])) {
    $placeErr = "";
  } else {
    $place = test_input($_POST["place"]);
  }

  if (empty($_POST["street"])) {
    $streetErr = "";
  } else {
    $street = test_input($_POST["street"]);
  }

  if (empty($_POST["number"])) {
    $numberErr = "";
  } else {
    $number = test_input($_POST["number"]);
  }

  if (empty($_POST["music"])) {
    $musicErr = "This question is required";
  } else {
    $music = test_input($_POST["music"]);
  }

  if (empty($_POST["pay"])) {
    $payErr = "This question is required";
  } else {
    $pay = test_input($_POST["pay"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h2 class="title">UXD Forms</h2>
  <div id="personal">
  <h3>1. Personal Information</h3>
  First Name: <br>
  <input type="text" name="fname" placeholder="ex. John">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  Last Name: <br>
  <input type="text" name="lname" placeholder="ex. Doe">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
  Gender: <br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Date of Birth: <br>
  <input type="text" name="birth" placeholder="ex. July 10 1999">
  <span class="error">* <?php echo $birthErr;?></span>
  <br><br>
</div>

<div id="contact">
  <h3>2. Contact Information</h3>
  E-mail: <br>
  <input type="text" name="email" placeholder="ex. john@example.com">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  <div class="field-wrapper">
              <label for="password2">Password:</label> <br>
              <input type="password" name="password" id="password2" onkeyup="checkPass();">
              <span class="error">* <?php echo $password2Err;?></span>
          </div>
          <br>
          <div class="field-wrapper">
              <label for="confirm2">Confirm Password:</label> <br>
              <input type="password" name="confirm" id="confirm2" onkeyup="checkPass();">
              <span id="confirm-message2" class="confirm-message"></span>
              <span class="error">* <?php echo $confirm2Err;?></span>
          </div>
          <br>

  Telephone: <br>
  <input type="text" name="phone" placeholder="ex. 12345678">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Mobile: <br>
  <input type="text" name="mobile" placeholder="ex. 12345678">
  <span class="optional">* Optional</span>
  <br><br>
  Place Name: <br>
  <input type="text" name="place" placeholder="ex. Amsterdam">
  <span class="error">* Optional</span>
  <br><br>
  Street Name: <br>
  <input type="text" name="street" placeholder="ex. Wallstreet">
  <span class="error">* Optional</span>
  <br><br>
  Number: <br>
  <input type="text" name="number" placeholder="ex. 4">
  <span class="error">* Optional</span>
  <br><br>
</div>

<div id="interests">
<h3>3. Interests</h3>
What is / are your favorite music stream(s)? <br>
<input type="text" name="music" placeholder="ex. hip hop, jazz, country">
<span class="error">* <?php echo $musicErr;?></span>
<br><br>

Do you use Ideal or Paypal? <br>
<input type="radio" name="pay" value="Ideal">Ideal
<input type="radio" name="pay" value="Paypal">Paypal
<span class="error">* <?php echo $payErr;?></span>
<br><br>
</div>
<div>
  <input id="submit" type="submit" name="submit" value="Submit">
  <input id="reset" type="reset" name="Reset" value="Reset">
</div>
</form>

<div id="inputs">
<?php
echo "<h2>Your Input:</h2>";?>
<div class="inputans">
  <?php echo "First Name: $fname";?>
<?php echo "<br>";?>
<?php echo "Last Name: $lname";?>
<?php echo "<br>";?>
<?php echo "Gender: $gender";?>
<?php echo "<br>";?>
<?php echo "Date of Birth: $birth";?>
<?php echo "<br>";?>
<?php echo "E-mail: $email";?>
<?php echo "<br>";?>
<?php echo "Password: $password";?>
<?php echo "<br>";?>
<?php echo "Telephone: $phone";?>
<?php echo "<br>";?>
<?php echo "Mobile: $mobile";?>
<?php echo "<br>";?>
<?php echo "Place Name: $place";?>
<?php echo "<br>";?>
<?php echo "Street Name: $street";?>
<?php echo "<br>";?>
<?php echo "Number: $number";?>
<?php echo "<br>";?>
<?php echo "Your favorite music stream(s): $music";?>
<?php echo "<br>";?>
<?php echo "payment method: $pay";?>
<?php echo "<br>";?>

</div>
<button id="tips"><a href="tips.php">Go to the tips</a></button>
<script type="text/javascript">
function checkPass()
{
    //Store the password field objects into variables ...
    var password = document.getElementById('password2');
    var confirm  = document.getElementById('confirm2');
    //Store the Confirmation Message Object ...
    var message = document.getElementById('confirm-message2');
    //Set the colors we will be using ...
    var good_color = "#66cc66";
    var bad_color  = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(password.value == confirm.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        confirm.style.backgroundColor = good_color;
        message.style.color           = good_color;
        message.innerHTML             = 'Passwords Match!';
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        confirm.style.backgroundColor = bad_color;
        message.style.color           = bad_color;
        message.innerHTML             = 'Passwords Do Not Match';
    }
}
</script>
</body>
</html>
