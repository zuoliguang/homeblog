<?php

/**
 * AboutmeModel
 * @Date:   2018-11-05 10:57:29
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 14:42:00
 */
use Illuminate\Database\Eloquent\Model;

class AboutmeModel extends Model 
{
	/**
	 * 与模型关联的数据表
	 * @var string
	 */
    protected $table = 'about_me';

    /**
     * 该模型是否被自动维护时间戳
     * @var boolean
     */
    public $timestamps = false;

    /**
     * 关于我的信息
     * @author zuoliguang 2018-11-05
     * @return [type] [description]
     */
    public function me()
    {
        $me = self::where('is_default', '=', 1)->get();

        return current($me);
    }
}