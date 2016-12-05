<?php 

$str =  <<< TEMPLATE
<?php 

use Yaf\Controller_Abstract;

class %sController extends Controller_Abstract
{
	public function indexAction()
	{
		//logics;
	}
}

TEMPLATE;

return $str;