
var Profile = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        };

        return true;
    },
    validate: function () {
        if (SignUp.check("name") == false) {
            return false;
        }
        if (SignUp.check("email") == false) {
            return false;
        }
        $("#profileForm")[0].submit();
    }
};

var Renner = {
	validate: function () {
		if (SignUp.check("voornaam") == false) {
            return false;
        }
		if (SignUp.check("achternaam") == false) {
			return false;
		}
	}
}

var SignUp = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();
            return false;
        };

        return true;
    },
    validate: function () {
    	//required voornaam
        if (SignUp.check("voornaam") == false) {
            return false;
        }
        //required achternaam
        if (SignUp.check("achternaam") == false) {
            return false;
        }
        //required email
        if (SignUp.check("email") == false) {
            return false;
        }
        //regexp valdiate e-mail address
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test($("#email")[0].value)) {
        	$("#email")[0].focus();
            $("#email_alert2").show();
            return false;
        }
        //required password 1
        if (SignUp.check("password1") == false) {
            return false;
        }
        //password must be at least 3 characters
        if ($("#password1")[0].value.length < 3) {
            $("#password1")[0].focus();
            $("#password1_alert2").show();
            return false;
        }
        //password1 and password2 should be the same
        if ($("#password1")[0].value != $("#password2")[0].value) {
            $("#password2")[0].focus();
            $("#password2_alert").show();
            return false;
        }
        //we've made it, submit the register form
        $("#registerForm")[0].submit();
    }
}

$(document).ready(function () {
    $("#registerForm .alert").hide();
    $("div.profile .alert").hide();
    //default datepicker behavior can be called by getting class
    $( ".datepicker" ).datepicker({
    	showButtonPanel: true,
    	showAnim: "slideDown"
    });

});
