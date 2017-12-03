liste les annonces d'aide postée sur le site par l'utilisateur. propose d'en rajouter ou d'en modifier.

<p> Liste de vos annonces </p>
<a class='text-menu'>-I need my tomato!</a><br/>
<a class='text-menu'>-Where the hell is my toothbrush</a>;

<?php
    echo("<table>
            <tr>
                <td> Titre  </td><td>description  </td><td>date  </td>");
    foreach($profile["announces"] as $key => $id){
        $announce = $_SESSION["announces"][$id];
        echo ("
            <tr>
                <td>".$announce["title"]."</td>
                <td>".$announce["description"]."</td>
                <td>".$announce["date"]."</td>
            </tr>");
    }
    echo("</table>");
?>