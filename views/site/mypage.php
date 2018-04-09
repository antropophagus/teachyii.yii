<h1>Hello! This is my first page!</h1>
<div>
  <ul>
    <?php foreach ($array as $item): ?>
      <li><?php echo $item->id, ' : ', $item->title, ' : ', $item->abb ?></li>
    <?php endforeach; ?>
  </ul>
</div>
