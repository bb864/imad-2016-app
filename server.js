var express = require('express');
var morgan = require('morgan');
var path = require('path');

var app = express();
app.use(morgan('combined'));

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.html'));
});

app.get('/ui/style.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'style.css'));
});

app.get('/ui/index.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.css'));
});

app.get('/ui/bhaskar.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'bhaskar.jpg'));
});

app.get('/ui/contact.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'contact.png'));
});

app.get('/ui/contact.php', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'contact.php'));
});

app.get('/ui/modal.php', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'modal.php'));
});

app.post('/ui/contact_script.php', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'contact_script.php'));
});

app.get('/ui/connection.php', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'connection.php'));
});

app.get('/ui/navbar-after-login.php', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'navbar-after-login.php'));
});

app.get('/ui/login_script.php', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'login_script.php'));
});



var port = 8080; // Use 8080 for local development because you might already have apache running on 80
app.listen(8080, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
