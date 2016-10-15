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
            10 <= 11; //comparing numbers

            $month = 10;
            if($month >= 12) {
              echo "It's almost Christmas!";
            }
            else {
              echo "It's not close to Christmas.";
            }

            $fruit = 'Apple'; //switch statement: if true, echos string and breaks. if false, goes to next case. default is if all cases are false.
            switch ($fruit) {
        case 'Apple':
            echo "Apple.";
            break;
        case 'Orange';
            echo "Orange";
            break;
        default:
            echo "Don't go comparing apples to oranges!";
    }
          ?>
        </p>
	</body>
</html>
