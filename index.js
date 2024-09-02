const express = require("express");
const bodyParser = require("body-parser");
const mongoose = require("mongoose");
const routes = require("./routes/api");
require("dotenv").config();

const app = express();

const port = process.env.PORT || 5000;


// Connect to database
mongoose
  .connect(process.env.DB, { useNewUrlParser: true })
  .then(() => console.log("Database successfully connected."))
  .catch((err) => console.log(err));


  // Since Mongoose's Promise is deprecated, override with Node's Promise
mongoose.Promise = global.Promise;


app.use((req, res, next) => {
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Acess-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
  next();
});

app.use(bodyParser.json());

app.use("/api", routes);

app.use((req, res, next) => {
  console.log(err);
  next();
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});