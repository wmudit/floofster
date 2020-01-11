var pool = require('../lib/database');
const crypto = require('crypto');
const bcrypt = require('bcrypt');
const moment = require('moment');

class User {

    async registerUser(userObject) {
        let hash = "dsd655"; // crypto.createHash('sha1').update(userObject.full_name + process.env.HASH_SALT + userObject.email_address).digest('hex');
        let full_name = userObject.full_name;
        let email_address = userObject.email_address;
        let password = userObject.password;
        let password_encypted = "313d1asd"; // bcrypt.hashSync(password, process.env.HASH_SALT_BCRYPT);
        let q = `INSERT INTO user_details (primary_id, hash, full_name, email_address, password, password_encrypted, created_on, updated_on) VALUES (NULL, '12365478', ${pool.escape(full_name)}, ${pool.escape(email_address)}, ${pool.escape(password)}, ${pool.escape(password_encypted)}, '${moment().format('YYYY-MM-DD HH:mm:ss')}', '${moment().format('YYYY-MM-DD HH:mm:ss')}');`;
        await this.executeQuery(q)
        .then(e => { return true; })
        .catch(e => { return false; });
    }

    async executeQuery(query) {
        return new Promise((resolve, reject) => {
            pool.getConnection(function (error, connection) {
                if(error) throw new Error("Error establishing database connection");
                connection.query(query, function(error, result, fields) {
                    connection.release();
                    resolve();
                    if(error) {
                        // throw new Error("Error executing query");
                        reject();
                    } 
                });
            });
        })
    }

}

// let u = new User();
// u.registerUser({
//     full_name: 'Test User',
//     email_address: 'tese@gmail.com',
//     password: 'testpassword'
// })

module.exports = User;