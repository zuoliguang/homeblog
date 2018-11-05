<?php
/**
 * Tops
 * @Date:   2018-11-05 10:28:18
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 14:42:34
 */
use Illuminate\Database\Eloquent\Model;

class TopsModel extends Model 
{
	/**
	 * 与模型关联的数据表
	 * @var string
	 */
    protected $table = 'tops';

    /**
     * 该模型是否被自动维护时间戳
     * @var boolean
     */
    public $timestamps = false;

    /**
     * 获取首页tops
     * @author zuoliguang 2018-11-05
     * @param  integer $count 获取数量
     * @return [type]         [description]
     */
    public function header_tops($count=3)
    {
        $tops = self::where('is_del', '=', 0)->get();

        if (count($tops) >= $count) {

            $tops = array_slice($tops, 0, $count);
        }

        if (count($tops) < $count) {

            die("首页展示图 长度不足 : 需要 3 实际 ".count($tops)." !");
        }

        return $tops;
    }
}