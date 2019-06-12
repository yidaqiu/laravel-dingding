<?php

/**
 * 考勤组班次配置
 * @author auto create
 */
class ClassSettingVo
{
	
	/** 
	 * 旷工迟到时长,单位分钟
	 **/
	public $absenteeism_late_minutes;
	
	/** 
	 * 考勤组班次id
	 **/
	public $class_setting_id;
	
	/** 
	 * Y表示下班不强制打卡,N表示下班强制打卡
	 **/
	public $is_off_duty_free_check;
	
	/** 
	 * 允许迟到时长，单位分钟
	 **/
	public $permit_late_minutes;
	
	/** 
	 * 休息开始时间，只有一个时间段的班次有
	 **/
	public $rest_begin_time;
	
	/** 
	 * 休息结束时间，只有一个时间段的班次有
	 **/
	public $rest_end_time;
	
	/** 
	 * 严重迟到时长,单位分钟
	 **/
	public $serious_late_minutes;
	
	/** 
	 * 工作时长，单位分钟，-1表示关闭该功能
	 **/
	public $work_time_minutes;	
}
?>