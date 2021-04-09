<?php

declare(strict_types=1);

namespace Jamarcer\Topic;

final class Topic
{
    private const SEPARATOR = '.';

    /**
     * Message topic structure:
     *  scope.application.service.version.type.resource.name
     *
     * @param string $scope
     * @param string $application
     * @param string $service
     * @param string $version
     * @param string $type
     * @param string $resource
     * @param string $name
     * @return string
     */
    public static function generate(
        string $scope,
        string $application,
        string $service,
        string $version,
        string $type,
        string $resource,
        string $name
    ): string {
        return implode(
            self::SEPARATOR,
            [
                $scope,
                $application,
                $service,
                $version,
                $type,
                $resource,
                $name,
            ],
        );
    }

    public static function toArray(string $topic): array
    {
        $items = explode(self::SEPARATOR, $topic);
        return [
            'scope' => $items[0],
            'application' => $items[1],
            'service' => $items[2],
            'version' => $items[3],
            'type' => $items[4],
            'resource' => $items[5],
            'name' => $items[6],
        ];
    }

    public static function from(array $elements): string
    {
        return self::generate(
            $elements['scope'],
            $elements['application'],
            $elements['service'],
            $elements['version'],
            $elements['type'],
            $elements['resource'],
            $elements['name'],
        );
    }
}