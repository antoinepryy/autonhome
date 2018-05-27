var input = document.getElementById('findUser');
var output = document.getElementById('results');

function showUsers(){
    var text = input.value;


    if (text.length == 0) {
        output.innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                output.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "././controleurs/AJAX/InspectDatabase.php", true);
        xmlhttp.send();
    }
}