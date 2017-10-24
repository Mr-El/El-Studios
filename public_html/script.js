

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


	function anime() {
		document.getElementById("displayAnime").innerHTML = "it works!";
		
	}






