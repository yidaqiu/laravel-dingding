<?php
/**
 * dingtalk API: dingtalk.oapi.role.addrole request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiRoleAddroleRequest
{
	/** 
	 * test
	 **/
	private $groupId;
	
	/** 
	 * test
	 **/
	private $roleName;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function setRoleName($roleName)
	{
		$this->roleName = $roleName;
		$this->apiParas["roleName"] = $roleName;
	}

	public function getRoleName()
	{
		return $this->roleName;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.role.addrole";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->roleName,"roleName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
