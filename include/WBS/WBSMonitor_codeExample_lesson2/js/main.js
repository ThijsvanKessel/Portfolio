var startTimer,
    getTime;

//Convert hh:mm:ss to seconds
function convertToSeconds(time) {
	//Split a string into an array of substrings
	var time_split = time.split(':');
    var seconds = parseInt(time_split[0]) * 3600 + parseInt(time_split[1]) * 60 + parseInt(time_split[2]);
   	return seconds;
}

$(document).ready(function(){

    //1 Crate an on click event (.js-start-timer)
	//2 Start timer and change the notation hh:mm:ss
	//3 (startTimer) Start the timer in the correct row use: this, closest and find
	//4 (getTime) get the value of the selected input you will need this to resume the time
		//use val() to get the value of the input
	//5 convert to Seconds and resume time
    
})


$(".js-start-timer").on("click", function()
{
	getTime = $(this).closest("tr").find(".js-task-do").val();

	
	console.log(getTime);

	$(this).closest("tr").find(".js-task-do").timer({
		format : "%H:%M:%S",
		seconds : convertToSeconds(getTime)
	});

})