function lightRoomChange(id) {
    console.log('ok');
    var checkbox = document.getElementById(id);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

        }
    }
    xmlhttp.open("GET", "././controleurs/AJAX/SendFrame.php?command=modifyAll&id=" + id + "&value=" + checkbox.checked, true);
    xmlhttp.send();
}