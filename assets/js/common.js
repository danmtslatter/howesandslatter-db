$(document).ready(function() {
	
	// Tablesorter
	$("#songlist").tablesorter( {sortList: [[2,1]]} );

	$("#songlist tr.data:odd").css("background-color", "#e8e9ea");
	$("#songlist tr td:first-child").css("padding", "0 0 0 10px");
	$("#songlist tr th:first-child").css("padding", "0 0 0 10px");
	
	/*
	$("tr th").click(function() {
		$("#songlist tr.data").css("background", "none");
		$("#songlist tr.data:odd").css("background-color", "#e8e9ea");
	});
	*/
	
	// Callback of table sort function to change row colours
	$("#songlist").bind("sortStart",function() { 
        $("#songlist tr.data").css("background", "none"); 
    }).bind("sortEnd",function() { 
        $("#songlist tr.data:odd").css("background-color", "#e8e9ea"); 
    });
	
	// Rating interpreter
	$(".rating:contains('1')").css("width","15");
	$(".rating:contains('2')").css("width","33");
	$(".rating:contains('3')").css("width","51");
	$(".rating:contains('4')").css("width","69");
	$(".rating:contains('5')").css("width","83");
	
	// Player UI and control
	var stateofplay = 'stopped';
	
	$("#player a").click(function(){
		if (stateofplay == 'stopped'){
			$("#player a").css("background-position","bottom");
			$("#jplayer").jPlayer("play"); // Begins playing
			stateofplay = 'playing';
		} else {
			$("#player a").css("background-position","top");
			$("#jplayer").jPlayer("pause"); // Pauses playing
			stateofplay = 'stopped';
		}
		return false;
	});
	
	// Form states
	$("input").focus(function () {
    	if (this.value == this.title) this.value = "";
        $(this).css('color','#333');
    });
    $("input").blur(function () {
    	if (this.value == "") {
    		this.value = this.title;
	        $(this).css('color','#999');
		}
    });

});