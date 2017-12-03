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
        echo "<table>
                <tr>
                    <th> type de taĉhe  </th>
                    <th>commentaire  </th>
                </tr>";
        //parcourt la liste des tâches de l'annonce
        foreach($announce["tasks"] as $id => $taskID){    
            echo ("
            <tr>
                <td>".$_SESSION["task_types"][$taskID]."</td>
                <td>".$_SESSION["tasks"][$taskID]["comment"]."</td>
            </tr>");
    }
    echo "</table><br/><br/>";

   
}
?>
 <p><a href="index.php?zone=user&type=helped&page=new-help">Faire une nouvelle demande d'aide</a></p>