$(document).ready(initialize);

var BirthMonth = [
    'Mes',
    'enero',
    'febrero',
    'marzo',
    'abril',
    'mayo',
    'junio',
    'julio',
    'agosto',
    'septiembre',
    'octubre',
    'noviembre',
    'diciembre'
];

function initialize() {
    getMonths();
    getDays();
    getYears();
    $("input#SignUp").click(signUp);
    $("input#Reset").click(clearMessages);
}

function signUp() {
    var state = "ok";
    var required = "<span class='required'>Esta información es obligatoria.</span>";
    var invalid = "<span class='required'>Información incorrecta</span>";
    var different = "<span class='required'>Las contraseñas no coinciden.</span>";
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
    clearMessages();
    if ( firstName === '') {
        $( required ).insertAfter("#FirstName");
    }
    if ( lastName === '') {
        $( required ).insertAfter("#LastName");
    }
    if ( userName === '') {
        $( required ).insertAfter("#UserName");
    }
    if ( password === '') {
        $( required ).insertAfter("#Password");
    }
    if ( rePassword !== password ) {
        $( different ).insertAfter("#RePassword");
        state = "The passwords don't match.";
    } else if ( rePassword === '') {
        $( required ).insertAfter("#RePassword");
    }
    if ( address === '' ) {
        $( required ).insertAfter("#Address");
    }
    if ( city === '' ) {
        $( required ).insertAfter("#City");
    }
    if ( telephone === '' ) {
        $( required ).insertAfter("#Telephone");
    } else if ( !isInteger(telephone) ) {
        $( invalid ).insertAfter("#Telephone");
    }
    if ( birthMonth === '' || birthDay === '' || birthYear === '' ) {
        $( required ).insertAfter("#BirthYear");
    }
    if ( checkAge(birthYear, birthMonth, birthDay) < 13 ) {
        $("<span id='required'>The birthdate indicates that you're under 13 years of age.</span>").insertAfter("#BirthYear");
    }
    $.post(
        "view/js/register.php",
        {first_name: firstName, last_name: lastName, username: userName, pass: password, address: address, city: city, telephone: telephone },
        function(data) {
            alert(data);
        }
    );
    // Ya hay otra persona que tiene esta dirección de correo electrónico.
    // Las contraseñas no coinciden.
    // The birthdate indicates that you're under 13 years of age.
}

function isInteger(x) {
    return (typeof x === 'number') && (x % 1 === 0);
}

function clearMessages() {
    if ( $("span#required").length ) {
        $("span#required").remove();
    }
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
        months +='<option value="'+index+'">'+BirthMonth[index]+'</option>';
    }
    $("select#BirthMonth").html(months);
}

function getDays() {
    var days = '<option selected="selected" value="">Dia</option>';
    for (var day = 1; day <= 31; day++) {
        days += '<option value="'+day+'">'+day+'</option>';
    }
    $("select#BirthDay").html(days);
}

function getYears() {
    var years = '<option selected="selected" value="">Año</option>';
    var date = new Date();
    var actualYear = date.getFullYear();
    for (var year = actualYear; year >= 1905; year--) {
        years += '<option value="'+year+'">'+year+'</option>';
    }
    $("select#BirthYear").html(years);
}