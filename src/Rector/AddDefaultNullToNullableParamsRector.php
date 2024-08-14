<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Rector;

use PhpParser\Node;
use PhpParser\Node\NullableType;
use PhpParser\Node\Param;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class AddDefaultNullToNullableParamsRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Add default null value to nullable parameters without a default value',
            [
                new CodeSample(
                    'function foo(?string $bar) {}',
                    'function foo(?string $bar = null) {}'
                ),
            ]
        );
    }

    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes(): array
    {
        return [Param::class];
    }

    /**
     * @param  Param  $node
     */
    public function refactor(Node $node): ?Node
    {
        if (! $node->type instanceof NullableType || $node->default !== null) {
            return null;
        }

        $node->default = $this->nodeFactory->createNull();

        return $node;
    }
}
