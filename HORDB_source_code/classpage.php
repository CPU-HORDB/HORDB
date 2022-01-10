<?php

    class Page{
       // private $limt="Limit 0,15";//当前页
        private $total;//总条数
        private $listrows;//每页显示的条数
        private $pagenum;//总页数
        private $uri;//分页链接地址
        private $config = array('header' =>"results" ,"prev"=>"<<","next"=>">>" ,"first"=>"first","last"=>"last");
        private $listnum;
        public function __construct($total,$listrows,$listnum)
        {
            $this->listrows = $listrows;
            $this->total =$total;
            $this->uri=$this->get_uri();
            $this->page=!empty($_GET['page'])?$_GET["page"]:1;
            $this->pagenum=ceil($this->total/$this->listrows);
            $this->listnum=$listnum;
           // var_dump($this);
        }

        private function get_uri(){
                $url= $_SERVER["REQUEST_URI"].(strpos($_SERVER["REQUEST_URI"],'?')?'':"?");
                $parse=parse_url($url);
                if(isset($parse["query"])){
                    parse_str($parse['query'],$parans);
                    //print_r($parans);
                    unset($parans["page"]);
                  $url=$parse['path'].'?'. http_build_query($parans);

                }
                return $url;

        }
         private function first(){
                    $html1="";
                    $html1.="<span class='disable2'><a href='{$this->uri}&page=1'>{$this->config["first"]}</a></span>";
                 return $html1;
         }
         private function prev(){
            $prevpage="";
            if($this->page==1)
                $prevpage.="<span class='disable'><a href='{$this->uri}&page=1'>{$this->config["prev"]}</a></span>";
            else
                $prevpage.="<span class='disable'><a href='{$this->uri}&page=".($this->page-1)."'>{$this->config["prev"]}</a></span>";
            return $prevpage;
         }
        private function pagelist(){
                   $linkpage="";
                   $inum=floor($this->listnum/2);
            if($this->pagenum>$this->listnum){
                   if ($this->page >$inum){
                         $begin = $this->page - $inum;
                         $end = $this->page + $inum;
               
                      if ($end > $this->pagenum){
                  
                       $begin = ($this->pagenum - 2*$inum > 0) ? $this->pagenum - 2*$inum : 1;
                    
                      $end = $this->pagenum;
                         }
                   }else{
                        $begin = 1;
                        $end = 2*$inum+1;
                     }
                    for ($i=$begin;$i<=$end;$i++){
                       if ($i == $this->page){
                           $linkpage .= "<span class='disable3' onclick='chang()'>{$i}</span>";
                           }else{
                              $linkpage .= "<span class='disable'><a href='{$this->uri}&page={$i}'>{$i}</a></span>";
                         }
            }
          }
            
                 if($this->pagenum<=$this->listnum)  
                   for($i=1;$i<=$this->pagenum;$i++){
                        if($i==$this->page){
                          $linkpage.="<span class='disable'>{$i}</span>";
                        }
                     else{
                           $linkpage.="<span class='disable'><a href='{$this->uri}&page={$i}'>{$i}</a></span>";}
                   }
                   return $linkpage;

        }
         private function next(){

            $nextpage="";
            if($this->page==$this->pagenum)
                $nextpage.="<span class='disable'><a href='{$this->uri}&page=".($this->pagenum)."'>{$this->config["next"]}</a></span>";
            else
                $nextpage.="<span class='disable'><a href='{$this->uri}&page=".($this->page+1)."'>{$this->config["next"]}</a></span>";
            return $nextpage;
         }
        private function last(){
              $html2="";
              $html2.="<span class='disable2'><a href='{$this->uri}&page={$this->pagenum}'>{$this->config["last"]}</a></span>";
                 return $html2;
        }
        public function fpage(){
          $html="";
          if($this->total>$this->listrows){
            $html.="<span style='color:#0d4b0d'>results:{$this->total}</span>";
            $html.=$this->first();
            $html.=$this->prev();
            $html.=$this->pagelist();
            $html.=$this->next();
            $html.=$this->last();
          //  $html=$html1."  ".$html2."  ".$html3."  ".$html4;
            
          }else{

                $html.="<span style='clolor:#0d4b0d'>results:{$this->total}</span>";
          }
          return $html;
        }
        
       
    }