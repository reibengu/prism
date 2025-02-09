<?php

declare(strict_types=1);

namespace EchoLabs\Prism\Text;

use EchoLabs\Prism\Contracts\Message;
use EchoLabs\Prism\Enums\ToolChoice;
use EchoLabs\Prism\Tool;

class Request
{
    /**
     * @param  array<int, Message>  $messages
     * @param  array<int, Tool>  $tools
     * @param  array<string, mixed>  $clientOptions
     */
    public function __construct(
        public readonly string $model,
        public readonly ?string $systemPrompt,
        public readonly ?string $prompt,
        public readonly array $messages,
        public readonly ?int $maxTokens,
        public readonly int|float|null $temperature,
        public readonly int|float|null $topP,
        public readonly array $tools,
        public readonly array $clientOptions,
        public readonly string|ToolChoice|null $toolChoice,
    ) {}
}
