// author: rico

// cheat 1: show $_SESSION

let checkCheat=0;

document.addEventListener('keydown', function (event) {
    if (event.ctrlKey && event.altKey && event.key == 'y' && checkCheat===0) {
        document.getElementById("cheat2").style.visibility = "visible"
        checkCheat=1;    
    } else if (event.ctrlKey && event.altKey && event.key == 'y' && checkCheat===1) {document.getElementById("cheat2").style.visibility = "hidden"; checkCheat=0;}
});

// countdown

let countdown = document.getElementById("timer");
countdown.innerHTML = 15;
let colorChange = 0;

let countdownInterval = setInterval(function() {
    
    countdown.innerHTML--

    if (countdown.innerHTML <=5) {
    colorChange+=50;
    countdown.style.color="rgb("+colorChange+",0,0";
    }

    if (countdown.innerHTML <=0) {

        clearInterval(countdownInterval);

        let questNum = document.getElementById("questionNumber").innerHTML;
        
        window.open("quiz.php?q"+questNum+"=0","_self");}
}   
    
    , 1000);$

// restart quiz

function restartQuiz(){
    window.open("quiz.php?n=n","_self");
}

// go back to previous question

function goBackQuestion(){
    window.open("quiz.php?b=b","_self");
}











