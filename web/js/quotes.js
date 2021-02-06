// var d = new Date();
// var currentday1 = d.getDay();
// if (currentday1 == 1) {
//     document.getElementsByClassName("quote1")[0].classList.toggle("banner1");
// }

var d = new Date();
var currentday = d.getDay();
switch (currentday) {
    case 0:
      day = "Sunday";
      break;
    case 1:
      day = "Monday";
      break;
    case 2:
       day = "Tuesday";
      break;
    case 3:
      day = "Wednesday";
      break;
    case 4:
      day = "Thursday";
      break;
    case 5:
      day = "Friday";
      break;
    case 6:
      day = document.getElementsByClassName("quote1")[0].classList.toggle("banner1");
  }