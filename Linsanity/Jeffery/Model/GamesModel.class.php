<?php
namespace Jeffery\Model;
use Think\Model;
class GamesModel extends Model{
	// 批量验证
	protected $patchValidate=true;
	// 自动验证
	protected $_validate=array(
        array('title','5,50','标题格式错误！',0,'length'), // 标题最多19个中文字
        array('href','/^(http|https|ftp)\:\/\/([a-zA-Z0-9\.\-\/])*$/','链接格式错误！',0,'regex'), // 链接以http://开头
        array('dates','10,10','日期格式错误！',0,'length'),
		);

	// 添加比赛
	function addGames($arr){
		if($this->create()){
			return $this->add();
		}else{
			return false;
		}
	}

	// 获取数据信息
	function getInfoByList($field='*',$where,$order,$limit){
		return $this->field($field)->where($where)->order($order)->limit($limit)->select();
	}

	// 获取总记录数
	function getInfoCount($where){
		$arr=$this->field('count(*) as num')->where($where)->select();
		return $arr[0]['num'];
	}

	// 根据ID获取数据
	function getInfoById($id){
		return $this->where("id=$id")->select();
	}

	// 根据ID更新数据
	function updateInfoById($id){
		if($this->create()){
		    return $this->where("id=$id")->save();
		}else{
			return false;
		}
	}

	// 根据ID删除数据
	function deleteInfoById($id){
		return $this->where("id=$id")->delete();
	}
}