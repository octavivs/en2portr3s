$(document).ready(initialize);

var state;
var already = "Ya hay otra persona con esta dirección de correo electrónico.";
var required = "Esta información es obligatoria.";
var invalid = "Información incorrecta.";
var different = "Las contraseñas no coinciden.";
var minor = "The birthdate indicates that you're under 13 years of age.";
var BirthMonth = [
    'Mes',
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
];

function initialize() {
    getMonths();
    getDays();
    getYears();
    $("input#SignUp").click(clearMessages);
    $("input#SignUp").click(signUp);
    $("input#Comment").click(clearMessages);
    $("input#Comment").click(saveQuestion);
    $("input#Buzon").click(clearMessages);
    $("input#Buzon").click(saveSuggestion);
    $("input#Reset").click(clearMessages);
    
    var data = [];
    data = $("div").data("id");
    alert(data);
    /*
     $("#services .button").hover(function() {
     $(this).siblings("img").removeClass("hidden-for-small");
     }, function() {
     $(this).siblings("img").addClass("hidden-for-small");
     });
     */
}

function saveQuestion() {
    state = "ok";
    var firstName = $("#FirstName").val();
    var lastName = $("#LastName").val();
    var email = $("#Email").val();
    var content = $("#Content").val();

    if (isEmpty(firstName)) {
        $(message(required)).insertAfter("#FirstName");
        state = required;
    } else if (!isName(firstName)) {
        $(message(invalid)).insertAfter("#FirstName");
        state = invalid;
    }

    if (isEmpty(lastName)) {
        $(message(required)).insertAfter("#LastName");
        state = required;
    } else if (!isName(lastName)) {
        $(message(invalid)).insertAfter("#LastName");
        state = invalid;
    }

    if (isEmpty(email)) {
        $(message(required)).insertAfter("#Email");
        state = required;
    } else if (!isEmail(email)) {
        $(message(invalid)).insertAfter("#Email");
        state = invalid;
    }

    if (isEmpty(content)) {
        $(message(required)).insertAfter("#Content");
        state = required;
    } else if (!isText(content)) {
        $(message(invalid)).insertAfter("#Content");
        state = invalid;
    }

    if (state === "ok") {
        clearDataFields();
        $.post("view/scripts/saveQuestion.php", {
            first_name: firstName,
            last_name: lastName,
            email: email,
            content: content
        }, function (data) {
            alert(data);
        });
    }
}

function saveSuggestion() {
    state = "ok";
    var buzon = $("#Buzon").val();
    if (isEmpty(buzon)) {
        $(message(required)).insertAfter("#Buzon");
        state = required;
    } else if (!isText(buzon)) {
        $(message(invalid)).insertAfter("#Buzon");
        state = invalid;
    }

    if (state === "ok") {
         clearDataFields();
        $.post("view/scripts/saveSuggestion.php", {
            buzon: buzon
        }, function (data) {
            alert(data);
        });
    }
}

