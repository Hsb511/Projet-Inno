# interface permettant de gérer des proches (liste des personnes gérées, aide apportée, historique)

<p> gérer les membres de votre famille qui ne peuvent le faire seuls. </p>

<!--liste les annonces d'aide postée sur le site par l'utilisateur. propose d'en rajouter ou d'en modifier. -->
<br/>
<br/>
<h1> Liste de vos annonces </h1>

<?php
//affiche la liste des annonces auquelles l'aidant participe
//Chaque annonce est formée de tâches régulières ou non à effectuer
    echo("annonces : <br/>");
    //parcourt la liste des annonces
    foreach($profile["announces"] as $key => $id){
        $announce = $_SESSION["announces"][$id];
        echo "<b>nom : </b>".$announce["title"]."<br/><b>description :</b> ".$announce["description"]."<br/>";
        echo "fréquence : ".$announce["frequency"]." fois par semaine (";
        foreach($announce["days"] as $id => $day){
            echo $day." ";
        }
        echo ") pendant ".$announce["duration"]." heures";
        echo "<table>
                <tr>
                    <th> type de taĉhe  </th>
                    <th>commentaire  </th>
                    <th>régulier</th>
                </tr>";
        //parcourt la liste des tâches de l'annonce
        foreach($announce["tasks"] as $id => $taskID){    
            echo ("
            <tr>
                <td>".$_SESSION["task_types"][ $_SESSION["tasks"][$taskID]["task_type"] ]."</td>
                <td>".$_SESSION["tasks"][$taskID]["comment"]."</td>");
                if($_SESSION["tasks"][$taskID]["repeat"] == "yes"){
                    echo"<td>oui</td>";
                }
                else{
                    echo"<td>non</td>";
                }
                echo"</tr>";
    }
    echo "</table><br/><br/>";

   
}
?>
 <p><a href="index.php?zone=user&type=helped&page=new-help">Faire une nouvelle demande de tâche</a></p>