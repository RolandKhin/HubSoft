var express = require('express')
var soap = require('soap')
var config = require('config')

var router = express.Router()

// login page
router.get('/', function(req, res) {
  res.render('login')
})

router.post('/login', function(req, res) {
  if (req.body.username && req.body.password) {
    var args = {userName: req.body.username, password: req.body.password, accessKey: '83iJiJNkte'}
    soap.createClient(config.hubsoft.soap.url, function(err, client) {
      client.authUser(args, function(err, result) {
        if (err) console.log(err.root.Envelope.Body.Fault)
        else {
          res.writeHead(302, {'Location': config.hubsoft.loginUrl + result.out})
          res.end()
        }
      })
    })
  }
  else {
    res.send("Username and password are required.")
  }
})

module.exports = router
