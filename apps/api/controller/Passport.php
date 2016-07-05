<?php
namespace app\api\controller;

/**
 * swagger: 登录相关
 */
class Passport
{
	/**
	 * post: 发送验证码
	 * path: sendVerify/{phone}/{deviceType}
	 * method: sendVerify
	 * param: phone - {string} 手机号
	 * param: deviceType - {int} = [0|1|2|3|4] 设备类型(0: android手机, 1: ios手机, 2: android平板, 3: ios平板, 4: pc)
	 */
	public function sendVerify($phone, $deviceType) {
		return [
			'code'		=> 200,
			'message'	=> '发送验证码',
			'data'		=> [
				'phone'			=> $phone,
				'deviceType'		=> $deviceType
			]
		];
	}
	
	/**
	 * post: 登陆
	 * path: login
	 * method: login
	 * param: phone - {string} 手机号
	 * param: password - {string} 密码
	 * param: deviceType - {int} = [0|1|2|3|4] 设备类型(0: android手机, 1: ios手机, 2: android平板, 3: ios平板, 4: pc)
	 * param: verifyCode - {string} = 0 验证码
	 */
	public function login($phone, $password, $deviceType, $verifyCode = '0') {
		return [
			'code'		=> 200,
			'message'	=> '登陆成功',
			'data'		=> [
				'phone'			=> $phone,
				'password'		=> $password,
				'deviceType'		=> $deviceType,
				'verifyCode'		=> $verifyCode
			]
		];
	}
	
	/**
	 * get: 获取配置
	 * path: profile
	 * method: profile
	 * param: keys - {string[]} 需要获取配置的Key值数组
	 */
	public function profile($keys) {
		return [
			'code'		=> 200,
			'message'	=> '获取成功',
			'data'		=> $keys
		];
	}
}