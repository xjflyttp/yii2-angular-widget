<?php

/**
 * AngularAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\angular;

use yii\web\AssetBundle;

class AngularAsset extends AssetBundle {

    public $sourcePath = '@bower/angular';
    public $basePath = '@webroot/assets';
    public $js = ['angular.js'];

}

