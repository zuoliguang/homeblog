<?php

/**
 * PvModel
 * @Date:   2018-11-05 10:57:29
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 16:26:34
 */
use Illuminate\Database\Eloquent\Model;

class PvModel extends Model 
{
	/**
	 * 与模型关联的数据表
	 * @var string
	 */
    protected $table = 'pv';

    /**
     * 该模型是否被自动维护时间戳
     * @var boolean
     */
    public $timestamps = false;

    /**
     * 获取最近访问次数
     * @param  int $start 开始时间戳
     * @param  int $end   结束时间戳
     */
    public function clicks($start, $end)
    {
        # code...
    }

    /**
     * 获取最近访问来源及地区的排行
     */
    public function referers($start, $end)
    {
        # code...
    }
    
    /**
     * 获取最近访问设备源
     */
    public function agents($start, $end)
    {
        # code...
    }

    /**
     * 获取最近访问 标签比例
     */
    public function hottags($start, $end)
    {
        # code...
    }
}