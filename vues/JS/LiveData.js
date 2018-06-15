

function refreshFrame(){


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           console.log('done');

        }
    };
    xmlhttp.open("GET", "././controleurs/AJAX/ReceiveFrame.php", true);
    xmlhttp.send();
}

window.setInterval(function(){
    refreshFrame();
}, 5000);

