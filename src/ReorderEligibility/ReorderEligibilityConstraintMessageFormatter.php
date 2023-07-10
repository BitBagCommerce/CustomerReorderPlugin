<?php

declare(strict_types=1);

namespace Sylius\CustomerReorderPlugin\ReorderEligibility;

final class ReorderEligibilityConstraintMessageFormatter implements ReorderEligibilityConstraintMessageFormatterInterface
{
    /**
     * @param array<int, mixed> $messageParameters
     */
    public function format(array $messageParameters): string
    {
        if (1 === count($messageParameters)) {
            return array_pop($messageParameters);
        }

        $message = '';
        $lastMessageParameter = end($messageParameters);
        foreach ($messageParameters as $messageParameter) {
            $message .= $messageParameter . (($messageParameter !== $lastMessageParameter) ? ', ' : '');
        }

        return $message;
    }
}
