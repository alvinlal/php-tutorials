<?php

class Weather {

	public static $tempConditions = ['cold', 'mild', 'warm'];

	public static function celsiusToFarenheit($c) {
		return $c * 9 / 5 + 32;
	}
	public static function determineCondition($f) {
		if ($f < 40) {
			return self::$tempConditions[0];
		} else if ($f < 70) {
			return self::$tempConditions[1];
		} else {
			return self::$tempConditions[2];
		}
	}
}

echo Weather::celsiusToFarenheit(37) . '<br>';
echo Weather::determineCondition(69) . '<br>';

?>