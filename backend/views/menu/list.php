<fieldset class="layui-elem-field site-demo-button">
    <legend>菜单操作</legend>
    <div style="margin: 15px;">
        <div class="layui-input-inline">
            <input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input" placeholder="查询菜单">
        </div>
        <button class="layui-btn layui-btn-warm">查询</button>
        <button class="layui-btn"><a href="/menu/add">新增菜单</a></button>
        <button class="layui-btn layui-btn-danger">禁用选中</button>
    </div>
</fieldset>

<table class="layui-hide" id="menulist" lay-filter="menulist"></table>

<script type="text/html" id="barOption">
    <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script type="text/html" id="switchTpl">
    <!-- 这里的 checked 的状态只是演示 -->
    <input type="checkbox" name="sex" value="{{d.status}}" lay-skin="switch" lay-text="启用|禁用" lay-filter="statusChk" {{ d.status == 1 ? 'checked' : '' }}>
</script>

<script>
    layui.use(['table'],function(){
        var table = layui.table;
        table.render({
            loading:true,
            elem:'#menulist',
            data:<?php echo $menuList;?>,
            cols:[[
                {type: 'checkbox'}
                ,{field:'id', title:'菜单Id', width:90,  sort: true}
                ,{field:'route', title:'路由', width:150,  sort: true}
                ,{field:'title', title:'菜单名', width:200,  sort: true}
                ,{field:'parent', title:'父级菜单', width:150,  sort: true}
                ,{field:'top', title:'顶级', width:150,  sort: true}
                ,{field:'icon', title:'图标', width:150,  sort: true}
                ,{field:'status', title:'状态', width:150,templet:'#switchTpl', sort: true}
                ,{fixed: 'right', toolbar: '#barOption', width:200, align:'center'}
            ]],
            even:true,
            page:true,
            limit:10,
            limits:[5,10,15,20]
        });
    });
</script>
