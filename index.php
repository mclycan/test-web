<?php
// 连接数据库  
$conn=@mysql_connect("127.0.0.1","root","bitbank")  or die(mysql_error());  
@mysql_select_db('test',$conn) or die(mysql_error());  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>TEST PAGE 1</title>
	</head>
			   
	<body>
		<form name="form1" method="post" action="index.php">
		<h2 class="subtitle">JSON type 1</h2>
		<p><input type="submit" name="b1" value="refresh"></p>
		<p><a href="2.php">NEXT</a></p>
		</form>
					    

<?php
	$sqlstr = "select * from type_1 order by id";
	$query = mysql_query($sqlstr) or die(mysql_error());
	$result = array();
	while($thread=mysql_fetch_assoc($query)){
		$result[] = $thread;
	}
				 
	if($result){
		echo '<table>';
		echo '<th>NO</th><th>tx_hash</th><th>address</th><th>amount</th><th>complete</th><th>block_no</th>';
		foreach($result as $row){
			echo '<tr>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['tx_hash'].'</td>';
			echo '<td>'.$row['address'].'</td>';
			echo '<td>'.$row['amount'].'</td>';
			echo '<td>'.$row['complete'].'</td>';
			echo '<td>'.$row['block_no'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
					 
?>
						    
	</body>
	</html>
