<?php require 'connect.php'; ?>

<div class="new_tab">
    <p>Dodaj nową tabelę:</p>
    <form action="createtable.php" method="post">
        Nazwa:<input type="text" name="nametable" id="nametable"><br>
        <input type="submit" value="Utwórz" action="createtable.php"/>
    </form>
</div>
