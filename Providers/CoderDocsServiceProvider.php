<?php

declare(strict_types=1);

namespace Themes\CoderDocs\Providers;

use Modules\Xot\Providers\XotBaseThemeServiceProvider;

/**
 * Undocumented class.
 */
class CoderDocsServiceProvider extends XotBaseThemeServiceProvider {
    public string $dir = __DIR__;
    public string $name = 'CoderDocs';
    public string $ns = 'pub_theme';
}
