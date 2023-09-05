<?php

declare(strict_types=1);

namespace Modules\Media\View\Components;

use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

/**
 * Class VideoPlayer.
 */
class VideoPlayer extends Component
{
    public string $driver;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $mp4Src, public int $currentTime, string $driver = null)
    {
        if (null === $driver) {
            $driver = config('xra.video.player');
        }
        $this->driver = $driver;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        /**
         * @phpstan-var view-string
         */
        // $view = 'media::components.video-player.'.$this->driver;
        $view = app(GetViewAction::class)->execute($this->driver);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
