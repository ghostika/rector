<?php declare(strict_types=1);

namespace Rector\PHPUnit\Tests\Rector\GetMockRector;

use Rector\PHPUnit\Rector\GetMockRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class GetMockRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function getRectorClass(): string
    {
        return GetMockRector::class;
    }

    /**
     * @return string[]
     */
    public function provideDataForTest(): iterable
    {
        yield [__DIR__ . '/Fixture/fixture.php.inc'];
    }
}
