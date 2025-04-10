<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportXlsByCollection
{
    use QueueableAction;

    public function execute(
        Collection $collection,
        string $filename = 'test.xlsx',
        ?string $transKey = null,
        array $fields = [],
    ): BinaryFileResponse {
<<<<<<< HEAD
=======
        // Assicuriamo che $fields sia un array di stringhe
        $stringFields = array_map(function (string|int|float|bool $field): string {
            return (string) $field;
        }, array_values($fields));

>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2
        $export = new CollectionExport(
            collection: $collection,
            transKey: $transKey,
            fields: $fields
        );

        return Excel::download($export, $filename);
    }

    /**
     * Esporta una collezione in Excel utilizzando PhpSpreadsheet direttamente.
     *
     * @param Collection $rows La collezione da esportare
     * @param array<string> $fields Campi da includere nell'export
     * @param string $filename Nome del file Excel
     * 
     * @return string Il percorso del file generato
     */
    public function executeWithSpreadsheet(Collection $rows, array $fields, string $filename): string
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $this->writeHeader($sheet, $fields);
        $this->writeRows($sheet, $rows, $fields);

        $writer = new Xlsx($spreadsheet);
        $writer->save($filename);

        return $filename;
    }

    /**
     * Scrive l'intestazione nel foglio Excel.
     *
     * @param \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet Il foglio Excel
     * @param array<string> $fields I campi da utilizzare come intestazioni
     */
    protected function writeHeader(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet, array $fields): void
    {
        foreach ($fields as $col => $field) {
            $sheet->setCellValueByColumnAndRow($col + 1, 1, $field);
        }
    }

    /**
     * Scrive le righe nel foglio di lavoro.
     *
     * @param \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet Il foglio di lavoro
     * @param \Illuminate\Support\Collection $rows I dati da scrivere
     * @param array<string> $fields I campi da utilizzare per le colonne
     */
    protected function writeRows(\PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet, Collection $rows, array $fields): void
    {
        $row = 2;
        foreach ($rows as $data) {
            foreach ($fields as $col => $field) {
                $value = '';

                // Verifica che $data supporti il metodo get
                if (is_object($data) && method_exists($data, 'get')) {
                    $value = $data->get($field) ?? '';
                } elseif (is_array($data) || $data instanceof \ArrayAccess) {
                    $value = $data[$field] ?? '';
                } elseif (is_object($data) && property_exists($data, $field)) {
                    $value = $data->{$field} ?? '';
                }

                $sheet->setCellValueByColumnAndRow($col + 1, $row, $value);
            }
            $row++;
        }
    }
}
