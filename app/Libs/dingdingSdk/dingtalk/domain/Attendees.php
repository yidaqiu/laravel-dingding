<?php

/**
 * 参与者
 * @author auto create
 */
class Attendees
{
	
	/** 
	 * 展示姓名
	 **/
	public $display_name;
	
	/** 
	 * 是否组织者
	 **/
	public $organizer;
	
	/** 
	 * 响应状态（accepted, declined, needsAction）
	 **/
	public $response_status;
	
	/** 
	 * 是否自己
	 **/
	public $self;	
}
?>