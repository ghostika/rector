<?php

declare(strict_types=1);

namespace Rector\DeadCode\Tests\Rector\StaticCall\RemoveParentCallWithoutParentRector;

use Iterator;
use Rector\DeadCode\Rector\StaticCall\RemoveParentCallWithoutParentRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class RemoveParentCallWithoutParentRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return RemoveParentCallWithoutParentRector::class;
    }
}
