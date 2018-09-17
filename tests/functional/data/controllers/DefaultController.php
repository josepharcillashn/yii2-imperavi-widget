<?php
/**
 * This file is part of yii2-imperavi-widget.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/josepharcillashn/yii2-imperavi-widget
 */

namespace josepharcillashn\imperavi\tests\functional\data\controllers;

use org\bovigo\vfs\vfsStream;
use josepharcillashn\imperavi\actions\DeleteFileAction;
use josepharcillashn\imperavi\actions\GetFilesAction;
use josepharcillashn\imperavi\actions\GetImagesAction;
use josepharcillashn\imperavi\actions\UploadFileAction;
use josepharcillashn\imperavi\tests\functional\TestCase;
use yii\web\Controller;

/**
 * @author Vasile Crudu <bazillio07@yandex.ru>
 *
 * @link https://github.com/josepharcillashn
 */
final class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'get-images' => [
                'class' => GetImagesAction::className(),
                'url' => '/statics/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::STATICS_DIRECTORY),
            ],
            'get-images-invalid-url' => [
                'class' => GetImagesAction::className(),
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::STATICS_DIRECTORY),
            ],
            'get-images-invalid-path' => [
                'class' => GetImagesAction::className(),
                'url' => '/statics/',
            ],
            'get-images-invalid-alias' => [
                'class' => GetImagesAction::className(),
                'url' => '/statics/',
                'path' => '@invalid/data/statics',
            ],
            'get-files' => [
                'class' => GetFilesAction::className(),
                'url' => '/statics/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::STATICS_DIRECTORY),
            ],
            'get-files-invalid-url' => [
                'class' => GetFilesAction::className(),
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::STATICS_DIRECTORY),
            ],
            'get-files-invalid-path' => [
                'class' => GetFilesAction::className(),
                'url' => '/statics/',
            ],
            'get-files-invalid-alias' => [
                'class' => GetFilesAction::className(),
                'url' => '/statics/',
                'path' => '@invalid/data/statics',
            ],
            'upload-image' => [
                'class' => UploadFileAction::className(),
                'url' => '/upload/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
            ],
            'upload-image-not-unique' => [
                'class' => UploadFileAction::className(),
                'url' => '/upload/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
                'unique' => false,
            ],
            'upload-image-translit' => [
                'class' => UploadFileAction::className(),
                'url' => '/upload/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
                'unique' => false,
                'translit' => true,
            ],
            'upload-image-max-size' => [
                'class' => UploadFileAction::className(),
                'url' => '/upload/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
                'validatorOptions' => [
                    'maxSize' => 10,
                ],
            ],
            'upload-file' => [
                'class' => UploadFileAction::className(),
                'url' => '/upload/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
                'uploadOnlyImage' => false,
            ],
            'upload-image-invalid-url' => [
                'class' => UploadFileAction::className(),
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
            ],
            'upload-image-invalid-path' => [
                'class' => UploadFileAction::className(),
                'url' => '/upload/',
            ],
            'delete-file' => [
                'class' => DeleteFileAction::className(),
                'url' => '/upload/',
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
            ],
            'delete-invalid-url' => [
                'class' => DeleteFileAction::className(),
                'path' => vfsStream::url(TestCase::ROOT_DIRECTORY . '/' . TestCase::UPLOAD_DIRECTORY),
            ],
            'delete-invalid-path' => [
                'class' => DeleteFileAction::className(),
                'url' => '/upload/',
            ],
        ];
    }
}

