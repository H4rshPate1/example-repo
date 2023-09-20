function validateform(){

var email_add = document.getElementById("mail");
var password = document.getElementById("pswrd").value;
var c_password = document.getElementById("c_pswrd").value;

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

if(email_add.value == ""){
    alert("Email cannot be empty!");
    mail.focus();
    return false;
}
else if(!email_add.value.match(mailformat)){
    alert( "not specified mail format!" );
    mail.focus() ;
    return false;
}

else if(pswrd.value == ""){
    alert("Pass cannot be empty!");
    pswrd.focus();
    return false;
}
else if (password != c_password) {
    alert("Passwords do not match.");
        return false;
    }
    return true;
}

$(document).ready(function() {
    $('#country').on('change', function() {
        var country_id = this.value;
        $.ajax({
            url: "states_by_country.php",
            type: "POST",
            data: {
                country_id: country_id
            },
            cache: false,
            success: function(result){
                $("#state").html(result);
            }
        });
    });
    $('#state').on('change', function() {
        var state_id = this.value;
        $.ajax({
            url: "cities_by_states.php",
            type: "POST",
            data: {
                state_id: state_id
            },
            cache: false,
            success: function(result){
                $("#city").html(result);
            }
        });
    });
    $('#show_pass').on('click', function(){
        var pass=$("#pswrd");
        if(pass.attr('type')==='password'){
            pass.attr('type','text');
        }else{
            pass.attr('type','password');
        }
    });
    $("#addr_type").change(function() {
        if ($(this).val() == "Industrial Address"){
            $('#company').val('Mavenbird');   
            $('#street_addr').val('504');   
        }
        else {
            $('#company').val('');
            $('#street_addr').val('');   
        }
    });
});