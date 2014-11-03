var express = require('express')
var router = express.Router()
var soap = require('soap')
var url = 'https://ws.hubsoft.com/services/SiteService?wsdl'

// login page
router.get('/', function(req, res) {
  var args = {userName: 'admin', password: 'password', accessKey: '83iJiJNkte'}
  soap.createClient(url, function(err, client) {
    client.authUser(args, function(err, result) {
      console.log(result)
    })
  })

  res.render('login', { title:'Login' })
})

module.exports = router
