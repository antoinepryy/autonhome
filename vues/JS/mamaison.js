

function postActionTOR(id){

    var checkbox = document.getElementById(id);
    console.log(id + checkbox.checked);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('effector-'+id).innerHTML = this.responseText;

        }
    };
    xmlhttp.open("GET", "././controleurs/AJAX/SendFrame.php?id=" + id + "&value=" + checkbox.checked, true);
    xmlhttp.send();

}