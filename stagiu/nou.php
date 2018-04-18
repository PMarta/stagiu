<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiu</title>
    <link rel="stylesheet" type="text/css" href="public/reset.css"/>
    <link rel="stylesheet" type="text/css" href="public/style.css"/>

</head>
<body>
<div class="wrapper">
    <div class="line center bold">
        <h1>PHPentaStagiu 2018</h1>
        <h2>M01.03 <span class="fun"> The Fun One</span></h2>
        <h3>
            <a href="https://docs.google.com/presentation/d/19YulX3DUaNkP9aT8-jX9g4mPdwY6-F-rt8BOv8xQ1VA/" target="_blank">M01.02</a>
        </h3>
    </div>
    <div class="line">
        <ol class="ml20">
            <li>Generati un array de numere
                <ul>
                    <li>cuprins intre <span class="bold">Numar de pornire</span> si <span class="bold">Numar de sfarsit</span> excluzand cele doua numere</li>
                    <li>numarul maxim de elemente este <span class="bold">Numar de elemente</span></li>
                </ul>
            </li>
            <li>Afisati toate numerele multiplu de 3</li>
            <li>Numar de numere multiplu de 4</li>
            <li>Suma numerelor multiplu de 5</li>
        </ol>
    </div>
    <div class="container">

        <form method="POST" class="center">
            <span class="label ">Numar de pornire</span>
            <input type="text" name="startPoint"/>

            <p class="label">Numar de sfarsit</p>
            <input type="text" name="endPoint"/>

            <p class="label">Numar de elemente</p>
            <input type="text" name="iterations"/>

            <br/><br/>

            <input type="submit"/>
        </form>
    </div>

    <div class="clear"></div>
</div>
</body>
</html>

<?php
if (!$_POST) {
    exit;
}
/*$start=$_POST['startPoint'];
$finish=$_POST['endPoint'];
$it=$_POST['iterations'];
*/
if(empty($_POST['startPoint'])||empty($_POST['endPoint']) ||empty($_POST['iterations'])){
    echo 'Completeaza campurile de mai sus!';
    exit();
}
function sir($start, $finish,$it)
{
    $array = range($start + 1, $finish - 1);//declar un array
    $array = array_slice($array, 0, $it);
    return $array;
}


function modulo($multiplu){
    $nr=0;
    $arr=[];
    $sum=0;
    foreach($multiplu as $value){//iar din array(sir)=$data valoarea=$value
        if($value%3==0){
            $arr[]=$value;
            }
            //echo '<br>';
        if($value%4==0) {
            $nr++;
            }
        if($value%5==0) {
            $sum += $value;

        }
    }
    echo "Multiplii de 3:";var_dump($arr);
    echo "<br>";
    echo "Multiplii de 4:".$nr ;
    echo "<br>";
    echo "Suma-multiplii lui 5:".$sum;

}

$dataarray=sir($_POST['startPoint'],$_POST['endPoint'],$_POST['iterations']);
echo "Sirul:"; var_dump($dataarray);
echo '<br>';
$modulo=modulo($dataarray);



