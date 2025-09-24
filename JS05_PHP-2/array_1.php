<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen=["Fiza Rahmatus Sholikha", "DIyah Ramadhani Putri", "Naswanida Nafiula"];

            for ($i=0; $i < count($Listdosen) ; $i++) { 
                echo $Listdosen[$i]."<br>";
            }
            // echo $Listdosen[2] . "<br>";
            // echo $Listdosen[0] . "<br>";
            // echo $Listdosen[1] . "<br>";
        ?>
    </body>
</html>