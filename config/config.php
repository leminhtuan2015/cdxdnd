<?php
global $link;
function logDebug($mess){
  // error_log( date('d.m.Y h:i:s') . " $mess \n", 3, "log.log");
}
function connect(){
  global $link;  
  //$link = mysql_connect('localhost', 'tscdxdndedudba', 'a8yga5ygy');
  // $link = mysql_connect('localhost', 'cdxdndedusql1', 'iB6smo');
  $link = mysql_connect(':/cloudsql/b3ful68:us-central1:ksmysql', 'root', '');
  if (!$link) {
      die('<br/>Khong ket noi duoc: ' . mysql_error());
  }  
  //mysql_select_db('tscdxdndedu_db', $link) or die('Could not select database.');
  mysql_select_db('cdxdndedusql1', $link) or die('Could not select database.');
  mysql_query("SET NAMES utf8", $link);
}

function close(){
  global $link;
  mysql_close($link);
}
function select_one($sql){
  $data = exec_select($sql);
  if (!$data) return null;
  return $data[0];
}
function exec_select($sql){
  logDebug("sql=[$sql]");//de fix bug
  connect();
  $ret = isset($ret) ? $ret : "";
  $res = mysql_query($sql) ;
  $row = array();
  //Lay loi sau khi thuc hien truy van
  $err = mysql_error();
  //kiem tra
  if ($err){
    var_dump($err);
    logDebug("Khong the select duoc,ERROR=[" . $err . "]" );
    logDebug(  "COUNT=[0]" );
    return null;
  }
  //Khong co loi
  if ($res ){
    $i = 1;
    //lay tung dong ket qua
    while( $row = mysql_fetch_array($res,MYSQL_ASSOC) )
    {        
      $ret[]= $row ;
    }
    mysql_free_result($res);
  }  
  close();
  return $ret;
}
function exec_update($sql){
  logDebug( "<!-- sql=[$sql] -->");//de fix bug
  connect();
  $res = mysql_query($sql) ;
  $row = array();
  //Lay loi sau khi thuc hien truy van
  $err = mysql_error();
  //kiem tra
  if ($err){
    print("Khong the select duoc,ERROR=[" . $err . "]" );
    print(  "COUNT=[0]" );
    return -1;
  }
  $ret = mysql_affected_rows();
  close();
  return $ret;
}
function sql_str($val){
  if($val === 0)  return '0' ;
  if($val === null) {
    return 'NULL';
  }  
  if (get_magic_quotes_gpc()) return "" . mysql_escape_string(stripslashes($val)) . "" ;
  return "" . mysql_escape_string($val)  . "" ;
}
?>
