<?php

/**
 * 考勤组对应的考勤班次列表
 * @author auto create
 */
class AtClassVo
{
	
	/** 
	 * 考勤班次id
	 **/
	public $class_id;
	
	/** 
	 * 考勤班次名称
	 **/
	public $class_name;
	
	/** 
	 * 班次打卡时间段,最多
	 **/
	public $sections;
	
	/** 
	 * 考勤组班次配置
	 **/
	public $setting;	
}
?>