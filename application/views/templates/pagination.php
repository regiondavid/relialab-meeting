<nav aria-label="Page navigation" class="page-nav">
  <ul class="pagination">
    <?php
      for($i=1;$i<$count+1;$i++) {
        if($ref=="admin") {
          echo "<li><a href='/xadmin/notice/".$i."'>".$i."</a></li>";
        } else if ($ref=="index") {
          echo "<li><a href='/news/index/".$i."'>".$i."</a></li>";
        }
      }
    ?>
  </ul>
</nav>
</div>
</div>