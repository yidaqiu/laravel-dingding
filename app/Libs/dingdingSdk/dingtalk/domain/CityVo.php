<?php

/**
 * 城市列表
 * @author auto create
 */
class CityVo
{
	
	/** 
	 * 三字码
	 **/
	public $code;
	
	/** 
	 * 与搜索城市距离，单位千米，只在临近机场推荐有值
	 **/
	public $distance;
	
	/** 
	 * 城市名称
	 **/
	public $name;	
}
?>