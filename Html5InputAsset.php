<?php

/**
 * @copyright Copyright &copy; izisoft Visweswaran, Krajee.com, 2014 - 2017
 * @package yii2-krajee-base
 * @version 1.8.9
 */

namespace izisoft\base;

/**
 * Asset bundle for the [[Html5Input]] widget.
 *
 * @author izisoft Visweswaran <izisoftv2@gmail.com>
 * @since 1.0
 */
class Html5InputAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/html5input']);
        parent::init();
    }
}
