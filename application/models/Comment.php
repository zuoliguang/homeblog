<?php

/**
 * CommentModel
 * @Date:   2018-11-05 10:57:29
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 15:12:23
 */
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model 
{
	/**
	 * 与模型关联的数据表
	 * @var string
	 */
    protected $table = 'comment';

    /**
     * 该模型是否被自动维护时间戳
     * @var boolean
     */
    public $timestamps = false;

    /**
     * 可用的评论别名
     */
    public function available()
    {
        return $this->where('is_del', '=', 0);
    }
}