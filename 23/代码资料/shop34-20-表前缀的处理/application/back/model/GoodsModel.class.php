<?php

/**
 * 后台 商品表的操作模型
 */
class GoodsModel extends Model {
	protected $_logic_table = 'goods';
	/**
	 * 插入商品
	 * @param $data array，关联数组字段与值
	 * @return bool
	 */
	public function insertGoods($data) {
		//先数据校验
		$data['create_admin_id'] = $_SESSION['admin']['admin_id'];
		//插入到goods表
		// 保证数据转义后：
		$escape_data = $this->_escapeStringAll($data);
		$sql = sprintf("INSERT INTO $this->_table VALUES (null, %s, %s, '', '', %s, %s, %s, %s, %s)", $escape_data['goods_name'], $escape_data['shop_price'], $escape_data['goods_desc'], $escape_data['goods_number'], $escape_data['is_on_sale'], $escape_data['goods_promote'], $escape_data['create_admin_id']);
		//执行
		die($sql);
		return $this->_dao->query($sql);
	}
}