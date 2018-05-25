
var modal = document.getElementById('modalCreateRoom');


var btn = document.getElementById("myBtn");
var btnSecret = document.getElementById("dispSecret");
var secretCode = document.getElementById("secretCode");


var span = document.getElementsByClassName("close")[0];

if(secretCode != null){
    secretCode.style.display = "none";

    btnSecret.onclick = function (){
        if(secretCode.style.display == "none"){
            secretCode.style.display = "block";
            btnSecret.innerText = "Cacher le code";
        }
        else{
            secretCode.style.display = "none";
            btnSecret.innerText = "Afficher le code";
        }

    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };


}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

span.onclick = function() {
    modal.style.display = "none";
};



btn.onclick = function() {
    modal.style.display = "block";
};


