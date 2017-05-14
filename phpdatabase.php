<?php
//数据库的操作步骤
	//1、连接数据库
//	函数：$conn=mysqli_connect(sever,user,password,dbname)
	//2、选择数据库
	//	mysqli_select_db();
	//3、编写sql语句
		//有啥墨迹的，写代码
		mysqli_query($conn,$sql);
		//失败是返回false；
		//对数据的查询操作，select，show，describe或explain

		$sql = 'select * from users';
		$result = mysqli_qur=ery($connect,$sql);
		$row = mysqli_fetch_assoc($result);
		echo '<pre>';
		print_r($row);
		echo '<pre>';

		$sql = 'select * from users';
		$result = mysqli_qur=ery($connect,$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo '<pre>';
			print_r($row);
			echo '<pre>';				
		}

		
		$sql = 'select * from users';
		$result = mysqli_qur=ery($connect,$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo 'id:'.$row['id'].';';
			echo '用户名'.$row['username'].':';
			echo 'email:'.$row['email'].'<br/>';
		}

		$users = array();    //建立一个空的数组
		while($row = mysqli_fetch_assoc($result)){
			$users[] = $row;	//将循环取到的信息每循环一次填入一次
		}
	//4、执行sql语句
		//调用函数mysqli_query()取得计算结果
		//获取结果集中的数据
			mysqli_fetch_assoc();   //返回的是关联数组
			mysqli_fetch_row();     //返回的是索引数组
			mysqli_fetch_array();//都返回了
	//5、关闭数据库连接
		mysqli_close($conn);

mysqli_insert_id($link) //取得上一步insert操作产生的id
    mysqli_error()  //可以详细显示出错信息

?>
