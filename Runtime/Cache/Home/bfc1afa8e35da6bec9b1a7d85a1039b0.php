<?php if (!defined('THINK_PATH')) exit();?><div class="wrapper wrapper-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 pull-left">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo ($_SESSION['edminInfo']['username']); ?><span style="font-weight:lighter;">,欢迎您</span></h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo ($_SESSION['edminInfo']['logintime']); ?></h1>
                        <small>登录时间</small>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-8">-->
            <!--<div class="ibox float-e-margins">-->
            <!--<div class="ibox-title">-->
            <!--<h5>系统公告</h5>-->
            <!--</div>-->
            <!--<div class="ibox-content">-->
            <!--<h3 class="no-margins"><a href="">欢迎您使用阅读海洋后台管理系统。</a></h3>-->
            <!--<h3>登录时间</h3>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!--<div class="col-md-3">-->
            <!--<div class="ibox float-e-margins">-->
            <!--<div class="ibox-title">-->
            <!--<span class="label label-success pull-right">11月</span>-->
            <!--<h5>新增散客用户数</h5>-->
            <!--</div>-->
            <!--<div class="ibox-content">-->
            <!--<h1 class="no-margins">386,200</h1>-->
            <!--<div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>-->
            <!--</div>-->
            <!--<small>总用户</small>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3">-->
            <!--<div class="ibox float-e-margins">-->
            <!--<div class="ibox-title">-->
            <!--<span id="month" class="label label-info pull-right">月</span>-->
            <!--<h5>新增任务数</h5>-->
            <!--</div>-->
            <!--<div class="ibox-content">-->
            <!--<h1 class="no-margins" id="newnum">0</h1>-->
            <!--<div class="stat-percent font-bold text-info" id="taskrate">0-->
            <!--<i class="fa fa-level-up"></i>-->
            <!--</div>-->
            <!--<small>新增比</small>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

        </div>

        <!--<div class="row">-->

            <!--<div class="col-lg-12">-->
                <!--<div class="ibox float-e-margins">-->
                    <!--<div class="ibox-title">-->
                        <!--<h5>系统公告</h5>-->
                        <!--<div class="ibox-tools">-->
                            <!--<a class="collapse-link">-->
                                <!--<i class="fa fa-chevron-up"></i>-->
                            <!--</a>-->
                            <!--<a class="close-link">-->
                                <!--<i class="fa fa-times"></i>-->
                            <!--</a>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="ibox-content">-->
                        <!--<div class="table-responsive">-->
                            <!--<table class="table table-striped">-->
                                <!--<thead>-->
                                <!--<tr>-->
                                    <!--<th>帮助与反馈</th>-->
                                    <!--<th>类型</th>-->
                                    <!--<th>回复时间</th>-->
                                    <!--<th>点击率</th>-->
                                    <!--<th>跳转查看</th>-->
                                <!--</tr>-->
                                <!--</thead>-->
                                <!--<tbody>-->
                                <!--<?php if(is_array($list)): foreach($list as $key=>$vo): ?>-->
                                    <!--<tr>-->
                                        <!--<td><?php echo ($vo["title"]); ?></td>-->
                                        <!--<td><?php echo ($vo["name"]); ?></td>-->
                                        <!--<td> <?php echo date("Y-m-d H:i:s",$vo['responsetime']);?></td>-->
                                        <!--<td><?php echo ($vo["clicknum"]); ?></td>-->
                                        <!--<td><a href="<?php echo U('System/feedbackdetail',array('id'=>$vo['id']));?>">点击查看</a></td>-->
                                    <!--</tr>-->
                                <!--<?php endforeach; endif; ?>-->
                                <!--</tbody>-->
                            <!--</table>-->
                        <!--</div>-->

                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="row">-->

            <!--<div class="col-lg-12">-->
                <!--<div class="ibox float-e-margins">-->
                    <!--<div class="ibox-title">-->
                        <!--<h5>最近回复的 帮助与反馈 列表</h5>-->
                        <!--<div class="ibox-tools">-->
                            <!--<a class="collapse-link">-->
                                <!--<i class="fa fa-chevron-up"></i>-->
                            <!--</a>-->
                            <!--<a class="close-link">-->
                                <!--<i class="fa fa-times"></i>-->
                            <!--</a>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="ibox-content">-->
                        <!--<div class="table-responsive">-->
                            <!--<table class="table table-striped">-->
                                <!--<thead>-->
                                <!--<tr>-->
                                    <!--<th>帮助与反馈</th>-->
                                    <!--<th>类型</th>-->
                                    <!--<th>回复时间</th>-->
                                    <!--<th>点击率</th>-->
                                    <!--<th>跳转查看</th>-->
                                <!--</tr>-->
                                <!--</thead>-->
                                <!--<tbody>-->
                                <!--<?php if(is_array($list)): foreach($list as $key=>$vo): ?>-->
                                    <!--<tr>-->
                                        <!--<td><?php echo ($vo["title"]); ?></td>-->
                                        <!--<td><?php echo ($vo["name"]); ?></td>-->
                                        <!--<td> <?php echo date("Y-m-d H:i:s",$vo['responsetime']);?></td>-->
                                        <!--<td><?php echo ($vo["clicknum"]); ?></td>-->
                                        <!--<td><a href="<?php echo U('System/feedbackdetail',array('id'=>$vo['id']));?>">点击查看</a></td>-->
                                    <!--</tr>-->
                                <!--<?php endforeach; endif; ?>-->
                                <!--</tbody>-->
                            <!--</table>-->
                        <!--</div>-->

                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->