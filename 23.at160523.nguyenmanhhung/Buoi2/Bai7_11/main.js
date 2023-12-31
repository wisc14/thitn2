var Jack = new Array(4);
var curPosition = 0;
var jumping;
var direction = "up";

Jack[0] = new Image();
Jack[0].src = "./assets/img/0.png";
Jack[1] = new Image();
Jack[1].src = "./assets/img/1.png";
Jack[2] = new Image();
Jack[2].src = "./assets/img/2.png";
Jack[3] = new Image();
Jack[3].src = "./assets/img/3.png";

function Jump() {
    if (direction == "up") {
        if (curPosition == 3) {
            --curPosition;
            direction = "down";
        } else {
            ++curPosition;
        }
    } else {
        if (curPosition == 0) {
            ++curPosition;
            direction = "up";
        } else {
            --curPosition;
        }
    }
    document.Jack.src = Jack[curPosition].src;
}

function startJumping() {
    if (jumping) {
        clearInterval(jumping);
    }
    jumping = setInterval("Jump()",200);
}