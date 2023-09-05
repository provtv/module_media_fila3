<?php

declare(strict_types=1);

namespace Modules\Media\Rules\GroupRules;

use Illuminate\Contracts\Validation\Rule;

class MaxItemsRule implements Rule
{
    public function __construct(protected int $maxItemCount)
    {
    }

    public function passes($attribute, $value): bool
    {
        return (is_countable($value) ? count($value) : 0) <= $this->maxItemCount;
    }

    public function message()
    {
        return trans_choice('media::validation.max_items', $this->maxItemCount, [
            'max' => $this->maxItemCount,
        ]);
    }
}
