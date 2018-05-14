var slider = document.getElementById('slider');
var section = document.getElementById('varHeigth');
var sectionOne = document.getElementById('sectionOne');
var sectionTwo = document.getElementById('sectionTwo');


function check(){
    if (slider.checked){
        sectionOne.style.display = 'none';
        sectionTwo.style.display = 'block';
        section.className = "principal close"


    }
    else{
        sectionOne.style.display = 'block';
        sectionTwo.style.display = 'none' ;
        section.className = "principal open"
    }
}
