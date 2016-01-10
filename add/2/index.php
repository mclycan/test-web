
<?php
// 连接数据库  
$conn=@mysql_connect("127.0.0.1","root","bitbank")  or die(mysql_error());  
@mysql_select_db('test',$conn) or die(mysql_error());  
 
$tx_hash = isset($_POST['tx_hash'])? mysql_escape_string($_POST['tx_hash']) : '';
$complete = isset($_POST['complete'])? mysql_escape_string($_POST['complete']) : '';
$block_no = isset($_POST['block_no'])? mysql_escape_string($_POST['block_no']) : '';
$tx_tag = isset($_POST['tx_tag'])? mysql_escape_string($_POST['tx_tag']) : '';
			 
$sqlstr = "insert into type_2(tx_hash, complete, block_no, tx_tag) values('".$tx_hash."', '".$complete."', '".$block_no."', '".$tx_tag."')";
mysql_query($sqlstr) or die(mysql_error());				 
echo json_encode(array('result'=>true));
mysql_close($conn);

?>
