<?php

/**
 * @package   yii2-krajee-base
 * @author    izisoft Visweswaran <izisoftv2@gmail.com>
 * @copyright Copyright &copy; izisoft Visweswaran, Krajee.com, 2014 - 2017
 * @version   1.8.9
 */

namespace izisoft\base;

use Yii;

/**
 * Common base widget asset bundle for all Krajee widgets
 *
 * @author izisoft Visweswaran <izisoftv2@gmail.com>
 * @since 1.0
 */
class WidgetAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/kv-widgets']);
        $this->setupAssets('js', ['js/kv-widgets']);
        parent::init();
    }
}
