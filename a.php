<?php
namespace Admin\Controller;
use Think\Controller;
//��̨����������
class CommonController extends Controller{
	//���췽��
    public function __construct() {
        parent::__construct(); //��ִ�и��๹�췽��
		$this->checkUser();    //��¼���
		//�Ѿ���¼��Ϊģ������û�������
		$this->assign('admin_name',session('name'));
    }
	//����û��Ƿ��Ѿ���¼
	private function checkUser(){
		if(!session('name')){
			//δ��¼�����ȵ�¼
			$this->redirect('Login/index');
		}
	}
	public function _empty($name){
		$this->error('��Ч�Ĳ�����'.$name);
    }
}