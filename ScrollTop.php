<?php
/**
 * @link      https://github.com/bluezed/yii2-scroll-top
 * @copyright Copyright (c) 2015 Thomas Geppert
 * @license   https://github.com/bluezed/yii2-scroll-top/blob/master/LICENSE
 */

namespace bluezed\scrollTop;

use yii\helpers\Json;
use yii\base\Widget;
use yii\helpers\Html;

/**
 * scroll-to-top widget to include in a website
 *
 * @author Thomas Geppert <bluezed.apps@gmail.com>
 */
class ScrollTop extends Widget
{
    public $i_class;
    public $a_id;
    public $a_class;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if($this->i_class === null){
            $this->i_class = 'glyphicon glyphicon-menu-up bluezed-scroll-top-circle';
        }
        if($this->a_class === null){
            $this->a_class = 'bluezed-scroll-top';
        }

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
                        ['class'=> $this->i_class]
                    ),
                    '#',
                    ['id'=>'btn-top-scroller', 'class'=> $this->a_class]
                );
    }
}
