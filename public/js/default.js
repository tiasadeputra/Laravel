function popupReference(refName) {
    var w = 800;
    var h = 500;
    var l = (screen.width - w) / 2;
    var t = (screen.height - h) / 2;
    oWindow = window.open('reference.php?s=' + refName, 'winRef',
        'directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,width=' + w + ',height=' + h + ',left=' + l + ',top=' + t);
    oWindow.focus();
}

function ymd2dmy(ymd) {
    var a = ymd.split("-");
    return a[2] + '-' + a[1] + '-' + a[0];
}

function popupReferenceMob(refName) {
    var w = 1000;
    var h = 500;
    var l = (screen.width - w) / 2;
    var t = (screen.height - h) / 2;
    oWindow = window.open('reference-mob.php?s=' + refName, 'winRef',
        'directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,width=' + w + ',height=' + h + ',left=' + l + ',top=' + t);
    oWindow.focus();
}
