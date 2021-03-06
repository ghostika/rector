<?php

namespace Rector\Tests\Rector\Property\InjectAnnotationClassRector\Fixture;

use DI\Annotation\Inject;

class InjectFromProtectedVar
{
    /**
     * @Inject
     * @var \Rector\Tests\Rector\Property\InjectAnnotationClassRector\Source\ExistingDependency
     */
    protected $someDependency;
}

?>
-----
<?php

namespace Rector\Tests\Rector\Property\InjectAnnotationClassRector\Fixture;

use DI\Annotation\Inject;

class InjectFromProtectedVar
{
    /**
     * @var \Rector\Tests\Rector\Property\InjectAnnotationClassRector\Source\ExistingDependency
     */
    protected $someDependency;
    public function __construct(\Rector\Tests\Rector\Property\InjectAnnotationClassRector\Source\ExistingDependency $someDependency)
    {
        $this->someDependency = $someDependency;
    }
}

?>
