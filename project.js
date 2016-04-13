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
 * http://stackoverflow.com/questions/11352870/regular-expression-to-match-specific-string
 * http://stackoverflow.com/questions/4745112/javascript-regex-for-alphanumeric-string-with-length-of-3-5-chars
 */

function validateRegisterFields(form)
{
    if (!validateRequired(form.firstName))
    {
        return false;
    }
    if (!validateRequired(form.lastName))
    {
        return false;
    }
    if (!validateRequired(form.address))
    {
        return false;
    }
    if (!validateRequired(form.phoneNumber))
    {
        return false;
    }
    if (!validateRequired(form.emailAddress))
    {
        return false;
    }
    if (!validateRequired(form.username))
    {
        return false;
    }
    if (!validateRequired(form.password))
    {
        return false;
    }

    if (!validatePhoneNumber(form.phoneNumber))
    {
        return false;
    }
    if (!validateEmail(form.emailAddress))
    {
        return false;
    }
    
    if (!validateUsernamePassword(form.username))
    {
        return false;
    }
    if (!validateUsernamePassword(form.password))
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
    var filter = /\S+@\S+\.(com|net|my)+/;

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

function validateUsernamePassword(field)
{
    var filter = /^([a-zA-Z0-9_-]){6,}$/;

    if (!filter.test(field.value))
    {
        alert('Please provide a valid: ' + field.getAttribute("name"));
        field.focus;
        return false;
    }
    else
    {
        return true;
    }
}