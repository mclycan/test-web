<?php
// 连接数据库  
$conn=@mysql_connect("127.0.0.1","root","bitbank")  or die(mysql_error());  
@mysql_select_db('test',$conn) or die(mysql_error());  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>TEST PAGE 3</title>
	</head>
			   
	<body>
		<form name="form1" method="post" action="3.php">
		<h2 class="subtitle">JSON type 3</h2>
		<p><input type="submit" name="b1" value="refresh"></p>
		<p><a href="2.php">BACK</a></p>
		</form>
					    

<?php
	$sqlstr = "select * from type_3 order by id";
	$query = mysql_query($sqlstr) or die(mysql_error());
	$result = array();
	while($thread=mysql_fetch_assoc($query)){
		$result[] = $thread;
	}
				 
	if($result){
		echo '<table>';
		echo '<th>NO</th><th>monitor_notify_content</th>';
		foreach($result as $row){
			echo '<tr>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['monitor_notify_content'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
					 
?>
						    
	</body>
	</html>
