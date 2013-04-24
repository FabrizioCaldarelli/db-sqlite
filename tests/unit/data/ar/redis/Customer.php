<?php

namespace yiiunit\data\ar\redis;

use yii\db\TableSchema;

class Customer extends ActiveRecord
{
	const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 2;

	public $status2;

	/**
	 * @return \yii\db\redis\ActiveRelation
	 */
	public function getOrders()
	{
		return $this->hasMany('Order', array('customer_id' => 'id'));
	}

	public static function getTableSchema()
	{
		return new TableSchema(array(
			'primaryKey' => array('id'),
			'columns' => array(
				'id' => 'integer',
				'email' => 'string',
				'name' => 'string',
				'address' => 'string',
				'status' => 'integer'
			)
		));
	}
}