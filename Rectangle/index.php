<?php
function rectangle($length , $width){
    $rectangle_area= $length*$width;
    echo "Rectangle Area = $rectangle_area<br>";
    
}
rectangle(10 , 5);


function circle($redius){

      $circle_area =( 2 * 3.1416 * ($redius * $redius));
      echo "Circle Area = $circle_area<br>";

}
circle(5);

function square($lenght1){
    $square_area = $lenght1 * $lenght1;
    echo "Square Area = $square_area";
}

square(4);
?>