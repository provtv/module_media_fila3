<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

use Exception;
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
<<<<<<< HEAD
use Modules\Media\Actions\CloudFront\GetCloudFrontSignedUrlAction;
=======
>>>>>>> 9c5e628 (.)

class IconMediaColumn extends IconColumn
{

    protected function setUp(): void
    {
        parent::setUp();
        $attachment=$this->getName();

        $this->default(
            fn($record)=>$record->getFirstMedia($attachment))
                ->icon('heroicon-o-document-text')
                ->color(fn ($record) => $record->getFirstMedia($attachment) ? 'success' : 'danger')
                ->tooltip(fn ($record) => $record->getFirstMedia($attachment)->file_name ?? 'Documento non caricato')
<<<<<<< HEAD
               /*
                 ->url(function($record) use ($attachment){
                    $media = $record->getFirstMedia($attachment);
                    if (!$media) {
                        return;
                    }
                    $signedUrl =$media->getUrl();
                    //$signedUrl = app(GetCloudFrontSignedUrlAction::class)->execute($media->getPath(), 60);
                    return $signedUrl;
                 })
                 ->openUrlInNewTab()
                 */
                
                
                ->action(function ($record,\Illuminate\Http\Request $request) use ($attachment) {
                    
=======

                ->action(function ($record,\Illuminate\Http\Request $request) use ($attachment) {
>>>>>>> 9c5e628 (.)
                    // @phpstan-ignore method.nonObject
                    $media = $record->getFirstMedia($attachment);
                    if (!$media) {
                        return;
                    }
<<<<<<< HEAD
                    //dddx($media->getPath());
=======

>>>>>>> 9c5e628 (.)
                    return $media->toInlineResponse($request);
                    //return $media->toResponse($request);

                    //return Storage::disk($media->disk)->download($media->getPathRelativeToRoot());
                    //return Storage::disk($media->disk)
                    //    ->temporaryUploadUrl($media->getPathRelativeToRoot(),now()->addMinutes(5));

                    //return response()->streamDownload(function () use ($media) {
                    //    echo $media->get();
                    //}, $media->file_name);
<<<<<<< HEAD
                    
                    //$headers=[
                    //    'Content-Type' => $media->mime_type,
                    //    'Content-Disposition' => 'inline; filename="' . basename($media->getPathRelativeToRoot()) . '"'
                    //];
                    //$path = Storage::disk($media->disk)->path($media->getPathRelativeToRoot());
                    //return response()->file($path, $headers);
                    //
                    //
                    //return Storage::disk($media->disk)->response($media->getPathRelativeToRoot(), null, $headers);
                    //
                })
                  
=======
                    /*
                    $headers=[
                        'Content-Type' => $media->mime_type,
                        'Content-Disposition' => 'inline; filename="' . basename($media->getPathRelativeToRoot()) . '"'
                    ];
                    $path = Storage::disk($media->disk)->path($media->getPathRelativeToRoot());
                    return response()->file($path, $headers);
                    */
                    /*
                    return Storage::disk($media->disk)->response($media->getPathRelativeToRoot(), null, $headers);
                    */
                })
>>>>>>> 9c5e628 (.)
                ;


    }




}