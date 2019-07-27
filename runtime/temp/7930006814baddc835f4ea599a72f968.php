<?php /*a:1:{s:61:"E:\data\newsyun/application/admin/view\city\seolist_pjax.html";i:1537349100;}*/ ?>

<table id="example1" class="table table-bordered table-striped table-hover">
    <thead>
    <tr>
        <th>栏目</th>
        <th>标题</th>
        <th>关键词</th>
        <!-- <th>描述</th> -->
        <th>添加时间</th>
        <th width="8%">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($list as $li): ?>
    <tr>
        <td><?php echo htmlentities($li['cate']); ?></td>
        <td><?php echo htmlentities($li['title']); ?></td>
        <td><?php echo htmlentities($li['keywords']); ?></td>
        <!-- <td><?php echo htmlentities($li['description']); ?></td> -->
        <td><?php echo htmlentities($li['addtime']); ?></td>
        <td><a href="<?php echo Url::build('admin/seo/seo',['id'=>$li['id']]); ?>"><i class="fa fa-edit"></i> 修改</a>&nbsp;&nbsp;  <a href="javascript:void(0);" onclick="isdel('您确定要删除这条内容吗？','<?php echo Url::build('admin/seo/seodel',['id'=>$li['id']]); ?>');"><i class="fa fa-trash-o"></i> 删除</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
  <div class="row">
    <div class="col-sm-5">
      <div class="dataTables_info"  role="status" aria-live="polite">
        <!--Showing 1 to 10 of 57 entries-->
      </div>
    </div>
    <div class="col-sm-7">
      <div class="dataTables_paginate paging_simple_numbers" >
          <?php echo $list->render(); ?>
      </div>
    </div>
  </div>