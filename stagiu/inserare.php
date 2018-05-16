<?php
/*include 'connection.php';
$sql1 = "DROP TRIGGER IF EXISTS insertTrigger ";
$sql2 = "CREATE TRIGGER insertTrigger BEFORE INSERT ON sir FOR EACH ROW 
    BEGIN
    INSERT INTO sir_insert(min,max,status,date) VALUES(NEW.min,NEW.max,'INSERT',NOW());
    END;";

$stmt1 = $con->prepare($sql1);
$stmt2 = $con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();


$sql3 = "DROP PROCEDURE IF EXISTS insertProcedure;";
$sql4 = "CREATE PROCEDURE insertProcedure
	(
		IN intMin int,
		IN intMax int,
		IN intIt int
		
	)
	BEGIN
		INSERT INTO sir (min, max, it) VALUES (intMin,intMax,intIt );
	END";

$stmt3 = $con->prepare($sql3);
$stmt4 = $con->prepare($sql4);

$stmt3->execute();
$stmt4->execute();


if(isset($_POST['submit'])) {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $it = $_POST['it'];


    $sql5 = "CALL insertProcedure('{$min}','{$max}','{$it}')";
    $q = $con->query($sql5);
    header("Location: index.php");
}
*/
//include 'connection.php';

if(isset($_POST['submit'])){
    $min = $_POST['min'];
    $max = $_POST['max'];
    $it = $_POST['it'];
    $con = mysqli_connect("localhost", "root", "", "stagiu");
    $sql = "INSERT INTO `sir` (`min`, `max`, `it`) VALUES ('$min','$max', '$it')"; //<!-- inseararea in baza de date -->
    mysqli_query($con, $sql);
    //function exceptions($min,$max,$it){
        if(empty($_POST['min'])||empty($_POST['max']) ||empty($_POST['it'] ))
            {
            throw new Exception( 'Completeaza campurile de mai sus cu valori intregi!');

        }
        elseif ($min < 0 || $max < 0 || $it<= 0){
            throw new Exception("Introduceti numere pozitive");
        }
        elseif (isset($max) && $max <= $min){
            throw new Exception("Max<Min");
        }

}
header("Location:index.php");
?>
