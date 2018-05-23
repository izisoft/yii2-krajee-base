<?php

/**
 * @package   yii2-krajee-base
 * @author    izisoft Visweswaran <izisoftv2@gmail.com>
 * @copyright Copyright &copy; izisoft Visweswaran, Krajee.com, 2014 - 2017
 * @version   1.8.9
 */

namespace izisoft\base;

/**
 * Asset bundle used for all Krajee extensions with bootstrap and jquery dependency.
 *
 * @author izisoft Visweswaran <izisoftv2@gmail.com>
 * @since 1.0
 */
class AssetBundle extends BaseAssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
