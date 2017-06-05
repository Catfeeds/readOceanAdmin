<?php if (!defined('THINK_PATH')) exit();?><div class="wrapper wrapper-content animated fadeInDown">
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-11 p-xs">
                <div class="pull-left m-r-md">
                    <i class="fa fa-cogs text-navy mid-icon"></i>
                </div>
                <h2>学校管理</h2>
                <span>管理学校升学,以及查看学校年级信息。</span>
                <small>注意:只有在每年的7-9月份,且学校本年度未升级时,方能进行升级操作,其他时间段操作无效。</small>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="<?php echo U('school/addschool');?>">
                                <button type="button" class="btn btn-sm btn-primary">添加</button>
                            </a>
                        </div>
                        <div class="col-sm-7"></div>
                        <!--<form action="/School/school" method="get">-->
                        <!--<div class="col-sm-3 pull-left">-->
                        <!--<div class="input-group">-->
                        <!--<input type="text" placeholder="搜索学校全称" class="input-sm form-control" name="schoolName">-->
                        <!--<span class="input-group-btn">-->
                        <!--<button type="submit" class="btn btn-sm btn-primary"><i-->
                        <!--class="fa fa-search"></i></button> </span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</form>-->
                    </div>
                    <div class="margin-top"></div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>学校名称</th>
                            <th>学校代码</th>
                            <th>学校属地</th>
                            <th>批量导入教师</th>
                            <th>编辑</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                <td><?php echo ($key+1); ?></td>
                                <td><?php echo ($vo["schoolname"]); ?></td>
                                <td><?php echo ($vo["schoolid"]); ?></td>
                                <td><?php echo ($vo["city"]); ?></td>
                                <td><a class="text-navy" href="/School/schoolteacher/id/<?php echo ($vo["schoolid"]); ?>">批量导入学校教师</a></td>
                                <td><a class="text-navy" href="/School/grade/school/<?php echo ($vo["schoolid"]); ?>">管理该学校下年级</a> /
                                    <a class="text-navy" href="/School/schoolinfo/school/<?php echo ($vo["schoolid"]); ?>">管理学校信息</a> </td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>