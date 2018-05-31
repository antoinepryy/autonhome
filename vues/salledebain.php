<?php
/**
 * Created by IntelliJ IDEA.
 * User: Utilisateur
 * Date: 06/05/2018
 * Time: 16:17
 */
require ('vues/header_'.$status.'.php');
?>
<div class="display-salledebain">
    <h1>
        Salle(s) de bain
    </h1>

    <ul class="salledebain-list">
        <?php foreach ($inCategory as $roomInCategory) { ?>
            <li>
                <h4> <?php echo ( $roomInCategory['name']);  ?> </h4>

                <form method="post" action="">

                    <p>Enclencher : <p/>

                    <div class="use-case">
                        <input type="checkbox" name="ventilateur" id="Ventilateur" /> <label for="lumieres"> Ventilateur </label>
                        <br />
                        <input type="checkbox" name="lumieres" id="Lumières" /> <label for="lumieres"> Lumière </label>
                        <br />
                    </div>
                    <br/>
                    <div class="use-case-volets">
                        <p> Etat des volets</p>
                        <input type="checkbox" name="voletsouverts" id="VoletsOuverts" /> <label for="voletsouverts">Ouverts</label>
                        <br />
                        <input type="checkbox" name="voletsfermes" id="VoletsFermes" /> <label for="voletsfermes">Fermés</label>
                        <br />
                    </div>
                    <div class="info">
                        <a href="<?php echo('index.php?cible=mamaison&id='.$_GET["id"].'&idroom='.$_GET['idroom'].'&roomchoice='.$roomInCategory['id']); ?>" >
                            Voir les informations
                        </a>
                    </div>
                </form>

            </li>
        <?php } ?>
    </ul>
    <?php
    if(count($inCategory)!= 0){
        echo('
            <section>
            <button id="myBtn">Supprimer une pièce</button>
            </section>'
        );
    }
    ?>
    <div class="delete-room">

        <div id="modalDeleteRoom" class="modal modalDeleteRoom">

            <div class="modal-content">
                <span class="close">&times;</span>
                <form method="post" action="index.php?cible=verifsuppression&id=<?php echo ( $_GET['id'] );?>">
                    <select name="choix">
                        <?php foreach ($inCategory as $roomInCategory) { ?>
                            <option value="<?php echo ( $roomInCategory['name']);  ?>">
                                <?php echo ( $roomInCategory['name']);  ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>



</div>

<?php

require ('vues/footer.php');
?>
