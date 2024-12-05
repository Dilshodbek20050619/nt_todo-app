
<?php



function dublikat($num)
{
    $uniqueArray = array_unique($num);
    print_r($uniqueArray);
}

$x = array(1, 1, 2, 3, 4, 4);
echo dublikat($x);


?>