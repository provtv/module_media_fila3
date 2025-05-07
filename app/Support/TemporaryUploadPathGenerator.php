<?php

declare(strict_types=1);

namespace Modules\Media\Support;

use Modules\Media\Models\Media;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Media\Contracts\PathGenerator;

/**
 * Class TemporaryUploadPathGenerator
 * 
 * Gestisce la generazione dei percorsi per i file temporanei nel sistema media.
 * Implementa l'interfaccia PathGenerator per garantire la compatibilità con il sistema.
 */
class TemporaryUploadPathGenerator implements PathGenerator
{
    /**
     * Genera il percorso per il file originale.
     *
     * @param Media $media Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPath(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'original').'/';
    }

    /**
     * Genera il percorso per le conversioni.
     *
     * @param Media $media Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPathForConversions(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'conversion');
    }

    /**
     * Genera il percorso per le immagini responsive.
     *
     * @param Media $media Il media per cui generare il percorso
     * @return string Il percorso generato
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'responsive');
    }

    /**
     * Genera un percorso base univoco per il media.
     *
     * @param Media $media Il media per cui generare il percorso base
     * @return string Il percorso base generato
     * @throws \InvalidArgumentException se l'ID del media non è una stringa valida
     */
    protected function getBasePath(Media $media): string
    {
        Assert::string($id = $media->getKey());
        $key = md5($media->uuid.$id);
=======
>>>>>>> 83f472a (.)

// use Spatie\MediaLibrary\MediaCollections\Models\Media;
// use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
// use Modules\Media\Contracts\PathGenerator;
// implements PathGenerator
class TemporaryUploadPathGenerator
{
    /**
     * @param \Modules\Media\Models\Media $media
     */
    public function getPath($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'original').'/';
    }

    /**
     * @param \Modules\Media\Models\Media $media
     */
    public function getPathForConversions($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'conversion');
    }

    /**
     * @param \Modules\Media\Models\Media $media
     */
    public function getPathForResponsiveImages($media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id . $media->uuid . 'responsive');
    }

    /**
     * Get a unique base path for the given media.
     *
     * @param \Modules\Media\Models\Media $media
     */
    protected function getBasePath($media): string
    {
        Assert::string($id = $media->getKey());
        $key = md5($media->uuid . $id);
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 83f472a (.)

        return "tmp/{$key}";
    }
}
