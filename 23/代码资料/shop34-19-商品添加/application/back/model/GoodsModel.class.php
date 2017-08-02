<?php

/**
 * 后台 商品表的操作模型
 */
class GoodsModel extends Model {
	/**
	 * 插入商品
	 * @param $data array，关联数组字段与值
	 * @return bool
	 */
	public function insertGoods($data) {
		//先数据校验
		$data['create_admin_id'] = $_SESSION['admin']['admin_id'];
		//插入到goods表
		$sql = sprintf("INSERT INTO `p34_goods` VALUES (null, '%s', '%s', '', '', '%s', '%s', '%s', '%s', '%s')", $data['goods_name'], $data['shop_price'], $data['goods_desc'], $data['goods_number'], $data['is_on_sale'], $data['goods_promote'], $data['create_admin_id']);
		//执行
		return $this->_dao->query($sql);
	}
}