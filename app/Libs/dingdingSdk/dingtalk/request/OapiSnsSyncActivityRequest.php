<?php
/**
 * dingtalk API: dingtalk.oapi.sns.sync_activity request
 * 
 * @author auto create
 * @since 1.0, 2019.03.22
 */
class OapiSnsSyncActivityRequest
{
	/** 
	 * 11
	 **/
	private $unionId;
	
	private $apiParas = array();
	
	public function setUnionId($unionId)
	{
		$this->unionId = $unionId;
		$this->apiParas["unionId"] = $unionId;
	}

	public function getUnionId()
	{
		return $this->unionId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sns.sync_activity";
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
