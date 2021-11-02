let navList = document.getElementById('navList');
let mobileNavList = document.getElementById('mobileNavList');

if (navList != null && mobileNavList != null) {
    mobileNavList.innerHTML = navList.innerHTML;
}

var q = document.getElementsByClassName("question-para");
var i;

if (q != null) {
    for (i = 0; i < q.length; i++) {
        q[i].onclick = function() {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        };
    }
}


var square = document.querySelectorAll('.square');

if (square != null) {
    for (const elem of square) {
        elem.style.height = elem.clientWidth + "px";
        elem.style.width = elem.clientWidth + "px";
    }

}


function clickTarget(targetId) {
    document.getElementById(targetId).click();
}

function toggleDisplay(thisElem, targetElemId) {
    if (thisElem.checked) {
        setDisplay(targetElemId, "block");
    } else {
        setDisplay(targetElemId, "none");
    }
}

function setDisplay(elemId, display) {
    var x = document.getElementById(elemId);
    x.style.display = display;
}

function hideElem(elemID) {
    document.getElementById(elemID).style.display = 'none';
}

function showElem(elemID) {
    document.getElementById(elemID).style.display = 'flex';
}

function showHide(show, hide) {
    var s = document.getElementById(show);
    var h = document.getElementById(hide);

    s.style.display = 'flex';
    h.style.display = 'none';
}

var slider = document.getElementById("duration");
var timeview = document.getElementById("timeview");

if (slider != null && timeview != null) {
    timeview.innerHTML = slider.value;

    slider.oninput = function() {
        timeview.innerHTML = this.value;
    }
}

function generateKey(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() *
            charactersLength));
    }
    return result;
}