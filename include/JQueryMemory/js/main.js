//define variables
var container = "#card-container",
	cardOne = "#card_one",
	cardOneId,
	cardOneSource,
	cardTwoId,
	cardTwoSource,
	CardCreation,
	CardImage,
	flipCounter = 0,
	clickCounter = 0,
	timerContainer = "#js-timer",
	CardCounter = 0;
	CardArray = ["B.png","B.png","D.png","D.png","E.png","E.png","J.png","J.png","K.png","K.png","L.jpg","L.jpg","R.jpg","R.jpg","S.png","S.png","T.png","T.png","W.png","W.png",];

	//this.classList.remove("face-down");

//Load after document is loaded 
$(document).ready(function(){

	function shuffle(array) {
		var currentIndex = array.length, temporaryValue, randomIndex;
	  
		// While there remain elements to shuffle...
		while (0 !== currentIndex) {
	  
		  // Pick a remaining element...
		  randomIndex = Math.floor(Math.random() * currentIndex);
		  currentIndex -= 1;
	  
		  // And swap it with the current element.
		  temporaryValue = array[currentIndex];
		  array[currentIndex] = array[randomIndex];
		  array[randomIndex] = temporaryValue;
		}
	  
		return array;
	}
	shuffle(CardArray);
	$("#again-btn").fadeOut(100);

	console.log(CardArray);
	for (i = 0; i < CardArray.length; i++) {
		CardCreation = document.createElement('div');
		CardCreation.setAttribute("id", i);
		CardCreation.setAttribute("class", "card-design face-down");
		CardImage = document.createElement("img");
		CardImage.setAttribute("src", "images/" + CardArray[i]);
		document.getElementById("card-container").appendChild(CardCreation);
		document.getElementById(i).appendChild(CardImage);
	  }

	$("#reset-btn").on("click", function(){
		setTimeout(function(){
			$(container).find("div").fadeIn();
		}, 750);

		setTimeout(function(){
			$(container).find("img").fadeOut();
			$(container).find("img").fadeOut();
		}, 250);
		$('#js-timer').timer('pause');
		$('#js-timer').timer('reset');
		$('#js-timer').timer('pause');
		flipCounter = 0;
		clickCounter = 0;
		$("#Sets-label").text(flipCounter);
		$("#clicks-label").text(clickCounter);
	})

	$(container + " div").on("click", function(){
		$(timerContainer).timer({
			format : "%H:%M:%S"
		});
		
		if(cardOneId == undefined)
		{
			$(this).find("img").fadeIn(1000);
			cardOneId = $(this).attr("id");
			cardOneSource = $(this).find("img").attr("src");
			clickCounter++;
			$("#clicks-label").text(clickCounter);
		}
		else if(cardOneId != undefined && cardTwoId == undefined && cardOneId != cardTwoId)
		{
			$(this).find("img").fadeIn(1000);
			cardTwoId = $(this).attr("id");
			cardTwoSource = $(this).find("img").attr("src");
			clickCounter++;
			$("#clicks-label").text(clickCounter);
			setTimeout(function(){
				CompareCards();
			}, 750);
		}
	})

	function CompareCards() {
		if(cardOneSource == cardTwoSource)
		{
			flipCounter++;
			$("#Sets-label").text(flipCounter);
			if(flipCounter == 10)
			{	$("#js-timer").timer('pause');
				setTimeout(function(){
					$(container).find("div").fadeIn();
				}, 750);
				alert("You finished in " + $().timer({
					format : "%H:%M:%S"
				}) + " with " + clickCounter + " clicks.");
				$("#again-btn").fadeIn(100);
			}
			ClearVariables();
		}
		else
		{
			$("#" + cardOneId).find("img").fadeOut();
			$("#" + cardTwoId).find("img").fadeOut();
			ClearVariables();
		}
	  }

	$("#again-btn").on("click", function(){
		flipCounter = 0;
		clickCounter = 0;
		$("#Sets-label").text(flipCounter);
		$("#clicks-label").text(clickCounter);
		ClearVariables();
		$("#again-btn").fadeOut(100);
		$(container).find("img").fadeOut();
		$(container).find("img").fadeOut();
	})

	function ClearVariables()
	{
		cardOneId = undefined;
		cardOneSource = undefined;
		cardTwoId = undefined;
		cardTwoSource = undefined;
	}
});