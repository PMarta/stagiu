<?php
$con = mysqli_connect("localhost", "root", "", "stagiu"); //-- host, username, fara parola,baza de data numele  -->
$sql = "SELECT * FROM `sir_insert`";
//<!-- extragerea din baza de date -->
$result = mysqli_query($con, $sql);

echo'<table border="1" width="500px">';
while($row = mysqli_fetch_array($result)){//cat timp mem fiecare rand in baza de data

    $min = $row['min'];
    $max=$row['max'];
    $status=$row['status'];
    $date=$row['date'];

    echo"
                            <tr>
                            <td>$min</td>
                            <td>$max</td>
                            <td>$status</td>
                            <td>$date</td>
                              
                            </tr>    
                ";

}
