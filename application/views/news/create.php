<h2>
  <?php echo $title; ?>
</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
  <div>
    <label for="title">Title</label>
    <input type="input" name="title" />
  </div>
  <div>
    <label for="text">Text</label>
    <script id="container" name="text" type="text/plain"></script>
  </div>
  <div class="bt">
    <button type="submit">提交</button>
  </div>
</form>