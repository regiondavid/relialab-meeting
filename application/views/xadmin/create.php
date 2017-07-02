<div class="admin-content tab-content xadmin">
  <?php echo validation_errors(); ?>
  <?php echo form_open('xadmin/create'); ?>
    <div class="form-group">
      <label for="title">标题：</label>
      <input type="input" class="form-control" name="title" />
    </div>
    <div class="form-group">
      <label for="text">内容：</label>
      <script id="container" name="text" type="text/plain"></script>
    </div>
    <input type="hidden" name="type" value="notice">
    <div class="bt form-group">
      <button type="submit" class="btn btn-success btn-submit">提交</button>
    </div>
  </form>