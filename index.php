<?php require 'connect.php'; ?>

<html>
<head>
    <title> Sklep spożywczy </title>
</head>
    <body>
        <div class="new_tab">
            <p>Dodaj nową tabelę:</p>
            <form action="createtable.php" method="post">
                Nazwa:<input type="text" name="nametable" id="nametable"><br>
                <input type="submit" value="Utwórz" action="createtable.php"/>
            </form>
        </div>
        <div>
            <p>Wybierz tabelę: </p>
            
            
            <form action="displayrecords.php" method="post">

            <?php
            $res = mysqli_query($con, 'show tables from cdv'); 
            ?>

                <select name="mytab">
                <option>Tables</option>
                <?php
                    while($row=mysqli_fetch_row($res)){
                ?>
                <option>
                <?php echo $row[0]; ?>
                </option>
                    <?php 
                    }
                    mysqli_free_result($res);
                    
                    ?>
                </select>
                <button type="submit">Wybierz</button>
            </form>


        </div>
    </body>
</html>
