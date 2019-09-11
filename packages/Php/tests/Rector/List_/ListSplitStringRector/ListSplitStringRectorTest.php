<?php declare(strict_types=1);

namespace Rector\Php\Tests\Rector\List_\ListSplitStringRector;

use Rector\Php\Rector\List_\ListSplitStringRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ListSplitStringRectorTest extends AbstractRectorTestCase
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
        return ListSplitStringRector::class;
    }

    /**
     * @return string[]
     */
    public function provideDataForTest(): iterable
    {
        yield [__DIR__ . '/Fixture/fixture.php.inc'];
    }
}
