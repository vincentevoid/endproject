var urlSelect = document.getElementById('selectUser'),
myFrame = document.getElementById('myFrame');

function loadPages() {
    myFrame.src = "";
    setTimeout(function () {
        myFrame.src = urlSelect.value;
    }, 0);
}