<html>
<body>
<form action="index.php">
    <input type="submit" value="Poprzednia strona" />
</form>
</body>
</html>


<?php

require 'connect.php'; 

        require_once "connect.php";
        $tablename = $_REQUEST['mytab'];
        $qer = "SELECT * FROM $tablename";
        $res = mysqli_query($con, $qer );
        echo "<table>";
        $first_row = true;
        while($row = mysqli_fetch_assoc($res)){
            if($first_row){
                $first_row = false;
                echo "<tr>";
                foreach($row as $key=>$fields){
                    echo '<th>'.$key.'</th>';
                };
                echo "</tr>";
            };
            echo "<tr>";
            foreach($row as $key=>$fields){
                echo '<td>'.$fields.'</td>';
            };
            echo "</tr>";
        }
        echo "</table>";
?>

