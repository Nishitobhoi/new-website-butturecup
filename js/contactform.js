$("form[name='form_contact']").validate({
    ignore: ".ignore",
    rules: {

        name: {
            required: true,
            alpha: true,
            number: false,
        },

        company: {
            required: true,
            alpha: true,
            number: false,
        },


        email: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            },
            customemail: true
        },

        phone: {
            required: true,
            phonenumber: true,
            minlength: 10,
            maxlength: 20
        },

        lastname: {
            required: true,
            alpha: true,
            number: false,
        },

        legalname: {
            required: true,
            alpha: true,
            number: false,
        },

        businesstype: {
            required: true,
            alpha: true,
            number: false,
        },

        mailadress: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            },
            customemail: true
        },

        form1_hiddenRecaptcha: { required: true, }

    },
    messages: {
        name: {
            required: "Name is required",
            alpha: "Name is required",
            minlength: "Name is required",
        },
        company: {
            required: "company Name is required",
            alpha: "company Name is required",
            minlength: "company Name is required",
        },

        email: {
            required: "Email id is required",
            customemail: "Email id is required",
        },

        phone: {
            required: "Phone number is required",
            phonenumber: "Phone number is required",
            minlength: "Phone number is required",
            maxlength: "Phone number is required",
        },
        lastname: "Last Name is required",
        legalname: "Leagal Name is required",
        businesstype: "Business type is required",
        mailadress: "Mail Address is required",
        form1_hiddenRecaptcha: {
            required: "Captcha is required",

        }

    },

    submitHandler: function (form) {

        // if (grecaptcha.getResponse()) {
        form.submit();
        // } else {
        // 	$('#hiddenRecaptcha').html('');
        //    	$('#hiddenRecaptcha').append('<p class="error">Captcha is required</p>');
        // }
    }
});
var CaptchaCallback = function () {
    var widgetId2;
    widgetId2 = grecaptcha.render('RecaptchaField2', { 'sitekey': '6Leys3oiAAAAAHrfuWTioORmjHWK7-CSCSrfYevi', 'callback': correctCaptcha_form2 });
};
var correctCaptcha_form2 = function (response) {
    $("#form2_hiddenRecaptcha").val(response);
};
$("form[name='form_contact_common']").validate({
    ignore: ".ignore",
    rules: {

        name: {
            required: true,
            alpha: true,
            number: false,
        },

        company: {
            required: true,
            alpha: true,
            number: false,
        },


        email: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            },
            customemail: true
        },

        phone: {
            required: true,
            phonenumber: true,
            minlength: 10,
            maxlength: 20
        },

        lastname: {
            required: true,
            alpha: true,
            number: false,
        },

        legalname: {
            required: true,
            alpha: true,
            number: false,
        },

        businesstype: {
            required: true,
            alpha: true,
            number: false,
        },

        mailadress: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            },
            customemail: true
        },

        form2_hiddenRecaptcha: { required: true, }

    },
    messages: {
        name: {
            required: "Name is required",
            alpha: "Name is required",
            minlength: "Name is required",
        },
        company: {
            required: "company Name is required",
            alpha: "company Name is required",
            minlength: "company Name is required",
        },

        email: {
            required: "Email id is required",
            customemail: "Email id is required",
        },

        phone: {
            required: "Phone number is required",
            phonenumber: "Phone number is required",
            minlength: "Phone number is required",
            maxlength: "Phone number is required",
        },
        lastname: "Last Name is required",
        legalname: "Leagal Name is required",
        businesstype: "Business type is required",
        mailadress: "Mail Address is required",
        form2_hiddenRecaptcha: {
            required: "Captcha is required",

        }

    },

    submitHandler: function (form) {

        // if (grecaptcha.getResponse()) {
        form.submit();
        // } else {
        // 	$('#hiddenRecaptcha').html('');
        //    	$('#hiddenRecaptcha').append('<p class="error">Captcha is required</p>');
        // }
    }
});