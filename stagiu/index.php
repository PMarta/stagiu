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
    <div id="container">
    <?php

              echo '
          
        <form action = "inserare.php" method="POST" enctype="multipart/form-data" class="center">
            <span class="label ">Numar de pornire</span>
            <input type="text" name="min"/><input type="hidden" name="txt_nr" value="<?php echo $id;?>"><br /><br />


            <p class="label">Numar de sfarsit</p>
            <input type="text" name="max"/>

            <p class="label">Numar de elemente</p>
            <input type="text" name="it"/>

            <br/><br/>
            <input type="submit" name="submit" value="Adauga"/>
            <button formaction="trigger.php">Trriger</button>
              </form><br /><br />      
                        ';

            $con = mysqli_connect("localhost", "root", "", "stagiu");
            $sql = "SELECT * FROM `sir`";
            $result = mysqli_query($con, $sql);
            echo'<table border="1" width="500px">';
                while($row = mysqli_fetch_array($result)) {//cat timp mem fiecare rand in baza de data
                    $id = $row['id'];//vectorul row memorez fiecare rand
                    $min = $row['min'];
                    $max = $row['max'];
                    $it = $row['it'];
                    $date=$row['date'];


                    echo "
                <tr>
                    <td>$id</td>
                    <td>$min</td>
                    <td>$max</td>
                    <td>$it</td>
                    <td>$date</td>


                    <td><a href='editeaza.php?id=$id'>Edit</a></td>
                    <td><a href='delete.php?id=$id' >Delete</a>
                    <td><a href='run.php?id=$id'>Run</a>
                    </td></tr>
                ";
                }

        ?>

    </div>


    <div class="clear"></div>
</div>
</body>
</html>

