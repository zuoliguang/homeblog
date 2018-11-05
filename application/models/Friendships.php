<?php

/**
 * FriendshipsModel
 * @Date:   2018-11-05 10:57:29
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 11:06:19
 */
use Illuminate\Database\Eloquent\Model;

class FriendshipsModel extends Model 
{
	/**
	 * 与模型关联的数据表
	 * @var string
	 */
    protected $table = 'friendships';

    /**
     * 该模型是否被自动维护时间戳
     * @var boolean
     */
    public $timestamps = false;
}