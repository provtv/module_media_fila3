<?php

declare(strict_types=1);

namespace Modules\Media\Http\Livewire\Media;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;
use Modules\Media\Models\TemporaryUpload;
use Modules\Media\Traits\WithMedia;

class Crud extends Component {
    use WithMedia;

    public $name;

    public $model = null;

    public $mediaComponentNames = ['upload'];

    public $upload;

    public $collection;

    public function mount(string $name, Model $model, string $collection) {
        $this->name = $name;
        $this->model = $model;
        $this->collection = $collection;
    }

    public function submit() {
        $order = 1;
        foreach ($this->upload ?? [] as $attachment) {
            ++$order;
            $temporaryUpload = TemporaryUpload::findByMediaUuidInCurrentSession($attachment['uuid']);
            if (null != $temporaryUpload) {
                // $media = $temporaryUpload->getFirstMedia();
                $media = $temporaryUpload->moveMedia($this->model, $this->collection, '', $attachment['fileName']);
            } else {
                $media = \Modules\Media\Models\Media::findByUuid($attachment['uuid']);
                // $media->update(['order_column'=>$order]);
                // dddx(['media'=>$media,'order'=>$order]);
            }
            $media?->update(['order_column' => $order]);
        }
        session()->flash('message', 'Post successfully updated.');
    }

    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();

        return view($view);
    }
}
