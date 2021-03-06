<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Test\Request;

use Test\Schema\SerializableInterface;

class GetResourcesRequest implements RequestInterface
{
    /** @var int|null */
    private $filterById;

    /** @var string|null */
    private $filterByName;

    /** @var int[]|null */
    private $filterByIds;

    public function setFilterById(int $filterById): self
    {
        $this->filterById = $filterById;

        return $this;
    }

    public function setFilterByName(string $filterByName): self
    {
        $this->filterByName = $filterByName;

        return $this;
    }

    /**
     * @param int[] $filterByIds
     */
    public function setFilterByIds(array $filterByIds): self
    {
        $this->filterByIds = $filterByIds;

        return $this;
    }

    public function getContentType(): string
    {
        return '';
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getRoute(): string
    {
        return 'v1/resources';
    }

    public function getQueryParameters(): array
    {
        return \array_map(static function ($value) {
            return $value instanceof SerializableInterface ? $value->toArray() : $value;
        }, \array_filter(['filterById' => $this->filterById, 'filterByName' => $this->filterByName, 'filterByIds' => $this->filterByIds], static function ($value) {
            return null !== $value;
        }));
    }

    public function getRawQueryParameters(): array
    {
        return ['filterById' => $this->filterById, 'filterByName' => $this->filterByName, 'filterByIds' => $this->filterByIds];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getBody()
    {
        return null;
    }
}
