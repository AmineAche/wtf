function incrementQty1() {
	var value = document.querySelector('input[name="qty1"]').value;

	value++;
	document.querySelector('input[name="qty1"]').value = value;

}

function decrementQty1() {
	var value = document.querySelector('input[name="qty1"]').value;

	if (value>0) {
		value--;
	} else{ value }
	document.querySelector('input[name="qty1"]').value = value;

}

function incrementQty2() {
	var value = document.querySelector('input[name="qty2"]').value;

	value++;
	document.querySelector('input[name="qty2"]').value = value;

}

function decrementQty2() {
	var value = document.querySelector('input[name="qty2"]').value;

	if (value>0) {
		value--;
	} else{ value }
	document.querySelector('input[name="qty2"]').value = value;

}

function incrementQty3() {
	var value = document.querySelector('input[name="qty3"]').value;

	value++;
	document.querySelector('input[name="qty3"]').value = value;

}

function decrementQty3() {
	var value = document.querySelector('input[name="qty3"]').value;

	if (value>0) {
		value--;
	} else{ value }
	document.querySelector('input[name="qty3"]').value = value;

}

function calculTotal() {
    var prixgant=100;
    var prixhousse=20;
    var prixchargeur=8.50;
    var prixliv=10;
    var qty1= document.getElementById("qty1").value;
    var qty2= document.getElementById("qty2").value;
    var qty3= document.getElementById("qty3").value;
    
    var total = (prixgant*qty1 + prixchargeur*qty3 + prixhousse*qty2 + prixliv);
    document.getElementById("total").innerHTML = total + " €";
  }
