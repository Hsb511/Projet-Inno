<?php
if (isset($_GET["restartDemo"]) && $_GET["restartDemo"]){
    $_SESSION = array();
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
        //construction de la DB
        $profiles = array(
            "0" => array('firstName' => 'Paulette', 'lastName' => 'Dubois', 'birthdate'=> '26/03/1935', 'address' => "3 rue du vieux Chemin, 39200 Saint-Claude", "helpedBy" => array("0"=>1)), 
            "1" => array('firstName' => 'Véronique', 'lastName' => 'Duval', 'birthdate'=> '26/03/1971', 'address' => "39 rue du général de Gaulle, 75000 Paris", "helpedBy" => array()), 
            "2" => array('firstName' => 'Maxime', 'lastName' => 'Turtille', 'birthdate'=> '26/03/1995', 'address' => "10 rue du vieux Chemin, 39200 Saint-Claude", "helpedBy" => array())
        );
        $accounts = array(
            "PauletteDubois" => array("profilID" => "0", "helps"=>array(), 'manage' => array()),
            "Vero45" => array("profilID" => "1", "helps"=>array(), 'manage' => array("0")),
            "max38" => array("profilID" => "2", "helps"=>array("0" => "courses"), 'manage' => array())
        );
    }

?>