var d = new Date();
var currentday1 = d.getDay();
if (currentday1 == 7) {
    document.getElementsByClassName("quote1")[0].classList.toggle("banner1");
}