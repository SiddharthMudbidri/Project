$('#C_create').on('click', function(event) {
event.preventDefault();
var CompanyID = $('#companyID').val();
var pass = $("#C_password").val();
var ContactPerson = $("#ContactPerson").val();
var ContactEmail = $("#ContactEmail").val();
var ContactPhone = $("#ContactPhone").val();
// Checking for blank fields.
if( CompanyID =='' || pass =='' || ContactPerson =='' || ContactEmail =='' || ContactPhone ==''){
	$('input[type="text"],input[type="password"]').css("border","2px solid red");
$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
alert("Please fill all fields...!!!!!!");
}
	
else {
$.post("assets/js/create.php",{ CompanyID1: CompanyID, password1:pass , ContactPerson1:ContactPerson, ContactEmail1:ContactEmail, ContactPhone1:ContactPhone},
function(data) {
if(data=='Invalid Email.......') {
$('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
$('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
alert(data);
}else if(data=='Email or Password is wrong...!!!!'){
$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
alert(data);
} else if(data=='Successfully Logged in...'){
$("form")[0].reset();
$('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
alert(data);
} else{
alert(data);
}
});
}
});
