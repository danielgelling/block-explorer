<?php

namespace BlockExplorer;

use Http\Factory as Http;

class Factory
{
	public function get_transactions($address, $type = 'all')
	{
		return Http::get('https://blockexplorer.com/api/addr/' . $address . '/utxo');
	}
}