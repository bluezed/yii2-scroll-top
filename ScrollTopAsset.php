<?php
/**
 * @link      https://github.com/bluezed/yii2-scroll-top
 * @copyright Copyright (c) 2015 Thomas Geppert
 * @license   https://github.com/bluezed/yii2-scroll-top/blob/master/LICENSE
 */

namespace bluezed\scrollTop;

use yii\web\AssetBundle;

/**
 * Asset bundle for ScrollTop
 *
 * @author Thomas Geppert <bluezed.apps@gmail.com>
 */
class ScrollTopAsset extends AssetBundle
{
    public $sourcePath = '@bluezed/scrollTop/assets';
    public $css = [
        'css/scroll-top.css',
    ];
    public $js = [
        'js/scroll-top.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
