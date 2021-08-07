var input = document.getElementById("input").oninput = inputChange;

function inputChange() {
    if ( event.target.value.length )
       document.getElementById("output").style.display = "inline-block";
    else 
        document.getElementById("output").style.display = "none"           
};
let confirmed = function(){
	document.querySelector(".confirm-name").style.display = "none";
	document.querySelector(".service").style.opacity = "1";
};
document.getElementById("output").onclick = function() {
	document.querySelector(".confirm-name").style.opacity = "0";
	document.querySelector(".service").style.display = "block";

	setTimeout(confirmed, 1000);

};
