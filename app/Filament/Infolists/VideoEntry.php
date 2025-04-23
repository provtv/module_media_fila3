<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Infolists;

use Filament\Infolists\Components\Entry;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\ComponentAttributeBag;
use League\Flysystem\UnableToCheckFileExistence;
use Webmozart\Assert\Assert;

class VideoEntry extends Entry
{
    /**
     * @var view-string
     */
    protected string $view = 'media::filament.infolists.video-entry';

    protected string|\Closure|null $disk = null;

    protected int|string|\Closure|null $height = null;

    protected bool|\Closure $isCircular = false;

    protected bool|\Closure $isSquare = false;

    protected string|\Closure $visibility = 'public';

    protected int|string|\Closure|null $width = null;

    /**
     * @var array<mixed>|\Closure
     */
    protected array|\Closure $extraImgAttributes = [];

    protected string|\Closure|null $defaultImageUrl = null;

    protected bool|\Closure $isStacked = false;

    protected int|\Closure|null $overlap = null;

    protected int|string|\Closure|null $ring = null;

    protected int|\Closure|null $limit = null;

    protected bool|\Closure $hasLimitedRemainingText = false;

    protected bool|\Closure $isLimitedRemainingTextSeparate = false;

    protected string|\Closure|null $limitedRemainingTextSize = null;

    protected bool|\Closure $shouldCheckFileExistence = true;

    public function disk(string|\Closure|null $disk): static
    {
        $this->disk = $disk;
        return $this;
    }

