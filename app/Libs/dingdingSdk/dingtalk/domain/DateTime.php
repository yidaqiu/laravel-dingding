<?php

/**
 * 创建时间
 * @author auto create
 */
class DateTime
{
	
	/** 
	 * 全天事件的时候使用 yyyy-MM-dd（date_time和date不可以同时出现）
	 **/
	public $date;
	
	/** 
	 * 时间 'yyyy-MM-ddTHH:mm:ssZ',
	 **/
	public $date_time;
	
	/** 
	 * 时区
	 **/
	public $time_zone;	
}
?>