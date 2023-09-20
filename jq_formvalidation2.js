$(document).ready(function () {
    $('#submit').click(function () {
       
        var firstname = $("#fname").val();
        var lastname = $("#lname").val();
        var mailadd = $("#email").val();
        var phonenum = $("#phone").val();
        var selectcity = $("#city").val();
        var myaddress = $("#address").val();

        var name_regex = /^[a-zA-Z]+$/;
        var email_regex = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
      
        if (firstname.length == "") {
            $("#ferror").text("<br>* All fields are mandatory *</br>");
            $("#ferror").css("color", "red");
            fname.focus();
            return false;
        }
        else if (!firstname.match(name_regex)) {
            $("#ferror").text("* For your name please use alphabets only *");
            $("#ferror").css("color", "red");
            firstname.focus();
            return false;
        }
        else if (!(lastname.length >= 6 && lastname.length <= 8) || lastname.length == "") {
            $("#lerror").text("* Please enter between 6 and 8 characters *"); 
            lname.focus();
            return false;
        }
        else if (!mailadd.match(email_regex) || mailadd.length == "") {
            $("#mailerror").text("* Please enter a valid email address *"); 
            email.focus();
            return false;
        }
        else if (!phonenum.match(email_regex) || phonenum.length == "") {
            $("#mailerror").text("* Please enter a valid phone format *"); 
            phone.focus();
            return false;
        }
        else if (selectcity == "Please Choose") {
            $("#cityerror").text("* Please Choose any one option"); 
            city.focus();
            return false;
        }
        else if (!myaddress.match(add_regex) || myaddress.length == "") {
            $("#adderror").text("* For Address please use numbers and letters *"); 
            address.focus();
            return false;
        }
         else {
            alert("Form Submitted Successfuly!");
            return true;
        }
    });
});