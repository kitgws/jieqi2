<?php
#==================================================================================================
#	Filename: class/db/mysql.php
#	Note	: 连接数据库类
#	Version : 3.0
#	Author  : qinggan
#	Update  : 2008-05-27
#==================================================================================================

#[类库sql]
class DB_SQL
{
	var $queryCount = 0;
	var $host;
	var $user;
	var $pass;
	var $data;
	var $conn;
	var $result;
	var $rsType = MYSQL_ASSOC;
	var $queryTimes = 0;#[查询时间]
	var $connTimes = 0;#[连接数据库时间]
	var $unbuffered = false;#[是否使用不使用结果缓存集查询功能，默认为不使用]
	var $dbconn = false;#[是否使用持久链接，true为启用，false为不使用]

	#[构造函数]
	function __construct($dbhost="",$dbuser="",$dbpass="")
	{
		$this->host = $dbhost;
		$this->user = $dbuser;
		$this->pass = $dbpass;
	}

	#[兼容PHP4]
	function DB_SQL($dbhost="",$dbuser="",$dbpass="")
	{
		$this->__construct($dbhost,$dbuser,$dbpass);
	}

	#[连接数据库]
	function Connect($data="")
	{
		$starttime = $this->TimeUsed();
		$func = $this->dbconn ? "mysql_pconnect" : "mysql_connect";
		$this->conn = $func($this->host,$this->user,$this->pass) or die(mysql_errno().": ".mysql_error());

		$mysql_version = $this->GetVersion();

		if($mysql_version>"4.1")
		{
			mysql_query("SET NAMES 'utf8'",$this->conn);
		}

		if($mysql_version>"5.0.1")
		{
			mysql_query("SET sql_mode=''",$this->conn);
		}

		$endtime = $this->TimeUsed();
		$this->connTimes += round($endtime - $starttime,5);#[连接数据库的时间]

		if($data)
		{
			$this->SelectDb($data);
		}
	}

	function SelectDb($data="")
	{
		$database = $data ? $data : $this->data;
		if(!$database)
		{
			return false;
		}
		$this->data = $database;
		$starttime = $this->TimeUsed();
		@mysql_select_db($this->data) or die(mysql_errno().": ".mysql_error());
		$endtime = $this->TimeUsed();
		$this->connTimes += round($endtime - $starttime,5);#[连接数据库的时间]
	}

	#[关闭数据库连接，当您使用持续连接时该功能失效]
	function Close()
	{
		return @mysql_close($this->conn);
	}

	#[在本系统下使用无效！]
	#[直接关闭放在session类里]
	function __destruct()
	{
		@session_write_close();#[关闭session写入]
		return $this->Close();
	}

	function Set($name,$value)
	{
		if($name == "rsType")
		{
			$value = $value == "NUM" ? MYSQL_NUM : MYSQL_ASSOC;
		}
		$this->$name = $value;
	}

	function Query($sql)
	{
		$starttime = $this->TimeUsed();
		$func = $this->unbuffered && @function_exists("mysql_unbuffered_query") ? "mysql_unbuffered_query" : "mysql_query";
		$this->result = @$func($sql,$this->conn);
		$this->queryCount++;
		$endtime = $this->TimeUsed();
		$this->queryTimes += round($endtime - $starttime,5);#[查询时间]
		if(!$this->result)
		{
			return false;
		}
		return $this->result;
	}

	function GetAll($sql="",$primary="")
	{
		$result = $sql ? $this->Query($sql) : $this->result;
		if(!$result)
		{
			return false;
		}
		$starttime = $this->TimeUsed();
		while($rows = mysql_fetch_array($result,$this->rsType))
		{
			if($primary && $rows[$primary])
			{
				$rs[$rows[$primary]] = $rows;
			}
			else
			{
				$rs[] = $rows;
			}
		}
		$endtime = $this->TimeUsed();
		$this->queryTimes += round($endtime - $starttime,5);#[查询时间]
		return ($rs ? $rs : false);
	}

