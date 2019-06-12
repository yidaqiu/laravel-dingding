<?php
/**
 * dingtalk API: dingtalk.oapi.robot.message.getpushid request
 * 
 * @author auto create
 * @since 1.0, 2019.06.05
 */
class OapiRobotMessageGetpushidRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.robot.message.getpushid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
