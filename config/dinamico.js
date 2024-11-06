/* Selecione o objeto onde vai fazer as alterações e salve-o em uma variael*/

var p1 = document.getElementById('p1');
var p2 = document.getElementById('p2');
var b1 = document.getElementById('b1');
var b2 = document.getElementById('b2');

/*remova e adicione classe para animar o logim*/
function trocar1 (p2,p1) {
	p2.classList.remove("prt-2");
	p2.classList.add("prt-3");
	p1.classList.remove("prt-1");
	p1.classList.add("prt-2");
	
};
function trocar2 (p2,p1) {
	p2.classList.remove("prt-3");
	p2.classList.add("prt-2");
	p1.classList.remove("prt-2");
	p1.classList.add("prt-1");
	
};

