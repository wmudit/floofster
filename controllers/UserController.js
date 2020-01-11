var User = require('../models/UserModel');

class UserController {

    constructor() {
        this.user = new User();
    }

    async login(userObj) {
        let userObject = {};
        userObject.email_address = userObj.input_email;
        userObject.password = userObj.input_password;
        return await this.user.loginUser(userObject);
    }

    async register(userObj) {
        let userObject = {};
        userObject.full_name = userObj.input_name;
        userObject.email_address = userObj.input_email;
        userObject.password = userObj.input_password;
        return await this.user.registerUser(userObject);
    }

}

module.exports = UserController;