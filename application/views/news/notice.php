  <div class="page-header">
    <span class="more-t">最新通知</span><span class="bor-s"></span>
  </div>
  <ul class="list-group">
  <?php foreach ($list as $key=>$item): ?>
    <?php if($key<2): ?>
        <a class="news-li" href=<?php echo "/news/view/".$item['id'] ?>><li class="list-group-item"><?php echo "<span class='badge'>".$item['publishtime']."</span>".$item['title']."<span class='new-label'>new!</span>" ?></li></a>
    <?php endif; ?>
    <?php if($key>=2): ?>
        <a class="news-li" href=<?php echo "/news/view/".$item['id'] ?>><li class="list-group-item"><?php echo "<span class='badge'>".$item['publishtime']."</span>".$item['title'] ?></li></a>
    <?php endif; ?>
  <?php endforeach; ?>
  </ul>
