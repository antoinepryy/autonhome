<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 30/04/2018
 * Time: 15:33
 */

require ('vues/header_'.$status.'.php');

?>

    <section class="FAQ">

        <h1> FOIRE AUX QUESTIONS </h1>



        <p class="question">

            Question 1 : Comment s'inscrire ? </br>

        </p>

        <p class="réponse">
           Pour vous inscire, cliquez sur le bouton "S'inscrire" sur la page principale.
            </br>
            Vous aurez à renseigner plusieurs champs, comme votre nom, votre prénom, votre adresse mail, votre téléphone, votre adresse de facturation ainsi que votre mot de passe.</br>
            Enfin, en acceptant les Condition Générales d'Utilisation, votre compte client sera créé.</br>
        </p>

        <p class="question">

            Question 2 : Comment modifier mes informations personnelles ?</br>

        </p>

        <p class="réponse">

            Dans l'onglet Mon Profil, il vous est possible de modifier vos informations personnelles mais aussi de changer votre mot de passe.</br>
        </p>

        <p class="question">

            Question 3 : Comment puis-je ajouter une maison dont je suis propriétaire ?  </br>

        </p>

        <p class="réponse">

           Après avoir créé votre compte, rendez-vous dans l'onglet Ma Maison. Cliquez sur le bouton "Ajouter une maison".
            </br>
            Sélectionnez que vous en êtes le propriétaire.</br>
            Vous devrez renseigner plusieurs informations comme son nom, son adresse ou encore la superficie et le nombre d'habitants.</br>
        </p>

        <p class="question">
            Question 4 : Comment puis-je ajouter une maison dont je suis locataire ?  </br>
        </p>

        <p class="réponse">

            Après avoir créé votre compte, rendez-vous dans l'onglet Ma Maison. Cliquez sur le bouton "Ajouter une maison".</br>
            Sélectionnez que vous en êtes le locataire.</br>
            Vous devrez renseigner le code qui vous a été transmis par votre propriétaire.</br>
        </p>



    </section>

<?php
require ('vues/footer.php');
