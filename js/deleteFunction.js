<script>
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "psy"
});

var id = $readrow['patient_id'];

con.connect(function(err) {
  if (err) throw err;
  //Delete all customers with the address "Mountain 21":
  var sql = "DELETE FROM medicines WHERE id = "id"";
  con.query(sql, function (err));
});





</script>