    <div >
        <?php
            //affichage des notifications
            $numberOfNotifications = count($_SESSION["users"][ $_SESSION["username"]]["notifications"]);
            if ($numberOfNotifications == 1){
                echo("<br/><br/>");
                echo("Vous avez ".$numberOfNotifications." nouvelle demande de tâche à réaliser. <a href='index.php?zone=user&type=helper&page=list-announces'>Voir mes annonces.</a>");
            }
            elseif ($numberOfNotifications > 1){
                echo("<br/><br/>");
                echo("Vous avez ".$numberOfNotifications." nouvelles demandes de tâches à réaliser. <a href='index.php?zone=user&type=helper&page=list-announces'>Voir mes annonces.</a>");
            }
        ?>
        
        <div class="s-title-group  " style="padding-top :80px; padding-bottom : 80px; color : rgb(255, 111, 34); font-size: 36px; line-height:43.2px;text-align:center;">
            <div class="s-title ">
                <div class="s-component s-text">
                    <h2 class="">
                        <div class="s-component-content needsclick recursive s-font-title"
                            style="outline: 0px;"   tabindex="0"   role="textbox"
                            aria-label="false">
                            <p> 
                                <?php
                                print_r($profiles);
                                    echo ($profile["firstName"]." ".$profile["lastName"]);
                                ?>
                            </p>
                        </div>
                    </h2>
                </div>
            </div>        
        </div>
    </div>
        
            <!-- Contact social -->                                      
    <div style="text-align: center; font-family: lato;">
        <div style="width : 265px; margin : auto;">
            <div style="width : 265px; padding : 5px; max-width : calc(100% - 12px); margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;">
                <p>Age</p>
                <?php
                    $birthdate=new DateTime($profile["birthdate"]);
                    $today = new DateTime("now");
                    $interval = date_diff($birthdate, $today, true); //true is for absolute
                    echo $interval->format('%y ans');
                ?>
            </div>
        </div>
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