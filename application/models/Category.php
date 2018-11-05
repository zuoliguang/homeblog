<?php

/**
 * CategoryModel
 * @Date:   2018-11-05 10:57:29
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 12:52:05
 */
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model 
{
	/**
	 * 与模型关联的数据表
	 * @var string
	 */
    protected $table = 'category';

    /**
     * 该模型是否被自动维护时间戳
     * @var boolean
     */
    public $timestamps = false;

    /**
     * 关联文章中的分类字段
     */
    public function article()
    {
        return $this->belongsTo('ArticleModel', 'category_id');
    }
}