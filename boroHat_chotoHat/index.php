<?php
function upperCase($tag='h1',$text,$align='center',$color='red'){
echo "<$tag style=\"text-transform:uppercase;text-align:$align;color:$color;\">$text</$tag>";

}
upperCase('h1','Shahriar Rahman','center','blue');
upperCase('h2','Shahriar ','center');



function lowerCase($tag='h1',$text,$align='center',$color='red'){
    echo "<$tag style=\"text-transform:lowercase;text-align:$align;color:$color;\">$text</$tag>";
    
    }
    lowerCase('h1','Shahriar Rahman','center','blue');
    lowerCase('h2','Shahriar ','center');
?>