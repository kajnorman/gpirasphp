<html>
 <head>
 <meta name="viewport" content="width=device-width" />
 <title>LED Control</title>
 </head>
         <body>
         LED Control:
         <form method="get" action="onoff.php">
                 <input type="submit" value="ON" name="on">
                 <input type="submit" value="OFF" name="off">
         </form>
         <?php
         $setmode17 = shell_exec("sudo /usr/bin/raspi-gpio set 17 op");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("sudo /usr/bin/raspi-gpio set 17 dh");
                 echo "LED is on";
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("sudo /usr/bin/raspi-gpio set 17 dl");
                 echo "LED is off";
         }
         ?>
         </body>
 </html>
