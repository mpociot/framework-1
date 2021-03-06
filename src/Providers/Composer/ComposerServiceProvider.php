<?php

/**
 * This file is part of Laravel Zero.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace LaravelZero\Framework\Providers\Composer;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use LaravelZero\Framework\Contracts\Providers\Composer as ComposerContract;

/**
 * This is the Laravel Zero Framework Composer Service Provider implementation.
 */
class ComposerServiceProvider extends BaseServiceProvider
{
    /**
     * Register composer service.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(
            'composer',
            function ($app) {
                return new Composer($app);
            }
        );

        $this->app->alias('composer', ComposerContract::class);
    }
}
