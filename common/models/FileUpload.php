<?php
namespace common\models;

use yii\base\Model;

/**
 * File upload form
 */
class FileUpload extends Model
{
    public $imageFiles;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // File upload validation rules
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 8],
            
        ];
    }

}
