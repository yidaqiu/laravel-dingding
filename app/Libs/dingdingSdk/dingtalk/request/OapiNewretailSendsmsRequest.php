<?php
/**
 * dingtalk API: dingtalk.oapi.newretail.sendsms request
 * 
 * @author auto create
 * @since 1.0, 2018.08.23
 */
class OapiNewretailSendsmsRequest
{
	/** 
	 * 短信接受者信息
	 **/
	private $smsmodule;
	
	private $apiParas = array();
	
	public function setSmsmodule($smsmodule)
	{
		$this->smsmodule = $smsmodule;
		$this->apiParas["smsmodule"] = $smsmodule;
	}

	public function getSmsmodule()
	{
		return $this->smsmodule;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.newretail.sendsms";
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
