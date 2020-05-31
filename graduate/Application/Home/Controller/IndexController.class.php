<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function indexAction(){
    	$this->display();
    }
    public function index2Action(){
        $this->display();
    }
    public function index3Action(){
        $data = session('data');
         trace('data',json_encode($data));
        $data['selected'] = I('number');
        $data['sum'] = I('sum');
        trace('data',json_encode($data));
        session('data',$data);
        $this->display();
    }
    public function index4Action(){
        $data = session('data');
        trace('data',json_encode($data));
        $this->assign('name',$data['name']);
        $this->assign('major',$data['major']);
        $this->assign('build',$data['build']);
        $this->assign('food',$data['food']);
        $this->assign('imgpath',$data['imgpath']);
        $this->assign('selected',$data['selected']);
        $this->assign('sum',$data['sum']);
        $this->display();
    }
    public function selectAction(){
        $data['name'] = I('name');
        $data['major'] = I('major');
        $data['build'] = I('build');
        $data['food'] = I('food');
        $data['imgpath'] = I('imgpath');
        trace('data',json_encode($data));
        session('data',$data);
        $this->display();
    }
    
}