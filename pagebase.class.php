<?php
header("Content-Type:text/html;charset:utf-8");
class PageInfo{
	protected $num;//总数
    protected $total;//总记录数
    protected $pagecount;//总页数
    protected $page;//当前页码
    protected $offset;
    protected $limit="limit 0,10";
    public function _construct($total,$num=15){
       $this->num=$num;
       $this->total=$total;
     }
    private function __get($args){
    	if($args=="limit")
    		return $this->limit;
    	else 
    		return null;
    }  
    function fpage(){
    	return 分页信息;
    }
}
?>