	function GetOne($sql="")
	{
		$starttime = $this->TimeUsed();
		$result = $sql ? $this->Query($sql) : $this->result;
		if(!$result)
		{
			return false;
		}
		$rows = mysql_fetch_array($result,$this->rsType);
		$endtime = $this->TimeUsed();
		$this->queryTimes += round($endtime - $starttime,5);#[查询时间]
		return $rows;
	}

	function InsertId($sql="")
	{
		if($sql)
		{
			$rs = $this->GetOne($sql);
			return $rs;
		}
		else
		{
			return mysql_insert_id($this->conn);
		}
	}

	function Insert($sql)
	{
		$this->result = $this->Query($sql);
		$id = $this->InsertId();
		return $id;
	}

	//数组插入
	function a_insert($table,$dataArray) {  

         $field = "";  

         $value = "";  

         if( !is_array($dataArray) || count($dataArray)<=0) {  

             echo "没有要插入的数据";  

             return false;  

         }  

         while(list($key,$val)=each($dataArray)) {  

             $field .="$key,";  

             $value .="'$val',";  

         }  

         $field = substr( $field,0,-1);  

         $value = substr( $value,0,-1);  

         $sql = "insert into $table($field) values($value)";  

         if(!$this->Query($sql)) return false;  

         return true;  

     }  

    

     //数组更新  

     function a_update( $table,$dataArray,$condition="") {  

         if( !is_array($dataArray) || count($dataArray)<=0) {  

             echo "没有要更新的数据";  

             return false;  

         }  

         $value = "";  

         while( list($key,$val) = each($dataArray)) { 

         $value .= "$key = '$val',";  
		 
		 }
         $value = substr( $value,0,-1);  

         $sql = "update $table set $value where 1=1 and $condition";  

         if(!$this->Query($sql)) return false;  

         return true;  

     }
	
	function Count($sql="")
	{
		if($sql)
		{
			$this->rsType = MYSQL_NUM;
			$this->Query($sql);
			$rs = $this->GetOne();
			$this->rsType = MYSQL_ASSOC;
			return $rs[0];
		}
		else
		{
			$rsC = mysql_num_rows($this->result);
			return $rsC;
		}
	}

	function NumFields($sql="")
	{
		if($sql)
		{
			$this->Query($sql);
		}
		return @mysql_num_fields($this->result);
	}

	function ListFields($table)
	{
		$rs = $this->GetAll("SHOW COLUMNS FROM ".$table);
		if(!$rs)
		{
			return false;
		}
		foreach($rs AS $key=>$value)
		{
			$rslist[] = $value["Filed"];
		}
		return $rslist;
	}


	function ListTables()
	{
		$rs = $this->GetAll("SHOW TABLES");
		return $rs;
	}

	function TableName($table_list,$i)
	{
		return $table_list[$i];
	}

	function EscapeString($char)
	{
		if(!$char)
		{
			return false;
		}
		return @mysql_escape_string($char);
	}

	function GetVersion()
	{
		return mysql_get_server_info($this->conn);
	}

	function TimeUsed()
	{
		$time = explode(" ",microtime());
		$used_time = $time[0] + $time[1];
		return $used_time;
	}

	#[兼容以前的操作，以下函数将在新版中放弃使用]
	function qgClose()
	{
		return $this->Close();
	}

	function qgQuery($sql,$type="ASSOC")
	{
		return $this->Query($sql,$type);
	}

	function qgGetAll($sql="",$primary="")
	{
		return $this->GetAll($sql,$primary);
	}

	function qgGetOne($sql="")
	{
		return $this->GetOne($sql);
	}

	function qgInsertID($sql="")
	{
		return $this->InsertId($sql);
	}

	function qgInsert($sql)
	{
		return $this->Insert($sql);
	}

	function qg_count($sql="")
	{
		return $this->Count($sql);
	}

	function qgCount($sql="")
	{
		return $this->Count($sql);
	}

	function qgNumFields($sql = "")
	{
		return $this->NumFields($sql);
	}

	function qgListFields($table)
	{
		return $this->ListFields($table);
	}

	function qgListTables()
	{
		return $this->ListTables();
	}

	function qgTableName($tablelist,$i)
	{
		return $this->TableName($table_ist,$i);
	}

	function qgEscapeString($char)
	{
		return $this->EscapeString($char);
	}
}
?>