<?php

/**
 * 通知数据
 * @author auto create
 */
class RecognizeNotifyVO
{
	
	/** 
	 * 预约开始时间 timestamp(毫秒)
	 **/
	public $appointed_endtime;
	
	/** 
	 * 预约结束时间 timestamp(毫秒)
	 **/
	public $appointed_starttime;
	
	/** 
	 * 消息内容的模板，key向智能硬件团队申请
	 **/
	public $notify_template;
	
	/** 
	 * 通知类型 仅支持1：用户
	 **/
	public $notify_type;
	
	/** 
	 * 被通知的用户列表
	 **/
	public $notify_user_list;
	
	/** 
	 * 识别结束时间 timestamp(毫秒)
	 **/
	public $recognize_endtime;
	
	/** 
	 * 识别开始时间 timestamp(毫秒)
	 **/
	public $recognize_starttime;
	
	/** 
	 * 联系人id
	 **/
	public $userid;	
}
?>