class CanvasObjet {

    constructor() { //Paramètres du canvas
        this.canvas = document.getElementById("canvas");
        this.ctx = this.canvas.getContext("2d");
        this.ctx.strokeStyle = '#000000';
        this.draw = false;
        this.drawTouch = false;
        this.mousePosition = {
            x: 0,
            y: 0
        };
        this.touchPosition = {
            x: 0,
            y: 0
        }
        this.lastPosition = this.mousePosition;
        this.lastPositionTouch = this.touchPosition;
        this.canvas.width = 300;
        this.canvas.height = 150;
        sessionStorage.setItem('canvasfull', this.draw);
    }
    // Renvoie les coordonnées de la souris 
    getMposition(mouseEvent) {
        if (this.draw) {
            var oRect = this.canvas.getBoundingClientRect();
            return {
                x: mouseEvent.clientX - oRect.left,
                y: mouseEvent.clientY - oRect.top
            };
        }
    }

    // Renvoie les coordonnées du pad 
    getTposition(touchEvent) {
        if (this.drawTouch) {
            var oRect = this.canvas.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - oRect.left,
                y: touchEvent.touches[0].clientY - oRect.top
            };
        }
    }

    // Dessin du canvas
    canvasResult() {
        if (this.draw) {
            this.ctx.beginPath();
            this.ctx.lineWidth = 3;
            this.ctx.moveTo(this.lastPosition.x, this.lastPosition.y);
            this.ctx.lineTo(this.mousePosition.x, this.mousePosition.y);
            this.ctx.stroke();
            this.lastPosition = this.mousePosition;
            sessionStorage.setItem('canvasfull', this.draw);
        }
        if (this.drawTouch) {
            this.ctx.beginPath();
            this.ctx.moveTo(this.lastPositionTouch.x, this.lastPositionTouch.y);
            this.ctx.lineTo(this.touchPosition.x, this.touchPosition.y);
            this.ctx.stroke();
            this.lastPositionTouch = this.touchPosition;
            sessionStorage.setItem('canvasfull', this.drawTouch);
        }
    };

    // Vide le dessin du canvas
    clearCanvas() {
        this.canvas.width = this.canvas.width;
    }
}









