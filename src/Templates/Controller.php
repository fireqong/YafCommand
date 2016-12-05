<?php 

$str =  <<< TEMPLATE
<?php 

use Yaf\Controller_Abstract;

class %s extends Controller_Abstract
{
	public function indexAction()
	{
		//logics;
	}
}

TEMPLATE;

return $str;