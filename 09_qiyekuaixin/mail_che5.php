<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
if($_SESSION[username]=="")
 {
  echo "<script>alert('���ȵ�¼��ſ��Է����ʼ�!');history.back();</script>"; 
  exit;
 }
  $idss=strval($_GET[idss]);
 
	    
  $arrayss=explode("@",$_SESSION[producelistss]);
  for($i=0;$i<count($arrayss)-1;$i++)
    {
	 if($arrayss[$i]==$idss)
	  {
	     echo "<script>alert('�������Ѿ���ѡ��!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelistss]=$_SESSION[producelistss].$idss."@";
  $_SESSION[quatityss]=$_SESSION[quatityss]."1@";
  
  header("location:indexs.php?lmbs=������");
?> 