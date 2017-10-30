var connection = new ActiveXObject("ADODB.Connection");

var connectionString="Data Source=localhost;Initial Catalog=el_gallery;User ID=mrel;Password=halo-2511";

connection.Open(connectionString);
var rs = new ActiveXObject("ADODB.Recordset");

rs.Open("select File from Anime", connection);
rs.MoveFirst
while(!rs.eof) {
	document.write(rs.fields(1));
	rs.movenext;
}

rs.close;
connection.close;

/*var objConnection = new window.requstFileSystem("adodb.connection");
var strConn = "driver{sql server};server=elstudios.org;database=el_gallery;uid=mrel;password=halo-2511";
objConnection.Open(strConn);
var rs = new window.requestFileSystem("ADODB.Recordset");
var strQuery = "select * from Anime";
rs.Open(strQuery, objConnection);
rs.MoveFirst();

/*var mysql = require('mysql');

var con = mysql.createConnection({
	host: "localhost",
	user: "mrel",
	password: "halo-2511"
});

con.connect(function(err) {
	if (err) throw err;
    message.InnerHTML = "Success!";
});*/








