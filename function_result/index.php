<?php
function result($bangla =80,$english =80,$math =67,$gscience =67,$science =90,$religion =99,$agriculture =86,$ict =60,$name = 'Shahriar',$fail =""){

if($bangla<=100 && $bangla>=80){

    $b=5;

}
else if($bangla<80 && $bangla>=70){
   
    $b=4;

}
else if($bangla<70 && $bangla>=60){
   
    $b=3.50;

}
else if($bangla<60 && $bangla>=50){
   
   $b=3;

}
else if($bangla<50 && $bangla>=40){
   
    $b=2.50;

}
else if($bangla<40 && $bangla>=33){
   
    $b=2;

}
else{

    echo "YOU'RE FAIL IN BANGLA<br>";
}
if($english<=100 && $english>=80){

    $e=5;

}
else if($english<80 && $english>=70){
   
    $e=4;

}
else if($englis<70 && $english>=60){
   
    $e=3.50;

}
else if($englis<60 && $english>=50){
   
   $e=3;

}
else if($englis<50 && $english>=40){
   
    $e=2.50;

}
else if($englis<40 && $english>=33){
   
    $e=2;

}
else{

    echo "YOU'RE FAIL IN ENGLISH<br>";
}
if($math<=100 && $math>=80){

    $m=5;

}
else if($math<80 && $math>=70){
   
    $m=4;

}
else if($math<70 && $math>=60){
   
    $m=3.50;

}
else if($math<60 && $math>=50){
   
   $m=3;

}
else if($math<50 && $math>=40){
   
    $m=2.50;

}
else if($math<40 && $math>=33){
   
    $m=2;

}
else{

    echo "YOU'RE FAIL IN MATH<br>";
}
if($gscience<=100 && $gscience>=80){

    $gs=5;

}
else if($gscience<80 && $gscience>=70){
   
    $gs=4;

}
else if($gscience<70 && $gscience>=60){
   
    $gs=3.50;

}
else if($gscience<60 && $gscience>=50){
   
   $gs=3;

}
else if($gscience<50 && $gscience>=40){
   
    $gs=2.50;

}
else if($gscience<40 && $gscience>=33){
   
    $gs=2;

}
else{

    echo "YOU'RE FAIL IN GENERAL SCIENCE<br>";
}
if($science<=100 && $science>=80){

    $s=5;

}
else if($science<80 && $science>=70){
   
    $s=4;

}
else if($science<70 && $science>=60){
   
    $s=3.50;

}
else if($science<60 && $science>=50){
   
   $s=3;

}
else if($science<50 && $science>=40){
   
    $s=2.50;

}
else if($science<40 && $science>=33){
   
    $s=2;

}
else{

    echo "YOU'RE FAIL IN SCIENCE<br>";
}
if($religion<=100 && $religion>=80){

    $r=5;

}
else if($religion<80 && $religion>=70){
   
    $r=4;

}
else if($religion<70 && $religion>=60){
   
    $r=3.50;

}
else if($religion<60 && $religion>=50){
   
   $r=3;

}
else if($religion<50 && $religion>=40){
   
    $r=2.50;

}
else if($religion<40 && $religion>=33){
   
    $r=2;

}
else{

    echo "YOU'RE FAIL IN RELIGION<br>";
}
if($agriculture<=100 && $agriculture>=80){

    $a=5;

}
else if($agriculture<80 && $agriculture>=70){
   
    $a=4;

}
else if($agriculture<70 && $agriculture>=60){
   
    $a=3.50;

}
else if($agriculture<60 && $agriculture>=50){
   
   $a=3;

}
else if($agriculture<50 && $agriculture>=40){
   
    $a=2.50;

}
else if($agriculture<40 && $agriculture>=33){
   
    $a=2;

}
else{

    echo "YOU'RE FAIL INAGRICULTURE<br>";
}
if($ict<=100 && $ict>=80){

    $i=5;

}
else if($ict<80 && $ict>=70){
   
    $i=4;

}
else if($ict<70 && $ict>=60){
   
    $i=3.50;

}
else if($ict<60 && $ict>=50){
   
   $i=3;

}
else if($ict<50 && $ict>=40){
   
    $i=2.50;

}
else if($ict<40 && $ict>=33){
   
    $i=2;

}
else{

    echo "YOU'RE FAIL IN ICT<br>";
}
if($bangla<33 || $english<33 || $math<33 || $gscience<33 || $science<33 || $religion<33 || $agriculture<33 || $ict<33){
    echo "<b>SO,, YOU'RE FAIL</b><br>"; 
    $fail=5;
}
else{
    $mark = (($bangla+$english+$math+$gscience+$science+$religion+$agriculture+$ict)/8);
    echo "$name Your Total Avarge Marks : $mark<br>";
}
if($fail==5){
    echo "<b>BETTTER LUCK NEXT TIME</b><br>";
}
else{
$gpa=(($b+$e+$m+$gs+$s+$a+$i)/8);
echo "<b>$name YOUR GPA : $gpa</b><br><br><br>";
}
echo "YOUR MARKS ARE GIVEN BELOW :<br>BANGLA : $bangla<br>ENGLISH : $english<br>MATH : $math<br>GENERAL SCIENCE : $gscience<br>SCIENCE : $science<br>RELIGION : $religion<br>AGRICULTURE : $agriculture<br>ICT : $ict<br>"
}

result();





?>