<?php
namespace EcomPHP\Lazada\Tests;

use EcomPHP\Lazada\Client;
use EcomPHP\Lazada\Resource;
use GuzzleHttp\RequestOptions;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

class ResourcesTestClient extends Client
{
    public $calls = array();

    public function call($method, $uri, $params = array(), $wrapDataKey = 'data')
    {
        $this->calls[] = array($method, $uri, $params, $wrapDataKey);

        return end($this->calls);
    }
}

class ResourcesTest extends TestCase
{
    /**
     * @dataProvider resourceClassesProvider
     */
    public function testClientCreatesEveryResource($resourceClass)
    {
        $client = new ResourcesTestClient('app-key', 'app-secret', 'callback-url');
        $shortName = (new ReflectionClass($resourceClass))->getShortName();
        $resource = $client->{$shortName};

        $this->assertInstanceOf($resourceClass, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
    }

    /**
     * @dataProvider resourceMethodsProvider
     */
    public function testEveryResourceApiMethodCreatesAClientCall($resourceClass, $methodName)
    {
        $client = new ResourcesTestClient('app-key', 'app-secret', 'callback-url');
        $resource = (new $resourceClass())->useApiClient($client);
        $method = new ReflectionMethod($resourceClass, $methodName);
        $arguments = $this->argumentsFor($method);

        $result = $method->invokeArgs($resource, $arguments);

        $this->assertSame($client->calls[0], $result);
        $this->assertContains($result[0], array('GET', 'POST'));
        $this->assertNotSame('', $result[1]);
        $this->assertIsArray($result[2]);
        $this->assertSame('data', $result[3]);

        if ($result[0] === 'GET') {
            $this->assertArrayHasKey(RequestOptions::QUERY, $result[2]);
        }
    }

    public function resourceClassesProvider()
    {
        return array_map(function ($resourceClass) {
            return array($resourceClass);
        }, $this->resourceClasses());
    }

    public function resourceMethodsProvider()
    {
        $methods = array();

        foreach ($this->resourceClasses() as $resourceClass) {
            $reflection = new ReflectionClass($resourceClass);

            foreach ($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
                if ($method->getDeclaringClass()->getName() !== $resourceClass) {
                    continue;
                }

                $methods[] = array($resourceClass, $method->getName());
            }
        }

        return $methods;
    }

    private function resourceClasses()
    {
        $classes = array();

        foreach (glob(__DIR__.'/../src/Resources/*.php') as $file) {
            $classes[] = 'EcomPHP\\Lazada\\Resources\\'.basename($file, '.php');
        }

        sort($classes);

        return $classes;
    }

    private function argumentsFor(ReflectionMethod $method)
    {
        $arguments = array();

        foreach ($method->getParameters() as $parameter) {
            if ($parameter->isDefaultValueAvailable()) {
                $arguments[] = $parameter->getDefaultValue();
                continue;
            }

            $name = strtolower($parameter->getName());

            if (strpos($name, 'ids') !== false || strpos($name, 'list') !== false || strpos($name, 'items') !== false || strpos($name, 'params') !== false || strpos($name, 'data') !== false) {
                $arguments[] = array('sample' => 'value');
                continue;
            }

            if (strpos($name, 'quantity') !== false || strpos($name, 'count') !== false || strpos($name, 'limit') !== false || strpos($name, 'offset') !== false) {
                $arguments[] = 1;
                continue;
            }

            $arguments[] = $parameter->getName().'-value';
        }

        return $arguments;
    }
}