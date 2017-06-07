<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	define(BR, "<br/>");

//求123左移3位和右移3位值；
$v1 = 123;
$r1 = $v1 << 3;
$r2 = $v1 >> 3;
echo "r1 = $r1, r2 = $r2";
//实际上，左移n位就是连续乘n次的2
//右移n位就是连续除n次的2（每次都舍去小数部分）
	echo  BR.BR.BR;
	$n = 4;
	for ($i =1; $i <= $n; $i++) { 
		for ($j=1; $j <= $i ; $j++) { 
			echo "*";
		}
		echo "<br/>";
	}
echo BR.BR;

for ($i=1; $i <= $n; $i++) { 
	for ($j=1; $j <= 2* $i - 1; $j++) { 
		echo "*";

	}
  echo BR;

}
	echo  BR.BR.BR;
	$n = 5;
for ($i=1; $i <= $n; $i++) { 
		for ($k=1; $k<=$n-$i; $k++) { 
			echo "&nbsp;";
		}
	for ($j=1; $j <= 2* $i - 1; $j++) { 

		echo "*";
	}
  echo BR;

}



echo BR.BR;

for ($i=1; $i <= $n; $i++) { 
	for ($j=1; $j <= 2* $i - 1; $j++) { 
		echo "*";

	}
  echo BR;

}
echo BR.BR;
for ($i=1; $i <= $n; $i++) { 
		for ($k=1; $k<=$n-$i; $k++) { 
			echo "&nbsp;";
		}
	for ($j=1; $j <= 2* $i - 1; $j++) { 
		if ($j== 1 || $j == 2 * $i -1) {
			echo "*";
		}else{
			echo "&nbsp;";
		}

	}
  echo BR;

}

echo BR.BR;
	$n = 4;
for ($i=1; $i <= $n; $i++) { 
		for ($k=1; $k<=$n-$i+1; $k++) { 
			echo "&nbsp;";
		}
	for ($j=1; $j <= 2* $i - 1; $j++) { 
		if ($i == $n) {
				echo "*";
				
		}else{
		if ($j== 1 || $j == 2 * $i -1) {
			echo "*";
		}else{
			echo "&nbsp;";
		}

		}




	}
  echo BR;

}





?>

</body>
</html>