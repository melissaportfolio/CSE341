const fs = require('fs');
var buffer = fs.readFileSync(process.argv[2]);
const str = buffer.toString().split('\n');
console.log(str.length - 1);