<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\ViewExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByView
{
    use QueueableAction;

    public function execute(
        View $view,
        string $filename = 'test.xlsx',
        ?string $transKey = null,
        ?array $fields = null,
    ): BinaryFileResponse {
<<<<<<< HEAD
        $export = new ViewExport($view, $transKey, $fields);
=======
        // Se $fields non è null, assicuriamo che sia un array di stringhe
        $stringFields = null;
        if (is_array($fields)) {
            $stringFields = array_map(function ($field) {
                return strval($field);
            }, array_values($fields));
        }

        $export = new ViewExport(
            view: $view,
            transKey: null,
            fields: $stringFields
        );
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2

        return Excel::download($export, $filename);
    }
}
