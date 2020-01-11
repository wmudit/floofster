require('dotenv').config();
var createError = require('http-errors');
var express = require('express');
var session = require('express-session');
var { uuid } = require('uuidv4');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var user = require('./models/UserModel');

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'hbs');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());

app.use(session({
	genid: function (req) {
		return uuid()
	},
	secret: 'soft kitty',
	resave: false,
	saveUninitialized: false,
	cookie: {
		maxAge: 1 * 60 * 60 * 1000
	}
}))

app.use('/public', express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/user', usersRouter);

// catch 404 and forward to error handler
app.use(function (req, res, next) {
	next(createError(404));
});

// error handler
app.use(function (err, req, res, next) {
	// set locals, only providing error in development
	res.locals.message = err.message;
	res.locals.error = req.app.get('env') === 'development' ? err : {};

	// render the error page
	res.status(err.status || 500);
	res.render(`errors/error-${err.status}`);
});

module.exports = app;
