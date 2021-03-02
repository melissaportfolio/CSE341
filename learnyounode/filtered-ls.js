const fs = require('fs');
const path = require('path');


var dir = process.argv[2];
var ext = '.'+process.argv[3];
fs.readdir(dir, function(err, list) {
if (err) {
    return console.log(err);
}
else {
    for (var i = 0; i < list.length; i++) {
        
     if (ext == path.extname(list[i])) {
         
        console.log(list[i]);
     }
         
      
    }
}
});