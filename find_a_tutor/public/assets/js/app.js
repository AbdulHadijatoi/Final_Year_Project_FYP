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