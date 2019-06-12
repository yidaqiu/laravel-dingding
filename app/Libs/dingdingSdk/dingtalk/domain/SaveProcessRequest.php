<?php

/**
 * 入参
 * @author auto create
 */
class SaveProcessRequest
{
	
	/** 
	 * 企业应用id
	 **/
	public $agentid;
	
	/** 
	 * 审批模板描述
	 **/
	public $description;
	
	/** 
	 * true
	 **/
	public $disable_form_edit;
	
	/** 
	 * true
	 **/
	public $disable_stop_process_button;
	
	/** 
	 * 表单列表
	 **/
	public $form_component_list;
	
	/** 
	 * 审批模板名称
	 **/
	public $name;
	
	/** 
	 * 审批模板唯一码
	 **/
	public $process_code;	
}
?>