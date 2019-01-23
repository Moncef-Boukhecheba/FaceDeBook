var pass = $("#password");
var confirm = $("#confirm");
var email = $("#email");
var valid_email = false;
var valid_pass = false;
var valid_confirm = false;

function validateConfirm(){
    if(pass.val() != confirm.val()) {
        confirm.addClass("is-invalid");
        $("#invalid-confirm").css("display", "block");
        valid_confirm = false;
        
    } else {
        confirm.removeClass("is-invalid");
        $("#invalid-confirm").css("display", "none");
        valid_confirm = true;
    }
}

function validateEmail(){
    var val = email.val();
    var reg = new RegExp('^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}$');
    
    if (!reg.test(val)){
        email.addClass("is-invalid");
        $("#invalid-email").css("display", "block");
        valid_email = false;
        
    } else {
        email.removeClass("is-invalid");
        $("#invalid-email").css("display", "none");
        valid_email = true;
    }
}

function validatePass(){
    var val = pass.val();
    var reg = new RegExp('(?=.*?[0-9])(?=.*?[A-Z]).+');
    
    if (!reg.test(val)){
        pass.addClass("is-invalid");
        $("#invalid-pass").css("display", "block");
        valid_pass = false;
        
    } else {
        pass.removeClass("is-invalid");
        $("#invalid-pass").css("display", "none");
        valid_pass = true;
    }
}

function validationForm(){
    validateEmail();
    validatePass();
    validateConfirm();
    if (valid_pass && valid_confirm && valid_email){
        return true;
    }
    else{
        $("#invalid-submit").css("display", "block");
        return false;
    }
}

$("#confirm, #password").focusout(validateConfirm);
$("#email").focusout(validateEmail);
$("#password").focusout(validatePass);

