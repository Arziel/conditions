<?php declare(strict_types = 1);

namespace Arziel\Conditions\Tests;

require __DIR__ . '/../vendor/autoload.php';

use Arziel\Conditions\Any;
use Tester\Assert;
use Tester\TestCase;

class AnyTest extends TestCase
{
	public function testAnyIsNull(): void
	{
		Assert::true(Any::isNull(10, 'xyz', null, new \stdClass(), []));
		Assert::true(Any::isNull(10, 'xyz', null, null));
		Assert::true(Any::isNull(null));
		
		Assert::false(Any::isNull(''));
		Assert::false(Any::isNull('null'));
		Assert::false(Any::isNull([]));
		Assert::false(Any::isNull([null]));
		Assert::false(Any::isNull(false));
		Assert::false(Any::isNull(true));
		Assert::false(Any::isNull());
	}
	
	public function testAnyIsFalse(): void
	{
		Assert::true(Any::isFalse(10, 'xyz', null, new \stdClass(), [], false));
		Assert::true(Any::isFalse(true, true, false, false));
		Assert::true(Any::isFalse(false));
		
		Assert::false(Any::isFalse(''));
		Assert::false(Any::isFalse('null'));
		Assert::false(Any::isFalse([]));
		Assert::false(Any::isFalse([false]));
		Assert::false(Any::isFalse([null]));
		Assert::false(Any::isFalse([true]));
		Assert::false(Any::isFalse(true));
		Assert::false(Any::isFalse(null));
	}
	
	public function testAnyIsTrue(): void
	{
		Assert::true(Any::isTrue(10, 'xyz', null, new \stdClass(), [], false, true));
		Assert::true(Any::isTrue(true, true, false, false));
		Assert::true(Any::isTrue(true));
		
		Assert::false(Any::isTrue(1));
		Assert::false(Any::isTrue(0));
		Assert::false(Any::isTrue(''));
		Assert::false(Any::isTrue('null'));
		Assert::false(Any::isTrue([]));
		Assert::false(Any::isTrue([false]));
		Assert::false(Any::isTrue([null]));
		Assert::false(Any::isTrue([true]));
		Assert::false(Any::isTrue(false));
		Assert::false(Any::isTrue(null));
	}
	
	
}

(new AnyTest())->run();