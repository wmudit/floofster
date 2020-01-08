var express = require('express');
var router = express.Router();

router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});

router.get('/login', function(req, res, next) {
  res.render('user/login-screen', {
    title: 'Login to Floofster'
  });
});

router.get('/register', function(req, res, next) {
  res.render('user/register-screen', {
    title: 'Register on Floofster'
  });
});

router.post('/login', async function(req, res, next) {
  let userData = await login(user);
  if(userData) {

  } else {

  }
});

router.post('/logout', async function(req, res, next) {

});

module.exports = router;
