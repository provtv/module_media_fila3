<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Filter;

use Filament\Tables\Filters\SelectFilter;
use Spatie\QueueableAction\QueueableAction;

class GetYearFilter
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $fieldName, int $from, int $to): SelectFilter
    {
        $opts = [];
        for ($curr = $from; $curr <= $to; ++$curr) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
            $currStr = (string) $curr;
            $opts[$currStr] = $currStr;
=======
<<<<<<< HEAD
            $currStr = (string) $curr;
            $opts[$currStr] = $currStr;
=======
            $opts[is_string($curr) ? $curr : (string) $curr] = is_string($curr) ? $curr : (string) $curr;
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
            $opts[is_string($curr) ? $curr : (string) $curr] = is_string($curr) ? $curr : (string) $curr;
=======
            $currStr = (string) $curr;
            $opts[$currStr] = $currStr;
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
        }

        return SelectFilter::make($fieldName)
            ->options($opts);
    }
}
