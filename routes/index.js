var express = require('express');
var router = express.Router();
var pool = require('../lib/database');

/* GET home page. */
router.get('/', function(req, res, next) {
  pool.getConnection(function(err, connection) {
    if(err) throw err;
    connection.release();
  })
  res.render('home/home-feed', {
    title: 'Floofster',
    loggedIn: req.session.loggedIn,
    userData: req.session.userData
  });
});

module.exports = router;
