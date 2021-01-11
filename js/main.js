#("form_id").submit(function(event){
	event.preventDefault();
	submitForm();
});

function submitForm() {
	var password = $("password_id").val();

	alert( "Password is" + password );
}
