
function displayModalOfButtonPressed(id){

    var modal = document.getElementById('myModal');


    var inputCardNumber = "<input type='text' name='cardNumber" + id + "' placeholder='Card Number' required />";
    var inputObjectNumber = "<input type='text' name='objectNumber" + id + "'  placeholder='Object Number' required />";
    var inputButton = "<button class='valider' type='submit' name='submit'> Valider </button>";


    var Form = "<div class='modal-content'>" +
        "<form class='formulairemodifierCardAndObjectNumber' method='post' action='index.php?cible=verifeffectorform&ideffector=" + id + "'>" +
        "<div class='elementsformulairemonprofil'>"
        + inputCardNumber + inputObjectNumber + inputButton +
        "</div>" +
        "</form>" +
        "</div>";


    document.getElementById('myModal').innerHTML = Form;


    modal.style.display = "block";

// When the user clicks on <span> (x), close the modal


// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
}

