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



        <p class="question" onclick="OnOff_1();">


            Question 1 : Comment s'inscrire ? </br>


        </p>

        <p class="réponse">

            <span id="question_1">

           Pour vous inscire, cliquez sur le bouton "S'inscrire" sur la page principale.
            </br>
            Vous aurez à renseigner plusieurs champs, comme votre nom, votre prénom, votre adresse mail, votre téléphone, votre adresse de facturation ainsi que votre mot de passe.</br>
            Enfin, en acceptant les Condition Générales d'Utilisation, votre compte client sera créé.</br>


            </span>

        </p>

        <p class="question" onclick="OnOff_2();">


            Question 2 : Comment modifier mes informations personnelles ?</br>

        </p>

        <p class="réponse">

             <span id="question_2">


            Dans l'onglet Mon Profil, il vous est possible de modifier vos informations personnelles mais aussi de changer votre mot de passe.</br>
             </span>

        </p>



        <p class="question" onclick="OnOff_3();">

            Question 3 : Comment puis-je ajouter une maison dont je suis propriétaire ?  </br>

        </p>

        <p class="réponse">

            <span id="question_3">

           Après avoir créé votre compte, rendez-vous dans l'onglet Ma Maison. Cliquez sur le bouton "Ajouter une maison".
            </br>
            Sélectionnez que vous en êtes le propriétaire.</br>
            Vous devrez renseigner plusieurs informations comme son nom, son adresse ou encore la superficie et le nombre d'habitants.</br>

            </span>
        </p>


        <p class="question" onclick="OnOff_4();">
            Question 4 : Comment puis-je ajouter une maison dont je suis locataire ?  </br>
        </p>

        <p class="réponse" id="réponse">
             <span id="question_4">

            Après avoir créé votre compte, rendez-vous dans l'onglet Ma Maison. Cliquez sur le bouton "Ajouter une maison".</br>
            Sélectionnez que vous en êtes le locataire.</br>
            Vous devrez renseigner le code qui vous a été transmis par votre propriétaire.</br>
             </span>
        </p>

        <p class="question" onclick="OnOff_5();">
            Question 5 : Comment puis-je souscrire à un abonnement ?  </br>
        </p>

        <p class="réponse">
             <span id="question_5">

            Après avoir créé votre compte, rendez-vous dans l'onglet Mon abonnement</br>
            Choisissez l'abonnement auquel vous souhaitez souscrire.</br>
            Une facture ainsi qu'une autorisation de débit automatique mensuel vous seront envoyés à votre adresse de facturation.</br>
             </span>
        </p>
        <p class="question" onclick="OnOff_6();">
            Question 6 : Comment puis-je ajouter une pièce dans une maison ?  </br>
        </p>

        <p class="réponse">
             <span id="question_6">

            Rendez-vous dans l'onglet Ma Maison. Cliquez sur la maison dans laquelle vous voulez ajouter une pièce.</br>
            Cliquez sur le bouton Ajouter une pièce.</br>
            Vous devrez renseigner le type de pièce ainsi que son nom.</br>
             </span>
        </p>
        <p class="question" onclick="OnOff_7();">
            Question 7 : Comment ajouter un capteur dans une pièce ?  </br>
        </p>

        <p class="réponse">

             <span id="question_7">

            Rendez-vous dans l'onglet Ma maison, sélectionnez votre maison puis la pièce dans laquelle vous voulez ajouter le capteur.</br>
            Choisissez le capteur que vous souhaitez ajouter.</br>
            Une facture ainsi qu'une demande de rendez-vous vous seront envoyés à votre adresse de facturation.</br>
            A l'issue du rendez-vous programmé, un de nos techniciens viendra vous installer le (ou les) capteur(s). </br>
             </span>
        </p>
        <p class="question" onclick="OnOff_8();">
            Question 8 : Comment supprimer une pièce ?  </br>
        </p>

        <p class="réponse">
             <span id="question_8">

            Rendez-vous dans l'onglet Ma maison, sélectionnez votre maison puis la catégorie de pièce dans laquelle se trouve la pièce à supprimer.</br>
            Cliquez sur le bouton Supprimer une pièce. Sélectionner la pièce voulue et validez</br>
             </span>
        </p>
        <p class="question" onclick="OnOff_9();">
            Question 9 : Qui contacter en cas de problème ?  </br>
        </p>

        <p class="réponse">
             <span id="question_9">

            Rendez-vous dans l'onglet Assistance : vous y trouverez tous les moyens de nous joindre.</br>
            Vous pouvez également cliquer sur l'icone Forum situé en dessous du bouton Ma Maison. Sur ce Forum, vous pourrez poster un message. Les internautes ou un administrateur vous répondrons.</br>
             </span>
        </p>


    </section>

<?php
require ('vues/footer.php');
