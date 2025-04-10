<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Http\Response;
use Modules\Xot\Exports\QueryExport;
use Spatie\QueueableAction\QueueableAction;
// use Staudenmeir\LaravelCte\Query\Builder as CteBuilder;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByQuery
{
    use QueueableAction;

    public function execute(
        QueryBuilder|EloquentBuilder $query,
        string $filename = 'test.xlsx',
        ?string $transKey = null,
        array $fields = [],
<<<<<<< HEAD
    ): Response|BinaryFileResponse {
        $queryExport = new QueryExport($query, $transKey, $fields);
        // $queryExport->queue($filename); // Serialization of 'PDO' is not allowed

        return $queryExport->download($filename);
=======
        ?int $limit = null,
    ): BinaryFileResponse {
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function ($field) {
            return strval($field);
        }, array_values($fields));

        $export = new QueryExport(
            query: $query,
            transKey: null,
            fields: $stringFields
        );

        // Note: QueryExport doesn't accept a limit parameter directly
        // If limit is needed, apply it to the query before passing to the exporter
        if ($limit !== null) {
            $query->limit($limit);
        }

        return Excel::download($export, $filename);
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2
    }
}
