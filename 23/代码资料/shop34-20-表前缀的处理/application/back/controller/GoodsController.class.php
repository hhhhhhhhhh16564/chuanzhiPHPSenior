<?php


/**
 * 后台的商品相关操作控制器类
 */
class GoodsController extends PlatformController {
	/**
	 * 商品添加表单
	 */
	public function addAction() {
		require CURRENT_VIEW_PATH . 'goods_add.html';
	}

	/**
	 * 商品插入
	 */
	public function insertAction() {
		//收集表单数据
		$data['goods_name'] = $_POST['goods_name'];
		$data['shop_price'] = $_POST['shop_price'];
		$data['goods_desc'] = $_POST['goods_desc'];
		$data['goods_number'] = $_POST['goods_number'];
		//上架
		$data['is_on_sale'] = isset($_POST['is_on_sale']) ? '1' : '0';
		//推荐属性
		$data['goods_promote'] = isset($_POST['goods_promote']) ? implode(',', $_POST['goods_promote']) : '';
		//通过模型插入到数据表
		$m_goods = Factory::M('GoodsModel');
		//根据插入结果，给出提示，并展示
		if ($m_goods->insertGoods($data)) {
			//成功, 跳转到商品列表
			$this->_jump('index.php?p=back&c=Goods&a=list');
		} else {
			//失败，给出错误提示，返回到add添加动作
			$this->_jump('index.php?p=back&c=Goods&a=add', '添加失败:失败原因');
		}
	}

	public function listAction() {
		echo 'Goods:list';
	}
}