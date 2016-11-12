<?php
$a=5;
$b=0;
$operator="/";
$result=0;
if($operator=="+"){
    echo $a+$b;
}elseif ($operator=="-"){
    echo$a-$b;
}elseif ($operator=="*"){
    echo ($a*$b);
} elseif (($operator=="/")&&($a!=0)&&($b!=0)){
    echo ($a/$b);
}die("на ноль не делится");