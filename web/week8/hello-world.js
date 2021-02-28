const http = require('http');
const port = 8000;


const requestListener = (req,res) => {

    console.log(`Request received for ${req.url}`);

    if (req.url == "/") {
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write("<h1>Welcome to the home page</h1>");
        res.end();
        return;
    }

    else if (req.url == "/home") {
        res.write("Hello World");
        res.end();
        return;
    }

    else if (req.url == "/getData") {
        res.writeHead(200, {'Content-Type': 'application/json'});
        const info = {name: "Melissa Hall", class: "CSE341", semester: "Winter 2021"}
        res.write(JSON.stringify(info));
        res.end();
        return;
    }

    else if (req.url == "/getTime") {
        res.writeHead(200, {'Content-Type': 'application/json'});
        const currentInfo = new Date();
        res.write("The date and time is currently: " + currentInfo);
        res.end();
        return;
    }

    else if (req.url == "/graduation"){
      
            const start = new Date();
            const end = new Date("07/28/2021");
            const difference = Math.abs(end - start);
            const daysLeft = difference / (1000 * 3600 * 24);
            const rounded = Math.round(daysLeft);
            const daysLeftText = rounded.toString();
           
           
            res.write("<h1>Graduation is coming soon!</h1>");
            res.write("<h2>Days left until graduation on July 28, 2021:</h2>" + daysLeftText);
            res.end();
            return;
    }

    else if (req.url == "/spring"){
      
        const start = new Date();
        const end = new Date("04/19/2021");
        const difference = Math.abs(end - start);
        const daysLeft = difference / (1000 * 3600 * 24);
        const rounded = Math.round(daysLeft);
        const daysLeftText = rounded.toString();
       
       
        res.write("<h1>Spring semester is coming soon!</h1>");
        res.write("<h2>Days left until spring semester on April 19, 2021:</h2>" + daysLeftText);
        res.end();
        return;
}

    

    res.writeHead(404, {'Content-Type': 'text/html'});
    res.write("<h1>Error 404. Page not found</h1>");
    res.end();

    
    }


const server = http.createServer(requestListener);
server.listen(port, () => {
    console.log(`Server listening on port ${port}`);
});







// var http = require('http');

// function sayHello(req, res) {
//     console.log("Received a request for" + req.url);

//     res.write("Hello from Node");
//     res.end();
// }

// var server = http.createServer(sayHello);
// server.listen(5000);

// console.log("The server is now listening on port 5000");