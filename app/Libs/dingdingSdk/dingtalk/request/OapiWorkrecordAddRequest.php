<?php
/**
 * dingtalk API: dingtalk.oapi.workrecord.add request
 * 
 * @author auto create
 * @since 1.0, 2018.08.06
 */
class OapiWorkrecordAddRequest
{
	/** 
	 * 待办时间。Unix时间戳
	 **/
	private $createTime;
	
	/** 
	 * 表单列表
	 **/
	private $formItemList;
	
	/** 
	 * 标题
	 **/
	private $title;
	
	/** 
	 * 待办跳转url
	 **/
	private $url;
	
	/** 
	 * 用户id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["create_time"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
	}

	public function setFormItemList($formItemList)
	{
		$this->formItemList = $formItemList;
		$this->apiParas["formItemList"] = $formItemList;
	}

	public function getFormItemList()
	{
		return $this->formItemList;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workrecord.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->createTime,"createTime");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->url,"url");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
