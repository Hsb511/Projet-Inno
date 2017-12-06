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
    echo "</li><li>";
        echo "<div style='margin : auto; width: 1000px; text-align: left; font-size: 20px; color: rgb(51 ,51, 51); font-weight: 400;'>";
            $announce = $_SESSION["announces"][$id];
            echo "<div style='padding : 5px; width :100%; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;'> <b>".$announce['title']."</b> </div>";
            echo "<div style='padding: 20px 0px 20px 0px;'>";
            echo "<div style='padding : 5px; width :100%; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px;'> <b>Description :</b> ".$announce["description"]."</div>";
            $phase = "";
            foreach($announce["days"] as $id => $day){   
                if (count($announce["days"])-1 == $id){
                    $phase= $phase.$day;    
                }             
                else {
                    $phase= $phase.$day." "; 
                }           
            }
            echo "<div 
            style='padding : 5px; width :100%; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px;'> 
            <b>Fréquence :</b>  ".$announce["frequency"]." fois par semaine (".$phase.") pendant ".$announce["duration"]." heures</div>";
            echo "</div>";
            
            echo "<div style='padding : 5px; width :100%; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px;''><table style='width : 100%;' >
                    <tr style='color :rgb(255, 111, 34); padding: 15px;'>
                        <th align='center' style ='padding: 15px;'><b>Type de taĉhe </b> </th>
                        <th align='center' style ='padding: 15px;'><b>Commentaire</b></th>
                        <th align='center' style ='padding: 15px;'><b>Fréquence</b></th>
                    </tr>";
            //parcourt la liste des tâches de l'annonce
            foreach($announce["tasks"] as $id => $taskID){    
                echo ("
                <tr style ='padding: 15px;'>
                    <td align='center' style ='padding: 15px;'>".$_SESSION["task_types"][ $_SESSION["tasks"][$taskID]["task_type"] ]."</td>
                    <td align='center' style ='padding: 15px;'>".$_SESSION["tasks"][$taskID]["comment"]."</td>");
                    if($_SESSION["tasks"][$taskID]["repeat"] == 1){
                        echo"<td align='center' style ='padding: 15px;' >A chaque visite</td>";
                    }
                    elseif($_SESSION["tasks"][$taskID]["repeat"] == 2){
                        echo"<td align='center' style ='padding: 15px;'>Toutes les 2 visites</td>";
                    }
                    else{
                        echo"<td align='center' style ='padding: 15px;'>Seulement la prochaine visite</td>";
                    }
                    echo"</tr>";
            }
            echo "</table></div><br/><br/>";
        echo "</div>";
}
?>