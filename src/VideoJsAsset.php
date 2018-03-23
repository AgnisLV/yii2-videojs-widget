<?php
/**
 * @link      https://github.com/wbraganca/yii2-videojs-widget
 * @copyright Copyright (c) 2014 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-videojs-widget/blob/master/LICENSE
 */

namespace AgnisLV\videojs;

/**
 * Asset bundle for videojs Widget
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
class VideoJsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/video.js/';

    public $css = [
        'video-js.min.css',
    ];

    public $js = [
        'video.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
