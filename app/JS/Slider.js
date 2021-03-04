class Slider {
    constructor(tabSlide) {
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