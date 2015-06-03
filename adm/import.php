<?php
function csvimport(){
	$filename=$_FILES['***']['name'];
	$tm=explode(".",$filename);
	$file_tmp=$tm['1'];
	if(strtolower($file_tmp)=="csv")
	{
		//echo $file."<br>";
		$ha=fopen("upload/".$filename,"r");
		while($data=fgetcsv($ha))
		{
			/*list($fieldid,$fieldname,$htmltype,$datatype)=$data;
			 echo $fieldid."  ".$fieldname."  ".$htmltype."  ".$datatype."<br>";*///这里输出CSV文件的内容
			$sql="insert into csv_db(fieldid,fieldname,htmltype,datatype)
			values('$fieldid','$fieldname','$htmltype','$datatype')";
			//echo $sql;exit;//便于调试查看sql语句
			$conn=mysql_connect("localhost","root","root");
			if(mysql_select_db("insertcsv"))
			{
				mysql_query($sql);
			}
		}
	}
}



function sqlimport(){
	define("DbHost", "localhost"); //数据库主机
	define("DbUser", "root"); //数据库用户
	define("DbPass", "password"); //数据库口令
	mysql_connect(DbHost,DbUser,DbPass) or die("不能连接服务器!");
	mysql_create_db("dbname") or die("不能建立数据库,可能您已经安装过了");
	mysql_select_db("dbname") or die("不能选择数据库,安装失败");
	$fp=fopen("install.sql","r") or die("不能打开SQL文件,请检查");
	$sql=fread($fp,filesize("install.sql"));
	fclose($fp);
	$sql=explode(";",$sql);
	for($i=0;$i=mysql_query($sql[$i]);
	
	//echo("安装成功");
}
