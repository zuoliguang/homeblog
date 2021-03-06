<?php

/**
 * ArticleModel
 * @Date:   2018-11-05 10:57:29
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 15:01:59
 */
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model 
{
	/**
	 * 与模型关联的数据表
	 * @var string
	 */
    protected $table = 'article';

    /**
     * 该模型是否被自动维护时间戳
     * @var boolean
     */
    public $timestamps = false;

    /**
     * 关联的分类信息
     */
    public function category()
    {
        return $this->hasOne('CategoryModel', 'id', 'category_id');
    }

    /**
     * 关联的评论信息
     */
    public function comments()
    {
        return $this->hasMany('CommentModel', 'art_id', 'id');
    }

    /**
     * 点击排行列表
     */
    public function rankings($page=1, $pagesize=10)
    {
        $result = [];

        $start = ($page-1) * $pagesize;

        $collection = self::where('is_del', '=', 0)->orderBy('times', 'desc');

        $result['data'] = $collection->skip($start)->take($pagesize)->get();

        $result['total'] = $collection->count();

        $result['page'] = $page;

        $result['pagesize'] = $pagesize;

        return $result;
    }
    
    /**
     * 推荐列表
     */
    public function recommends($page=1, $pagesize=10)
    {
        $result = [];

        $start = ($page-1) * $pagesize;

        $collection = self::where('is_del', '=', 0)->where('is_recommend', '=', 1);

        $result['data'] = $collection->skip($start)->take($pagesize)->get();

        $result['total'] = $collection->count();

        $result['page'] = $page;

        $result['pagesize'] = $pagesize;

        return $result;
    }
    
    /**
     * 最新列表
     */
    public function newest($page=1, $pagesize=10)
    {
        $result = [];

        $start = ($page-1) * $pagesize;

        $collection = self::where('is_del', '=', 0)->orderBy('create_time', 'desc');

        $result['data'] = $collection->skip($start)->take($pagesize)->get();

        $result['total'] = $collection->count();

        $result['page'] = $page;

        $result['pagesize'] = $pagesize;

        return $result;
    }
    
    /**
     * 相关标签推荐列表
     */
    public function tags($tag, $page=1, $pagesize=10)
    {
        $result = [];

        $start = ($page-1) * $pagesize;

        $collection = self::where('is_del', '=', 0)->where('tags', 'like', "%$tag%")->orderBy('create_time', 'desc');

        $result['data'] = $collection->skip($start)->take($pagesize)->get();

        $result['total'] = $collection->count();

        $result['page'] = $page;

        $result['pagesize'] = $pagesize;

        return $result;
    }
    
    /**
     * 分类文章列表
     */
    public function classifies($category_id, $page=1, $pagesize=10)
    {
        $result = [];

        $start = ($page-1) * $pagesize;

        $collection = self::where('is_del', '=', 0)->where('category_id', '=', $category_id)->orderBy('create_time', 'desc');

        $result['data'] = $collection->skip($start)->take($pagesize)->get();

        $result['total'] = $collection->count();

        $result['page'] = $page;

        $result['pagesize'] = $pagesize;

        return $result;
    }
    
    /**
     * 上、下一篇简单信息
     */
    public function prev_next_article($id)
    {
        $result = [];

        $min = self::where('is_del', '=', 0)->min('id');

        $max = self::where('is_del', '=', 0)->max('id');

        // prev
        
        if ($id > $min) {

            $prev_id = $id - 1;

            while ($prev_id >= $min) {

                $prev = self::where('is_del', '=', 0)->find($prev_id);

                if (!empty($prev)) {

                    $result['prev'] = $prev;

                    break;
                }

                $prev_id--;
            }
        }

        // next
        
        if ($id < $max) {

            $next_id = $id + 1;

            while ($next_id <= $max) {

                $next = self::where('is_del', '=', 0)->find($next_id);

                if (!empty($next)) {

                    $result['next'] = $next;

                    break;
                }

                $next_id++;
            }
        }

        return $result;
    }

    /**
     * 文章详情
     */
    public function article($id)
    {
        $article = self::find($id);

        return $article;
    }
}