<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $primary_text
 * @property string $text
 * @property int $category_id
 * @property int $author_id
 */
class Articles extends \yii\db\ActiveRecord
{
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'primary_text', 'text', 'category_id', 'author_id'], 'required'],
            [['text'], 'string'],
            [['category_id', 'author_id'], 'integer'],
            [['title', 'primary_text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'primary_text' => 'Primary Text',
            'text' => 'Text',
            'category_id' => 'Category',
            'author_id' => 'Author',
        ];
    }
}
