var mysql = require("mysql");

var pool = mysql.createPool({
    connectionLimit: process.env.MYSQL_POOL_LIMIT,
    host: process.env.RDS_HOSTNAME,
    user: process.env.RDS_USERNAME,
    password: process.env.RDS_PASSWORD,
    database: process.env.RDS_DB_NAME,
    port: process.env.RDS_PORT
});

pool.on('connection', function(connection) {
    console.log('Connection Established');
    connection.on('error', function(err) {
        console.error('Connection Error');
    });
    connection.on('close', function(err) {
        console.error('Connection Closed');
    });
});

pool.on('acquire', function (connection) {
    console.log('Connection %d acquired', connection.threadId);
});

pool.on('enqueue', function () {
    console.log('Waiting for available connection slot');
});

pool.on('release', function (connection) {
    console.log('Connection %d released', connection.threadId);
});

module.exports = pool;