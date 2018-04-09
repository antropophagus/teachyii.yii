<?
namespace app\models;

class mymodel extends \yii\db\ActiveRecord
{
  public static function tableName()
  {
    return 'country';
  }

  public static function getAll()
  {
    $array = self::find()->all();

    return $array;
  }
}




?>
