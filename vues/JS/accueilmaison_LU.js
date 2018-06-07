
function lightRoomChange(id) {

    var checkboxLight = document.getElementById("lightCheckbox");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

        }
    }
    xmlhttp.open("GET", "././controleurs/AJAX/SendFrame.php?command=modifyAllLight&id=" + id + "&value=" + checkboxLight.checked, true);
    xmlhttp.send();
}

function fanRoomChange(id) {

    var checkboxFan = document.getElementById("fanCheckbox");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {


        }
    }
    xmlhttp.open("GET", "././controleurs/AJAX/SendFrame.php?command=modifyAllFan&id=" + id + "&value=" + checkboxFan.checked, true);
    xmlhttp.send();
}

function shutterRoomChange(id) {

    var checkboxShutter = document.getElementById("shutterCheckbox");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

        }
    }
    xmlhttp.open("GET", "././controleurs/AJAX/SendFrame.php?command=modifyAllShutter&id=" + id + "&value=" + checkboxShutter.checked, true);
    xmlhttp.send();
}
