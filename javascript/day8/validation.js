function validate_alpha(rec) {
	var pattern=/^[a-zA-Z]+$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_alphanum(rec) {
	var pattern=/^[a-zA-Z0-9]+$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_alpha_space(rec) {
	var pattern=/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_alphanum_space(rec) {
	var pattern=/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_username(rec) {
	var pattern=/^[a-zA-Z0-9][a-zA-Z0-9_@\.]+[a-zA-Z0-9]$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_domain(rec) {
	var pattern=/^([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_email(rec) {
	var pattern=/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_mobile(rec) {
	var pattern=/^[1-9][0-9]{9}$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
function validate_dob(rec) {
	var pattern=/^([0]?[1-9]|[1][0-9]|[2][0-9]|[3][0-1])\-([0]?[1-9]|[1][0-2])\-([\d]{4})$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}

function validate_password(rec) {
	var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#]).{4,12}$/;
	var result= pattern.test(rec);
	// alert(result);
	return result;
}
	