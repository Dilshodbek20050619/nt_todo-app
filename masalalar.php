<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <div class="container">
          <form action="" method="get">
              <input type="text" name="num1">

<!--              <input type="text" name="num2">-->
              <button type="submit">yuborish</button>

          </form>
      </div>
</body>
</html>

<?php

//$numers=['12','15','18','19','1','0'];
//
//$max=$numers[0];
//
//foreach ($numers as $num) {
//    if($num < $max){
//        $max=$num;
//    }
//    }
//echo $max;
//$num1 = $_GET["num1"];
//
//$sqrt = sqrt($num1);
//echo $sqrt;
//$mass=['10','20','30','40','50','60','70','80','90','100'];
//$mass2=['110','120','130','140'];
//
//$summ=array_merge($mass,$mass2);
//
//foreach ($summ as $m){
//    echo $m . '<br>';
//}

$text=$_GET['num1'];
$summ=0;
foreach ($text as $value) {
    $summ=$summ+1;
}
echo $summ;

?>