var express = require('express');
var morgan = require('morgan');
var path = require('path');

var app = express();
app.use(morgan('combined'));

var articles = {
    articleOne : {
        title : 'Article One | Bhaskar Bansal',
        heading : 'Article One',
        date : 'Oct,10 Tues,2016',
        content : `
        <p>
            This is the content section for my first article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>
        <p>
            This is the content section for my first article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>
        <p>
            This is the content section for my first article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>`
    },
    articleTwo : {
        title : 'Article Two | Bhaskar Bansal',
        heading : 'Article Two',
        date : 'Oct,11 Wed,2016',
        content : `
        <p>
            This is the content section for my second article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>
        <p>
            This is the content section for my second article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>
        <p>
            This is the content section for my second article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>`
    },
    articleThree : {
        title : 'Article Three | Bhaskar Bansal',
        heading : 'Article Three',
        date : 'Oct,12 Thur,2016',
        content : `
        <p>
            This is the content section for my third article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>
        <p>
            This is the content section for my third article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>
        <p>
            This is the content section for my third article. This arcticle is about the IMAD course which I am doing these days. 
                I am learning about web-app development, server-client, networking and databases.
                Hope I get to learn something useful from this course. 
                Thanks!
        </p>`
    }
}
function createHtml(data){
    var title = data.title;
    var date = data.date;
    var heading = data.heading;
    var content = data.content;
    var htmlTemplate = `
    <html>
        <head>
            <title>
                ${title}
            </title>
            <meta name="viewport" content="width-device-width, initial-scale=1" />
            <link href="/ui/style.css" rel="stylesheet" />
        </head>
        
        <body>
            <div class="container">
                <div>
                    <a href="/">Home</a>
                </div>
                <hr/>
                <div>
                    <h3>
                        ${heading}
                    </h3>
                </div>
                <div>
                    ${date}
                </div>
                <div>
                    ${content}
                </div>
            </div>
        </body>
    </html>
    `;
return htmlTemplate;
}

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.html'));
});

app.get('/:articleName',function(req,res){
    var articleName = req.params.articleName;
    res.send(createHtml(articles[articleName]));
});

app.get('/ui/style.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'style.css'));
});

app.get('/ui/madi.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'madi.png'));
});


var port = 8080; // Use 8080 for local development because you might already have apache running on 80
app.listen(8080, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
