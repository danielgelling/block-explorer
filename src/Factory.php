<?php

namespace BlockExplorer;

use Http\Factory as Http;

class Factory
{
	public function get_transactions($params)
	{
		return Http::get('https://blockexplorer.com/api/addr/' . $params['address'] . '/utxo');
	}
}