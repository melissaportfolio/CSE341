// var d = new Date();
// var currentday1 = d.getDay();
// if (currentday1 == 1) {
//     document.getElementsByClassName("quote1")[0].classList.toggle("banner1");
// }

var d = new Date();
var currentday = d.getDay();
switch (currentday) {
    case 0:
      quote = document.getElementsByClassName("quote1")[0].classList.toggle("banner1");
      break;
    case 1:
      quote = document.getElementsByClassName("quote2")[0].classList.toggle("banner1");
      break;
    case 2:
      quote = document.getElementsByClassName("quote3")[0].classList.toggle("banner1");
      break;
    case 3:
      quote = document.getElementsByClassName("quote4")[0].classList.toggle("banner1");
      break;
    case 4:
      quote = document.getElementsByClassName("quote5")[0].classList.toggle("banner1");
      break;
    case 5:
      quote = document.getElementsByClassName("quote6")[0].classList.toggle("banner1");
      break;
    case 6:
      quote = document.getElementsByClassName("quote7")[0].classList.toggle("banner1");
  }