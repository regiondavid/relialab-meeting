<div class="admin-content tab-content">
  <div class="page-header">
    <h2>通知管理</h2>
  </div> 
  <div class="form-group">
    <a href="/xadmin/create"><button class="btn btn-success">发布新通知</button></a>
  </div>
  <div class="notice-list">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>标题</th>
          <th>发布时间</th>
          <th>编辑</th>
          <th>删除</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list as $item): ?>
          <tr>
            <th scope="row"></th>
            <th>
              <?php echo $item['title']; ?>
            </th>
            <th>
              <?php echo $item['publishtime']; ?>
            </th>
            <th>
              <a href=<?php echo "/xadmin/show/".$item['id'] ?>><button class="btn btn-primary">编辑</button></a>
            </th>
            <th>
              <a href=<?php echo "/xadmin/noticedel/".$item['id'] ?> ><button class="btn btn-danger">删除</button></a>
            </th>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>