<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.groupmember.getmemberlist request
 * 
 * @author auto create
 * @since 1.0, 2018.08.27
 */
class OapiImpaasGroupmemberGetmemberlistRequest
{
	/** 
	 * 请求结构体
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.groupmember.getmemberlist";
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
