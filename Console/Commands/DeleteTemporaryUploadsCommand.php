<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Media\Console\Commands;
=======
namespace Themes\Media\Console\Commands;
>>>>>>> a573407 (up)

use Illuminate\Console\Command;

class DeleteTemporaryUploadsCommand extends Command
{
    protected $signature = 'media-library:delete-old-temporary-uploads';

    protected $description = 'Delete old temporary uploads';

    public function handle()
    {
        $this->info('Start removing old temporary uploads...');

        $temporaryUploadModelClass = config('media-library.temporary_upload_model');

        $temporaryUploads = $temporaryUploadModelClass::old()->get();

        $temporaryUploads->each->delete();

        $this->comment($temporaryUploads->count().' old temporary upload(s) deleted!');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> a573407 (up)
