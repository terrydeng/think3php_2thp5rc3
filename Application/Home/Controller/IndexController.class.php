<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		echo "t323p";
		
			$Data = M('Data'); // 实例化Data数据模型
        $this->dat01a = $Data->select();

		$this->display();

    }//public function index(
}