<?php
	class Page{
		public $sql;
		public $nowpage;
		public $pagesize;
		//构造
		function __construct($sql,$nowpage,$pagesize){
			$this->sql=$sql;
			$this->nowpage=$nowpage;
			$this->pagesize=$pagesize;
		}
		//获取数组
		function getAll($sql){
			$re=mysql_query($sql);
			while($info=mysql_fetch_assoc($re)){
				$arr[]=$info;
			}
			return $arr;
		}
		//显示当前页
		function show(){
			$start=($this->nowpage-1)*$this->pagesize;
			$sql=$this->sql." limit $start,$this->pagesize";
			return $this->getAll($sql);
		}
		//总页数
		function countPage(){
			$re=mysql_query($this->sql);
			$count=mysql_num_rows($re);
			return ceil($count/$this->pagesize);
		}
		function nav($in,$p){
			if($this->nowpage!=1){
				$pre=$this->nowpage-1;
			}else{
				$pre=1;
			}
			$nav="<a href='".$in."?".$p."=1'>首页</a><a href='".$in."?".$p."=".$pre."'>上一页</a>";
			for($i=1;$i<=$this->countPage();$i++){
				$nav.="<a href='".$in."?".$p."=".$i."'>".$i."</a>";
			}
			if($this->nowpage!=$this->countPage()){
				$next=$this->nowpage+1;
			}else{
				$next=$this->countPage();
			}
			$nav.="<a href='".$in."?".$p."=".$next."'>下一页</a><a href='".$in."?".$p."=".$this->countPage()."'>末页</a>";

			return $nav;
		}
		function ajaxnav($funname){
			$str="";
			for($i=1;$i<=$this->countPage();$i++){
				$str.="<a href='#' onclick='".$funname."(".$i.")'>".$i."</a>";
			}
			return $str;
		}
	}
?>