var container = "body",
    CardCounterVar = 0,
    OriginalCheckboxState,
    AditionalCheckboxState,
    SpicyCheckboxState,
    TotalArray = [],
	OriginalArray = ["Empty a glass of cold water over your head - 1","Let someone kiss you on the cheek with lipstick, leave it for the whole night - 1","Pick three people from the group and say who you'd snog, marry, and avoid - 1","Show the group your best dance move - 1","Show your most embarrasing photo on your phone - 1","Sit on the lap of the person on your right - 1","Smell another player's armpit - 1","Text a random number from your contact list 'you up' - 1","Act like an animal of the groups choosing - 2","Attempt to do the worm - 2","Call a Chinese restaurant and ask if they have sushi - 2","Call the pizza place and ask to order soup - 2","Call your dad and tell him you are going to elope in Vegas - 2","Do a free style rap for the next 30 seconds - 2","Drink water from someone's belly button - 2","Facetime someone and act like they called you - 2","Film a TikTok dance and post it - 2","Give a foot massage to someone in the group - 2","Knock on you neighbour's door and run away - 2","Let someone post a Facebook status on your behalf - 2","Let someone put lipstick on your lips - 2","Let the person on your left go trough your phone for 30 seconds - 2","Peel a banana using only your feet and toes - 2","Pick one person you would most like to be sexual with (same sex) - 2","Point to the person who you think is going to be the least successful - 2","Point to the person you think is the biggest bitch - 2","Post an embarrasing selfie on your snapchat / instagram story - 2","Post on social media saying you are going to leave your job / drop out to become a professional clown - 2","Post on your facebook 'pm me to get freaky tonight' - 2","Put your clothing on backwards for the rest of the evening - 2","Scroll through your contacts until someone says stop. You either have to call or delete them - 2","Sing a Beyonce song of your choice while twerking - 2","Tell everyone an embarrassing fact about yourself - 2","Tell the person on your left what you love about them and the person on your right what you hate about them - 2","Call your ex and tell them you want to get back together - 3","Drink a 'dirty pint' made by everyone in the group - 3","Eat a raw egg - 3","Give your phone to the person on your right and let them text a contact of their choice - 3","Let someone write their name on your forehead with permanent marker - 3","Phone the last person on your contact list and tell them you have a secret about them - 3"],
    OriginalSpicyArray = ["Get naked, go outside and run down the street - 3","Give the person to your right a lap dance - 3","Kiss the person next to you - 2","Kiss the person next to you - 2","Lick someone's foot - 1","Play the rest of the game in nothing but boxers/ pants and a bra on - 3","Point to the person in the room you want to have sex with the most - 1","Remove four items of clothing - 3","Show your orgasm face - 1","Take one item of clothing off - 2","Whisper something dirty to the person on your right - 1"],
    SpicyArray = ["Spicy"],
    AditionalArray = ["Aditional"];

$( document ).ready(function() {
    $(container).find(".SpeelKaart").fadeOut(0);
});

$(".PlayButton").on("click", function(){
    fadeOutItems();
    checkboxCheck();
})

function CardCounter(){
    CardCounterVar = TotalArray.length;
    console.log(CardCounterVar);
    document.getElementById("CardCounter").innerHTML = "<h2> Cards Remaining : " + CardCounterVar + "</h2>";
}

$(".nextButton").on("click", function(){
    TotalArray.shift();
    ShowCardText();
})

function ShowCardText(){
    document.getElementById("SpeelKaartText").innerHTML = "<h2>"+ TotalArray[0] +"</h2>";
    CardCounter();
}

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

function checkboxCheck(){
    OriginalCheckboxState = document.getElementById("OriginalCheckbox");
    AditionalCheckboxState = document.getElementById("AditionalCheckbox");
    SpicyCheckboxState = document.getElementById("SpicyCheckbox");

    if (OriginalCheckboxState.checked == true)
    {TotalArray = TotalArray.concat(OriginalArray);}
    if (AditionalCheckboxState.checked == true)
    {TotalArray = TotalArray.concat(AditionalArray);}
    if (SpicyCheckboxState.checked == true)
    {TotalArray = TotalArray.concat(SpicyArray);}
    if (OriginalCheckboxState.checked == true && SpicyCheckboxState.checked == true)
    {TotalArray = TotalArray.concat(OriginalSpicyArray);}
    console.log(TotalArray);
    shuffle(TotalArray);
    console.log(TotalArray);
    $(container).find(".SpeelKaart").fadeIn(0);
    ShowCardText();
}

function fadeOutItems(){
    $(container).find(".OriginalCards").fadeOut(0);
    $(container).find(".SpicyCards").fadeOut(0);
    $(container).find(".AditionalCards").fadeOut(0);
    $(container).find(".PlayButton").fadeOut(0);
}