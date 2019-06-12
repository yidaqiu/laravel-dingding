<?php
/**
 * dingtalk API: dingtalk.corp.smartdevice.addrecognizenotify request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CorpSmartdeviceAddrecognizenotifyRequest
{
	/** 
	 * 通知数据
	 **/
	private $notifyVo;
	
	private $apiParas = array();
	
	public function setNotifyVo($notifyVo)
	{
		$this->notifyVo = $notifyVo;
		$this->apiParas["notify_vo"] = $notifyVo;
	}

	public function getNotifyVo()
	{
		return $this->notifyVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.smartdevice.addrecognizenotify";
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
