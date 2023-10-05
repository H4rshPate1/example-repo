$(document).ready(function() {
    $("#submit").click(function() {

        var mailadd = $("#email").val();
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if ((mailadd.length == "") || (!mailadd.match(mailformat))) {
            // $(".error").remove();
            // $(".mail").append("<p class='error'>*Mail address is empty</p>");
            // $(".error").css("color", "red");
            email.focus();
            return false;
        }
    });
    $('#show_pass').on('click', function(){
        var pass=$("#pswrd");
        if(pass.attr('type')==='password'){
            pass.attr('type','text');
        }else{
            pass.attr('type','password');
        }
    });
});