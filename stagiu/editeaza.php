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
        <h1>What you don't like? 🐵</h1>
        <h2>Change <span class="fun"> that thing!</span></h2>
        <h3>
            <a href="https://docs.google.com/presentation/d/19YulX3DUaNkP9aT8-jX9g4mPdwY6-F-rt8BOv8xQ1VA/" target="_blank"></a>
        </h3>
    </div>

    <div id="container">
        <?php
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $con = mysqli_connect('localhost', 'root', '', 'stagiu');
            $sql = "SELECT * FROM `sir` WHERE `id`=$id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo '
                <form action="editeaza.php?id=' . $id . '" method="POST" enctype="multipart/form-data" class="center">
                 <span class="label ">Numar de pornire</span>
                 <input type="text" name="min"/><input type="hidden" name="txt_nr" value="<?php echo $id;?>"><br /><br />


                 <p class="label">Numar de sfarsit</p>
                 <input type="text" name="max"/>

                 <p class="label">Numar de elemente</p>
                 <input type="text" name="it"/>
                 <br/><br/>
                 <input type="submit" name="submit" value="Editeaza" />
                 </form><br /><br />
        ';

            if (isset($_POST['submit'])) {
                $id = $_GET['id'];
                $min = $_POST['min'];
                $max = $_POST['max'];
                $it = $_POST['it'];
                $con = mysqli_connect('localhost', 'root', '', 'stagiu');
                $sql = "UPDATE sir SET min='$min', max='$max',it='$it' WHERE id='$id'";
                $result = mysqli_query($con, $sql);
                header("Location: index.php");
            }
        }
        else{

            header("Location: index.php");

        }
?>
</div>
<div class="clear"></div>
</div>
</body>
</html>