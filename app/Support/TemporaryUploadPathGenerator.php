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
<<<<<<< HEAD
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

        return "tmp/{$key}";
=======
    public function getPath(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'original').'/';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'conversion');
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getBasePath($media).'/'.md5($media->id.$media->uuid.'responsive');
    }

    /*
    * Get a unique base path for the given media.
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
>>>>>>> 184c6ec (.)
    }
}
