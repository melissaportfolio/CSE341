
const fs = require('fs');
fs.readFile(process.argv[2], function (err, data) {
    if (!err) {
        var buffer = data.toString();
        var arr = buffer.split('\n');
        console.log(arr.length - 1);
        

    }
})