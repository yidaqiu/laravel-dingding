<?php
/**
 * dingtalk API: dingtalk.oapi.role.updaterole request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiRoleUpdateroleRequest
{
	/** 
	 * 1
	 **/
	private $roleId;
	
	/** 
	 * 1
	 **/
	private $roleName;
	
	private $apiParas = array();
	
	public function setRoleId($roleId)
	{
		$this->roleId = $roleId;
		$this->apiParas["roleId"] = $roleId;
	}

	public function getRoleId()
	{
		return $this->roleId;
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
		return "dingtalk.oapi.role.updaterole";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roleId,"roleId");
		RequestCheckUtil::checkNotNull($this->roleName,"roleName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
