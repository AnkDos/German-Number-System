<?php


function Ank($a)
{
$aray=array("null","ein","zwei","drei","vier","funf","sech","sieben","acht","nuen","zehn","elf","zwolf");
$aray['20']='Zwazig';$aray['1000']='Transend';
   
    if($a<='12' || $a==1000){
    echo $aray[$a];
    }

if($a>'12' && $a<20)
{
    $i=($a/10)-0.5;
    $r=$a%10;
    $mul=round($i);
    $k=$mul*10;
    echo $aray[$r].$aray[$k];
}


if($a>'20' && $a<'100')
{
   $i=($a/10)-0.5;
   $r=$a%10;
   $mul=round($i);
   $k=$mul*10;
   
       if($r==0){
        echo $aray[$mul]."zig";
    }
   else{
   echo $aray[$r]."und".$aray[$mul]."zig";
}
}


if($a>'100' && $a<'1000')
{
   $i=($a/100);
   $r=$a%100;
   $mul=round($i,2);
 
       if($r==0){
        echo $aray[$mul]."hundret";
    }
 else{
   echo $aray[$mul]."Hundret";
   echo Ank($r);
}
}





}

if(isset($_GET['inp']))
{
    $c=$_GET['inp'];
echo Ank($c);
}
?>

<form method="get">
    <input type="text" name="inp">
    </form>