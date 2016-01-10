
<?php
// 连接数据库  
$conn=@mysql_connect("127.0.0.1","root","bitbank")  or die(mysql_error());  
@mysql_select_db('test',$conn) or die(mysql_error());  
 
$tx_hash = isset($_POST['tx_hash'])? mysql_escape_string($_POST['tx_hash']) : '';
$address = isset($_POST['address'])? mysql_escape_string($_POST['address']) : '';
$amount = isset($_POST['amount'])? mysql_escape_string($_POST['amount']) : '';
$complete = isset($_POST['complete'])? mysql_escape_string($_POST['complete']) : '';
$block_no = isset($_POST['block_no'])? mysql_escape_string($_POST['block_no']) : '';
			 
$sqlstr = "insert into type_1(tx_hash, address, amount, complete, block_no) values('".$tx_hash."', '".$address."', '".$amount."', '".$complete."', '".$block_no."')";
mysql_query($sqlstr) or die(mysql_error());				 
echo json_encode(array('result'=>true));
mysql_close($conn);

?>
