var codeDivision = document.getElementById("number-container");
var numberCounter = document.getElementById("numberCounter");
var numberButtons = document.getElementsByClassName('buttonNumber');
var greenBlock = document.getElementById("greenBlock1");
var redBlock = document.getElementById("redBlock1");
var intervalTimer = 0;
var ClickCounter = 0;
var codeOne = 2;
var codeTwo = 3;
var codeThree = 2;

function EmptyFunction()
{
    redBlock.style.visibility = 'hidden';
    redBlock2.style.visibility = 'hidden';
    greenBlock1.style.visibility = 'hidden';
    greenBlock2.style.visibility = 'hidden';
}

function getNumber(clickedButton){
    ClickCounter++;
    console.log(ClickCounter);

    if(clickedButton.value == "Reset")
    {
        numberCounter.innerHTML = "0";
        ClickCounter = 0;
        codeDivision.innerHTML += "<a id='greenText'>code input has been reset!</a><br><br>";
    }

    else if(ClickCounter == 1)
    {
        codeDivision.innerHTML += "<a id='blueText'> button pressed = " + clickedButton.value +"</a><br>";
        numberOne = clickedButton.value;
        numberCounter.innerHTML = "1";
    }

    else if(ClickCounter == 2)
    {
        codeDivision.innerHTML += "<a id='blueText'> button pressed = " + clickedButton.value +"</a><br>";
        numberTwo = clickedButton.value;
        numberCounter.innerHTML = "2";
    }

    else if(ClickCounter == 3)
    {
        codeDivision.innerHTML += "<a id='blueText'> button pressed = " + clickedButton.value +"</a><br>";
        numberThree = clickedButton.value;
        numberCounter.innerHTML = "3";
        disableButtons()
        

        if(numberOne == codeOne && numberTwo == codeTwo && numberThree == codeThree)
        {
            codeDivision.innerHTML += "<a id='greenText'>Solution is good!</a><br><br>";
            blinkgreen();
        }

        else
        {
            codeDivision.innerHTML += "<a id='RedText'>Solution is false!</a><br><br>";
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
    numberCounter.innerHTML = "0";
}

function blinkred(){
    redBlock2.style.visibility = 'visible';
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
            EmptyFunction();
        }

    }, 500);
    intervalTimer = 0;
}

function blinkgreen(){
    greenBlock2.style.visibility = 'visible';
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
            enableButtons();
            EmptyFunction();
        }

    }, 500);
    intervalTimer = 0;
}

function clearButton()
{
    codeDivision.innerHTML = "";
}

function cheatFunction()
{
    alert('code = 232');
    document.getElementById("CheatCeckbox").checked = false;
}