<?php
/**
 * This file is part of yii2-imperavi-widget.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/josepharcillashn/yii2-imperavi-widget
 */

namespace josepharcillashn\imperavi\bundles;

use yii\web\AssetBundle;

/**
 * @author Vasile Crudu <bazillio07@yandex.ru>
 *
 * @link https://github.com/josepharcillashn/yii2-imperavi-widget
 */
class FileManagerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@josepharcillashn/imperavi/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'custom/plugins/filemanager/filemanager.js',
    ];
}
