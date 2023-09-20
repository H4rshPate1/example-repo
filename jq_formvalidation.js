$(document).ready(function() {
    $("#submit").click(function() {
 
        var firstname = $("#fname").val();
        var lastname = $("#lname").val();
        var mailadd = $("#email").val();
        var phonenum = $("#phone").val();
        var selectcity = $("#city").val();
        var myaddress = $("#address").val();

        var letters = /^[a-zA-Z]*$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var phoneformat = /^\(?([0-9]{3})\)?[-. ]([0-9]{3})[-. ]([0-9]{4})$/; 

        if ((firstname.length == "") || (firstname.length < 2) || (!firstname.match(letters))){
            $(".error").remove();
            $(".fname").append("<p class='error'>*First name is empty</p>");
            $(".error").css("color", "red");
            fname.focus();
            return false;
            
        } else if (lastname.length == "") {
            $(".error").remove();
            $(".lname").append("<p class='error'>*Last name is empty</p>");
            $(".error").css("color", "red");
            lname.focus();
            return false;

        } else if ((mailadd.length == "") || (!mailadd.match(mailformat))) {
            $(".error").remove();
            $(".mail").append("<p class='error'>*Mail address is empty</p>");
            $(".error").css("color", "red");
            email.focus();
            return false;

        } else if ((phonenum.length == "") || (!phonenum.match (phoneformat))) {
            $(".error").remove();
            $(".phone").append("<p class='error'>*Phone number is empty</p>");
            $(".error").css("color", "red");
            phone.focus();
            return false;

        } else if (selectcity.length == "") {
            $(".error").remove();
            $(".dropdown").append("<p class='error'>*select any city</p>");
            $(".error").css("color", "red");
            city.focus();
            return false;

        } else if (myaddress.length == "") {
            $(".error").remove();
            $(".your-address").append("<p class='error'>*add your address</p>");
            $(".error").css("color", "red");
            address.focus();
            return false;
        }
    });
});

// $("#submit").click( function() {
//     $("p:first").remove();
// });