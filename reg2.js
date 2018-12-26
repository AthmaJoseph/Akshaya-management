function formValidation()
{
var name=document.contact-form.txtname;
var centercode=document.contact-form.txtcentercode;
var location=document.contact-form.txtlocation;
var landmark=document.contact-form.txtlandmark;
var panchayath=document.contact-form.txtpanchayath;
var block=document.contact-form.txtblock;
var district=document.contact-form.txtdistrict;
var email=document.contact-form.txtemail;
var phone=document.contact-form.phone;
var mb=document.contact-form.txtmb;
var pswd=document.contact-form.txtpswd;


if(alphanumeric(centercode))
{
if(allLetter1(name))
{
if(allLetter2(location))
{
if(allLetter3(landmark))
{
if(allLetter4(panchayath))
{
if(allLetter5(block))
{
if(allLetter6(district))
{
if(allNumeric(phone))
{
if(validateEmail(email))
{
}
}
}
}
}
}
}
}
}
return false;
}
function alphanumeric(centercode)
{
	var letters = /^[0-9a-zA-Z]+$/;
if(centercode.value.match(letters))
{
load_value('SignUp_vle.php')
return true;
}
else
{
alert('Center code must be alphanumeric characters only');
regno.focus();
return false;
}
}
function allLetter1(name)
{
var letters = /^[A-Za-z]+$/;
if(name.value.match(letters))
{
return true;
}
else
{
alert('Your Name must have alphabet characters only');
city.focus();
return false;
}
}
function allLetter2(location)
{
var letters = /^[A-Za-z]+$/;
if(location.value.match(letters))
{
return true;
}
else
{
alert('Your Location must have alphabet characters only');
city.focus();
return false;
}
}
function allLetter3(landmark)
{
var letters = /^[A-Za-z]+$/;
if(landmark.value.match(letters))
{
return true;
}
else
{
alert('Your Landmark must have alphabet characters only');
city.focus();
return false;
}
}
function allLetter4(panchayath)
{
var letters = /^[A-Za-z]+$/;
if(panchayath.value.match(letters))
{
return true;
}
else
{
alert('Panchayath must have alphabet characters only');
city.focus();
return false;
}
}
function allLetter5(block)
{
var letters = /^[A-Za-z]+$/;
if(block.value.match(letters))
{
return true;
}
else
{
alert('Block must have alphabet characters only');
city.focus();
return false;
}
}
function allLetter6(district)
{
var letters = /^[A-Za-z]+$/;
if(district.value.match(letters))
{
return true;
}
else
{
alert('District must have alphabet characters only');
city.focus();
return false;
}
}
function allNumeric(phone)
{ 
var numbers = /^[0-9]+$/;
if(phno.value.match(numbers))
{
return true;
}
else
{
alert('Your Phone Number must have numeric characters only');
phno.focus();
return false;
}
}
function validateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}