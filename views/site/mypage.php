<?
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Hello! This is my first page!</h1>
<div>
  <ul>
    <?php foreach ($countries as $item): ?>
      <li><?php echo $item->id, ' : ', $item->title, ' : ', $item->abb ?></li>
    <?php endforeach; ?>
  </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
