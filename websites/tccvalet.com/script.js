function show(id) {
	id2 = id + "b";
	clear();
	document.getElementById(id).style.maxHeight = "500px";
	document.getElementById(id2).style.backgroundColor = "#1d5b96";
	document.getElementById(id).syle.borderBottomWidth = "1px";
}

function show2(id) {
	id2 = id + "b";
	clear2();
	document.getElementById(id).style.maxHeight = "5000px";
	document.getElementById(id2).style.backgroundColor = "#1d5b96";
}

function clear() {
	document.getElementById("a").style.maxHeight = "0px";
	document.getElementById("b").style.maxHeight = "0px";
	document.getElementById("c").style.maxHeight = "0px";
	document.getElementById("d").style.maxHeight = "0px";
	document.getElementById("e").style.maxHeight = "0px";
	document.getElementById("f").style.maxHeight = "0px";
	document.getElementById("g").style.maxHeight = "0px";
	document.getElementById("h").style.maxHeight = "0px";
	document.getElementById("ab").style.backgroundColor = "#071c30";
	document.getElementById("bb").style.backgroundColor = "#071c30";
	document.getElementById("cb").style.backgroundColor = "#071c30";
	document.getElementById("db").style.backgroundColor = "#071c30";
	document.getElementById("eb").style.backgroundColor = "#071c30";
	document.getElementById("fb").style.backgroundColor = "#071c30";
	document.getElementById("gb").style.backgroundColor = "#071c30";
	document.getElementById("hb").style.backgroundColor = "#071c30";

}

function clear2() {
	document.getElementById("a").style.maxHeight = "0px";
	document.getElementById("b").style.maxHeight = "0px";
	document.getElementById("c").style.maxHeight = "0px";
	document.getElementById("d").style.maxHeight = "0px";
	document.getElementById("ab").style.backgroundColor = "#071c30";
	document.getElementById("bb").style.backgroundColor = "#071c30";
	document.getElementById("cb").style.backgroundColor = "#071c30";
	document.getElementById("db").style.backgroundColor = "#071c30";

}