<?php

declare(strict_types=1);

namespace Modules\Media\Support;

use Modules\Media\Models\Media;
use Webmozart\Assert\Assert;

// use Spatie\MediaLibrary\MediaCollections\Models\Media;
// use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
// use Modules\Media\Contracts\PathGenerator;
// implements PathGenerator
class TemporaryUploadPathGenerator
{
    /**
<<<<<<< HEAD
     * @param \Modules\Media\Models\Media $media
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * @param \Modules\Media\Models\Media $media
     */
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 2f7c4db (.)
    public function getPath($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'original').'/';
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param \Modules\Media\Models\Media $media
     */
=======
<<<<<<< HEAD
    /**
     * @param \Modules\Media\Models\Media $media
     */
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
    /**
     * @param \Modules\Media\Models\Media $media
     */
>>>>>>> 2f7c4db (.)
    public function getPathForConversions($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'conversion');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param \Modules\Media\Models\Media $media
     */
=======
<<<<<<< HEAD
    /**
     * @param \Modules\Media\Models\Media $media
     */
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
    /**
     * @param \Modules\Media\Models\Media $media
     */
>>>>>>> 2f7c4db (.)
    public function getPathForResponsiveImages($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'responsive');
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> 2f7c4db (.)
    /**
     * Get a unique base path for the given media.
=======
     * Genera il percorso di storage per i file originali.
>>>>>>> fa4eb21 (.)
     *
     * @param \Modules\Media\Models\Media $media Il modello media per cui generare il percorso
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    /*
    * Get a unique base path for the given media.
    */
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 2f7c4db (.)
    protected function getBasePath($media): string
    {
        Assert::string($id = $media->getKey());
        $key = md5($media->uuid . $id);

        return "tmp/{$key}";
<<<<<<< HEAD
=======
=======
=======
>>>>>>> fa4eb21 (.)
    public function getPath(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'original').'/';
    }

    /**
     * Genera il percorso di storage per le conversioni.
     *
     * @param \Modules\Media\Models\Media $media Il modello media per cui generare il percorso
     */
    public function getPathForConversions(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'conversion');
    }

    /**
     * Genera il percorso di storage per le immagini responsive.
     *
     * @param \Modules\Media\Models\Media $media Il modello media per cui generare il percorso
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'responsive');
    }

    /**
     * Ottiene un percorso base univoco per il media dato.
     *
     * @param \Modules\Media\Models\Media $media Il modello media per cui generare il percorso base
     */
    protected function getBasePath(Media $media): string
    {
        Assert::string($prefix = config('media-library.prefix', ''));
        Assert::string($id = $media->getKey());
        $key = md5($media->uuid.$id);

        if ($prefix !== '') {
            return $prefix.'/'.$key;
        }

        return $key;
<<<<<<< HEAD
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
=======
>>>>>>> fa4eb21 (.)
    }
}
