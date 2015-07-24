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
        //print_r($_POST);

        //The below form takes 2 inputs (email and name). Then after submit is pressed
        //the email address is returned in the echo printout

        $allowedNames = array('Bob', 'Lucy', 'Grant');

        if ($_POST ["submit"]){
          if ($_POST["email"]) {
            echo "Your email is ".$_POST['email'];
          } else {
            echo "Please enter your email";
          }

          if ($_POST["fname"]){
            foreach ($allowedNames as $allowed) {
              if ($_POST["fname"] == $allowed) {
                echo '<br />';
                echo "I know you. Your name is ".$allowed;

                $knowYou = 1;
              }
            }
          if (!$knowYou) {
            echo '<br />';
            echo "I don't know you, ".$_POST['fname'];
          }
        }
      }
      ?>

    <form method="post">
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
