<?php

/**
 * 价目信息
 * @author auto create
 */
class OpenPriceInfo
{
	
	/** 
	 * 交易类目
	 **/
	public $category;
	
	/** 
	 * 流水创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 结算方式:1：个人现付，2:企业现付,4:企业月结，8、企业预存
	 **/
	public $pay_type;
	
	/** 
	 * 价格
	 **/
	public $price;
	
	/** 
	 * 资金流向:1:支出，2:收入
	 **/
	public $type;	
}
?>