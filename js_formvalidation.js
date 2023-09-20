function validateform(){

    var myform = document.getElementById("myform");
    var firstname = document.getElementById("fname");
    var lastname = document.getElementById("lname");
    var pswrd = document.getElementById("pass");
    var emailad = document.getElementById("mail");
    var phonenum = document.getElementById("phone"); 
    var selectcity = document.getElementById("city");
    var formaddress = document.getElementById("address");

    var letters = /^[a-zA-Z]*$/;
    var phoneformat = /^\(?([0-9]{3})\)?[-. ]([0-9]{3})[-. ]([0-9]{4})$/; 
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(firstname.value == "") {
        alert("First name cannot be empty!");
        fname.focus();
        return false;
    }
    else if(!firstname.value.match(letters)){
        alert("no special char allowed in first name!");
        fname.focus() ;
        return false;
    }
    else if(firstname.value.length < 2 ) {
        alert("name must be > 2 chars!");
        fname.focus();
        return false;
    }   
    else if(lastname.value == "") {
        alert("Last name cannot be empty!");
        lname.focus();
        return false;
    }
    else if(!lastname.value.match(letters)){
        alert("no special char allowed in last name!");
        lname.focus() ;
        return false;
    }
    else if(pswrd.value == "") {
        alert("Password cannot be empty!");
        pass.focus();
        return false;
    }
    else if(pswrd.value.length <= 7) {
        alert("Password must be min of 8 chars!");
        pass.focus();
        return false;
    }
    else if(emailad.value == ""){
        alert("Email cannot be empty!");
        mail.focus();
        return false;
    }
    else if(!emailad.value.match(mailformat)){
        alert( "not specified mail format!" );
        mail.focus() ;
        return false;
    }
    else if(phonenum.value == "" ){
        alert( "Phone number cannot be empty!" );
        phone.focus();
        return false;
    }
    else if(!phonenum.value.match(phoneformat)){
        alert( "phone num must be within specified format!" );
        phone.focus() ;
        return false;
    }
    else if(phonenum.value.length > 12){
        alert("min of 10 nums!");
        phonenum.focus();
        return false;      
    }
    else if(selectcity.value == ""){
        alert("Select Any City");
        city.focus();
        return false;
    }
    else if(formaddress.value == ""){
        alert("Give Your Address");
        address.focus();
        return false;
    }
    // return true;
}

var phonenum = document.querySelector('#phone');

phonenum.addEventListener('keyup', function(e){
    if ((phonenum.value.length === 3 || phonenum.value.length === 7)){
        phonenum.value += '-';
    }
});