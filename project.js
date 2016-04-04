/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** 
http://stackoverflow.com/questions/3502354/how-to-check-if-a-textbox-is-empty-using-javascript 
http://www.tutorialspoint.com/javascript/javascript_form_validations.htm
http://stackoverflow.com/questions/21822324/javascript-form-validation-without-alert
http://www.w3schools.com/jsref/jsref_regexp_wordchar.asp
http://www.w3schools.com/jsref/jsref_regexp_g.asp
 
 **/

function validateFields() {
    var illegalChars = /\W/; // allow letters, numbers, and underscores

    var firstName = document.getElementById('firstName');
    var lastName = document.getElementById('lastName');
    var address = document.getElementById('address');
    var phoneNumber = document.getElementById('phoneNumber');
    var emailAddress = document.getElementById('emailAddress');
    var username = document.getElementById('username');
    var password = document.getElementById('password');

    if (firstName.value == "") 
    {
        fld.style.background = 'Yellow';
        error = "You didn't enter a username.\n";
    } 
    else if ((fld.value.length < 5) || (fld.value.length > 15)) 
    {
        fld.style.background = 'Yellow';
        error = "The username is the wrong length.\n";
    } 
    else if (illegalChars.test(fld.value)) 
    {
        fld.style.background = 'Yellow';
        error = "The username contains illegal characters.\n";
    } 
    else 
    {
        fld.style.background = 'White';
    }
    return true;
}