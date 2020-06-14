<?php


namespace App\Elasticsearch\Filter;


use ApiPlatform\Core\Bridge\Elasticsearch\DataProvider\Filter\AbstractFilter;
use ApiPlatform\Core\Bridge\Elasticsearch\DataProvider\Filter\ConstantScoreFilterInterface;

class RangeFilter extends AbstractFilter implements ConstantScoreFilterInterface
{

    public function apply(array $clauseBody, string $resourceClass, ?string $operationName = null, array $context = []): array
    {
        $this->getNestedFieldPath($resourceClass, 'foo');

        return $clauseBody;
    }

    public function getDescription(string $resourceClass): array
    {
        return [];
    }
}