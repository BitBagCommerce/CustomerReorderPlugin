<?php

declare(strict_types=1);

namespace Sylius\CustomerReorderPlugin\ReorderEligibility;

class ReorderEligibilityCheckerResponse
{
    /** @var string */
    private $message;

    /** @var array<string, string> */
    private $parameters;

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return array<string, string>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array<string, string> $parameters
     */
    public function setParameters(array $parameters): void
    {
        $this->parameters = $parameters;
    }
}
