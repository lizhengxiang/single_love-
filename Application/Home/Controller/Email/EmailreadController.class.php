<?php

namespace Home\Controller\Email;
use Think\Controller;
class EmailreadController extends Controller {

   public function index($userid){
		//echo $map;
		//获取用户帐号
		$map['members_id'] = $userid;

		if($map_id['members_id'] = cookie('user')){
			//根据用户名获取psssword再和cookie的password做比较
			$password = M('registered');
			$data = $password->where($map_id)->find();
			//根据密码判断是不是自己
			if(!$data['password'] === cookie('password')){
				$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
			}else{
				//获取已读邮件数量
				$think_email = M('email');
				$map['members_id_b'] = $userid;
				$map['state'] = 1;
				$count['count'] = $think_email->where($map)->count();
				$count['email'] = $think_email->where($map)->order('time_b desc')->select();	


				return $count;
			}
		
		}else{
			$this->success('请您现登录再访问','/single_love/index.php/Home/Login/Login/index', 2);
		}				
		
	}
}
