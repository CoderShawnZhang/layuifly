<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">Yii Framework 2.0 权威指南 </div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <?= $this->render('index-top-left.php');?>
        <?= $this->render('index-top-right.php');?>
    </div>

    <div class="layui-side layui-bg-black">

        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <?= $this->render('index-left-menu.php');?>
        </div>
    </div>

    <div class="layui-body iframe-body-top">
        <!-- 内容主体区域 -->
        <?= $this->render('index-left-content.php');?>
    </div>

    <div class="layui-footer" style="text-align: center;">
        <!-- 底部固定区域 -->
        © Yii Framework 2.0 权威指南 - 实操管理系统
    </div>
</div>