<?php

declare(strict_types=1);

namespace Modules\Media\Http\Livewire\Card\Video;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Modules\Xot\Actions\GetViewAction;

/**
 * Componente Livewire per la gestione dei clip video.
 * Permette la visualizzazione e modifica dei clip video associati a un modello.
 */
class Clip extends Component
{
    /**
     * Template di visualizzazione del componente.
     */
    public string $tpl = 'edit';

    /**
     * Il modello associato al clip.
     */
    public Model $model;

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /** @var array<string, mixed>     */
=======
>>>>>>> 83f472a (.)
    /**
     * Lista degli eventi ascoltati dal componente.
     * 
     * @var array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 83f472a (.)
    /** @var array<string, string> */
=======
>>>>>>> e94deb4 (.)
    protected $listeners = [
        'updateDataFromModal' => 'updateDataFromModal',
    ];

    /**
     * Inizializza il componente con il modello fornito.
     *
     * @param Model $model Il modello da associare al clip
     */
    public function mount(Model $model): void
    {
        $this->model = $model;
    }

    /**
     * Renderizza il componente.
     *
     * @return View
     */
    public function render(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Apre il modale per la modifica del clip.
     */
    public function editClip(): void
    {
        $data = $this->model->toArray();
        $this->dispatch('showModal', ['editClip', $data]);
    }

    /**
     * Aggiorna i dati del clip dal modale.
     *
     * @param string $id L'identificatore del modale
     * @param array $data I dati da aggiornare
     */
    public function updateDataFromModal(string $id, array $data): void
    {
        if ($id !== 'editClip') {
            return;
        }

        if ($data['id'] !== $this->model->getKey()) {
            return;
        }

        /** @var array<string, string> */
        $up = collect($data)
            ->only(['title', 'subtitle'])
            ->all();

        $this->model->update($up);
        $this->model->refresh();
    }
}
