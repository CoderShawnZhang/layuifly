/**
 * Created by anlewo0208 on 2017/10/28.
 */
layui.define(['element','jquery'],function(exports){
    var element = layui.element,
        $ = layui.jquery,
        Tab = function(){
            this.tabConfig = {
                closed : true,
                openTabNum : undefined,
                tabFilter : "demo",
                url : undefined,
                tabUL : "layui-tab-title",
            }
        };

    var tabIdIndex = 0;
    Tab.prototype.tabAdd = function(_this){
        var that = this;
        var tabFilter = that.tabConfig.tabFilter;
        //新增一个Tab项
        tabIdIndex=_this.data('id');
        element.tabAdd(that.tabConfig.tabFilter, {
            title: _this.html() //用于演示
            ,content: "<iframe src='"+_this.data('url')+"' data-id='"+tabIdIndex+"'></frame>"
            ,id: tabIdIndex //实际使用一般是规定好的id，这里以时间戳模拟下
        });
        Tab.tabChange(tabIdIndex);
        // element.tabChange(that.tabConfig.tabFilter,tabIdIndex); //切换到当前选项卡
    }

    Tab.prototype.set = function(option){
        var _this = this;
        $.extend(true,_this.tabConfig,option);
        return _this;
    }

    Tab.prototype.tabChange = function(tabIdIndex){
        element.tabChange(this.tabConfig.tabFilter,tabIdIndex); //切换到当前选项卡
    }

    Tab.prototype.has = function(_this){
        var clickTab = _this.data('id');
        var that = this;
        var ul = that.tabConfig.tabUL;
        var eachCurTop = '';
        var has = false;
        $("." + ul + " li").each(function(){
            eachCurTop = $(this).attr('lay-id');
            if(clickTab == eachCurTop){
                Tab.tabChange(eachCurTop)
                has = true;
            }
        });
        if(has == false){
            Tab.tabAdd(_this);
        }
    }
    var Tab = new Tab();
    exports("tabExtend",function(option){
       return Tab.set(option);
    });
});
