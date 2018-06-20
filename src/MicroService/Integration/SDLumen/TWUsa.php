<?php
namespace Peak\MicroService\Integration\SDLumen;

class TWUsa extends \Peak\MicroService\Core {

	use \Peak\MicroService\Integration\Base;

	function __construct(array $auth, array $config = [], $apiKey)
	{
		parent::__construct($auth, $config);

		self::$req_param['apikey'] = $apiKey;
	}



	// 物流方式
	protected static function transportType (array &$param)
	{
		return [
			'store_name' => $param['store_name']
		];
	}

	// 获取库库存明细
	protected static function getInventoryDetail (array &$param)
	{
		return [
			'store_name' => $param['store_name'],
			'product_sn' => is_array($param['product_sn']) ? join(',', $param['product_sn']) : $param['product_sn'],
		];
	}


}
