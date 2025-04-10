<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Http\Response;
use Illuminate\Support\LazyCollection;
use Modules\Xot\Exports\LazyCollectionExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByLazyCollection
{
    use QueueableAction;

    public function execute(
        LazyCollection $collection,
        string $filename = 'test.xlsx',
        ?string $transKey = null,
        array $fields = [],
<<<<<<< HEAD
    ): Response|BinaryFileResponse {
        $export = new LazyCollectionExport($collection, $transKey, $fields);
=======
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function ($field) {
            return strval($field);
        }, array_values($fields));
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2

        return $export->download($filename);
    }
}
