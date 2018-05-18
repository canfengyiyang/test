<?php
/**
 * Created by PhpStorm.
 * User: zhangsuyang
 * Date: 2018/5/18
 * Time: 9:47
 */

/*$a = 4;
if ($a == 5)
    echo "a is equals 5";
elseif ($a==6)
echo  "laaaaaaaaa";
else
    echo  "qqqqqqqq";
*/

//$a= 1;
//while ($a <= 10){
//    echo $a;
//    $a++;
//}

do {
    $i= 1;
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
    echo "i is ok";

    /* process i */

} while(0);