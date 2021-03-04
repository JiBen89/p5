class Slide {
    constructor (text, position, source){
        this.text = text;
        this.position = position;
        this.source = source;
    }}


class Slider {
    constructor (tabSlide){
        this.tabSlide = tabSlide;
        this.position = 0;
        this.nb = document.getElementById("nb"); //numéro indiquant la var position
        this.textSlide = document.getElementById("textSlide");// texte lié a une diapo 
        this.slider = document.getElementById("slider"); // div contenant le text et les images
        this.timeRate = 5000; // temps du timer en milisec
        this.imgSlide = document.getElementById("imgSlide");
        this.nbDiapos = tabSlide.length;
        this.imgSlide.src = this.tabSlide[this.position].source;
        this.textSlide.textContent = this.tabSlide[this.position].text;
    }
 defilerAvant() {
    this.position++;
    if (this.position >= this.nbDiapos) {
        this.position = 0;
    }
this.imgSlide.src = this.tabSlide[this.position].source;
this.textSlide.textContent = this.tabSlide[this.position].text;
} //postion +

 defilerArriere() {
    this.position--;
    if (this.position === -1) {
        this.position = this.nbDiapos - 1;
    }
this.imgSlide.src = this.tabSlide[this.position].source;
this.textSlide.textContent = this.tabSlide[this.position].text;
} // position -    
}; 

var slide1 = new Slide("voici le premier slide", 1, "../images/diapo1.jpg");
var slide2 = new Slide("voici le deuxième slide", 2, "../images/diapo2.jpg");
var slide3 = new Slide("voici le troisième slide", 3, "../images/diapo3.jpg");
var slide4 = new Slide("slide 4 et ouais! surpris ?", 4,"../images/diapo4.jpg");
var getTab = [slide1, slide2, slide3, slide4]; // ajouter automatiquement les images dans le diapo?

let mondiapo = new Slider(getTab);

document.addEventListener("keydown", function (e) { //touche du clavier pour ajouter ou soustraire 1 a la valeur position 
    if (e.keyCode === 37) {
        mondiapo.defilerArriere();
    }
        else if (e.keyCode === 39) {
        mondiapo.defilerAvant();
    }
}); // touche du clavier pour position - ou +
btnAvant.addEventListener('click', ()=>{mondiapo.defilerAvant()});
btnArriere.addEventListener('click', ()=>{mondiapo.defilerArriere()});

function play() {
    clearInterval(mondiapo.timer);
    mondiapo.timer = setInterval(mondiapo.defilerAvant, mondiapo.timeRate); 
    console.log(mondiapo.timer);
    } // onclick  >> play 

function pause() {
    clearInterval(mondiapo.timer);
    console.log(mondiapo.timer);
    }// onclick  >> pause 

mondiapo.timer = setInterval(mondiapo.defilerAvant, mondiapo.timeRate);