    public function height(int|string|\Closure|null $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function circular(bool|\Closure $condition = true): static
    {
        $this->isCircular = $condition;
        return $this;
    }

    public function square(bool|\Closure $condition = true): static
    {
        $this->isSquare = $condition;
        return $this;
    }

    public function size(int|string|\Closure $size): static
    {
        $this->width($size);
        $this->height($size);
        return $this;
    }

    public function visibility(string|\Closure $visibility): static
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function width(int|string|\Closure|null $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getDisk(): Filesystem
    {
        return Storage::disk($this->getDiskName());
    }

    public function getDiskName(): string
    {
        Assert::string($res = $this->evaluate($this->disk) ?? config('filament.default_filesystem_disk'));
        return $res;
    }

    /**
     * Get the height value for the video entry.
     *
     * @return string|null The height value as a string (with 'px' suffix if it was an integer) or null if not set
     */
    public function getHeight(): ?string
    {
        $height = $this->evaluate($this->height);

        if ($height === null) {
            return null;
        }

        if (is_int($height)) {
            return "{$height}px";
        }

        // Convert to string to ensure consistent return type
        if (is_scalar($height) || (is_object($height) && method_exists($height, '__toString'))) {
            return is_string($height) ? $height : (string) $height;
        }

        // If we can't convert to string, return null
        return null;
    }

    public function defaultImageUrl(string|\Closure|null $url): static
    {
        $this->defaultImageUrl = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultImageUrl(): ?string
    {
        return $this->evaluate($this->defaultImageUrl);
    }

    /**
     * @param  array<mixed>|\Closure  $attributes
     */
    public function extraImgAttributes(array|\Closure $attributes = []): static
    {
        $this->extraImgAttributes = $attributes;
        return $this;
    }

    /**
     * @return array<mixed>
     */
    public function getExtraImgAttributes(): array
    {
        $attributes = $this->evaluate($this->extraImgAttributes);

        if (is_array($attributes)) {
            return $attributes;
        }

        return [];
    }

    /**
     * @return array<string, mixed>|ComponentAttributeBag
     */
    public function getExtraImgAttributeBag(): array|ComponentAttributeBag
    {
        $attributes = $this->getExtraImgAttributes();

        if ($attributes instanceof ComponentAttributeBag) {
            return $attributes;
        }

        return new ComponentAttributeBag($attributes);
    }

    public function isCircular(): bool
    {
        return (bool) $this->evaluate($this->isCircular);
    }

    public function isSquare(): bool
    {
        return (bool) $this->evaluate($this->isSquare);
    }

    /**
     * @return string
     */
    public function getVisibility(): string
    {
        $visibility = $this->evaluate($this->visibility);

        if (is_string($visibility)) {
            return $visibility;
        }

        return 'public';
    }

    /**
     * @return string|null
     */
    public function getWidth(): ?string
    {
        $width = $this->evaluate($this->width);

        if ($width === null) {
            return null;
        }

        if (is_int($width)) {
            return "{$width}px";
        }

        if (is_string($width)) {
            return $width;
        }

        // Se non è né stringa né intero, proviamo a convertire
        if (is_scalar($width) || (is_object($width) && method_exists($width, '__toString'))) {
            return (string) $width;
        }

        return null;
    }

    public function stacked(bool|\Closure $condition = true): static
    {
        $this->isStacked = $condition;
        return $this;
    }

    public function isStacked(): bool
    {
        return (bool) $this->evaluate($this->isStacked);
    }

    public function overlap(int|\Closure|null $overlap): static
    {
        $this->overlap = $overlap;
        return $this;
    }

    /**
     * Get the overlap value for the video entry.
     *
     * @return int|null The overlap value or null if not set
     */
    public function getOverlap(): ?int
    {
        $overlap = $this->evaluate($this->overlap);

        if ($overlap === null) {
            return null;
        }

        if (is_numeric($overlap)) {
            return (int) $overlap;
        }

        return null;
    }

    public function ring(string|int|\Closure|null $ring): static
    {
        $this->ring = $ring;
        return $this;
    }

    /**
     * Get the ring value for the video entry.
     *
     * @return int|null The ring value or null if not set
     */
    public function getRing(): ?int
    {
        $ring = $this->evaluate($this->ring);

        if ($ring === null) {
            return null;
        }

        if (is_numeric($ring)) {
            return (int) $ring;
        }

        return null;
    }

    public function limit(int|\Closure|null $limit = 3): static
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Get the limit value for the video entry.
     *
     * @return int|null The limit value or null if not set
     */
    public function getLimit(): ?int
    {
        $limit = $this->evaluate($this->limit);

        if ($limit === null) {
            return null;
        }

        if (is_numeric($limit)) {
            return (int) $limit;
        }

        return null;
    }

    public function limitedRemainingText(bool|\Closure $condition = true, bool|\Closure $isSeparate = false, string|\Closure|null $size = null): static
    {
        $this->hasLimitedRemainingText = $condition;
        $this->limitedRemainingTextSeparate($isSeparate);
        $this->limitedRemainingTextSize($size);
        return $this;
    }

    public function limitedRemainingTextSeparate(bool|\Closure $condition = true): static
    {
        $this->isLimitedRemainingTextSeparate = $condition;
        return $this;
    }

    public function hasLimitedRemainingText(): bool
    {
        return (bool) $this->evaluate($this->hasLimitedRemainingText);
    }

    public function isLimitedRemainingTextSeparate(): bool
    {
        return (bool) $this->evaluate($this->isLimitedRemainingTextSeparate);
    }

    public function limitedRemainingTextSize(string|\Closure|null $size): static
    {
        $this->limitedRemainingTextSize = $size;
        return $this;
    }

    /**
     * Get the limited remaining text size for the video entry.
     *
     * @return string|null The text size or null if not set
     */
    public function getLimitedRemainingTextSize(): ?string
    {
        $size = $this->evaluate($this->limitedRemainingTextSize);

        if ($size === null) {
            return null;
        }

        if (is_scalar($size) || (is_object($size) && method_exists($size, '__toString'))) {
            return is_string($size) ? $size : (string) $size;
        }

        return null;
    }

    public function checkFileExistence(bool|\Closure $condition = true): static
    {
        $this->shouldCheckFileExistence = $condition;
        return $this;
    }

    public function shouldCheckFileExistence(): bool
    {
        return (bool) $this->evaluate($this->shouldCheckFileExistence);
    }
}
