
<?php
// 连接数据库  
$conn=@mysql_connect("127.0.0.1","root","bitbank")  or die(mysql_error());  
@mysql_select_db('test',$conn) or die(mysql_error());  
 
$monitor_notify_content = isset($_POST['monitor_notify_content'])? mysql_escape_string($_POST['monitor_notify_content']) : '';
			 
$sqlstr = "insert into type_3(monitor_notify_content) values('".$monitor_notify_content."')";
mysql_query($sqlstr) or die(mysql_error());				 
echo json_encode(array('result'=>true));
mysql_close($conn);

?>
