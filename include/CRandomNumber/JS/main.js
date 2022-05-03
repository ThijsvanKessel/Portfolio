var extraButtons = document.getElementsByClassName("extra-button");
var settingsInputs = document.getElementsByClassName("settingsInputs");
var gameInputs = document.getElementsByClassName("gameInputs");
var greenBlock = document.getElementById("greenBlock");
var redBlock = document.getElementById("redBlock");
var playButton = document.getElementById("Play-button");
var minValue = 0;
var maxValue = 0;
var attemptsVar = 0;
var randomNumber = 0;

function bodyLoadFunction(){
    greenBlock.style.visibility = 'hidden';
    redBlock.style.visibility = 'hidden';
    disableExtraButtons();
    disableSettings();
    disableGame();
}


function buttonPress(clickedButton){
    if(clickedButton.value == "Play")
    {
        playButton.setAttribute('disabled', 'disabled');
        // codeDivision.innerHTML += "button pressed";
        enableSettings();
    }

    else if(clickedButton.value == "Restart")
    {
        enableSettings();
        disableGame();
    }

    else if(clickedButton.value == "Extra")
    {
        enableExtraButtons();
    }

    else if(clickedButton.value == "Exit")
    {
        disableExtraButtons();
    }

    else if(clickedButton.value == "Manual")
    {
        alert("Put in a minimum and maximum value, select an amount of attempts and press the generate button. The guess and press check and if wrong guess again with the feedback you got");
    }

    else if(clickedButton.value == "About")
    {
        alert("C# Mystery Number made by : Thijs van Kessel");
    }

    else if(clickedButton.value == "Locate")
    {
        alert("Portfolio website");
    }
}

function generateButtonFunction(){
    disableSettings();
    enableGame();
    minValue = document.getElementById("");
}

function disableExtraButtons(){
	for(i=0; i < extraButtons.length; i++) {
		extraButtons[i].setAttribute('disabled', 'disabled');
	}	
}

function enableExtraButtons(){
    for(i=0; i < extraButtons.length; i++) {
		extraButtons[i].removeAttribute('disabled');
    }
}

function disableSettings(){
    for(i=0; i < settingsInputs.length; i++) {
		settingsInputs[i].setAttribute('disabled', 'disabled');
	}	
}

function enableSettings(){
    for(i=0; i < settingsInputs.length; i++) {
		settingsInputs[i].removeAttribute('disabled');
    }
}

function disableGame(){
    for(i=0; i < gameInputs.length; i++) {
		gameInputs[i].setAttribute('disabled', 'disabled');
	}	
}

function enableGame(){
    for(i=0; i < gameInputs.length; i++) {
		gameInputs[i].removeAttribute('disabled');
    }
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

function clearButton(){
    codeDivision.innerHTML = "";
}

function cheatFunction(){
    alert('code = 232');
    document.getElementById("CheatCeckbox").checked = false;
}