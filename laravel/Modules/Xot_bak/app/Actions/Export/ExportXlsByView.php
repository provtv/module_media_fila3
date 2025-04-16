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

    /**
     * Esporta una vista in Excel.
     *
     * @param View $view Vista da esportare
     * @param string $filename Nome del file Excel
     * @param array<string>|null $fields Campi da includere nell'export
     * 
     * @return BinaryFileResponse
     */
    public function execute(
        View $view,
        string $filename = 'test.xlsx',
        ?array $fields = null,
    ): BinaryFileResponse {
        // Se $fields non è null, assicuriamo che sia un array di stringhe
        $stringFields = null;
        if (is_array($fields)) {
            $stringFields = array_map(function ($field) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
                return strval($field);
=======
<<<<<<< HEAD
                return strval($field);
=======
                return is_string($field) ? $field : (string) $field;
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
                return is_string($field) ? $field : (string) $field;
=======
                return strval($field);
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
            }, array_values($fields));
        }

        $export = new ViewExport(
            view: $view,
            transKey: null,
            fields: $stringFields
        );

        return Excel::download($export, $filename);
    }
}