function signUp() {
    state = "ok";
    var firstName = $("#FirstName").val();
    var lastName = $("#LastName").val();
    var userName = $("#UserName").val();
    var password = $("#Password").val();
    var rePassword = $("#RePassword").val();
    var address = $("#Address").val();
    var city = $("#City").val();
    var telephone = $("#Telephone").val();
    var birthMonth = $("#BirthMonth").val();
    var birthDay = $("#BirthDay").val();
    var birthYear = $("#BirthYear").val();

    if (isEmpty(firstName)) {
        $(message(required)).insertAfter("#FirstName");
        state = required;
    } else if (!isName(firstName)) {
        $(message(invalid)).insertAfter("#FirstName");
        state = invalid;
    }

    if (isEmpty(lastName)) {
        $(message(required)).insertAfter("#LastName");
        state = required;
    } else if (!isName(lastName)) {
        $(message(invalid)).insertAfter("#LastName");
        state = invalid;
    }

    if (isEmpty(userName)) {
        $(message(required)).insertAfter("#UserName");
        state = required;
    } else if (!isEmail(userName)) {
        $(message(invalid)).insertAfter("#UserName");
        state = invalid;
    }

    if (isEmpty(password)) {
        $(message(required)).insertAfter("#Password");
        state = required;
    } else if (!isValidPass(password)) {
        $(message(invalid)).insertAfter("#Password");
        state = invalid;
    }

    if (rePassword !== password) {
        $(message(different)).insertAfter("#RePassword");
        state = different;
    } else if (isEmpty(rePassword)) {
        $(message(required)).insertAfter("#RePassword");
        state = required;
    }

    if (isEmpty(address)) {
        $(message(required)).insertAfter("#Address");
        state = required;
    } else if (!isText(address)) {
        $(message(invalid)).insertAfter("#Address");
        state = invalid;
    }

    if (isEmpty(city)) {
        $(message(required)).insertAfter("#City");
        state = required;
    } else if (!isName(city)) {
        $(message(invalid)).insertAfter("#City");
        state = invalid;
    }

    if (isEmpty(telephone)) {
        $(message(required)).insertAfter("#Telephone");
        state = required;
    } else {
        var pattern = / /g;
        telephone = telephone.replace(pattern, "");
        if (!isInteger(telephone)) {
            $(message(invalid)).insertAfter("#Telephone");
            state = invalid;
        }
    }

    if (isEmpty(birthMonth) || isEmpty(birthDay) || isEmpty(birthYear)) {
        $(message(required)).insertAfter("#BirthYear");
        state = required;
    } else if (checkAge(birthYear, birthMonth, birthDay) < 13) {
        $(message(minor)).insertAfter("#BirthYear");
        state = minor;
    }

    var birthDate = birthYear + '-' + birthMonth + '-' + birthDay;

    if (state === "ok") {
        clearDataFields();
        $.post("view/scripts/register.php", {
            first_name: firstName,
            last_name: lastName,
            username: userName,
            pass: password,
            address: address,
            phone: telephone,
            city: city,
            birthdate: birthDate
        }, function (data) {
            alert(data);
        });
    }
}

function isEmpty(input) {
    return input === '';
}

function isText(input) {
    return isNaN(input);
}

function isName(input) {
    var pattern = /^([a-záéíóúüñÁÉÍÓÚÜÑ ]+)$/i;
    return pattern.test(input);
}

function isValidPass(input) {
    var pattern = /^([a-z0-9@#$%]{8,16})$/i;
    return pattern.test(input);
}

function isInteger(input) {
    var empty = '';
    var pattern = /[0-9]+/;
    return input.replace(pattern, '') === empty;
}

function isEmail(input) {
    var pattern = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
    return pattern.test(input);
}

function message(text) {
    return "<span class='required'>" + text + "</span>";
}

function clearMessages() {
    if ($("span.required").length) {
        $("span.required").remove();
    }
}

function clearDataFields() {
    $(".data-field").val("");
}

function checkAge(year, month, day) {
    var actualDate = new Date();
    var birthDate = new Date(year, month, day);
    var difference = actualDate.getTime() - birthDate.getTime();
    var age = new Date(difference);
    return age.getFullYear() - 1970;
}

function getMonths() {
    var months = '<option selected="selected" value="">Mes</option>';
    for (var index = 1; index <= 12; index++) {
        months += '<option value="' + index + '">' + BirthMonth[index] + '</option>';
    }
    $("select#BirthMonth").html(months);
}

function getDays() {
    var days = '<option selected="selected" value="">Dia</option>';
    for (var day = 1; day <= 31; day++) {
        days += '<option value="' + day + '">' + day + '</option>';
    }
    $("select#BirthDay").html(days);
}

function getYears() {
    var years = '<option selected="selected" value="">Año</option>';
    var date = new Date();
    var actualYear = date.getFullYear();
    for (var year = actualYear; year >= 1905; year--) {
        years += '<option value="' + year + '">' + year + '</option>';
    }
    $("select#BirthYear").html(years);
}
