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

    $i = 5; //falling through statement: checks multiple cases

    switch ($i) { //switch($i):
    case 0:
        echo '$i is 0.';
        break;
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo '$i is somewhere between 1 and 5.';
        break;
    case 6:
    case 7:
        echo '$i is either 6 or 7.';
        break;
    default:
        echo "I don't know how much \$i is.";
    } //endswitch;
          ?>
        </p>
	</body>
</html>
