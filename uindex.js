http=require('node:http')
listener=function(request, response) {
    response.writeHead(200, {'Content-Type': 'text/html'});
    response.end('<h2 style="text-align: center;">Hello World</h2>');
};
server=http.createServer(listener);
server.listener(3000);