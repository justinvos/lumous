var express = require("express");
var app = express();

var path = require('path');


app.use(express.static(__dirname + '/views'));

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname + "/views/index.html"));
});


app.listen(3000, function () {
  console.log('Lumous server on port 3000');
});
