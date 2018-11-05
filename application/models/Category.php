<?php

/**
 * CategoryModel
 * @Date:   2018-11-05 10:57:29
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 14:57:54
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
     *  关联的文章列表
     */
    public function articles()
    {
        return $this->hasMany('ArticleModel', 'category_id', 'id');
    }
}