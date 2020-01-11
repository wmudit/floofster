var express = require('express');
var router = express.Router();
const { validationResult, body, sanitize } = require('express-validator');
var userController = require('../controllers/UserController');
userController = new userController();

router.get('/', function (req, res, next) {
	res.send('respond with a resource');
});

router.get('/login', function (req, res, next) {
	res.render('user/login-screen', {
		title: 'Login to Floofster'
	});
});

router.get('/register', function (req, res, next) {
	res.render('user/register-screen', {
		title: 'Register on Floofster',
		// alert : {
		// 	warning: {
		// 		message: {
		// 			input_name: 'Name error',
		// 			input_email: 'Email error',
		// 			input_password: 'Password error',
		// 			input_confirm_password: '',
		// 			input_tnc: 'You need to accept this, Bitch!'
		// 		}
		// 	}
		// }
	});
});

let validLoginInput = [
	body('input_email', 'Invalid email address').trim().escape().isEmail().normalizeEmail(),
	body('input_password', 'Password cannot be empty').escape().not().isEmpty()
]

router.post('/login', validLoginInput, async function (req, res, next) {
	let errors = validationResult(req);
	if(!errors.isEmpty()) {
		let alertObj = {}, warningObj = {}, messsageObj = {};
		errors.errors.map(e => {
			messsageObj[e.param] = e.msg;
		});
		warningObj.message = messsageObj;
		alertObj.warning = warningObj;
		res.render('user/login-screen', {
			title: 'Login to Floofster',
			alert: alertObj
		})
	} else {
		let loginResult = await userController.login(req.body);
		if(loginResult) {
			req.session.loggedIn = true;
			req.session.userData = loginResult;
			res.redirect('/');
		} else {
			res.render('user/login', {
				alert : {
					warning: {
						message : {
							invalidLogin : true
						}
					}
				}
			})
		}
	}
});

router.post('/logout', async function (req, res, next) {

});

let validRegisterInput = [
	body('input_name', 'Name cannot be empty').not().isEmpty().trim().escape(), 
	body('input_email', 'Invalid email address').trim().escape().isEmail().normalizeEmail(),
	body('input_password', 'Password must be atleast 6 characters long').escape().isLength({ min: 6}),
	body('input_confirm_password', 'Passwords do not match').not().isEmpty().custom((value, {req}) => { 
		if(value != req.body.input_password)
			return false;
		return true;
	}),
	body('input_tnc', 'You have to accept the terms & conditions').not().isEmpty()
]

router.post('/register', validRegisterInput, async function (req, res, next) {
	let errors = validationResult(req);
	if(!errors.isEmpty()) {
		let alertObj = {}, warningObj = {}, messsageObj = {};
		errors.errors.map(e => {
			messsageObj[e.param] = e.msg;
		});
		warningObj.message = messsageObj;
		alertObj.warning = warningObj;
		res.render('user/register-screen', {
			title: 'Register on Floofster',
			alert: alertObj
		})
	} else {
		let registerResult = await userController.register(req.body);
		if(registerResult) {
			res.render('user/register-screen', {
				alert : {
					success : true
				}
			});
		} else {
			res.status(500);
			res.render('errors/error-500');
		}
	}
});

module.exports = router;