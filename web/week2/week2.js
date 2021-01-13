function clickAlert() {
    alert("Clicked!");
}

function changeColor() {
    /* Get text from textbox */
    var textId = "txtColor";
	var textbox = document.getElementById(textId);
    /* Set color of first div */
    var divId = "div-1";
	var div = document.getElementById(divId);

	//verify values here 
	var color = textbox.value;
	div.style.backgroundColor = color;
}
/*
$(document).ready(function() {
    $(".div3Button").click(function() {
        $(".div-3").hide();
    });
});
*/
$(document).ready(function() {
    $(".div3Button").click(function() {
        $(".div-3").fadeToggle();
    });
});

$(document).ready(function() {
    $(".div2Button").click(function() {
        $(".div-2").css("background-color", "green");
    });
});


