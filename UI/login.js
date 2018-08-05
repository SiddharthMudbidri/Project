$(document).ready(function(){
$("#login").click(function(){
var name = $("#Cname").val();
var pass = $("#pass").val();
// Checking for blank fields.
if( name =='' || pass ==''){
$('input[type="text"],input[type="password"]').css("border","2px solid red");
$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
//alert("Please fill all fields...!!!!!!");
}else {
$.post("login.php",{ name1: name , pass1:pass});
}
});
});