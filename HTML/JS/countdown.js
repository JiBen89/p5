class CountDown {
    constructor(min, sec) {
        this.min = min;
        this.sec = sec;
        this.display = document.getElementById("CD");
    }
    count() {
        this.sec--;
        sessionStorage.setItem('stkSec', (this.sec));
        sessionStorage.setItem('stkMin', (this.min));
        if (this.sec < 0) {
            this.sec = 59;
            this.min--;
            sessionStorage.setItem('stkMin', (this.min));
            sessionStorage.setItem('stkSec', (this.sec));
        }
        if (this.min < 0) {
            this.display.innerHTML = 'le temps est écoulé, faites une autre réservation.';
            clearInterval(this.timer);
        }
        else {
            this.display.innerHTML = "il vous restes " + this.min + " : " + this.sec;
        }
    }
    reset(min, sec) {
        this.min = min;
        this.sec = sec;
    }
};
