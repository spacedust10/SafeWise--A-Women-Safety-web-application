const{
    createPool
} = require('mysql');

const pool =createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "SafeWise",
    connectionLimit: 20
})

//query example
pool.query('select * from table_name where <condition> = ?',[0/*anyvalue*/]), (err, result, fields) => {
    if(err){
        return console.log(err);
    }
    return console.log(result);
}