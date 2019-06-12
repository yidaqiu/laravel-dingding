<?php

/**
 * 请求对象
 * @author auto create
 */
class OpenApiNewApplyRq
{
	
	/** 
	 * 企业名称
	 **/
	public $corp_name;
	
	/** 
	 * 企业id
	 **/
	public $corpid;
	
	/** 
	 * 部门名称
	 **/
	public $dept_name;
	
	/** 
	 * 部门id，不填时取用于所属的第一个部门的id
	 **/
	public $deptid;
	
	/** 
	 * 行程列表
	 **/
	public $itinerary_list;
	
	/** 
	 * 审批单状态，不传入默认为0：0审批中，1同意，2拒绝
	 **/
	public $status;
	
	/** 
	 * 外部申请单id
	 **/
	public $thirdpart_apply_id;
	
	/** 
	 * 用户展示的外部审批单id信息
	 **/
	public $thirdpart_business_id;
	
	/** 
	 * 出行人列表
	 **/
	public $traveler_list;
	
	/** 
	 * 出差事由
	 **/
	public $trip_cause;
	
	/** 
	 * 出差天数
	 **/
	public $trip_day;
	
	/** 
	 * 申请单标题
	 **/
	public $trip_title;
	
	/** 
	 * 用户名称
	 **/
	public $user_name;
	
	/** 
	 * 用户id
	 **/
	public $userid;	
}
?>