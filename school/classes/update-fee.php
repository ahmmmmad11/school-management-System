<?php
// the next code is for updating the fee of the new acadimic year

spl_autoload_register(function($class){
	require $class . ".php";
});

class fee_update{
	public function updation($classe, $fee){
		$te = new Connect();
		$sql = "UPDATE fee SET fee='$fee' WHERE classe='$classe'";
		$rs = mysqli_query($te->connection(), $sql);
		if ($rs) {
			echo "تم التعديل";
		}
	}
}
$classe = $_POST["classe"];
$fee = $_POST["fee"];
$up =new fee_update();
$up->updation($classe, $fee);