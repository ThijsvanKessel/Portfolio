var codeDivision = document.getElementById("number-container");
var textDisplay = document.getElementById("textDisplay");
var numberButtons = document.getElementsByClassName('buttonNumber');
var greenBlock = document.getElementById("greenBlock1");
var redBlock = document.getElementById("redBlock1");
var explosion = document.getElementById("explosion");
var correctAmountDisplay = document.getElementById("correct-attempts-number");
var wrongAmountDisplay = document.getElementById("wrong-attempts-number");
var correctCounter = 0;
var wrongCounter = 0;
var intervalTimer = 0;
var ClickCounter = 0;
var codeOne = 6;
var codeTwo = 6;
var codeThree = 6;

explosion.style.visibility = 'hidden';

function getNumber(clickedButton){
    ClickCounter++;
    console.log(ClickCounter);
    codeDivision.innerHTML += clickedButton.value;

    if(ClickCounter == 1)
    {
        numberOne = clickedButton.value;
    }

    else if(ClickCounter == 2)
    {
        numberTwo = clickedButton.value;
    }

    else if(ClickCounter == 3)
    {
        numberThree = clickedButton.value;
        disableButtons()
        

        if(numberOne == codeOne && numberTwo == codeTwo && numberThree == codeThree)
        {
            console.log("Cracked");
            textDisplay.innerHTML = "Correct";
            correctCounter++;
            correctAmountDisplay.innerHTML = correctCounter;
            blinkgreen();
        }

        else
        {
            console.log("Try again");
            textDisplay.innerHTML = "Wrong";
            wrongCounter++;
            wrongAmountDisplay.innerHTML = wrongCounter;
            explosion.style.visibility = 'visible';
            blinkred();
        }
    }

    else
    {
        alert("Error 404, File not found");
    }
}

function disableButtons() {

	//used to loop through all buttons and disable them with attribute disable
	//so that it isn't possible to click more than three times

	for(i=0; i < numberButtons.length; i++) {
		numberButtons[i].setAttribute('disabled', 'disabled');
	}
	
}

function enableButtons() {

	//used to loop through all buttons and enable them again, remove attribute disabled
	for(i=0; i < numberButtons.length; i++) {
		numberButtons[i].removeAttribute('disabled');
    }
    ClickCounter = 0;
    codeDivision.innerHTML = "";
    textDisplay.innerHTML = "";

}

function blinkred(){
    document.getElementById('wrongSound').play();
    var blink = setInterval(function() {
	
        //add +1 every time the setinterval function runs		
        intervalTimer++;

        //method to show div on and off
        if (redBlock.style.visibility == 'hidden') {
            redBlock.style.visibility = 'visible';
        }else {
            redBlock.style.visibility = 'hidden';
        }

        //check if the interval has runned ten times
        if(intervalTimer == 5) {

            //ClearInterval function stops the interval after 10 times
            clearInterval(blink);
            enableButtons();
            explosion.style.visibility = 'hidden';
        }

    }, 500);
    intervalTimer = 0;
}

function blinkgreen(){
    document.getElementById('correctsSound').play();
    var blink = setInterval(function() {
	
        //add +1 every time the setinterval function runs		
        intervalTimer++;

        //method to show div on and off
        if (greenBlock.style.visibility == 'hidden') {
            greenBlock.style.visibility = 'visible';
        }else {
            greenBlock.style.visibility = 'hidden';
        }

        //check if the interval has runned ten times
        if(intervalTimer == 5) {

            //ClearInterval function stops the interval after 10 times
            clearInterval(blink);
            animationOpen();
        }

    }, 500);
    intervalTimer = 0;
}

function animationOpen() {
    var elem = document.getElementById("vaultDoor");   
    var pos = 440;
    var id = setInterval(frame, 5);
    document.getElementById('doorSound').play();
    function frame() {
      if (pos == 1000) {
        clearInterval(id);
        animationClose();
      } else {
        pos++; 
        elem.style.left = pos + "px"; 
      }
    }
  }

  function animationClose() {
    var elem = document.getElementById("vaultDoor");   
    var pos = 1000;
    var id = setInterval(frame, 5);
    function frame() {
      if (pos == 440) {
        clearInterval(id);
        enableButtons();
      } else {
        pos--; 
        elem.style.left = pos + "px"; 
      }
    }
  }