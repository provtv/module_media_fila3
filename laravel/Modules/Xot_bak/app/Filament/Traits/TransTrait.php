<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use TypeError;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;

trait TransTrait
{
    /**
     * Get translation for a given key.
     *
     * @throws \Exception Se exceptionIfNotExist è true e la traduzione non esiste
     */
    public static function trans(string $key, bool $exceptionIfNotExist = false): string
    {
        $tmp = static::getKeyTrans($key);
        /** @var string|array<int|string,mixed>|null $res */
        $res = trans($tmp);

        if (is_string($res)) {
            if ($exceptionIfNotExist && $res === $tmp) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
                throw new \Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
=======
<<<<<<< HEAD
                throw new \Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
=======
                throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
                throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
=======
                throw new \Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
            }

            return $res;
        }

        if (is_array($res)) {
            $first = current($res);
            if (is_string($first) || is_numeric($first)) {
                return is_string($first) ? $first : (string) $first;
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        return 'fix:' . $tmp;
=======
<<<<<<< HEAD
        return 'fix:' . $tmp;
=======
        return 'fix:'.$tmp;
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
        return 'fix:'.$tmp;
=======
        return 'fix:' . $tmp;
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
    }

    /**
     * Get translation key for a given key.
     */
    public static function getKeyTrans(string $key): string
    {
        /** @var string */
        $transKey = app(GetTransKeyAction::class)->execute(static::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        $key = $transKey . '.' . $key;
=======
<<<<<<< HEAD
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
        $key = $transKey.'.'.$key;
=======
        $key = $transKey . '.' . $key;
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
        $key = Str::of($key)->replace('.cluster.pages.', '.')->toString();
        return $key;
    }

    /**
     * Get translation key for a given function name.
     */
    public static function getKeyTransFunc(string $func): string
    {
        $key = Str::of($func)
            ->after('get')
            ->snake()
            ->replace('_', '.')
            ->toString();
        /** @var string */
        $transKey = app(GetTransKeyAction::class)->execute(static::class);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        $key = $transKey . '.' . $key;
=======
<<<<<<< HEAD
        $key = $transKey . '.' . $key;
=======
        $key = $transKey.'.'.$key;
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
        $key = $transKey.'.'.$key;
=======
        $key = $transKey . '.' . $key;
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
        $key = Str::of($key)->replace('.cluster.pages.', '.')->toString();
        return $key;
    }

    /**
     * Get translation for a given function name.
     */
    public static function transFunc(string $func, bool $exceptionIfNotExist = false): string
    {
        $key = static::getKeyTransFunc($func);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
        
        /** @var string|array<int|string,mixed>|null $trans */
        try{
            $trans = trans($key);
        }catch(TypeError $e){
            dddx([
                'e'=>$e,
                'key'=>$key
            ]);
        }

        if ($key == $trans) {
            $group = Str::of($key)->before('.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
=======
>>>>>>> origin/dev
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        /** @var string|array<int|string,mixed>|null */
        $trans = null;

        try {
            $trans = trans($key);
        } catch (\TypeError $e) {
            dddx([
                'e' => $e,
                'key' => $key,
            ]);
        }

        if ($key === $trans) {
            $group = Str::of($key)->before('.')->toString();
            $item = Str::of($key)->after($group . '.')->toString();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
=======
        
        /** @var string|array<int|string,mixed>|null $trans */
        try{
            $trans = trans($key);
        }catch(TypeError $e){
            dddx([
                'e'=>$e,
                'key'=>$key
            ]);
        }

        if ($key == $trans) {
            $group = Str::of($key)->before('.')->toString();
            $item = Str::of($key)->after($group.'.')->toString();
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
            $group_arr = trans($group);
            if (is_array($group_arr)) {
                $trans = Arr::get($group_arr, $item);
            }
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf

=======
>>>>>>> origin/dev
=======

>>>>>>> origin/dev
<<<<<<< HEAD
=======

=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
        if (is_numeric($trans)) {
            return strval($trans);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
<<<<<<< HEAD
=======
        // if (! is_string($trans) && ! is_numeric($trans) && ! is_array($trans)) {
        //    return 'fix:'.$key;
        // }
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
        // if (! is_string($trans) && ! is_numeric($trans) && ! is_array($trans)) {
        //    return 'fix:'.$key;
        // }
=======
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
        if (is_array($trans)) {
            $first = current($trans);
            if (is_string($first) || is_numeric($first)) {
                return is_string($first) ? $first : (string) $first;
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        if (is_string($trans)) {
=======
<<<<<<< HEAD
        if (is_string($trans)) {
=======
        if (is_string($trans) /* || is_numeric($trans) */) {
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
        if (is_string($trans) /* || is_numeric($trans) */) {
=======
        if (is_string($trans)) {
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
            if ($trans === $key) {
                $newTrans = Str::of($key)
                    ->between('::', '.')
                    ->replace('_', ' ')
                    ->toString();
                app(SaveTransAction::class)->execute($key, $newTrans);

                return $newTrans;
            }

            return $trans;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        if ($trans === null) {
=======
<<<<<<< HEAD
        if ($trans === null) {
=======
        if (is_null($trans)) {
>>>>>>> origin/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
        if (is_null($trans)) {
=======
        if ($trans === null) {
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
            $newTrans = Str::of($key)
                ->between('::', '.')
                ->replace('_', ' ')
                ->toString();
            app(SaveTransAction::class)->execute($key, $newTrans);

            return $newTrans;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        return 'fix:' . $key;
=======
<<<<<<< HEAD
        return 'fix:' . $key;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
>>>>>>> origin/dev
        // $first = current($trans);
        // if (is_string($first) || is_numeric($first)) {
        //    return is_string($first) ? $first : (string) $first;
        // }

        return 'fix:'.$key;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
=======
=======
        return 'fix:' . $key;
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
>>>>>>> origin/dev
>>>>>>> origin/dev
    }

    protected function transChoice(string $key, int $number, array $replace = []): string
    {
        return trans_choice($key, $number, $replace) ?? $key;
    }
}
