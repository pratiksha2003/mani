function RefershCaptcha() {
    var date = new Date();
    $("#captcha").attr('src', 'recaptcha.aspx?v=' + date.getTime());
}

function IsNumericOnly(obj) {
    if ($(obj).val() != "") {
        var value = $(obj).val().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
        var intRegex = /^\d+$/;
        if (!intRegex.test(value)) {
            return false;
        } else {
            return true;
        }
    } else {
          return false;
    }

}

function ltrim(str) {
    return str.replace(/^\s+/, '');
}

function rtrim(str) {
    return str.replace(/\s+$/, '');
}

function alltrim(str) {
    return str.replace(/^\s+|\s+$/g, '');
}

function isDecimal(obj) {
    str = alltrim($(obj).val());
    if (/^[0-9]+(\.[0-9]+)?$/.test(str)) {
         return true;
    } else {
         return false;
    }
}

function isDecimalsize(str) {
    str = alltrim(str);
    return /^[-+]?\d{3,5}(\.\d{1,3})?$/.test(str);
}

function isBlank(obj) {
    str = alltrim($(obj).val());
    if (str == '') {
        return true;
    } else {
        return false;
    }
}

function isEmail(obj) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    return reg.test($(obj).val())
  }

function isName(obj) {
    if (isBlank(obj)) {
        return false;
    }
    var val = alltrim($(obj).val());
    var reg=/^([a-zA-Z \t\.]{1,100})+$/;
    return reg.test(val);
}

function isID(obj) {
    var val = alltrim($(obj).val());
    return val.match(/^([0-9a-zA-Z]{4,20})$/);
}

///Advertisement 
function splithours(a) {
    var hours = Math.floor(a / 3600);

    var minutes = Math.floor(a / 60) - (hours * 60);
    var seconds = a - (hours * 3600) - (minutes * 60);

    var hs = ' hour'; var ms = ' minute'; var ss = ' second';
    if (hours != 1) { hs += 's' }
    if (minutes != 1) { ms += 's' }
    if (seconds != 1) { ss += 's' }
    return hours + hs
}
function splitmin(a) {
    var hours = Math.floor(a / 3600);

    var minutes = Math.floor(a / 60) - (hours * 60);
    var seconds = a - (hours * 3600) - (minutes * 60);

    var hs = ' hour'; var ms = ' minute'; var ss = ' second';
    if (hours != 1) { hs += 's' }
    if (minutes != 1) { ms += 's' }
    if (seconds != 1) { ss += 's' }
    return minutes + ms
}
function splitsec(a) {
    var hours = Math.floor(a / 3600);

    var minutes = Math.floor(a / 60) - (hours * 60);
    var seconds = a - (hours * 3600) - (minutes * 60);

    var hs = ' hour'; var ms = ' minute'; var ss = ' second';
    if (hours != 1) { hs += 's' }
    if (minutes != 1) { ms += 's' }
    if (seconds != 1) { ss += 's' }
    return seconds + ss
}

function CountDown() {
    var counttimer;

    ClkMin = parseInt(document.getElementById("MinDiv").innerHTML);
    ClkSec = parseInt(document.getElementById("SecDiv").innerHTML);

    if (parseInt(ClkMin) >= 0 || parseInt(ClkMin) >= 0) {
        if (parseInt(ClkSec) > 0)
            ClkSec = parseInt(ClkSec) - 1;
        else if (parseInt(ClkSec) == 0 && parseInt(ClkMin) > 0) {
            ClkMin = parseInt(ClkMin) - 1;
            ClkSec = 59;
        }
        else
        { ClkMin = "0"; ClkSec = "0"; }
    }

    document.getElementById("MinDiv").innerHTML = ClkMin;
    document.getElementById("SecDiv").innerHTML = ClkSec;

    counttimer = setTimeout('CountDown()', 1000);
    if (parseInt(ClkMin) == 0 && parseInt(ClkSec) == 0) {
        // Stop Count down
        clearTimeout(counttimer);
        closepopup();
    }
}




///Advertisement 