<?php

declare(strict_types=1);

namespace Jamarcer\Tests\Topic;

use Jamarcer\Topic\Topic;
use PHPUnit\Framework\TestCase;

class TopicTest extends TestCase
{
    /**
     * @test
     */
    public function given_valid_data_when_parse_then_get_correct_topic(): void
    {
        $scope = 'scope';
        $application = 'application';
        $service = 'service';
        $version = 'version';
        $type = 'type';
        $resource = 'resource';
        $name = 'name';
        $expected = sprintf(
            '%s.%s.%s.%s.%s.%s.%s',
            $scope,
            $application,
            $service,
            $version,
            $type,
            $resource,
            $name
        );

        self::assertEquals($expected, Topic::generate($scope, $application, $service, $version, $type, $resource, $name));
    }
}
