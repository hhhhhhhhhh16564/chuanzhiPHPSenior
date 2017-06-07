<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
 <body>
<?php
$result="";

 if($_POST){
		$num=intval($_POST['num']);
 }

 echo "方法1：";
 echo  getCount(11100000,11110000);		//求某个范围中的素数的个数及耗时
 echo "<br />方法2：";
 echo getCount2(11100000,11110000);		//求某个范围中的素数的个数及耗时
	
	//方法1
	function getCount($n1,$n2){
		$c = 0;
		$t1 = microtime(true);
		for($i=$n1;$i<$n2;$i++){
			if(is_ss($i)){
				$c++;
			}
		}
		$t2 = microtime(true);
		return $c . ",耗时：" . ($t2-$t1);
	}
	function is_ss($n){
		for($m=2;$m<=pow($n,1/2);$m++){
			if($n % $m == 0){
				return false;
				break;
			}
		}
		return true;
	}


	//方法2：经我测试，这个算法确实对1亿以内的数有效，但效率其实并不如方法1高。
	function getCount2($n1,$n2){
		$c = 0;
		$t1 = microtime(true);
		for($num = $n1; $num < $n2; $num++){
			if(is_numeric($num) && $num>1 && $num<=10000){
				if(is_sushu_small($num)){
					$result=$num.'是素数';
					$c++;
				}else{
					$result=$num.'不是素数';  
				}
		   }elseif(is_numeric($num) && $num>10000 && $num<=100000000){
				if(is_sushu_big($num)){
					$result=$num.'是素数';
					$c++;
				}else{
					$result=$num.'不是素数';  
				}
		   }else{
				$result=$num.'不符合要求';
		   }
		}
		$t2 = microtime(true);
		return $c . ",耗时：" . ($t2-$t1);
	}
    //下面的函数只能测试10000以下的正整数
	function is_sushu_small($num){
        //下面是三个判断条件：参数必须是数字，且大于1，小于等于10000
		if(is_numeric($num) && $num>1 && $num<=10000){

			switch($num){
				//10以内大于1的数字,2、3、5、7是素数
						case 2: return true;
						case 3: return true;
						case 5: return true;
						case 7: return true;
						default:
							//所有能被2、3、5、7整除的数都不是素数
							if($num%2 == 0 || $num%3 == 0 || $num%5 ==0 || $num%7 == 0){
								 return false;
							}
							//不符合上面if语句的大于1小于等于100的数，都是素数
                           if($num>1 && $num<=100){
							    return true;
		                   }
						   //上面两个if语句足可以把100以内的数字做出判断，下面是判断100到10000之间的数
                           if($num<=10000){
								//下面的for循环是把100以内的素数找出。
								for($i=11;$i<=ceil(sqrt($num));$i++){
									if($i%2 != 0 && $i%3 != 0 && $i%5 != 0 && $i%7 != 0){
										//$i满足上面的条件就是素数，$num被素数$i整除，那$num就不是素数
											  if($num%$i == 0){
											  //echo "{$num}能被{$i}整除";
                                                return false;
									          }
									}
								}
								//不符合上面if语句的大于100小于等于10000的数，就是素数
                                return true;
		                  }
		     }

		}else{		
			return false;
		}
	}

    //下面的函数测试10000到100000000的正整数
	function is_sushu_big($num){
        //下面是三个判断条件：参数必须是数字，且大于10000，小于等于100000000
		if(is_numeric($num) && $num>10000 && $num<=100000000){
							//所有能被2、3、5、7整除的数都不是素数
							if($num%2 == 0 || $num%3 == 0 || $num%5 ==0 || $num%7 == 0){
								 return false;
							}
								
								//下面的for循环是把100以内的素数找出。
								for($i=11;$i<=97;$i++){
									if($i%2 != 0 && $i%3 != 0 && $i%5 != 0 && $i%7 != 0){
										//$i满足上面的条件就是素数，$num被素数$i整除，那$num就不是素数
											  if($num%$i == 0){
												//echo "{$num}能被{$i}整除";
                                                return false;
									          }
									}
								}

								//下面的for循环是把10000以内的素数找出。
								for($i=101;$i<=ceil(sqrt($num));$i++){
									if(is_sushu_small($i)){
										//$i满足上面的条件就是素数，$num被素数$i整除，那$num就不是素数
                                         if($num%$i == 0){
										//echo "{$num}能被{$i}整除";
                                         return false;
									  }
									}
								}
								//不符合上面if语句的的数，就是素数
                                return true;

		}else{		
			return false;
		}

	}
?>
  <form action="" method="post">
     <input type="text" name="num" />
	 <input type="submit" value="提交" />
	 <input type="text" value="<?php echo $result ?>" />
  </form>
 </body>
</html>