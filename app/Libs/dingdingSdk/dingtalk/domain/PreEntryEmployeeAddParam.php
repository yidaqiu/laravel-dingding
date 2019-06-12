<?php

/**
 * 添加待入职入参
 * @author auto create
 */
class PreEntryEmployeeAddParam
{
	
	/** 
	 * 扩展信息，json串格式，按要求传入有效信息，无效信息不会保存。有效信息有：depts--部门id列表，"|"分隔多个；mainDeptId--主部门id； mainDeptName--主部门名称； position--职位； workPlace--工作地点；employeeType--员工类型枚举值（0，无类型;1，全职;2，兼职;3，实习;4，劳务派遣;5，退休返聘;6，劳务外包）
	 **/
	public $extend_info;
	
	/** 
	 * 待入职员工手机号
	 **/
	public $mobile;
	
	/** 
	 * 待入职员工姓名
	 **/
	public $name;
	
	/** 
	 * 操作人userid
	 **/
	public $op_userid;
	
	/** 
	 * 预期入职时间
	 **/
	public $pre_entry_time;	
}
?>