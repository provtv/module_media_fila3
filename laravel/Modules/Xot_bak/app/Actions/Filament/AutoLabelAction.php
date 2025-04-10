<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Filament\Forms\Components\Field;
use Filament\Forms\Components\Component;
use Illuminate\Support\Arr;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class AutoLabelAction
{
    use QueueableAction;

    /**
     * Get the component name based on its actual type.
     *
     * @param Field|Component $component
     * @return string
     */
    private function getComponentName(Field|Component $component): string
    {
        // Per i componenti Field di Filament
        if (method_exists($component, 'getName')) {
            return $component->getName();
        }

        // Per i componenti generali di Filament
        // PHPStan rileva che questo controllo è sempre vero per Component
        // ma lo manteniamo per chiarezza e per gestire eventuali cambiamenti futuri in Filament
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($component, 'getStatePath')) {
<<<<<<< HEAD
            return $component->getStatePath();
=======
            $statePath = $component->getStatePath();
            return $statePath;
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2
        }

        // Fallback a reflection per altri casi
        $reflectionClass = new \ReflectionClass($component);
        if ($reflectionClass->hasProperty('name') && $reflectionClass->getProperty('name')->isPublic()) {
            $property = $reflectionClass->getProperty('name');
<<<<<<< HEAD
            return (string) $property->getValue($component);
=======
            Assert::string($value = $property->getValue($component));
            return $value;
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2
        }

        // Ultima risorsa
        return class_basename($component);
    }

    /**
     * Undocumented function.
     * return number of input added.
     *
     * @param Field|Component  $component
     * @return Field|Component
     */
    public function execute(Field|Component  $component): Field|Component
    {
<<<<<<< HEAD
        $backtrace = debug_backtrace();
=======
        Assert::isInstanceOf($component, Field::class, 'Il componente deve essere un\'istanza di Field o Component');

        $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 6);
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2

        // Otteniamo il valore dalla backtrace, assicurandoci che sia una stringa
        $class = Arr::get($backtrace, '5.class');

<<<<<<< HEAD
        // PHPStan livello 9 non consente il cast diretto di mixed a string
        if (!is_string($class)) {
            $class = '';  // Valore di fallback se non è una stringa
        }

        Assert::string($class, 'Class deve essere una stringa');
        $trans_key = app(GetTransKeyAction::class)->execute($class);
=======
        // Gestiamo il caso in cui $class sia vuoto
        if (empty($class)) {
            // Se non riusciamo a ottenere la classe dal backtrace, usiamo la classe del componente
            $class = get_class($component);
        }

        if (is_object($class)) {
            $class = get_class($class);
        }

        // Assicuriamo che $class sia una stringa
        Assert::stringNotEmpty($class, 'La classe deve essere una stringa non vuota');

        // Otteniamo la chiave di traduzione
        $transKeyAction = app(GetTransKeyAction::class);
        Assert::isCallable([$transKeyAction, 'execute'], 'GetTransKeyAction::execute deve essere chiamabile');

        $trans_key = $transKeyAction->execute($class);
        Assert::stringNotEmpty($trans_key, 'La chiave di traduzione non può essere vuota');
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2

        // Get component name based on its actual class
        $componentName = $this->getComponentName($component);

<<<<<<< HEAD
        $label_key = $trans_key.'.fields.'.$componentName.'.label';
        $label = trans($label_key);
=======
        // Costruiamo la chiave per l'etichetta
        $label_key = $trans_key . '.fields.' . $componentName . '.label';
        $label = trans($label_key);

>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2
        if (is_string($label)) {
            if ($label_key == $label) {
                $label_value = $componentName;
<<<<<<< HEAD
                $label_key1 = $trans_key.'.fields.'.$componentName;
                $label1 = trans($label_key1);
                if ($label_key1 != $label1) {
                    $label_value = $label1;
                }

                app(SaveTransAction::class)->execute($label_key, $label_value);
            }
=======

                // Proviamo a ottenere una traduzione più breve
                $label_key1 = $trans_key . '.fields.' . $componentName;
                $label1 = trans($label_key1);

                if ($label_key1 !== $label1 && is_string($label1)) {
                    $label_value = $label1;
                }

                // Salviamo la traduzione
                $saveTransAction = app(SaveTransAction::class);
                Assert::isCallable([$saveTransAction, 'execute'], 'SaveTransAction::execute deve essere chiamabile');

                $saveTransAction->execute($label_key, $label_value);
            }

            // Applichiamo l'etichetta al componente
            // Field ha sempre un metodo label(), quindi possiamo chiamarlo direttamente
>>>>>>> a528a79c1f5eb99872c3ebdad8dee7df5dc14df2
            $component->label($label);
        }

        return $component;
    }
}
