<?php

namespace HN\HeadCount;
 
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Module\ModuleList;
use Magento\TestFramework\ObjectManager;
 
class IsModuleExist extends \PHPUnit_Framework_TestCase
{
    private $moduleName = 'HN_HeadCount';
 
    /**
     * @var ObjectManager
     */
    private $objectManager;
 
    protected function setUp()
    {
        $this->objectManager = ObjectManager::getInstance();
    }
 
    public function testTheModuleIsRegistered()
    {
        $registrar = new ComponentRegistrar();
        $paths = $registrar->getPaths(ComponentRegistrar::MODULE);
        $this->assertArrayHasKey($this->moduleName, $paths);
    }
 
    public function testTheModuleIsKnownAndEnabledInTheTestEnvironment()
    {
        /** @var ModuleList $moduleList */
        $moduleList = $this->objectManager->create(ModuleList::class);
        $message = sprintf('The module "%s" is not enabled in the test environment', $this->moduleName);
        $this->assertTrue($moduleList->has($this->moduleName), $message);
    }
}