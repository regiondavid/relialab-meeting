<div class="admin-content tab-content">
  <?php
  if($id<23)
    echo "<div class='page-header'><h2>".$type."</h2></div>";
  ?>
  <form action= <?php echo "/xadmin/update/".$id ?> method="post">
    <div class="article-title form-group">
      <label for="title">标题：</label>
      <input type="text" id="title" class="form-control" name="title" value=<?php echo $title ?> />
    </div>
    <div class="article-text form-group">
      <label for="container">内容：</label>
      <script id="container" name="text" type="text/plain">
        <?php echo $text ?>
      </script>
    </div>
    <div>
      <button type="submit" class="btn-submit btn btn-success">更新</button>
    </div>
  </form>
</div>