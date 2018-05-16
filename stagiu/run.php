<?php


/*$min=$_POST['startPoint'];
$max=$_POST['endPoint'];
$iteratii=$_POST['iterations'];
*/


/*if(empty($_POST['min'])||empty($_POST['max']) ||empty($_POST['it'] )
    || !ctype_digit(strval($_POST['min']))||!ctype_digit(strval($_POST['max']) )|| !ctype_digit(strval($_POST['it']))){
    echo '<div style="color:red"> Completeaza campurile de mai sus cu valori intregi!</div>';
    exit();
}*/

/*class Showarray{
$start, $finish, $it;

public function showarray(){ //constructor
    $start=0;
    $finish=0;
    $it=0;
}
*/
class Arrays
{
    public function not()
    {
        if (!$_POST) {
            exit;
        }
    }

    public function sir($min, $max, $it)
    {
        $array = range($min + 1, $max - 1);//declar un array
        $array = array_slice($array, 0, $it);
        return $array;

    }

    public function modulo($multiplu)
    {
        $nr = 0;
        $arr = [];
        $sum = 0;
        foreach ($multiplu as $value) {//iar din array(sir)=$data valoarea=$value
            if ($value % 3 == 0) {
                $arr[] = $value;
            }
            //echo '<br>';
            if ($value % 4 == 0) {
                $nr++;
            }
            if ($value % 5 == 0) {
                $sum += $value;

            }
        }
        echo "Multiplii de 3:";
        var_dump($arr);
        echo "<br>";
        echo "Multiplii de 4:" . $nr;
        echo "<br>";
        echo "Suma-multiplii lui 5:" . $sum;

    }
    /*public function test(){
        $this->sir($_POST['min'], $_POST['max'], $_POST['it']);
        $this->modulo();
    } */
}
$dataarray = new Arrays;
//$dataarray ->test();
$dataarray -> sir($_POST['min'], $_POST['max'], $_POST['it']);
echo "Sirul:"; var_dump($dataarray);
echo '<br>';
$modulo=new Arrays;
$modulo -> modulo($dataarray);
