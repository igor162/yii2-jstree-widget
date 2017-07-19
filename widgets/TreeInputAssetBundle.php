<?php

namespace igor162\JsTreeWidget\widgets;

use Yii;
use yii\web\AssetBundle;

/**
 * Class TreeInputAssetBundle
 * @package igor162\JsTreeWidget\widgets
 *
 * @property string $sourcePath
 * @property array $css
 */
class TreeInputAssetBundle extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/tree-input-src/';
        $this->css = [
            'styles.css'
        ];
        parent::init();
    }
}
