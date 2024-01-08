<?php
// require_once 'toasterpremium.php';
// require_once 'toaster.php';
  
//....................................
declare(strict_types=1);

require_once 'toasterpremium.php';
// require_once 'Account.php';
// require_once 'utillity.php';
;
require_once 'toaster.php';

// require_once 'app\Toaster,.php';
// require_once 'app\.Toasterpremium.php';

// require_once 'app\Account.php';
//  require_once 'app\SocialMedia.php';

// spl_autoload_register(function($class){
//   $formatedclass = str_replace(" //,", "/", $class);
//    $path= "{$formatedclass}.php";
//   require_once $path;

// });
 
use app\{toasterpremium, toaster};

$mytoaster = new  toasterpremium();
$mytoaster->  toast();


// $myAccount = new Account('johan',20);
// echo $myAccount ->getbalance();



// $myaccount ?->deposit(50)->deposit(30);
// utillity::printArry([54,78,91,01,89,03,]);

//.............autoload
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



// function isleap(int $year  ):bool
//  {
// if ($year % 4 !==0){
//     return false;
// }
// if($year % 100 === 0 && $year % 400 !==0){
    
// }
// return true;

// } 

// echo PHP_VERSION."<br>";
// echo PHP_INT_MAX."<br>";
// echo PHP_FLOAT_MAX."<br>";
// echo __line__."<br>";


// echo __file__."<br>";

// echo __dir__."<br>";
  //    alterntive syntax constant

  
//   unsetting variable

// //arry
// $names =['rashka','bashka','hayow'];

//echo $names [1];

// function sum(int|float ...$sum){
//     // var_dump($sum);
//     return array_sum($sum) ;

// }
// echo sum(7,7,1);
 //.............variabls

//  $x =  80  ;

// // include 'bk.php';
// function foo(){
//     global $x;
// $x++;
//     echo  $x ;
//}
//foo();

//...........anonymouse
// function multyple($sum){
//     return $sum*2;


// };
// echo multyple(5)."<br>";
// // sidaana waa sameyn kartaa

// $multyple = function ($sum){
//     return $sum*3;

// };
// echo $multyple(5);
//....................tusaale kale
// $multiplier =2;
// $multiply = fn($sum)=>$sum * $multiplier;

// function sum ($a ,$b,$callback){
//     return $callback ($a+$b);


// }
// echo sum(5,2,$multiply);
// echo  "<br>".$multiplier;

//............arrrya fucntion

// $users  =[  "bashka", "rashka","kafey" ];
// $users =array_filter($users);
// echo "<pre>";
// print_r($users)."</pre>";

//.............. range and shuffle function

// declare(strict_types=2);
 
// function getNewName(): string
// { 
//     $letters = range('a','z');
//     shuffle($letters);

//     $numbers=mt_rand(100,999);
//     return "{$letters[0]}{$letters[1]}{$numbers}";

// }


// //..........oop

// $myAccount = new Account('john', 20);
// $myAccount->deposit(50)->deposit(30);

// var_dump($myAccount);

//});








</body>
</html> -->







