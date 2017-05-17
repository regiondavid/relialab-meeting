  <div class="page-header">
    <h3>最新通知</h3>
  </div>
  <ul class="list-group">
  <?php foreach ($list as $item): ?>
    <a href=<?php echo "/news/view/".$item['id'] ?>><li class="list-group-item"><?php echo "<span class='badge'>".$item['publishtime']."</span>".$item['title'] ?></li></a>
  <?php endforeach; ?>
  </ul>