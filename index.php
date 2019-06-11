<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">


<img src="https://www.architech.ca/wp-content/uploads/thegem-logos/logo_c4a9d7fb29cff312c0b9ab70d939a642_2x.png" valign="center">

                <h1>Hello Cloud!</h1>

                <table style="width:40%">
                <tr>
                  <td><B>Instance ID</B></td>
                  <td>
                    <?php
                      $instanceId = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');
                      echo "{$instanceId}";
                    ?>
                  </td>
                </tr>
                <tr>
                  <td><B>Current Time</B>
                  </td>
                  <td><?php echo "Current time is " . date("h:i:sa"); ?><br/><br/></td>
                </tr>
                <tr>
                  <td bgcolor=<?php echo substr($instanceId,9) . substr($instanceId,3,5) ?>><br/><br/><br/><br/><br/></td>
                  <td bgcolor=<?php echo substr($instanceId,9) . substr($instanceId,3,5) ?>><br/><br/><br/><br/><br/></td>
                </tr>
                </table>


            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
