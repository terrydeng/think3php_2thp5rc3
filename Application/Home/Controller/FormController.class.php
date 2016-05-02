<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller {
    public function index(){
		echo "t323p";
		
			$Data = M('Data'); // 实例化Data数据模型
        $this->dat01a = $Data->select();

		$this->display();

    }//public function index(
	
	
	public function add(){
		
		$this->display();
	}
	
	
	    public function insert(){
        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }
	
}//class IndexController extends Controller