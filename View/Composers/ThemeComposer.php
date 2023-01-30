<?php

declare(strict_types=1);

namespace Themes\CoderDocs\View\Composers;

use Illuminate\View\View;
use Modules\Xot\View\Composers\XotBaseComposer;

class ThemeComposer extends XotBaseComposer
{
    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view)
    {
        // $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this);
    }
}
