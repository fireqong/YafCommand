<?php 

namespace church;

trait Generateable
{
	public function generate($desc, $data)
	{
		if (!is_writable($desc)) {
			throw new Exception('Access deny');
		}
		
		file_put_contents($desc, $data);
	}
}