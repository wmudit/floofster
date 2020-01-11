var User = require('../models/UserModel');

class UserController {

    constructor() {
        this.user = new User();
    }

    async register(userObj) {
        let userObject = {};
        userObject.full_name = userObj.input_name;
        userObject.email_address = userObj.input_email;
        userObject.password = userObj.input_password;
        return (this.errorsInUserInput(userObj)) ? await this.user.registerUser(userObject) : {};
    }

    errorsInUserInput(userObj) {
        let returnObj = {};

        return false;
    }

    validEmail(email) {
        email.match()
    }

}

module.exports = UserController;