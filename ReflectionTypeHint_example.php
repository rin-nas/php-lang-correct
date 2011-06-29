<?php
class Example
{
	/**
	 * This is myMethod!
	 *
	 * @param   string|array  $s  param1
	 * @param   int           $i  param2
	 * @param   Example|null  $e  param3
	 * @param   bool          $b  param4
	 * @param   array/null    $a  param5
	 * @return  array|bool    returns FALSE if error occurred
	 */
	public function myMethod($s, $i, $e = null, $b = true, array $a = null)
	{
		if (! ReflectionTypeHint::isValid()) return false;
		//...
	}
}

Example::myMethod('sss', 75467, $e, true);
$e = new Example();
//$e->myMethod('sss', 75467, new Exception(), true);
