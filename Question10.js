// Ques-10. Create an HTTP server using Node.js which handles requests on port 10000 or a free port beyond 10000.
//Modify the server in such a way that opening localhost:10000 will display “Hello world, This is my Node.js server”
//on browser.
// Q 10 PAGE 2 Question10.js
var http = require("http");
var fs = require("fs");
var ports = [10000, 10001, 10002];
const listenerCount = require("process");
fs.readFile("Question10.html", function(err, html) {
  if (err) {
    console.log(err);
  }
  ports.forEach(function(port) {
    http.createServer(function(request, response) {
        response.writeHeader(200, {
          contentType: "text/html"
        });
        response.write(html);
        response.end();
      }).listen(port,function(){
        console.log("server is running at port "+port);
      });
  });
});
