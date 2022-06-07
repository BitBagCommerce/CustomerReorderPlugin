<?php

declare(strict_types=1);

namespace Sylius\CustomerReorderPlugin\ReorderEligibility;

final class ReorderEligibilityConstraintMessageFormatter implements ReorderEligibilityConstraintMessageFormatterInterface
{
    public function format(array $messageParameters): string
    {
        $message = '';

        if (1 === count($messageParameters)) {
            $message = array_pop($messageParameters);

            return $message;
        }

        $lastMessageParameter = end($messageParameters);
        foreach ($messageParameters as $messageParameter) {
            $message .= $messageParameter . (($messageParameter !== $lastMessageParameter) ? ', ' : '');
        }

        return $message;
    }
}
