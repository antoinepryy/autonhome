var slider = document.getElementById('slider');
var sectionOne = document.getElementById('sectionOne');
var sectionTwo = document.getElementById('sectionTwo');


function check(){
    if (slider.checked){
        sectionOne.style.display = 'none';
        sectionTwo.style.display = 'block';

    }
    else{
        sectionOne.style.display = 'block';
        sectionTwo.style.display = 'none' ;
    }
}
