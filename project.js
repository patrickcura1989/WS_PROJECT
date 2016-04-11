/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * http://stackoverflow.com/questions/3502354/how-to-check-if-a-textbox-is-empty-using-javascript
 * http://www.tutorialspoint.com/javascript/javascript_form_validations.htm
 * http://stackoverflow.com/questions/21822324/javascript-form-validation-without-alert
 * http://www.w3schools.com/jsref/jsref_regexp_wordchar.asp
 * http://www.w3schools.com/jsref/jsref_regexp_g.asp
 * http://www.w3resource.com/javascript/form/phone-no-validation.php
 * http://www.regexpal.com/
 * http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
 * http://www.formget.com/form-validation-using-javascript/
 * http://www.w3schools.com/jsref/jsref_obj_regexp.asp
 */

function validateRegisterFields()
{
    var firstName = document.getElementById('firstName');
    var lastName = document.getElementById('lastName');
    var address = document.getElementById('address');
    var phoneNumber = document.getElementById('phoneNumber');
    var emailAddress = document.getElementById('emailAddress');
    var username = document.getElementById('username');
    var password = document.getElementById('password');

    if (!validateRequired(firstName))
    {
        return false;
    }
    if (!validateRequired(lastName))
    {
        return false;
    }
    if (!validateRequired(address))
    {
        return false;
    }
    if (!validateRequired(phoneNumber))
    {
        return false;
    }
    if (!validateRequired(emailAddress))
    {
        return false;
    }
    if (!validateRequired(username))
    {
        return false;
    }
    if (!validateRequired(password))
    {
        return false;
    }

    if (!validatePhoneNumber(phoneNumber))
    {
        return false;
    }
    if (!validateEmail(emailAddress))
    {
        return false;
    }

    return true;
}

function validateRequired(field)
{
    if (field.value == "")
    {
        alert(field.getAttribute("name") + " is required");
        return false;
    }
    else
    {
        return true;
    }
}

function validatePhoneNumber(field)
{
    var pattern = /^02?([0-9]{8})$/; // 02dddddddd (mobile)
    var pattern2 = /^0?([0-9]{8})$/; // 0dddddddd

    if ((field.value.match(pattern)))
    {
        return true;
    }
    else
    {
        if ((field.value.match(pattern2)))
        {
            return true;
        }
        else
        {
            alert("Phone Number format should be: 0dddddddd or 02dddddddd (mobile)");
            return false;
        }
    }
}

function validateLoginFields()
{
    var username = document.getElementById('username');
    var password = document.getElementById('password');

    if (!validateRequired(username))
    {
        return false;
    }
    if (!validateRequired(password))
    {
        return false;
    }

    if(username.value == "patrick" && password.value == "cura")
    {
        window.location.assign("myProfile.html");
    }
    else
    {
        alert("Username Password combination not in the database")
        username.value = "";
        password.value = "";
        username.style.backgroundColor = "";
        username.style.color = "";
        password.style.backgroundColor = "";
        password.style.color = "";
        username.focus();
        return false;
    }

    return true;
}

function setStyle1()
{
    var username = document.getElementById("username");
    if (username.value == "")
    {
        username.style.backgroundColor = "yellow";
        username.style.color = "red";
    }
    else
    {
        username.style.backgroundColor = "";
        username.style.color = "";
    }
}

function setStyle2()
{
    var password = document.getElementById("password");
    if (password.value == "")
    {
        password.style.backgroundColor = "yellow";
        password.style.color = "red";
    }
    else
    {
        password.style.backgroundColor = "";
        password.style.color = "";
    }
}

function setStyleFocus(id)
{
    var field = document.getElementById(id);
    field.style.backgroundColor = "";
    field.style.color = "";
}

function validateEmail(emailAddress)
{
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(emailAddress.value))
    {
        alert('Please provide a valid email address');
        emailAddress.focus;
        return false;
    }
    else
    {
        return true;
    }
}