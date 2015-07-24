<!doctype html>
<html>
<head>
    <title>Send PHP Email</title>

    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
  <div>
    <?php
        //Send email FROM, TO, SUBJECT, CONTENT
        $emailTo="test@test.com";
        $subject="Your Awesome";
        $body="Your are totally cool";
        //The email address is not setup correctly for sending
        $headers="From: test@something.com";

        if (mail($mailTo, $subject, $body, $headers)){
          echo "Mail has been sent";
        }else{
          echo "Mail not sent";
        }

      ?>
  </div>
</body>
</html>
