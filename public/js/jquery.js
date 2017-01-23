function upis() {

	var ime = $('#ime').val();
	var prezime = $('#prezime').val();
	var email = $('#email').val();
	var broj = $('#broj').val();

	$('#tablica').append('<tr><td>' + ime + "</td><td>" + prezime + "</td><td>" + email + "</td><td>" + broj + "</td></tr>");

}

function brisanje() {
	$("input[type=text], textarea").val("");
}
  