<?php declare(strict_types = 1);

namespace Arziel\Conditions;

final class Any
{
	public static function isNull(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === null) {
				return true;
			}
		}
		
		return false;
	}
	
	public static function isTrue(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === true) {
				return true;
			}
		}
		
		return false;
	}
	
	public static function isFalse(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === false) {
				return true;
			}
		}
		
		return false;
	}
	
	public static function notNull(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === null) {
				return false;
			}
		}
		
		return true;
	}
	
	
	public static function notTrue(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === true) {
				return false;
			}
		}
		
		return true;
	}
	
	public static function notFalse(...$args): bool
	{
		foreach ($args as &$arg) {
			if ($arg === false) {
				return false;
			}
		}
		
		return true;
	}
}
