<?php 

    class Weather{
        private static $tempConditions = ['cold', 'mild', 'warm'];

        public static function clesiusToFarenheit($c){
            return $c * 9 / 5 + 32;
        }

        public static function determineTempCondition($f){
            if($f < 40){
                return self::$tempConditions[0];// cold
            } else if($f < 70){
                return self::$tempConditions[1];//mild;
            } else {
                return self::$tempConditions[2];//warm
            }
        }

    }

    // print_r(Weather::$tempConditions);
    // echo Weather::clesiusToFarenheit(20);

    echo Weather::determineTempCondition(20);




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>