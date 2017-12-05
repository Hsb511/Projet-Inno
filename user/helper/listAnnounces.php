<!--liste les annonces d'aide postée sur le site par l'utilisateur. propose d'en rajouter ou d'en modifier. -->
<div >
    <div class='s-title-group ' style='padding-top :80px; padding-bottom : 80px; color : rgb(255, 111, 34); font-size: 36px; line-height:43.2px;text-align:center;'>
        <div class='s-title '>
            <div class='s-component s-text'>
                <h2 class=''>
                    <div class='s-component-content needsclick recursive s-font-title'
                    style='outline: 0px;' tabindex='0' role='textbox'
                    aria-label='false'>
                        <p> Liste de vos annonces </p>
                    </div>
                </h2>
            </div>
        </div>        
    </div>
</div>
<?php
//affiche la liste des annonces auquelles l'aidant participe
//Chaque annonce est formée de tâches régulières ou non à effectuer
//parcourt la liste des annonces
foreach($profile["announces"] as $key => $id){
    $announce = $_SESSION["announces"][$id];

    echo("<b>nom :".$announce['title']."</b>");                         

    echo "description : ".$announce["description"]."<br/>";
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
    print_r(count($announce["tasks"]));
    //parcourt la liste des tâches de l'annonce
    foreach($announce["tasks"] as $id => $taskID){    
        echo ("
        <tr>
            <td>".$_SESSION["task_types"][ $_SESSION["tasks"][$taskID]["task_type"] ]."</td>
            <td>".$_SESSION["tasks"][$taskID]["comment"]."</td>");
            if($_SESSION["tasks"][$taskID]["repeat"] == 1){
                echo"<td>à chaque visite</td>";
            }
            elseif($_SESSION["tasks"][$taskID]["repeat"] == 2){
                echo"<td>toutes les 2 visites</td>";
            }
            else{
                echo"<td>seulement la prochaine visite</td>";
            }
            echo"</tr>";
}
echo "</table><br/><br/>";
}
?>