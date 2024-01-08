<!-- 

<?php function getpermission(){
    sleep(0);

return 1;
//..................tusale



 //<?php if( getpermission() ===1):?>

 <h1>hello admin</h1>
 <?php elseif($permision===2):?>
    <h1>hello mod</h1>
    <?php else:?>
        <h1>hello guest</h1>
        <?php  endif;?>

    }
 /////  oop
 

// require_once 'App\Account.php';
// require_once 'App\socialmedia.php';
use app\{Account,socialmedia , utility};

/// cashir  lasoo dhaaafy
spl_autoload_register(function($class){
   $formattedclass= str_replace("\\","/",$class);
   $path = "{$formattedclass}.php";
require_once $path;
$myAccount = new  Account ('john',290);




echo $myAccount->getbalance();

$myAccount->deposit(50)->deposit(30);
// wicitan  hoer
// var_dump($myAccount::$count);
utility::printArr([90,79,67,56,7,98,]);


    ?>
 -->

