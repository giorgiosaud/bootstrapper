<?php
namespace lasselehtinen\MyPackage\Test;
use lasselehtinen\MyPackage\MyPackageFacade;
use lasselehtinen\MyPackage\MyPackageServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Giorgiosaud\Bootstrapper\BootstrapperServiceProvider;
class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return lasselehtinen\MyPackage\MyPackageServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [BootstrapperServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'MyPackage' => MyPackageFacade::class,
        ];
    }
}