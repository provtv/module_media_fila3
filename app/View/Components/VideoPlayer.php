<?php

declare(strict_types=1);

namespace Modules\Media\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;

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
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(): void {
=======
    public function __construct(public string $mp4Src, public int $currentTime, ?string $driver = null)
    {
>>>>>>> b94526c9b (.)
=======
    public function __construct(public string $mp4Src, public int $currentTime, ?string $driver = null)
    {
>>>>>>> d9766aa8a (.)
        $xot = XotData::make();
        Assert::string($driver ??= $xot->video_player);

        $this->driver = $driver;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(): void {
=======
    public function render()
    {
>>>>>>> b94526c9b (.)
=======
    public function render()
    {
>>>>>>> d9766aa8a (.)
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->driver);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
