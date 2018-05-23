<?php

/**
 * @package   yii2-krajee-base
 * @author    izisoft Visweswaran <izisoftv2@gmail.com>
 * @copyright Copyright &copy; izisoft Visweswaran, Krajee.com, 2014 - 2017
 * @version   1.8.7
 */

namespace izisoft\base;

/**
 * Base asset bundle for Krajee extensions (including bootstrap plugins)
 *
 * @author izisoft Visweswaran <izisoftv2@gmail.com>
 * @since 1.6.0
 */
class PluginAssetBundle extends AssetBundle
{
    /**
     * @inheritdoc
     */
     public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
