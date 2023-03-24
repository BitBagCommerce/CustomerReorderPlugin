<?php

declare(strict_types=1);

namespace Sylius\CustomerReorderPlugin\ReorderEligibility;

interface ReorderEligibilityConstraintMessageFormatterInterface
{
    /**
     * @param array<int, mixed> $messageParameters
     */
    public function format(array $messageParameters): string;
}
