<?php
namespace Common\Model;
use Common\Model\BaseModel;
class GoodsModel extends BaseModel{
	/* 查询列表
	 * @param string $fields 字段
	 * @param array $where where条件数组: array('field1'=>'value1','field2'=>'value2')
	 * @param array $orderby orderby数组: array('field1'=>'ASC','field2'=>'DESC')
	 * @param int $page 页码
	 * @param int $pagesize 每页数量
	 * @param array $groupby
	 * @param array $data_auth 数据权限
	 *  * @return uret['count']  总数    $ret['list']  查询结果列表
	 */
    protected $_validate = array(
//        array('url_pc_short','','该商品已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('cate_id','require','请选择分类!'),
        array('url_pc_short','require','请填写商品短链接!'),
    );

	public function queryListEx($fields,$where = null, $orderby = null, $page = 0, $pagesize = 0){
	
	    if ($page){
	        $fields = 'SQL_CALC_FOUND_ROWS  ' . $fields;
	    }
	    if($page){
	        $ret['list'] = self::alias('a')->field($fields)->where($where)->order($orderby)->page($page,$pagesize)->select();
	    }else{
	        $ret['list'] = self::alias('a')->field($fields)->where($where)->order($orderby)->select();
	    }
	    if ($page == 0) {
	        $ret ["count"] = count ( $ret ["list"] );
	    } else {
	        $ret ["count"] = $this->getCount (); //获得记录总数
	    }

        $categoryInfo = M('GoodsCategory')->getField('cate_id,name');
        foreach ($ret['list'] as &$value){
            $value['cate_id'] = isset($categoryInfo[$value['cate_id']])?$categoryInfo[$value['cate_id']]:$value['cate_id'];
        }
	    return $ret;
	}

}