<?php
/**
 * @link      https://github.com/bluezed/yii2-scroll-top
 * @copyright Copyright (c) 2015 Thomas Geppert
 * @license   https://github.com/bluezed/yii2-scroll-top/blob/master/LICENSE
 */

namespace bluezed\scrollTop;

use yii\helpers\Json;
use yii\base\Widget;

/**
 * scroll-to-top widget to include in a website
 *
 * @author Thomas Geppert <bluezed.apps@gmail.com>
 */
class ScrollTop extends Widget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
		$view = $this->getView();
        ScrollTopAsset::register($view);
    }
    /**
     * @inheritdoc
     */
    public function run()
    {
        
		return Html::a(
                    Html::tag(
						'i', 
						'', 
						[
							'class'=>'glyphicon glyphicon-menu-up circle',
							'style'=>'padding-top:5px;font-size:1.25em;color:#fff;'
						]
					),
                    '#',
                    ['id'=>'smooth-scroller', 'class'=>'smooth-scroll']
                );
    }
}