<!doctype html>
<html>
<head>
    <title>GET Variables</title>

    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
  <div>
    <!--Bad way to code -->
    <?php
        //Using GET variables using PHP
        //print_r($_GET);

        //The below form takes 2 inputs (email and name). Then after submit is pressed
        //the email address is returned in the echo printout

        if ($_GET ["submit"]){
          if ($_GET["email"]) {
            echo "Your email is ".$_GET['email'];
          } else {
            echo "Please enter your name";
          }
        }
      ?>

    <form>
      <div id="formContent">
        <input type="email" placeholder="Email Address" name="email" />
        <br /> <br />
        <input type="text" placeholder="First Name" name="fname" />
        <br /> <br />
      </div>

      <input type="submit" name="submit" value="Submit Form" />
    </form>
  </div>
</body>
</html>
