<div class="login-main">
  <h2>后台系统登录</h2>
  <form action="/xadmin/login" method="post" class="form-horizontal">
    <div class="table-column form-group">
      <label for="name">用户名：</label>
      <input type="text" name="uname" id="name">
    </div>
    <div class="table-column form-group">
      <label for="password">密&nbsp;&nbsp;&nbsp;&nbsp;码：</label>    
      <input type="text" name="upsd" id="password">
    </div>
    <input type="hidden" value="post" name="action">
    <p class="error-info"><?php echo $error ?></p>
    <div class="table-column form-group">
      <button class="login-bt btn btn-success" type="submit">登录</button>
    </div>
  </form>
</div>
  <script src="/assets/scripts/index.js"></script>