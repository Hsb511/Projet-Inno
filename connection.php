<?php
//réinitialisation de la démo
if (isset($_GET["restartDemo"]) && $_GET["restartDemo"]){
    $_SESSION = array();
    fillBaseBD();
}

//inscription d'un nouveau compte
if (isset($_GET["event"]) && $_GET["event"] == "new-account"){
    print_r($_POST);
    //création des 2 nouveaux profils
    //profil de la personne agée
    $id = count($_SESSION["profiles"]);
    $_SESSION["profiles"][$id] = array( "firstName" => $_POST["firstNameHelped"], 
                                        "lastName" => $_POST["lastNameHelped"], 
                                        "street" => $_POST["street"],
                                        "city" => $_POST["city"], 
                                        "birthdate" => $_POST["birthdateHelped"], 
                                        "type" => "helped", 
                                        "helps" => array(), 
                                        "announces" => array()); 


    //creation de l'annonce


    
    //profil de la personne qui inscrit la personne agée
    $id = count($_SESSION["profiles"]);
    $_SESSION["profiles"][$id] = array( "firstName" => $_POST["firstName"], 
                                        "lastName" => $_POST["lastName"], 
                                        "street" => "",
                                        "city" => "", 
                                        "birthdate" => $_POST["birthdate"], 
                                        "type" => "helped", 
                                        "helps" => array(), 
                                        "announces" => array());

    //création du compte de la personne qui inscrit (famille en général)
    $_SESSION["users"][$_POST["username"]]["profileID"] = $id;
}
?>

    <div >
        <div class="s-title-group  " style="padding-top :80px; padding-bottom : 80px; color : rgb(255, 111, 34); font-size: 36px; line-height:43.2px;text-align:center;">
            <div class="s-title ">
                <div class="s-component s-text">
                    <h2 class="">
                        <div class="s-component-content needsclick recursive s-font-title"
                            style="outline: 0px;"   tabindex="0"   role="textbox"
                            aria-label="false">
                            <p> Connectez vous à votre espace perso </p>
                        </div>
                    </h2>
                </div>
            </div>        
        </div>
    </div>
        
            <!-- Contact social -->                                      
    <div style="text-align: center; font-family: lato;">
        <form action="index.php" method="post" style="width : 265px; margin : auto;">
            <div style="width : 265px; padding : 5px; max-width : calc(100% - 12px); margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;"> Nom d'utilisateur : </div>
            <input type="text" name="username" style="border-color: 
            black; background-color :rgba(0, 0, 0, 0.1); border-width :
                1px; border-style :solid; border-radius : 3px; width : 265px; 
                padding : 5px; box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; max-width : calc(100% - 12px); margin: 4px 0px 4px 0px; line-height: 21px; font-size :16px;"> <br/    >
            <div style="width : 265px; padding : 5px; max-width : calc(100% - 12px); margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;"> Mot de passe : </div>
            <input type="password" name="password" style="border-color: 
            black; background-color :rgba(0, 0, 0, 0.1); border-width :
                1px; border-style :solid; border-radius : 3px; width : 265px; 
                padding : 5px; box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; max-width : calc(100% - 12px); margin: 4px 0px 4px 0px; line-height: 21px; font-size :16px;"> <br/>
            
            <input type="submit" value="Entrer dans mon espace" style="border-color: 
            black; background-color :rgba(0, 0, 0, 0.1); border-width :
                1px; border-style :solid; border-radius : 3px; width : auto; 
                padding : 5px; box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; margin: 50px 0px 4px 0px; line-height: 21px; font-size :16px;">

        </form>
    </div>
</li>
<li>
    <div >
        <div class="s-title-group  " style="padding-top :80px; padding-bottom : 80px; color : rgb(255, 111, 34); font-size: 36px; line-height:43.2px; text-align:center;">
            <div class="s-title ">
                <div class="s-component s-text">
                    <h2 class="">
                        <div class="s-component-content needsclick recursive s-font-title"
                                style="outline: 0px;"   tabindex="0"   role="textbox"
                                aria-label="false">
                                <p> Comptes de démo </p>
                        </div>
                    </h2>
                </div>
            </div>        
        </div>
    </div>
    <div style="margin : auto; width: 400px; text-align: center; font-size: 20px; color: rgb(51 ,51, 51); font-weight: 400;">
        <p style= "line-height: 29px;">Paulette "PauletteDubois" Dubois <br/></p>
        <p style= "line-height: 29px;">Véronique "Vero45" Duval <br/></p>
        <p style= "line-height: 29px;">Maxime "max38" Turtille <br/></p>
        <!-- pour réinitialiser la démonstration-->
        <form action="index.php" method="get">
            <input type="hidden" name="restartDemo" value="true">
            <input type="hidden" name="page" value="connection">
            <input type="submit" value="Redémarrer la démo" style="border-color: 
                black; background-color :rgba(0, 0, 0, 0.1); border-width :
                    1px; border-style :solid; border-radius : 3px; width : auto; 
                    padding : 5px; box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; margin: 50px 0px 4px 0px; line-height: 21px; font-size :16px;">
            
        </form>
    </div>


                    
                
    
    



<?php
    /*structure du $_SESSION pour simuler la DB :
    username : string - username de la personne actuellement connectée
    profiles : array int (id) => (array lastName, firstName, birthdate, address, helpedBy => array profileID)
    accounts : array pseudo => (profileID, helps => array(profileIdOfHelped, task), manage=> array(profilId)). tasks is an enumeration of defined tasks
    */
    function fillBaseBD(){
        //importation de la DB
        include "user/virtualisedDB/people.php";
        include "user/virtualisedDB/announces.php";

        //copie dans les variables de session
        $_SESSION["profiles"] = $profiles;
        $_SESSION["users"] = $users;
        $_SESSION["announces"] = $announces;
        $_SESSION["tasks"] = $tasks;
        $_SESSION["task_types"] = $task_types;
    }

?>