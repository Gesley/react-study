var express = require('express');
var app = express();

app.use(express.static(__dirname + '\\'));

app.listen(process.env.PORT || 8081);

console.log(__dirname + '\\' );

console.log("server ok na porta 8081");