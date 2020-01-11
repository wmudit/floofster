var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
	res.render('home/home-feed', {
		title: 'Floofster',
		loggedIn: req.session.loggedIn,
		userData: req.session.userData
	});
});

module.exports = router;
