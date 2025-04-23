<?php

declare(strict_types=1);

namespace Modules\Media\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

use function in_array;

class FileExtensionRule implements Rule
{
    protected array $validExtensions = [];

    public function __construct(array $validExtensions = [])
    {
        $this->validExtensions = array_map(
            static fn (string $extension): string => mb_strtolower($extension),
            $validExtensions,
        );
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $attribute
=======
     * @param  string $attribute
>>>>>>> 06dadfb (.)
=======
=======
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
>>>>>>> 2a62ef4 (.)
     * @param  string $attribute
     * @param  string $attribute
     * @param  string  $attribute
<<<<<<< HEAD
>>>>>>> 184c6ec (.)
>>>>>>> 2f7c4db (.)
<<<<<<< HEAD
>>>>>>> 59bb70f (fix: auto resolve conflict)
=======
=======
     * @param  string  $attribute
>>>>>>> fa4eb21 (.)
>>>>>>> 0ffeaf3 (fix: auto resolve conflict)
=======
     * @param  string  $attribute
>>>>>>> 2a62ef4 (.)
     * @param  UploadedFile  $value
     */
    public function passes($attribute, $value): bool
    {
        return in_array(
            mb_strtolower($value->getClientOriginalExtension()),
            $this->validExtensions,
            strict: false,
        );
    }

    public function message(): array|string
    {
        return trans(
            'media::validation.mime',
            [
                'mimes' => implode(', ', $this->validExtensions),
            ]
        );
    }
}
