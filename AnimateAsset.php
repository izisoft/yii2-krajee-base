<?php

/**
 * @package   yii2-krajee-base
 * @author    izisoft Visweswaran <izisoftv2@gmail.com>
 * @copyright Copyright &copy; izisoft Visweswaran, Krajee.com, 2014 - 2017
 * @version   1.8.9
 */

namespace izisoft\base;

/**
 * Asset bundle for loading animations.
 *
 * @author izisoft Visweswaran <izisoftv2@gmail.com>
 * @since 1.0
 */
class AnimateAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/animate']);
        parent::init();
    }
}
