<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <?php
            echo "My name is Kate"; //puts "My name is Kate"
            echo "My" . " " . "name" . " " . "is" . " " . "Kate"; //concat
            echo 9 * 19 //multiplication
            $myName = "Kate"; //setting a variable
            echo $myName; //prints variable
            10 <= 11;
            $month = 10;
            if($month >= 12) {
              echo "It's almost Christmas!";
            }
            else {
              echo "It's not close to Christmas.";
            }
          ?>
        </p>
	</body>
</html>
