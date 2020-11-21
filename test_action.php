<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/gif" sizes="60x60" href="PHP_logo1.png">
    <title>Document</title>
</head>
<body>
<table class="table table-striped">
<?php
$data_user=array(
    array(1,"thyda","female","Class_B","thyda@gmail.com","111111"),
    array(2,"vandy","male","Class_B","vandy@gmail.com","111111"),
    array(3,"LeavChanDara","male","Class_B","leavchandara@gmail.com","111111")
    );
    for($i=0;$i<3;$i++){
        if( ($data_user[$i][4]==$_POST["email"]) && ($data_user[$i][5]==$_POST["pwd"]) ){

                    echo "<h2 style='color: deeppink'>Wellcome To Registed User </h2>";
                    //echo "<br>";
                    echo "<tr>";
                    echo "<th scope='col'> No</th>";
                    echo "<th scope='col'> Username</th>";
                    echo "<th scope='col'> Gender</th>";
                    echo "<th scope='col'> Class</th>";
                    echo "<th scope='col'> Email</th>";
                    echo "<th scope='col'> Password</th>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>".$data_user[0][0]."</td>";
                    echo "<td>".$data_user[0][1]."</td>";
                    echo "<td>".$data_user[0][2]."</td>";
                    echo "<td>".$data_user[0][3]."</td>";
                    echo "<td>".$data_user[0][4]."</td>";
                    echo "<td>".$data_user[0][5]."</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>".$data_user[1][0]."</td>";
                    echo "<td>".$data_user[1][1]."</td>";
                    echo "<td>".$data_user[1][2]."</td>";
                    echo "<td>".$data_user[1][3]."</td>";
                    echo "<td>".$data_user[1][4]."</td>";
                    echo "<td>".$data_user[1][5]."</td>";
                    echo "</tr>";
                    echo "<tr>";

                    echo "<td>".$data_user[2][0]."</td>";
                    echo "<td>".$data_user[2][1]."</td>";
                    echo "<td>".$data_user[2][2]."</td>";
                    echo "<td>".$data_user[2][3]."</td>";
                    echo "<td>".$data_user[2][4]."</td>";
                    echo "<td>".$data_user[2][5]."</td>";
                    echo "</tr>";

                    break;
        }
        elseif (($data_user[$i][4]!=$_POST["email"]) && ($data_user[$i][5]!=$_POST["pwd"])||($data_user[$i][4]!=NULL) && ($data_user[$i][5]!=NULL)){
            header("Refresh: 0.01; url=login.html");
        }

    }
?>
</table>
</body>
</html>