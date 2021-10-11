let navList = document.getElementById('navList');
let mobileNavList = document.getElementById('mobileNavList');

function setDisplay(elemId, display) {
    var x = document.getElementById(elemId);
    x.style.display = display;
}

function toggleDisplay(thisElem, targetElemId) {
    if (thisElem.checked) {
        setDisplay(targetElemId, "block");
    } else {
        setDisplay(targetElemId, "none");
    }
}

function clickTarget(targetId) {
    document.getElementById(targetId).click();
}

mobileNavList.innerHTML = navList.innerHTML;

var square = document.querySelectorAll('.square');

for (const elem of square) {
    elem.style.height = elem.clientWidth + "px";
    elem.style.width = elem.clientWidth + "px";
}

function hideElem(elemID){
    document.getElementById(elemID).style.display = 'none';
}
function showElem(elemID){
    document.getElementById(elemID).style.display = 'flex';
}

function showHide(show,hide){
    var s = document.getElementById(show);
    var h = document.getElementById(hide);

    s.style.display = 'flex';
    h.style.display = 'none';
}