<?php

require_once('dbconfig.php');
include('smtp.php');

$aws_key_PEM = 'sdXasdadsasd';
$passwd = 'addaGauss';

$d = '1';
$m = '1';

for ($m = '1'; $m < '12'; $m++)
{
for ($d = '1'; $d <= '31'; $d++)
{
if ($m < 10) $m2 = '0'.$m; else $m2 = $m;
if ($d < 10) $d2 = '0'.$d; else $d2 = $d;

$result = mysqli_query($connection,"select distinct user_id as a from cp_purchase_transaction_history where chip_type = 'real' and modified_on like '2013-".$m2."-".$d2."%' and status = 'approved'");
//echo "select distinct user_id as a from cp_purchase_transaction_history where chip_type = 'real' and modified_on like '2014-".$m2."-".$d2."%' and status = 'approved'";
$res = mysqli_num_rows($result);
echo $res, ' ', '\n';
$result = '';
}
}
?>
