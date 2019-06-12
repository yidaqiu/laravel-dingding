<?php

/**
 * 发送者，暂不支持，可不填
 * @author auto create
 */
class AccountInfo
{
	
	/** 
	 * 账号通道:eleme,hema等
	 **/
	public $channel;
	
	/** 
	 * 账号ID
	 **/
	public $id;
	
	/** 
	 * 账号类型:channelUser/staff。当类型为channelUser时，填写app自己的账号，当类型为staff时，填写钉钉的staffid
	 **/
	public $type;	
}
?>