    <div >
        <div class="s-title-group  " style="padding-top :80px; padding-bottom : 80px; color : rgb(255, 111, 34); font-size: 36px; line-height:43.2px;text-align:center;">
            <div class="s-title ">
                <div class="s-component s-text">
                    <h2 class="">
                        <div class="s-component-content needsclick recursive s-font-title"
                            style="outline: 0px;"   tabindex="0"   role="textbox"
                            aria-label="false">
                            <p>Déclarez une nouvelle tâche à votre aidant</p>
                        </div>
                    </h2>
                </div>
            </div>        
        </div>
    </div>
    <div style="text-align: center; font-family: lato;">
        <form  style="width : 100%; margin : auto;" action="./index.php?zone=user&type=helped&page=manage-operations&addTask=true" method="post">
            <div style="width : 100%; padding : 5px; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;"> Description : </div>
            <input type="text" name="comment"style="border-color: 
            black; border-width :
                1px; border-style :solid; border-radius : 3px; width : 30%; 
                padding : 5px; box-shadow : rgb(69, 85, 108) 1px 1px 0px 0px; margin: 4px 0px 4px 0px; line-height: 21px; font-size :16px; height : 50px;"><br/><br/><br/>
            <div style="width : 100%; padding : 5px; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;"> Type : </div>
            <select style="width : 400px; padding: 5px 0px 5px 0px; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;" name="type">
            <?php
                foreach($_SESSION["task_types"] as $key => $type){
                    echo "<option value=$key>$type</option>";
                }
            ?>
            </select><br/><br/><br/>
            <div style="width : 100%; padding : 5px; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;"> Fréquence : </div>

            <select style="width : 400px; padding: 5px 0px 5px 0px; margin: 4px 0px 4px 0px; line-height: 21px; font-size :20px; text-align : center;" name="repeat">
                <option value="0">seulement à la prochaine visite</option>
                <option value="1">à chaque visite</option>
                <option value="2">toutes les 2 visites</option>
            </select><br/><br/><br/>
            <?php
            echo '<input type="hidden" name="announceID" value='.$_GET["announceID"].'>';
            ?>
            <input type="submit" value="faire ma demande">
        </form>
    </div>