<?php

/**
 * @link      https://github.com/bluezed/yii2-scroll-top
 * @copyright Copyright (c) 2015 Thomas Geppert
 * @license   https://github.com/bluezed/yii2-scroll-top/blob/master/LICENSE
 */

namespace bluezed\scrollTop;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * This Yii 2 scroll to top widget adds a simple scroll-to-top button to your site. 
 * It uses a glyphicon, some CSS and the .animate jQuery function. 
 * All these are part of Yii 2 by default so no other dependencies are required.
 * 
 * Installation
 * ------------
 * The preferred way to install this extension is through composer.
 * 
 * Either run:
 * php composer.phar require --prefer-dist bluezed/yii2-scroll-top "*"
 * 
 * or add
 * "bluezed/yii2-scroll-top": "*"
 * to the require section of your composer.json file.
 * 
 * How to use
 * ----------
 * To use this widget, Add this line to your main layout so the widget gets
 *  loaded automatically into every page.
 * 
 * <?= \bluezed\scrollTop\ScrollTop::widget() ?>
 * 
 * For example:
 * ```php
 * <?php $this->beginBody() ?>
 * <?= \bluezed\scrollTop\ScrollTop::widget([
 *          'btnColorClass' => 'btn-info'
 *          'glyphicon' => 'glyphicon-circle-arrow-up',
 *          'linkText' => 'Top',
 *     ]) ?>
 * ```
 * 
 * @author Thomas Geppert <bluezed.apps@gmail.com>
 */
class ScrollTop extends Widget {

    /**
     * @var string Bootstrap btn color option
     */
    public $btnColorClass = 'bluezed-scroll-top';

    /**
     * @var string Bootstrap glyphicon
     */
    public $glyphicon = 'glyphicon-menu-up';

    /**
     * @var string optional text to be displayed on button
     */
    public $linkText = null;

    /**
     * @inheritdoc
     */
    public function init() {
        $view = $this->getView();
        ScrollTopAsset::register($view);
    }

    /**
     * @inheritdoc
     */
    public function run() {
        return Html::a(
        Html::tag('i', '&nbsp' . $this->linkText, ['class' => 'glyphicon ' . $this->glyphicon . '',] ),
        '#', ['id' => 'btn-top-scroller', 'class' => 'btn ' . $this->btnColorClass . '',
        'title' => !empty($this->linkText) ?  $this->linkText : '']
        );
    }

}
