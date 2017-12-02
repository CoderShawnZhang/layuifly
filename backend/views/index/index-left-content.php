<div class="layui-tab iframe-content-top" lay-filter="demo" lay-allowclose="true">

        <ul class="op-refresh">
            <a href="javascript:;"><i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop">ဂ</i>刷新</a>
        </ul>
        <ul class="layui-nav op-closeBox">
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont icon-caozuo"></i> 页面操作</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;" class="refresh refreshThis"><i class="layui-icon">&#x1002;</i> 刷新当前</a></dd>
                    <dd><a href="javascript:;" class="closePageOther"><i class="iconfont icon-prohibit"></i> 关闭其他</a></dd>
                    <dd><a href="javascript:;" class="closePageAll"><i class="iconfont icon-guanbi"></i> 关闭全部</a></dd>
                </dl>
            </li>
        </ul>



    <ul class="layui-tab-title">
        <li class="layui-this" lay-id="11"><i class="iconfont icon-computer"></i><cite>网站设置<cite></li>
    </ul>

    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <div class="layui-tab-content clildFrame" style="padding: 0;">
                <div class="layui-tab-item layui-show" lay-filter="bodyTab">
                    <iframe scrolling="yes" id="iframeBox" name="iframName" frameborder="0" src="<?= \yii\helpers\Url::toRoute('yun/main');?>" onload="iframload()"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>