<!DOCTYPE html>
<html>
<head>
	<title>Info User</title>
	<style>
table {
	margin-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
h2{font-family: sans-serif,'Helvetica';}
</style>

</head>
<body>
<center><h2>Info User</h2></center>


	<table>
        <tr>
            <th>User</th>	
        </tr>
        <tr>
            <td>{{$user}}</td>
        </tr>
		<tr>
            <th>Ip</th>
            <th>Browser</th>
        </tr>
		<tr>
            <td>{{$ipJSON}}</td>
            <td>{{$browserJSON}}</td> 
        </tr>
        <tr>
            <th>Header</th>	
        </tr>
        <tr>
            <th>Host</th>
            <th>Header</th>
        </tr>
        <tr> 
            <td>{{$hostJSON}}</td>
            <td>{{$headerJSON}}</td>
        </tr>
	</table>

</body>
</html>
