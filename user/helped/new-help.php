
<br/>
<br/>
<h1>Déclarer une nouvelle tâche à votre aidant</h1>
<form action="./index.php?zone=user&type=helped&page=manage-operations&addTask=true" method="post">
Description : <input type="text" name="comment"><br/>
Type : <select name="type">
<?php
    foreach($_SESSION["task_types"] as $key => $type){
        echo "<option value=$key>$type</option>";
    }
?>
</select><br/>
Fréquence : <select name="repeat">
    <option value="0">seulement à la prochaine visite</option>
    <option value="1">à chaque visite</option>
    <option value="2">toutes les 2 visites</option>
    </select><br/>
    <?php
    echo '<input type="hidden" name="announceID" value='.$_GET["announceID"].'>';
    ?>
    <input type="submit" value="faire ma demande">
</form>