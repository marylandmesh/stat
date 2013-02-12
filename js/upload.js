// -------------------------------------
// 
//  Encrypt uses HMAC SHA256 encryption
//  client side, and the password is to
//  be sent encrypted when it's sent to
//  the server, before it is submitted.
// 
// -------------------------------------
function encrypt() {
	var hash = CryptoJS.HmacSHA256(document.forms["upload"]["password"].value, document.forms["upload"]["id"].value);
	document.forms["upload"]["password"].value = hash;
}