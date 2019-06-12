<?php

/**
 * 请求对象
 * @author auto create
 */
class OpenSearchRq
{
	
	/** 
	 * 商旅申请单id
	 **/
	public $apply_id;
	
	/** 
	 * 企业id
	 **/
	public $corpid;
	
	/** 
	 * 部门id
	 **/
	public $deptid;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 页数，从1开始
	 **/
	public $page;
	
	/** 
	 * 每页数据量，默认10，最高50
	 **/
	public $page_size;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;
	
	/** 
	 * 更新结束时间
	 **/
	public $update_end_time;
	
	/** 
	 * 更新开始时间
	 **/
	public $update_start_time;
	
	/** 
	 * 用户id
	 **/
	public $userid;	
}
?>