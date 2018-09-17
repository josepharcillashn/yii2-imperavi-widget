<?php
/**
 * This file is part of yii2-imperavi-widget.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/josepharcillashn/yii2-imperavi-widget
 */

namespace josepharcillashn\imperavi\tests\functional\data\overrides;

use josepharcillashn\imperavi\Asset;
use josepharcillashn\imperavi\Widget;
use Yii;

/**
 * @author Vasile Crudu <bazillio07@yandex.ru>
 *
 * @link https://github.com/josepharcillashn
 */
final class TestWidget extends Widget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        Yii::$container->set(Asset::className(), [
            'class' => TestAsset::className(),
        ]);

        parent::init();
    }
}
