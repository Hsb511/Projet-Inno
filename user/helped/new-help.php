
<br/>
<br/>
<form action="./index.php?zone=user&type=helped&page=manage-operations" method="post">
Titre de la nouvelle tâche : <input type="text" name="title"><br/>
Description : <input type="text" name="title"><br/>
Type : <select name="type">
<?php
    foreach($_SESSION["task_types"] as $key => $type){
        echo "<option value=$key>$type</option>";
    }
?>
    <input type="submit" value="faire ma demande">
        </select>
</form>