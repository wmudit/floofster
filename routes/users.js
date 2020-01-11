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

router.post('/login', async function (req, res, next) {
	let userData = await login(user);
	if (userData) {

	} else {

	}
});

router.post('/logout', async function (req, res, next) {

});

let validInput = [
	body('input_name', 'Name cannot be empty').not().isEmpty().trim().escape(), 
	body('input_email', 'You entered an invalid email address').trim().escape().isEmail().normalizeEmail(),
	body('input_password', 'Password must be atleast 6 characters long').escape().isLength({ min: 6}),
	body('input_confirm_password', 'Passwords do not match').escape().not().isEmpty().custom((value, {req}) => { 
		if(value !== req.body.input_password)
			return false;
	}),
	body('input_tnc', 'You have to accept the terms & conditions').not().isEmpty()
]

router.post('/register', validInput, async function (req, res, next) {
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
		let resultObj = await userController.register(req.body);
		res.render('user/register-screen');
	}
});


module.exports = router;
