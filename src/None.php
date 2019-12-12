<?php declare(strict_types = 1);

namespace Arziel\Conditions;

final class None
{
	public static function isNull(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === null) {
				return false;
			}
		}
		
		return true;
	}
	
	public static function isTrue(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === true) {
				return false;
			}
		}
		
		return true;
	}
	
	public static function isFalse(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === false) {
				return false;
			}
		}
		
		return true;
	}
	
	public static function instanceOf(string $class, ...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg instanceof $class) {
				return false;
			}
		}
		
		return true;
		
	}
	
}
