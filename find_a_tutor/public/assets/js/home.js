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

var q = document.getElementsByClassName("question-para");
var i;

for (i = 0; i < q.length; i++) {
    q[i].onclick = function() {
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    };
}