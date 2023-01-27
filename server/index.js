const express = require("express");
const app = express();
const bodyParser = require("body-parser");
const cors = require("cors");
const mysql = require("mysql2");

const db = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "2gi20cs181",
    database: "safewise"
});

app.use(cors());
app.use(express.json());
app.use(bodyParser.urlencoded({extended: true}));

app.get("/", (req, res) => {
    const sqlInsert = "INSERT INTO join_us (name, email, phone_number) VALUES ('vinit', '2gi20cs181@students.git.edu', 7019475833)";
    db.query(sqlInsert, (err, result) => {
        console.log("error", err);
        console.log("result", result);
        res.send("HOGAYA BHAI........");
    })
})

app.listen(5000, () => {
    console.log("Server is running on port 5000");
})
