<?php
/**
 * @link https://github.com/MadAnd/yii2-underscore
 * @copyright Copyright (c) 2015 MadAnd <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\underscore;

use yii\web\AssetBundle;

class UnderscoreStringAsset extends AssetBundle
{
    public $sourcePath = '@bower/underscore.string/dist';
    public $js = [
        YII_ENV_DEV ? 'underscore.string.js' : 'underscore.string.min.js',
    ];
    
    public $depends = [
        'madand\underscore\UnderscoreAsset',
    ];
}
