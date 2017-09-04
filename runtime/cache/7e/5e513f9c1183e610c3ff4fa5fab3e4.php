<?php
//000000000000s:197613:"<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/jquery.jqzoom.css">
    <script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/layer/layer-min.js"></script>
    <script type="text/javascript" src="/template/pc/rainbow/static/js/jquery.jqzoom.js"></script>
    <script src="/public/js/global.js"></script>
    <script src="/public/js/pc_common.js"></script>
    <link rel="stylesheet" href="/template/pc/rainbow/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
</head>

<body>
<!--header-s-->
<div class="tpshop-tm-hander p">
    <div class="top-hander p">
        <div class="w1224 pr">
            <link rel="stylesheet" href="/template/pc/rainbow/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->

            <div class="fl">
                <div class="ls-dlzc fl nologin">
                    <a href="/Home/user/login.html">Hi,请登录</a>
                    <a class="red" href="/Home/user/reg.html">免费注册</a>
                </div>
                <div class="ls-dlzc fl islogin">
                    <a class="red userinfo" href="/Home/user/index.html"></a>
                    <a href="/Home/user/logout.html">退出</a>
                </div>
                <div class="fl spc" style="margin-top:10px"></div>
                <div class="sendaddress pr fl">
                                        <!--<i class="jt-x"></i>-->
                    <!-- 收货地址，物流运费 -end-->
                </div>


            </div>
            <div class="top-ri-header fr">
                <ul>
                    <li><a target="_blank" href="/Home/User/order_list.html">我的订单</a></li>
                    <li class="spacer"></li>
                    <li><a target="_blank" href="/Home/User/account.html">我的积分</a></li>
                    <li class="spacer"></li>
                    <li><a target="_blank" href="/Home/User/coupon.html">我的优惠券</a></li>
                    <li class="spacer"></li>
                    <li><a target="_blank" href="/Home/User/goods_collect.html">我的收藏</a></li>
                    <li class="spacer"></li>
                    <li class="hover-ba-navdh">
                        <div class="nav-dh">
                            <span>网站导航</span>
                            <i class="jt-x"></i>
                            <div class="conta-hv-nav">
                                <ul>
                                    <li>
                                        <a href="/index.php?m=Home&c=Activity&a=group_list">团购</a>
                                    </li>
                                    <!--<li>-->
                                    <!--<a href="/Home/Activity/flash_sale_list.html">抢购</a>-->
                                    <!--</li>-->
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="spacer"></li>
                    <li class="navoxth">
                        <div class="nav-dh">
                            <i class="fl ico"></i>
                            <span>手机TPshop网</span>
                            <i class="jt-x"></i>
                        </div>
                        <div class="sub-panel m-lst">
                            <p>扫一扫，下载TPshop客户端</p>
                            <dl>
                                <dt class="fl mr10"><a target="_blank" href=""><img height="80" width="80" src="/Template/pc/soubao/Static/images/qrcode_vmall_app01.png"></a></dt>
                                <dd class="fl mb10"><a target="_blank" href=""><i class="andr"></i> Andiord</a></dd>
                                <dd class="fl"><a target="_blank" href=""><i class="iph"></i> iPhone</a></dd>
                            </dl>
                        </div>
                    </li>
                    <li class="spacer"></li>
                    <li class="wxbox-hover">
                        <a target="_blank" href="">关注我们：</a>
                        <img class="wechat-top" src="/template/pc/rainbow/static/images/wechat.png" alt="">
                        <div class="sub-panel wx-box">
                            <span class="arrow-b">◆</span>
                            <span class="arrow-a">◆</span>
                            <p class="n"> 扫描二维码 <br>  关注TPshop网官方微信 </p>
                            <img src="/template/pc/rainbow/static/images/qrcode_vmall_app01.png">
                        </div>
                    </li>
                </ul>
            </div>
            <!--------收货地址，物流运费-开始-------------->
            <script src="/template/pc/rainbow/static/js/location.js"></script>
            <!--------收货地址，物流运费--结束-------------->
        </div>
    </div>
    <div class="nav-middan-z p">
        <div class="header w1224">
            <div class="ecsc-logo">
                <a href="/Home/Index/index.html" class="logo"> <img src="/public/images/newLogo.png"></a>
            </div>
            <div class="ecsc-join">
                                    <a href="http://www.tp-shop.cn" target="_blank"> <img src="/public/upload/ad/2017/05-20/5b3261f64a247198d8c23a2d4bf3f8b7.jpg" style="width: 113px;height: 57px;"></a>
                            </div>
            <div class="ecsc-search">
                <form id="sourch_form" name="sourch_form" method="post" action="/Home/Goods/search.html" class="ecsc-search-form">
                    <div class="ecsc-search-tabs">
                        <i class="sc-icon-right"></i>
                        <ul class="shop_search" id="shop_search">
                            <li rev="0"><span id="sp">商品</span></li>
                        </ul>
                    </div>
                    <input autocomplete="off" name="q" id="q" type="text" value="" placeholder="搜索关键字" class="ecsc-search-input">
                    <button type="submit" class="ecsc-search-button" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"><i></i></button>
                    <div class="candidate p">
                        <ul id="search_list"></ul>
                    </div>
                    <script type="text/javascript">
                        ;(function($){
                            $.fn.extend({
                                donetyping: function(callback,timeout){
                                    timeout = timeout || 1e3;
                                    var timeoutReference,
                                            doneTyping = function(el){
                                                if (!timeoutReference) return;
                                                timeoutReference = null;
                                                callback.call(el);
                                            };
                                    return this.each(function(i,el){
                                        var $el = $(el);
                                        $el.is(':input') && $el.on('keyup keypress',function(e){
                                            if (e.type=='keyup' && e.keyCode!=8) return;
                                            if (timeoutReference) clearTimeout(timeoutReference);
                                            timeoutReference = setTimeout(function(){
                                                doneTyping(el);
                                            }, timeout);
                                        }).on('blur',function(){
                                            doneTyping(el);
                                        });
                                    });
                                }
                            });
                        })(jQuery);

                        $('.ecsc-search-input').donetyping(function(){
                            search_key();
                        },500).focus(function(){
                            var search_key = $.trim($('#q').val());
                            if(search_key != ''){
                                $('.candidate').show();
                            }
                        });
                        $('.candidate').mouseleave(function(){
                            $(this).hide();
                        });

                        function searchWord(words){
                            $('#q').val(words);
                            $('#sourch_form').submit();
                        }
                        function search_key(){
                            var search_key = $.trim($('#q').val());
                            if(search_key != ''){
                                $.ajax({
                                    type:'post',
                                    dataType:'json',
                                    data: {key: search_key},
                                    url:"/Home/Api/searchKey.html",
                                    success:function(data){
                                        if(data.status == 1){
                                            var html = '';
                                            $.each(data.result, function (n, value) {
                                                html += '<li onclick="searchWord(\''+value.keywords+'\');"><div class="search-item">'+value.keywords+'</div><div class="search-count">约'+value.goods_num+'个商品</div></li>';
                                            });
                                            html += '<li class="close"><div class="search-count">关闭</div></li>';
                                            $('#search_list').empty().append(html);
                                            $('.candidate').show();
                                        }else{
                                            $('#search_list').empty();
                                        }
                                    }
                                });
                            }
                        }
                    </script>
                </form>
                <div class="keyword">
                    <ul>
                                                    <li>
                                <a href="/Home/Goods/search/q/%E6%89%8B%E6%9C%BA.html" target="_blank">手机</a>
                            </li>
                                                    <li>
                                <a href="/Home/Goods/search/q/%E5%B0%8F%E7%B1%B3.html" target="_blank">小米</a>
                            </li>
                                                    <li>
                                <a href="/Home/Goods/search/q/iphone.html" target="_blank">iphone</a>
                            </li>
                                                    <li>
                                <a href="/Home/Goods/search/q/%E4%B8%89%E6%98%9F.html" target="_blank">三星</a>
                            </li>
                                                    <li>
                                <a href="/Home/Goods/search/q/%E5%8D%8E%E4%B8%BA.html" target="_blank">华为</a>
                            </li>
                                                    <li>
                                <a href="/Home/Goods/search/q/%E5%86%B0%E7%AE%B1.html" target="_blank">冰箱</a>
                            </li>
                                            </ul>
                </div>
            </div>
            <div class="shopingcar-index fr">
                <div class="u-g-cart fr fixed" id="hd-my-cart">
                    <a href="/Home/Cart/cart.html">
                        <p class="c-n fl">我的购物车</p>
                        <p class="c-num fl">(<span class="count cart_quantity" id="cart_quantity"></span>)
                            <i class="i-c oh"></i>
                        </p>
                    </a>
                    <div class="u-fn-cart u-mn-cart" id="show_minicart">
                        <div class="minicartContent" id="minicart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav p">
        <div class="w1224 p">
            <div class="categorys home_categorys">
                <div class="dt">
                    <a>全部商品分类</a>
                </div>
                <!--全部商品分类-s-->
                <div class="dd">
                    <div class="cata-nav">
                                                    <div class="item fore1">
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <a href="/Home/Goods/goodsList/id/1.html" title="手机 、 数码 、 通信">手机 、 数码 、 通信</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="item-channels">
                                            <div class="channels">
                                                <a href="" target="_blank">品牌日<i>&gt;</i></a>
                                                <a href="" target="_blank">家电城<i>&gt;</i></a>
                                                <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东净化馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东帮服务店<i>&gt;</i></a>
                                                <a href="" target="_blank">值得买精选<i>&gt;</i></a>
                                            </div>
                                        </div>
                                        <div class="subitems">
                                            <dl>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/12.html" target="_blank">手机配件<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/100.html" target="_blank">电池 电源 充电器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/102.html" target="_blank">贴膜,保护套</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/13.html" target="_blank">摄影摄像<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/103.html" target="_blank">数码相机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/104.html" target="_blank">单反相机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/105.html" target="_blank">摄像机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/106.html" target="_blank">镜头</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/107.html" target="_blank">数码相框</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/14.html" target="_blank">运营商<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/108.html" target="_blank">选号码</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/109.html" target="_blank">办套餐</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/110.html" target="_blank">合约机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/111.html" target="_blank">中国移动</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/15.html" target="_blank">数码配件<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/112.html" target="_blank">充值卡</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/113.html" target="_blank">读卡器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/114.html" target="_blank">支架</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/115.html" target="_blank">滤镜</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/16.html" target="_blank">娱乐影视<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/116.html" target="_blank">音响麦克风</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/117.html" target="_blank">耳机/耳麦</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/17.html" target="_blank">电子教育<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/118.html" target="_blank">学生平板</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/119.html" target="_blank">点读机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/120.html" target="_blank">电纸书</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/121.html" target="_blank">电子词典</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/122.html" target="_blank">复读机</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/18.html" target="_blank">手机通讯<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/124.html" target="_blank">对讲机</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/123.html" target="_blank">手机<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                            </dd>
                                                                                            </dl>
                                            <div class="item-brands">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-promotions">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cata-nav-rigth">
                                        <div class="item-brands">
                                            <ul>
                                                                                            </ul>
                                        </div>
                                        <div class="item-promotions">
                                            <!--<//tpshop sql="select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time lt UNIX_TIMESTAMP(NOW()) and end_time gt UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id = $vo[id] limit 2"-->
                                            <!--item="promote" key="promote_key">-->
                                            <!--<a href="/Home/Goods/goodsInfo.html" target="_blank">-->
                                            <!--<img width="181" height="120" src="">-->
                                            <!--</a>-->
                                            <!--<///tpshop>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="item fore1">
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <a href="/Home/Goods/goodsList/id/2.html" title="家用电器">家用电器</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="item-channels">
                                            <div class="channels">
                                                <a href="" target="_blank">品牌日<i>&gt;</i></a>
                                                <a href="" target="_blank">家电城<i>&gt;</i></a>
                                                <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东净化馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东帮服务店<i>&gt;</i></a>
                                                <a href="" target="_blank">值得买精选<i>&gt;</i></a>
                                            </div>
                                        </div>
                                        <div class="subitems">
                                            <dl>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/19.html" target="_blank">生活电器<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/125.html" target="_blank">录音机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/126.html" target="_blank">饮水机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/127.html" target="_blank">烫衣机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/128.html" target="_blank">电风扇</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/129.html" target="_blank">电话机</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/20.html" target="_blank">大家电<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/130.html" target="_blank">电视</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/131.html" target="_blank">冰箱</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/132.html" target="_blank">空调</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/133.html" target="_blank">洗衣机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/134.html" target="_blank">热水器</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/21.html" target="_blank">厨房电器<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/135.html" target="_blank">料理/榨汁机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/136.html" target="_blank">电饭锅</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/137.html" target="_blank">微波炉</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/138.html" target="_blank">豆浆机</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/22.html" target="_blank">个护健康<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/139.html" target="_blank">剃须刀</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/140.html" target="_blank">吹风机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/141.html" target="_blank">按摩器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/142.html" target="_blank">足浴盆</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/143.html" target="_blank">血压计</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/23.html" target="_blank">五金交电<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/144.html" target="_blank">厨卫五金</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/145.html" target="_blank">门铃门锁</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/146.html" target="_blank">开关插座</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/147.html" target="_blank">电动工具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/148.html" target="_blank">监控安防</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/149.html" target="_blank">仪表仪器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/150.html" target="_blank">电线线缆</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/151.html" target="_blank">浴霸/排气扇</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/152.html" target="_blank">灯具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/153.html" target="_blank">水龙头</a>
                                                                                                            </dd>
                                                                                            </dl>
                                            <div class="item-brands">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-promotions">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cata-nav-rigth">
                                        <div class="item-brands">
                                            <ul>
                                                                                            </ul>
                                        </div>
                                        <div class="item-promotions">
                                            <!--<//tpshop sql="select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time lt UNIX_TIMESTAMP(NOW()) and end_time gt UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id = $vo[id] limit 2"-->
                                            <!--item="promote" key="promote_key">-->
                                            <!--<a href="/Home/Goods/goodsInfo.html" target="_blank">-->
                                            <!--<img width="181" height="120" src="">-->
                                            <!--</a>-->
                                            <!--<///tpshop>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="item fore1">
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <a href="/Home/Goods/goodsList/id/3.html" title="电脑、办公">电脑、办公</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="item-channels">
                                            <div class="channels">
                                                <a href="" target="_blank">品牌日<i>&gt;</i></a>
                                                <a href="" target="_blank">家电城<i>&gt;</i></a>
                                                <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东净化馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东帮服务店<i>&gt;</i></a>
                                                <a href="" target="_blank">值得买精选<i>&gt;</i></a>
                                            </div>
                                        </div>
                                        <div class="subitems">
                                            <dl>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/24.html" target="_blank">网络产品<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/154.html" target="_blank">网络配件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/155.html" target="_blank">路由器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/156.html" target="_blank">网卡</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/157.html" target="_blank">交换机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/158.html" target="_blank">网络存储</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/159.html" target="_blank">3G/4G/5G上网</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/160.html" target="_blank">网络盒子</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/25.html" target="_blank">办公设备<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/161.html" target="_blank">复合机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/162.html" target="_blank">办公家具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/163.html" target="_blank">摄影机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/164.html" target="_blank">碎纸机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/165.html" target="_blank">白板</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/166.html" target="_blank">投影配件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/167.html" target="_blank">考勤机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/168.html" target="_blank">多功能一体机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/169.html" target="_blank">收款/POS机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/170.html" target="_blank">打印机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/171.html" target="_blank">会员视频音频</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/172.html" target="_blank">传真设备</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/173.html" target="_blank">保险柜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/174.html" target="_blank">验钞/点钞机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/175.html" target="_blank">装订/封装机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/176.html" target="_blank">扫描设备</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/177.html" target="_blank">安防监控</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/26.html" target="_blank">文具耗材<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/178.html" target="_blank">文具管理</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/179.html" target="_blank">本册便签</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/180.html" target="_blank">硒鼓/墨粉</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/181.html" target="_blank">计算器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/182.html" target="_blank">墨盒</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/183.html" target="_blank">笔类</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/184.html" target="_blank">色带</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/185.html" target="_blank">画具画材</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/186.html" target="_blank">纸类</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/187.html" target="_blank">财会用品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/188.html" target="_blank">办公文具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/189.html" target="_blank">刻录碟片</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/190.html" target="_blank">学生文具</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/27.html" target="_blank">电脑整机<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/191.html" target="_blank">平板电脑</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/192.html" target="_blank">台式机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/193.html" target="_blank">一体机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/194.html" target="_blank">笔记本</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/195.html" target="_blank">超极本</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/28.html" target="_blank">电脑配件<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/196.html" target="_blank">内存</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/197.html" target="_blank">组装电脑</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/198.html" target="_blank">机箱</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/199.html" target="_blank">电源</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/200.html" target="_blank">CPU</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/201.html" target="_blank">显示器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/202.html" target="_blank">主板</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/203.html" target="_blank">刻录机/光驱</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/204.html" target="_blank">显卡</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/205.html" target="_blank">声卡/扩展卡</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/206.html" target="_blank">硬盘</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/207.html" target="_blank">散热器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/208.html" target="_blank">固态硬盘</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/209.html" target="_blank">装机配件</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/29.html" target="_blank">外设产品<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/210.html" target="_blank">线缆</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/211.html" target="_blank">鼠标</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/212.html" target="_blank">手写板</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/213.html" target="_blank">键盘</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/214.html" target="_blank">电脑工具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/215.html" target="_blank">网络仪表仪器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/216.html" target="_blank">UPS</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/217.html" target="_blank">U盘</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/218.html" target="_blank">插座</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/219.html" target="_blank">移动硬盘</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/220.html" target="_blank">鼠标垫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/221.html" target="_blank">摄像头</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/30.html" target="_blank">游戏设备<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/222.html" target="_blank">游戏软件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/223.html" target="_blank">游戏周边</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/224.html" target="_blank">游戏机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/225.html" target="_blank">游戏耳机</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/226.html" target="_blank">手柄方向盘</a>
                                                                                                            </dd>
                                                                                            </dl>
                                            <div class="item-brands">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-promotions">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cata-nav-rigth">
                                        <div class="item-brands">
                                            <ul>
                                                                                            </ul>
                                        </div>
                                        <div class="item-promotions">
                                            <!--<//tpshop sql="select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time lt UNIX_TIMESTAMP(NOW()) and end_time gt UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id = $vo[id] limit 2"-->
                                            <!--item="promote" key="promote_key">-->
                                            <!--<a href="/Home/Goods/goodsInfo.html" target="_blank">-->
                                            <!--<img width="181" height="120" src="">-->
                                            <!--</a>-->
                                            <!--<///tpshop>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="item fore1">
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <a href="/Home/Goods/goodsList/id/4.html" title="家居、家具、家装、厨具">家居、家具、家装、厨具</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="item-channels">
                                            <div class="channels">
                                                <a href="" target="_blank">品牌日<i>&gt;</i></a>
                                                <a href="" target="_blank">家电城<i>&gt;</i></a>
                                                <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东净化馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东帮服务店<i>&gt;</i></a>
                                                <a href="" target="_blank">值得买精选<i>&gt;</i></a>
                                            </div>
                                        </div>
                                        <div class="subitems">
                                            <dl>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/31.html" target="_blank">生活日用<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/227.html" target="_blank">清洁工具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/228.html" target="_blank">收纳用品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/229.html" target="_blank">雨伞雨具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/230.html" target="_blank">浴室用品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/231.html" target="_blank">缝纫/针织用品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/232.html" target="_blank">洗晒/熨烫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/233.html" target="_blank">净化除味</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/32.html" target="_blank">家装软饰<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/234.html" target="_blank">节庆饰品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/235.html" target="_blank">手工/十字绣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/236.html" target="_blank">桌布/罩件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/237.html" target="_blank">钟饰</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/238.html" target="_blank">地毯地垫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/239.html" target="_blank">装饰摆件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/240.html" target="_blank">沙发垫套/椅垫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/241.html" target="_blank">花瓶花艺</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/242.html" target="_blank">帘艺隔断</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/243.html" target="_blank">创意家居</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/244.html" target="_blank">相框/照片墙</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/245.html" target="_blank">保暖防护</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/246.html" target="_blank">装饰字画</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/247.html" target="_blank">香薰蜡烛</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/248.html" target="_blank">墙贴/装饰贴</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/33.html" target="_blank">宠物生活<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/249.html" target="_blank">水族用品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/250.html" target="_blank">宠物玩具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/251.html" target="_blank">宠物主粮</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/252.html" target="_blank">宠物牵引</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/253.html" target="_blank">宠物零食</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/254.html" target="_blank">宠物驱虫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/255.html" target="_blank">猫砂/尿布</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/256.html" target="_blank">洗护美容</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/257.html" target="_blank">家居日用</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/258.html" target="_blank">医疗保健</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/259.html" target="_blank">出行装备</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/34.html" target="_blank">厨具<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/260.html" target="_blank">剪刀菜饭</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/261.html" target="_blank">厨房配件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/262.html" target="_blank">水具酒具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/263.html" target="_blank">餐具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/264.html" target="_blank">茶具/咖啡具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/265.html" target="_blank">烹饪锅具</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/35.html" target="_blank">家装建材<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/266.html" target="_blank">电工电料</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/267.html" target="_blank">墙地材料</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/268.html" target="_blank">装饰材料</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/269.html" target="_blank">装修服务</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/270.html" target="_blank">沐浴花洒</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/271.html" target="_blank">灯饰照明</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/272.html" target="_blank">开关插座</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/273.html" target="_blank">厨房卫浴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/274.html" target="_blank">油漆涂料</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/275.html" target="_blank">五金工具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/276.html" target="_blank">龙头</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/36.html" target="_blank">家纺<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/277.html" target="_blank">床品套件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/278.html" target="_blank">抱枕靠垫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/279.html" target="_blank">被子</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/280.html" target="_blank">布艺软饰</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/281.html" target="_blank">被芯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/282.html" target="_blank">窗帘窗纱</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/283.html" target="_blank">床单被罩</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/284.html" target="_blank">蚊帐</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/285.html" target="_blank">床垫床褥</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/286.html" target="_blank">凉席</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/287.html" target="_blank">电地毯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/288.html" target="_blank">毯子</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/289.html" target="_blank">毛巾浴巾</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/37.html" target="_blank">家具<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/290.html" target="_blank">餐厅家具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/291.html" target="_blank">电脑椅</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/292.html" target="_blank">书房家具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/293.html" target="_blank">衣柜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/294.html" target="_blank">储物家具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/295.html" target="_blank">茶几</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/296.html" target="_blank">阳台/户外</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/297.html" target="_blank">电视柜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/298.html" target="_blank">商业办公</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/299.html" target="_blank">餐桌</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/300.html" target="_blank">卧室家具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/301.html" target="_blank">床</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/302.html" target="_blank">电脑桌</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/303.html" target="_blank">客厅家具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/304.html" target="_blank">床垫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/305.html" target="_blank">鞋架/衣帽架</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/306.html" target="_blank">客厅家具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/307.html" target="_blank">沙发</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/38.html" target="_blank">灯具<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/308.html" target="_blank">吸顶灯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/309.html" target="_blank">吊灯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/310.html" target="_blank">筒灯射灯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/311.html" target="_blank">氛围照明</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/312.html" target="_blank">LED灯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/313.html" target="_blank">节能灯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/314.html" target="_blank">落地灯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/315.html" target="_blank">五金电器</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/316.html" target="_blank">应急灯/手电</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/317.html" target="_blank">台灯</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/318.html" target="_blank">装饰灯</a>
                                                                                                            </dd>
                                                                                            </dl>
                                            <div class="item-brands">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-promotions">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cata-nav-rigth">
                                        <div class="item-brands">
                                            <ul>
                                                                                            </ul>
                                        </div>
                                        <div class="item-promotions">
                                            <!--<//tpshop sql="select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time lt UNIX_TIMESTAMP(NOW()) and end_time gt UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id = $vo[id] limit 2"-->
                                            <!--item="promote" key="promote_key">-->
                                            <!--<a href="/Home/Goods/goodsInfo.html" target="_blank">-->
                                            <!--<img width="181" height="120" src="">-->
                                            <!--</a>-->
                                            <!--<///tpshop>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="item fore1">
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <a href="/Home/Goods/goodsList/id/5.html" title="男装、女装、童装、内衣">男装、女装、童装、内衣</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="item-channels">
                                            <div class="channels">
                                                <a href="" target="_blank">品牌日<i>&gt;</i></a>
                                                <a href="" target="_blank">家电城<i>&gt;</i></a>
                                                <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东净化馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东帮服务店<i>&gt;</i></a>
                                                <a href="" target="_blank">值得买精选<i>&gt;</i></a>
                                            </div>
                                        </div>
                                        <div class="subitems">
                                            <dl>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/39.html" target="_blank">女装<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/319.html" target="_blank">短外套</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/320.html" target="_blank">羊毛衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/321.html" target="_blank">雪纺衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/322.html" target="_blank">礼服</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/323.html" target="_blank">风衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/324.html" target="_blank">羊绒衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/325.html" target="_blank">牛仔裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/326.html" target="_blank">马甲</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/327.html" target="_blank">衬衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/328.html" target="_blank">半身裙</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/329.html" target="_blank">休闲裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/330.html" target="_blank">吊带/背心</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/331.html" target="_blank">羽绒服</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/332.html" target="_blank">T恤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/333.html" target="_blank">大码女装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/334.html" target="_blank">正装裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/335.html" target="_blank">设计师/潮牌</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/336.html" target="_blank">毛呢大衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/337.html" target="_blank">小西装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/338.html" target="_blank">中老年女装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/339.html" target="_blank">加绒裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/340.html" target="_blank">棉服</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/341.html" target="_blank">打底衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/342.html" target="_blank">皮草</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/343.html" target="_blank">短裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/344.html" target="_blank">连衣裙</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/345.html" target="_blank">打底裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/346.html" target="_blank">真皮皮衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/347.html" target="_blank">婚纱</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/348.html" target="_blank">卫衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/349.html" target="_blank">针织衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/350.html" target="_blank">仿皮皮衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/351.html" target="_blank">旗袍/唐装</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/40.html" target="_blank">男装<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/352.html" target="_blank">羊毛衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/353.html" target="_blank">休闲裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/354.html" target="_blank">POLO衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/355.html" target="_blank">加绒裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/356.html" target="_blank">衬衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/357.html" target="_blank">短裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/358.html" target="_blank">真皮皮衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/359.html" target="_blank">毛呢大衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/360.html" target="_blank">中老年男装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/361.html" target="_blank">卫衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/362.html" target="_blank">风衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/363.html" target="_blank">大码男装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/364.html" target="_blank">羽绒服</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/365.html" target="_blank">T恤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/366.html" target="_blank">仿皮皮衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/367.html" target="_blank">羊绒衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/368.html" target="_blank">棉服</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/369.html" target="_blank">马甲/背心</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/370.html" target="_blank">西服</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/371.html" target="_blank">设计师/潮牌</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/372.html" target="_blank">针织衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/373.html" target="_blank">西服套装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/374.html" target="_blank">西裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/375.html" target="_blank">工装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/376.html" target="_blank">夹克</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/377.html" target="_blank">牛仔裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/378.html" target="_blank">卫裤/运动裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/379.html" target="_blank">唐装/中山装</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/41.html" target="_blank">内衣<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/380.html" target="_blank">保暖内衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/381.html" target="_blank">大码内衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/382.html" target="_blank">吊带/背心</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/383.html" target="_blank">秋衣秋裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/384.html" target="_blank">文胸</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/385.html" target="_blank">内衣配件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/386.html" target="_blank">睡衣/家居服</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/387.html" target="_blank">男式内裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/388.html" target="_blank">泳衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/389.html" target="_blank">打底裤袜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/390.html" target="_blank">女式内裤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/391.html" target="_blank">塑身美体</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/392.html" target="_blank">休闲棉袜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/393.html" target="_blank">连裤袜/丝袜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/394.html" target="_blank">美腿袜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/395.html" target="_blank">商务男袜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/396.html" target="_blank">打底衫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/397.html" target="_blank">情趣内衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/398.html" target="_blank">情侣睡衣</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/399.html" target="_blank">少女文胸</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/400.html" target="_blank">文胸套装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/401.html" target="_blank">抹胸</a>
                                                                                                            </dd>
                                                                                            </dl>
                                            <div class="item-brands">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-promotions">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cata-nav-rigth">
                                        <div class="item-brands">
                                            <ul>
                                                                                            </ul>
                                        </div>
                                        <div class="item-promotions">
                                            <!--<//tpshop sql="select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time lt UNIX_TIMESTAMP(NOW()) and end_time gt UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id = $vo[id] limit 2"-->
                                            <!--item="promote" key="promote_key">-->
                                            <!--<a href="/Home/Goods/goodsInfo.html" target="_blank">-->
                                            <!--<img width="181" height="120" src="">-->
                                            <!--</a>-->
                                            <!--<///tpshop>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="item fore1">
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <a href="/Home/Goods/goodsList/id/7.html" title="鞋、箱包、珠宝、手表">鞋、箱包、珠宝、手表</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="item-channels">
                                            <div class="channels">
                                                <a href="" target="_blank">品牌日<i>&gt;</i></a>
                                                <a href="" target="_blank">家电城<i>&gt;</i></a>
                                                <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东净化馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东帮服务店<i>&gt;</i></a>
                                                <a href="" target="_blank">值得买精选<i>&gt;</i></a>
                                            </div>
                                        </div>
                                        <div class="subitems">
                                            <dl>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/49.html" target="_blank">精品男包<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/436.html" target="_blank">商务公文包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/437.html" target="_blank">单肩/斜挎包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/438.html" target="_blank">男士手包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/439.html" target="_blank">双肩包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/440.html" target="_blank">钱包/卡包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/441.html" target="_blank">钥匙包</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/50.html" target="_blank">功能箱包<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/442.html" target="_blank">旅行包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/443.html" target="_blank">妈咪包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/444.html" target="_blank">电脑包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/445.html" target="_blank">休闲运动包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/446.html" target="_blank">相机包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/447.html" target="_blank">腰包/胸包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/448.html" target="_blank">登山包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/449.html" target="_blank">旅行配件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/450.html" target="_blank">拉杆箱/拉杆包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/451.html" target="_blank">书包</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/51.html" target="_blank">珠宝<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/452.html" target="_blank">彩宝</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/453.html" target="_blank">时尚饰品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/454.html" target="_blank">铂金</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/455.html" target="_blank">钻石</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/456.html" target="_blank">天然木饰</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/457.html" target="_blank">翡翠玉石</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/458.html" target="_blank">珍珠</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/459.html" target="_blank">纯金K金饰品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/460.html" target="_blank">金银投资</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/461.html" target="_blank">银饰</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/462.html" target="_blank">水晶玛瑙</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/52.html" target="_blank">钟表<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/463.html" target="_blank">座钟挂钟</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/464.html" target="_blank">男表</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/465.html" target="_blank">女表</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/466.html" target="_blank">儿童表</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/467.html" target="_blank">智能手表</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/53.html" target="_blank">时尚女鞋<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/468.html" target="_blank">女靴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/469.html" target="_blank">布鞋/绣花鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/470.html" target="_blank">鱼嘴鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/471.html" target="_blank">雪地靴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/472.html" target="_blank">凉鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/473.html" target="_blank">雨鞋/雨靴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/474.html" target="_blank">单鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/475.html" target="_blank">拖鞋/人字拖</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/476.html" target="_blank">鞋配件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/477.html" target="_blank">高跟鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/478.html" target="_blank">马丁靴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/479.html" target="_blank">帆布鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/480.html" target="_blank">休闲鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/481.html" target="_blank">妈妈鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/482.html" target="_blank">踝靴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/483.html" target="_blank">防水台</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/484.html" target="_blank">内增高</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/485.html" target="_blank">松糕鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/486.html" target="_blank">坡跟鞋</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/54.html" target="_blank">流行男鞋<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/487.html" target="_blank">增高鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/488.html" target="_blank">鞋配件</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/489.html" target="_blank">拖鞋/人字拖</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/490.html" target="_blank">凉鞋/沙滩鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/491.html" target="_blank">休闲鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/492.html" target="_blank">雨鞋/雨靴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/493.html" target="_blank">商务休闲鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/494.html" target="_blank">定制鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/495.html" target="_blank">正装鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/496.html" target="_blank">男靴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/497.html" target="_blank">帆布鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/498.html" target="_blank">传统布鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/499.html" target="_blank">工装鞋</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/500.html" target="_blank">功能鞋</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/55.html" target="_blank">潮流女包<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/501.html" target="_blank">钥匙包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/502.html" target="_blank">单肩包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/503.html" target="_blank">手提包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/504.html" target="_blank">斜挎包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/505.html" target="_blank">双肩包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/506.html" target="_blank">钱包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/507.html" target="_blank">手拿包/晚宴包</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/508.html" target="_blank">卡包/零钱包</a>
                                                                                                            </dd>
                                                                                            </dl>
                                            <div class="item-brands">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-promotions">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cata-nav-rigth">
                                        <div class="item-brands">
                                            <ul>
                                                                                            </ul>
                                        </div>
                                        <div class="item-promotions">
                                            <!--<//tpshop sql="select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time lt UNIX_TIMESTAMP(NOW()) and end_time gt UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id = $vo[id] limit 2"-->
                                            <!--item="promote" key="promote_key">-->
                                            <!--<a href="/Home/Goods/goodsInfo.html" target="_blank">-->
                                            <!--<img width="181" height="120" src="">-->
                                            <!--</a>-->
                                            <!--<///tpshop>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="item fore1">
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <a href="/Home/Goods/goodsList/id/6.html" title="个人化妆">个人化妆</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="item-channels">
                                            <div class="channels">
                                                <a href="" target="_blank">品牌日<i>&gt;</i></a>
                                                <a href="" target="_blank">家电城<i>&gt;</i></a>
                                                <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东净化馆<i>&gt;</i></a>
                                                <a href="" target="_blank">京东帮服务店<i>&gt;</i></a>
                                                <a href="" target="_blank">值得买精选<i>&gt;</i></a>
                                            </div>
                                        </div>
                                        <div class="subitems">
                                            <dl>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/42.html" target="_blank">身体护肤<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/402.html" target="_blank">沐浴</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/403.html" target="_blank">润肤</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/404.html" target="_blank">颈部</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/405.html" target="_blank">手足</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/406.html" target="_blank">纤体塑形</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/407.html" target="_blank">美胸</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/408.html" target="_blank">套装</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/43.html" target="_blank">口腔护理<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/409.html" target="_blank">牙膏/牙粉</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/410.html" target="_blank">牙刷/牙线</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/411.html" target="_blank">漱口水</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/412.html" target="_blank">套装</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/44.html" target="_blank">女性护理<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/413.html" target="_blank">卫生巾</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/414.html" target="_blank">卫生护垫</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/415.html" target="_blank">私密护理</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/416.html" target="_blank">脱毛膏</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/45.html" target="_blank">香水彩妆<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/417.html" target="_blank">唇部</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/418.html" target="_blank">美甲</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/419.html" target="_blank">美容工具</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/420.html" target="_blank">套装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/421.html" target="_blank">香水</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/422.html" target="_blank">底妆</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/423.html" target="_blank">腮红</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/424.html" target="_blank">眼部</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/46.html" target="_blank">清洁用品<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/95.html" target="_blank">纸品湿巾</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/96.html" target="_blank">衣物清洁</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/97.html" target="_blank">家庭清洁</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/98.html" target="_blank">一次性用品</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/99.html" target="_blank">驱虫用品</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/47.html" target="_blank">面部护肤<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/425.html" target="_blank">面膜</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/426.html" target="_blank">剃须</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/427.html" target="_blank">套装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/428.html" target="_blank">清洁</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/429.html" target="_blank">护肤</a>
                                                                                                            </dd>
                                                                                                    <dt><a href="/Home/Goods/goodsList/id/48.html" target="_blank">洗发护发<i>&gt;</i></a></dt>
                                                    <dd>
                                                                                                                    <a href="/Home/Goods/goodsList/id/430.html" target="_blank">套装</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/431.html" target="_blank">洗发</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/432.html" target="_blank">护发</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/433.html" target="_blank">染发</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/434.html" target="_blank">造型</a>
                                                                                                                    <a href="/Home/Goods/goodsList/id/435.html" target="_blank">假发</a>
                                                                                                            </dd>
                                                                                            </dl>
                                            <div class="item-brands">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-promotions">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cata-nav-rigth">
                                        <div class="item-brands">
                                            <ul>
                                                                                            </ul>
                                        </div>
                                        <div class="item-promotions">
                                            <!--<//tpshop sql="select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time lt UNIX_TIMESTAMP(NOW()) and end_time gt UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id = $vo[id] limit 2"-->
                                            <!--item="promote" key="promote_key">-->
                                            <!--<a href="/Home/Goods/goodsInfo.html" target="_blank">-->
                                            <!--<img width="181" height="120" src="">-->
                                            <!--</a>-->
                                            <!--<///tpshop>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            </div>
                </div>
                <!--全部商品分类-e-->
            </div>
            <div class="navitems" id="nav">
                <ul>
                    <li><a  href="/Home/Index/index.html">首页</a></li>
                                            <li >
                        <a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=123"  >手机城</a>
                        </li>
                                            <li >
                        <a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=51"  >珠宝</a>
                        </li>
                                            <li >
                        <a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=20"  >家电城</a>
                        </li>
                                            <li >
                        <a href="/index.php?m=Home&c=Activity&a=promoteList"  >促销商品</a>
                        </li>
                                            <li >
                        <a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=45"  >化妆品</a>
                        </li>
                                            <li >
                        <a href="/index.php/Home/Goods/goodsList/id/1.html"  >数码城</a>
                        </li>
                                            <li >
                        <a href="/index.php?m=Home&amp;c=Activity&amp;a=group_list"  >团购</a>
                        </li>
                                            <li >
                        <a href="/index.php?m=Home&amp;c=Goods&amp;a=integralMall"  >积分商城</a>
                        </li>
                                    </ul>
                <!--<div class="wrap-line" style="width: 72px; left: 20px;">-->
                <!--<span style="left:15px;"></span>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>

    <!--header-e-->
    <div class="search-box p">
        <div class="w1224">
            <div class="search-path fl">
                                    <a href="/Home/Goods/goodsList/id/1.html">手机 、 数码 、 通信</a>
                    <i class="litt-xyb"></i>
                                    <a href="/Home/Goods/goodsList/id/12.html">手机配件</a>
                    <i class="litt-xyb"></i>
                                    <a href="/Home/Goods/goodsList/id/100.html">电池 电源 充电器</a>
                    <i class="litt-xyb"></i>
                                <div class="havedox">
                    <span>爸爸2陆毅代言索扬20000毫安充电宝轻薄正品手机通用移动电源MAh</span>
                </div>
            </div>
        </div>
    </div>
    <div class="details-bigimg p">
        <div class="w1224">
            <div class="detail-img">
                <div class="product-gallery">
                    <div class="product-photo" id="photoBody">
                        <!-- 商品大图介绍 start [[-->
                        <div class="product-img jqzoom">
                            <img id="zoomimg" src="/public/upload/goods/thumb/115/goods_thumb_115_400_400.jpeg" jqimg="/public/upload/goods/thumb/115/goods_thumb_115_800_800.jpeg">
                        </div>
                        <!-- 商品大图介绍 end ]]-->
                        <!-- 商品小图介绍 start [[-->
                        <div class="product-small-img fn-clear"> <a href="javascript:;" class="next-left next-btn fl disabled"></a>
                            <div class="pic-hide-box fl">
                                <ul class="small-pic" style="left:0;">
                                                                            <li class="small-pic-li active">
                                        <a href="javascript:;">
                                            <img src="/public/upload/goods/thumb/115/goods_sub_thumb_436_60_60.jpeg" data-img="/public/upload/goods/thumb/115/goods_sub_thumb_436_400_400.jpeg" data-big="/public/upload/goods/thumb/115/goods_sub_thumb_436_800_800.jpeg">
                                            <i></i>
                                        </a>
                                        </li>
                                                                            <li class="small-pic-li ">
                                        <a href="javascript:;">
                                            <img src="/public/upload/goods/thumb/115/goods_sub_thumb_437_60_60.jpeg" data-img="/public/upload/goods/thumb/115/goods_sub_thumb_437_400_400.jpeg" data-big="/public/upload/goods/thumb/115/goods_sub_thumb_437_800_800.jpeg">
                                            <i></i>
                                        </a>
                                        </li>
                                                                            <li class="small-pic-li ">
                                        <a href="javascript:;">
                                            <img src="/public/upload/goods/thumb/115/goods_sub_thumb_438_60_60.jpeg" data-img="/public/upload/goods/thumb/115/goods_sub_thumb_438_400_400.jpeg" data-big="/public/upload/goods/thumb/115/goods_sub_thumb_438_800_800.jpeg">
                                            <i></i>
                                        </a>
                                        </li>
                                                                            <li class="small-pic-li ">
                                        <a href="javascript:;">
                                            <img src="/public/upload/goods/thumb/115/goods_sub_thumb_439_60_60.jpeg" data-img="/public/upload/goods/thumb/115/goods_sub_thumb_439_400_400.jpeg" data-big="/public/upload/goods/thumb/115/goods_sub_thumb_439_800_800.jpeg">
                                            <i></i>
                                        </a>
                                        </li>
                                                                            <li class="small-pic-li ">
                                        <a href="javascript:;">
                                            <img src="/public/upload/goods/thumb/115/goods_sub_thumb_440_60_60.jpeg" data-img="/public/upload/goods/thumb/115/goods_sub_thumb_440_400_400.jpeg" data-big="/public/upload/goods/thumb/115/goods_sub_thumb_440_800_800.jpeg">
                                            <i></i>
                                        </a>
                                        </li>
                                                                    </ul>
                            </div>
                            <a href="javascript:;" class="next-right next-btn fl"></a> </div>
                        <!-- 商品小图介绍 end ]]-->
                    </div>
                    <!-- 收藏商品 start [[-->
                    <div class="collect">
                        <a href="javascript:void(0);" id="collectLink"><i class="collect-ico collect-ico-null"></i>
                            <span class="collect-text">收藏商品</span>
                            <em class="J_FavCount"></em></a>
                        <!--<a href="javascript:void(0);" id="collectLink"><i class="collect-ico collect-ico-ok"></i>已收藏<em class="J_FavCount">(20)</em></a>-->
                    </div>
                    <!-- 分享商品 -->
                    <div class="share">
                        <div class="jiathis_style">
                            <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt" target="_blank"><img src="http://v3.jiathis.com/code_mini/images/btn/v1/jiathis1.gif" border="0" /></a>
                        </div>
                        <script>
                            var jiathis_config = {
                                url:"http://www.weiketp5.net/index.php?m=Home&c=Goods&a=goodsInfo&id=115",
                                pic:"http://www.weiketp5.net/public/upload/goods/thumb/115/goods_thumb_115_400_400.jpeg",
                            }
                            var is_distribut = getCookie('is_distribut');
                            var user_id = getCookie('user_id');
                            // 如果已经登录了, 并且是分销商
                            if(parseInt(is_distribut) == 1 && parseInt(user_id) > 0)
                            {
                                jiathis_config.url = jiathis_config.url + "&first_leader="+user_id;
                            }
                        </script>
                        <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <form id="buy_goods_form" name="buy_goods_form" method="post" >
                <div class="detail-ggsl">
                <h1>爸爸2陆毅代言索扬20000毫安充电宝轻薄正品手机通用移动电源MAh</h1>
                <!--商品抢购 start-->
                                <!--商品抢购  end-->
                <div class="shop-price-cou">
                    <div class="shop-price-le">
                        <ul>
                            <li class="jaj"><span>商城价：</span></li>
                            <li>
                                <span class="bigpri_jj" id="goods_price"><em>￥</em>84.90                                <!--<a href=""><em class="sale">（降价通知）</em></a>-->
                                </span>
                            </li>
                        </ul>
                        <ul>
                            <li class="jaj"><span>市场价：</span></li>
                            <li class="though-line"><span><em>￥</em>184.90</span></li>
                        </ul>
                                            </div>
                    <div class="shop-cou-ri">
                        <div class="allcomm"><p>累计评价</p><p class="f_blue">0</p></div>
                        <div class="br1"></div>
                        <div class="allcomm"><p>累计销量</p><p class="f_blue">0</p></div>
                    </div>
                </div>
                <div class="standard p">
                    <!-- 收货地址，物流运费 -start-->
                    <ul class="list1">
                        <li class="jaj"><span>配&nbsp;&nbsp;送：</span></li>
                        <li class="summary-stock though-line">
                            <div class="dd shd_address">
                                <!--<div class="addrID"><div></div><b></b></div>-->
                                <div class="store-selector add_cj_p">
                                    <div class="text" style="width: 150px;"><div></div><b></b></div>
                                    <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
                                </div>
                                <!--<span id="dispatching_msg" style="display: none;">有货</span>-->
                                <select id="dispatching_select" style="display: none;"></select>
                            </div>
                        </li>

                    </ul>
                    <!-- 收货地址，物流运费 -end-->
                </div>
                <div class="standard p">
                    <ul>
                        <li class="jaj"><span>服&nbsp;&nbsp;务：</span></li>
                        <li class="lawir"><span class="service">由<a >TPshop最好的开源商城</a>发货并提供售后服务</span></li>
                    </ul>
                </div>
                                    <div class="standard p">
                        <ul>
                            <li class="jaj"><span>可&nbsp;&nbsp;用：</span></li>
                            <li class="lawir"><span class="service">-15.1+100积分</span></li>
                        </ul>
                    </div>
                
                <!-- 规格 start [[-->
                                        <div class="standard p">
                            <ul>
                                <li class="jaj"><span>颜色：</span></li>
                                <li class="lawir colo">
                                                                            <input type="radio" style="display: none" rel="土豪金" name="goods_spec[颜色]" value="103"  checked="checked"/>
                                        <a   onclick="select_filter(this);"  class="red">土豪金</a>
                                                                            <input type="radio" style="display: none" rel="象牙白" name="goods_spec[颜色]" value="104"  />
                                        <a   onclick="select_filter(this);" >象牙白</a>
                                                                            <input type="radio" style="display: none" rel="宝石蓝" name="goods_spec[颜色]" value="105"  />
                                        <a   onclick="select_filter(this);" >宝石蓝</a>
                                                                    </li>
                            </ul>
                        </div>
                                    <script>
                    /**
                     * 切换规格
                     */
                    function select_filter(obj)
                    {
                        $(obj).addClass('red').siblings('a').removeClass('red');
                        $(obj).siblings('input').prop('checked',false);
                        $(obj).prev('input').prop('checked',true);;	 // 让隐藏的 单选按钮选中
                        // 更新商品价格
                        get_goods_price();
                    }
                </script>
                <!-- 规格end ]]-->
                <div class="standard p">
                    <ul>
                        <li class="jaj"><span>数&nbsp;&nbsp;量：</span></li>
                        <li class="lawir">
                            <div class="minus-plus">
                                <a class="mins" href="javascript:void(0);" onclick="altergoodsnum(-1)">-</a>
                                <input class="buyNum" id="number" type="text" name="goods_num" value="1" onblur="altergoodsnum(0)" max="1000"/>
                                <a class="add" href="javascript:void(0);" onclick="altergoodsnum(1)">+</a>
                            </div>
                            <div class="sav_shop">剩余库存：<span id="store_count">999</span></div>
                        </li>
                    </ul>
                    <script>
                        $('#number').val(1);
                    </script>
                </div>
                <div class="standard p">
                    <input type="hidden" name="goods_id" value="115" />
                    <a class="paybybill" href="javascript:;" onclick="AjaxAddCart(115,1,1);">立即购买</a>
                    <a class="addcar" href="javascript:;" onclick="AjaxAddCart(115,1,0);"><i class="sk"></i>加入购物车</a>
                </div>
            </div>
            </form>
            <!--看了又看-s-->
            <div class="detail-ry p">
                <div class="type_more" >
                    <div class="type-top">
                        <h2>看了又看<a class="update_h fr" href="javascript:;" onclick="replace_look();">换一换</a></h2>
                    </div>
                    <div id="see_and_see">
                    </div>
                </div>
            </div>
            <!--看了又看-s-->
        </div>
    </div>
    <div class="detail-main p">
        <div class="w1224">
            <div class="deta-le-ma">
                <div class="type_more">
                    <div class="type-top">
                        <h2>热搜推荐</h2>
                    </div>
                    <div class="type-bot">
                        <ul class="xg_typ">
                                                            <li><a href="/Home/Goods/search/q/%E6%89%8B%E6%9C%BA.html">手机</a></li>
                                                            <li><a href="/Home/Goods/search/q/%E5%B0%8F%E7%B1%B3.html">小米</a></li>
                                                            <li><a href="/Home/Goods/search/q/iphone.html">iphone</a></li>
                                                            <li><a href="/Home/Goods/search/q/%E4%B8%89%E6%98%9F.html">三星</a></li>
                                                            <li><a href="/Home/Goods/search/q/%E5%8D%8E%E4%B8%BA.html">华为</a></li>
                                                            <li><a href="/Home/Goods/search/q/%E5%86%B0%E7%AE%B1.html">冰箱</a></li>
                                                    </ul>
                    </div>
                </div>
                <div class="type_more ma-to-20">
                    <div class="type-top">
                        <h2>推荐热卖</h2>
                    </div>
                    <div class="tjhot-shoplist type-bot">
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/143.html"><img src="/public/upload/goods/thumb/143/goods_thumb_143_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/143.html">haier海尔 BC-93TMPF 93升单门冰箱</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>0.01</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/142.html"><img src="/public/upload/goods/thumb/142/goods_thumb_142_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/142.html">海尔（Haier）BCD-251WDGW 251升 无霜两门...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>2699.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/141.html"><img src="/public/upload/goods/thumb/141/goods_thumb_141_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/141.html">三星 Galaxy A9高配版 (A9100) 精灵黑 全网...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>3499.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/140.html"><img src="/public/upload/goods/thumb/140/goods_thumb_140_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/140.html">Apple iPhone 6s 16GB 玫瑰金色 移动联通...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>4858.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/139.html"><img src="/public/upload/goods/thumb/139/goods_thumb_139_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/139.html">天翼小白49元纯流量卡（随机选号 只发辽宁）60元含100元...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>60.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/138.html"><img src="/public/upload/goods/thumb/138/goods_thumb_138_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/138.html">广州电信卡|4G定制卡|含50话费|手机卡号码卡|上网卡流量...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>79.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/137.html"><img src="/public/upload/goods/thumb/137/goods_thumb_137_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/137.html">中麦通信4G联通网络手机靓号 170手机卡电话卡靓号卡可选号...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>500.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/136.html"><img src="/public/upload/goods/thumb/136/goods_thumb_136_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/136.html">靓号0元送广东联通4G/3G手机卡上网卡大流量套餐全国无漫游...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>120.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/135.html"><img src="/public/upload/goods/thumb/135/goods_thumb_135_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/135.html">重庆电信手机卡电话卡语音卡选靓号3G4G卡内部5折卡低资费（...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>60.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                                    <div class="alone-shop">
                                <a href="/Home/Goods/goodsInfo/id/134.html"><img src="/public/upload/goods/thumb/134/goods_thumb_134_206_206.jpeg" style="display: inline;"></a>
                                <p class="line-two-hidd"><a href="/Home/Goods/goodsInfo/id/134.html">中国电信4G号卡手机卡电话卡上网卡 177号段套餐可选 预存...</a></p>
                                <p class="price-tag"><span class="li_xfo">￥</span><span>120.00</span></p>
                                <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                            </div>
                                            </div>
                </div>
            </div>
            <div class="deta-ri-ma">
                <div class="introduceshop">
                    <div class="datail-nav-top">
                        <ul>
                            <li class="red"><a href="javascript:void(0);">商品介绍</a></li>
                            <li><a href="javascript:void(0);">规格及包装</a></li>
                            <li><a href="javascript:void(0);">评价<em>(3)</em></a></li>
                            <li><a href="javascript:void(0);">售后服务</a></li>
                        </ul>
                    </div>
                    <!--<div class="he-nav"></div>-->
                    <div class="shop-describe shop-con-describe p">
                        <div class="deta-descri">
                            <p class="shopname_de"><span>商品名称：</span><span>爸爸2陆毅代言索扬20000毫安充电宝轻薄正品手机通用移动电源MAh</span></p>
                            <div class="ma-d-uli p">
                                <ul>
                                    <!--<li><span>品牌：</span><span></span></li>-->
                                    <li><span>货号：</span><span>TP0000115</span></li>
                                                                        <li><span>产品名称：</span><span>索扬 SY10-200</span></li>
                                                                        <li><span>品牌：</span><span>索扬</span></li>
                                                                        <li><span>电池容量：</span><span>20000mAh</span></li>
                                                                    </ul>
                            </div>

                            <div class="moreparameter">
                                <!--
                                <a href="">跟多参数<em>>></em></a>
                                -->
                            </div>
                        </div>
                        <div class="detail-img-b">
                            <p><img src="/public/upload/goods/2016/04-20/5717503f5a0fc.jpg" style="float:none;" title="TB1WJdtMXXXXXc9XFXXXXXXXXXX_!!0-item_pic.jpg"/></p><p><img src="/public/upload/goods/2016/04-20/5717503f780e6.jpg" style="float:none;" title="TB2CzFOeFXXXXcZXXXXXXXXXXXX_!!2086104958.jpg"/></p><p><img src="/public/upload/goods/2016/04-20/5717503fb7d2d.jpg" style="float:none;" title="TB2fSkfipXXXXXUXpXXXXXXXXXX_!!2086104958.jpg"/></p><p><img src="/public/upload/goods/2016/04-20/571750401fad3.jpg" style="float:none;" title="TB2m5H_nXXXXXaxXpXXXXXXXXXX_!!2086104958.jpg"/></p><p><img src="/public/upload/goods/2016/04-20/57175040c4296.jpg" style="float:none;" title="TB2X8NrlFXXXXa8XXXXXXXXXXXX_!!2086104958.jpg"/></p><p><br/></p>                        </div>
                    </div>
                    <div class="shop-describe shop-con-describe p" style="display: none;">
                        <div class="deta-descri">
                            <!--
                            <p class="shopname_de"><span>如果您发现商品信息不准确，<a class="de_cb" href="">欢迎纠错</a></span></p>
                            -->
                            <h2 class="shopname_de">属性</h2>
                                                            <div class="twic_a_alon">
                                    <p class="gray_t">产品名称</p>
                                    <p>索扬 SY10-200</p>
                                </div>
                                                            <div class="twic_a_alon">
                                    <p class="gray_t">品牌</p>
                                    <p>索扬</p>
                                </div>
                                                            <div class="twic_a_alon">
                                    <p class="gray_t">电池容量</p>
                                    <p>20000mAh</p>
                                </div>
                                                    </div>
                    </div>
                    <div class="shop-con-describe p" style="display: none;">
                        <div class="shop-describe p">
                            <div class="comm_stsh ma-to-20">
                                <div class="deta-descri">
                                    <h2>商品评价</h2>
                                </div>
                            </div>
                            <div class="deta-descri p">
                                <ul class="tebj">
                                    <li class="percen"><span>34%</span></li>
                                    <li class="co-cen">
                                        <div class="comm_gooba">
                                            <div class="gg_c">
                                                <span class="hps">好评</span>
                                                <span class="hp">（34%）</span>
                                                <span class="zz_rg"><i style="width: 34%;"></i></span>
                                            </div>
                                            <div class="gg_c">
                                                <span class="hps">中评</span>
                                                <span class="hp">（67%）</span>
                                                <span class="zz_rg"><i style="width: 67%;"></i></span>
                                            </div>
                                            <div class="gg_c">
                                                <span class="hps">差评</span>
                                                <span class="hp">（0%）</span>
                                                <span class="zz_rg"><i style="width: 0%;"></i></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tjd-sum">
                                        <!--<p class="tjd">推荐点：</p>-->
                                        <div class="tjd-a">
                                            买家评论事项：购买后有什么问题, 满意, 或者不不满, 都可以在这里评论出来, 这里评论全部源于真实的评论.
                                        </div>
                                    </li>
                                    <li class="te-cen">
                                        <div class="nchx_com">
                                            <p>您可以对已购的商品进行评价</p>
                                            <a class="jfnuv" href="/Home/User/comment.html">发表评论</a>
                                            <!--<p class="xja"><span>详见</span><a class="de_cb" href="">积分规则</a></p>-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="deta-descri p">
                                <div class="cte-deta">
                                    <ul id="fy-comment-list">
                                        <li data-t="1" class="red">
                                            <a href="javascript:void(0);" class="selected">全部评论（3）</a>
                                        </li>
                                        <li data-t="2">
                                            <a href="javascript:void(0);">好评（1）</a>
                                        </li>
                                        <li data-t="3">
                                            <a href="javascript:void(0);">中评（2）</a>
                                        </li>
                                        <li data-t="4">
                                            <a href="javascript:void(0);">差评（0）</a>
                                        </li>
                                        <li data-t="5">
                                            <a href="javascript:void(0);">有图（1）</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="line-co-sunall"  id="ajax_comment_return">
                            </div>
                        </div>
                    </div>
                    <div class="shop-con-describe p" style="display: none;">
                        <div class="shop-describe p">
                            <div class="comm_stsh ma-to-20">
                                <div class="deta-descri">
                                    <h2>售后保障</h2>
                                </div>
                            </div>
                            <div class="deta-descri p">
                                <div class="securi-afr">
                                    <ul>
                                        <li class="frhe"><i class="detai-ico msz1"></i></li>
                                        <li class="wnuzsuhe">
                                            <h2>卖家服务</h2>
                                            <p>全国联保一年</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="frhe"><i class="detai-ico msz2"></i></li>
                                        <li class="wnuzsuhe">
                                            <h2>商城承诺</h2>
                                            <p>商城平台卖家销售并发货的商品，由平台卖家提供发票和相应的售后服务。请您放心购买！
注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。
只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="frhe"><i class="detai-ico msz3"></i></li>
                                        <li class="wnuzsuhe">
                                            <h2>正品行货</h2>
                                            <p>商城向您保证所售商品均为正品行货，商城自营商品开具机打发票或电子发票。</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="frhe"><i class="detai-ico msz4"></i></li>
                                        <li class="wnuzsuhe">
                                            <h2>全国联保</h2>
                                            <p>凭质保证书及商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由联系保修，享受法定三包售后服务），与您亲临商场选购的商品享
受相同的质量保证。商城还为您提供具有竞争力的商品价格和运费政策，请您放心购买！ </p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="frhe"><i class="detai-ico msz5"></i></li>
                                        <li class="wnuzsuhe">
                                            <h2>退货无忧</h2>
                                            <p>客户购买商城自营商品7日内（含7日，自客户收到商品之日起计算），在保证商品完好的前提下，可无理由退货。（部分商品除外，详情请见各商品细则）</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comm_stsh ma-to-20">
                                <div class="deta-descri">
                                    <h2>退款说明</h2>
                                </div>
                            </div>
                            <div class="deta-descri p">
                                <div class="fetbajc">
                                    <p>1.若您购买的家电商品已经拆封过，需要退换货，需请联系原厂开具鉴定检测单</p>
                                    <p>2.签收商品隔日起七日内提交退货申请，2-3天快递员与您联系安排取回商品</p>
                                    <p>3.商品退回检验，且必须附上检测单</p>
                                    <p>5.若退回商品有缺件、影响二次销售状况时，退款作业将暂时停止，飞牛网会依商品状况报价，后由客服人员与您联系说明并于订单内扣除费用后退回剩余款项，
或您可以取消退货申请；若符合退货条件者将于商品取回后约1-2个工作日内完成退款</p>
                                    <p>4.通过线上支付的订单办理退货，商品退回检验无误后，商城将提交退款申请, 实际款项会依照各银行作业时间返还至您原支付方式 若您采用货到付款，请于
办理退货时提供退款账户，亦于商品退回检验无误后，将退款汇至您的银行账户中</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-s-->
    <div class="footer p">

        <div class="mod_service_inner">
        <div class="w1224">
            <ul>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_duo">多</h5>
                        <p>品类齐全，轻松购物</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_kuai">快</h5>
                        <p>多仓直发，极速配送</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_hao">好</h5>
                        <p>正品行货，精致服务</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_sheng">省</h5>
                        <p>天天低价，畅选无忧</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<div class="w1224">
    <div class="footer-ewmcode">
        <div class="foot-list-fl">
                            <ul>
                    <li class="foot-th">
                        售后服务                    </li>
                                            <li>
                            <a href="/Home/Article/detail/article_id/1.html">保修日期</a>
                        </li>
                                            <li>
                            <a href="/Home/Article/detail/article_id/12.html">保修政策</a>
                        </li>
                                            <li>
                            <a href="/Home/Article/detail/article_id/13.html">退换货政策</a>
                        </li>
                                            <li>
                            <a href="/Home/Article/detail/article_id/14.html">退换货流程</a>
                        </li>
                                    </ul>
                            <ul>
                    <li class="foot-th">
                        关于我们                    </li>
                                    </ul>
                            <ul>
                    <li class="foot-th">
                        新手上路                     </li>
                                    </ul>
                            <ul>
                    <li class="foot-th">
                        购物指南                    </li>
                                    </ul>
                            <ul>
                    <li class="foot-th">
                        配送方式                     </li>
                                    </ul>
                    </div>
        <div class="QRcode-fr">
            <ul>
                <li class="foot-th">客户端</li>
                <li><img src="/template/pc/rainbow/static/images/qrcode.png"/></li>
            </ul>
            <ul>
                <li class="foot-th">微信</li>
                <li><img src="/template/pc/rainbow/static/images/qrcode.png"/></li>
            </ul>
        </div>
    </div>
    <div class="mod_copyright p">
        <div class="grid-top">
                            <a href="/Home/Article/detail/article_id/3.html">【中奖名单】荣耀手环zero点评有奖活动</a>
                <span>|</span>
                            <a href="/Home/Article/detail/article_id/112.html">TPshop商城V1.0版震感发布</a>
                <span>|</span>
                        <a href="javascript:void (0);">客服热线:123456789</a>
        </div>
        <p>Copyright © 2016-2025 TPshop商城 版权所有 保留一切权利 备案号:粤00-123456号</p>

        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_6" href="" target="_blank">网络举报APP下载</a>
        </p>
    </div>
</div>
        <div class="soubao-sidebar">
    <div class="soubao-sidebar-bg"></div>
    <div class="sidertabs tab-lis-1">
        <div class="sider-top-stra sider-midd-1">
            <div class="icon-tabe-chan">
                <a href="/Home/User/index.html">
                    <i class="share-side share-side1"></i>
                    <i class="share-side tab-icon-tip triangleshow"></i>
                </a>

                <div class="dl_login">
                    <div class="hinihdk">
                        <img src="/template/pc/rainbow/static/images/dl.png"/>

                        <p class="loginafter nologin"><span>你好，请先</span><a href="/Home/user/login.html">登录！</a></p>
                        <!--未登录-e--->
                        <!--登录后-s--->
                        <p class="loginafter islogin">
                            <span class="id_jq userinfo">陈xxxxxxx</span>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="/Home/user/logout.html" title="点击退出">退出！</a>
                        </p>
                        <!--未登录-s--->
                    </div>
                </div>
            </div>
            <div class="icon-tabe-chan shop-car">
                <a href="javascript:void(0);" onclick="ajax_side_cart_list()">
                    <div class="tab-cart-tip-warp-box">
                        <div class="tab-cart-tip-warp">
                            <i class="share-side share-side1"></i>
                            <i class="share-side tab-icon-tip"></i>
                            <span class="tab-cart-tip">购物车</span>
                            <span class="tab-cart-num J_cart_total_num" id="tab_cart_num">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="icon-tabe-chan massage">
                <a href="/Home/User/message_notice.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">消息</span>
                </a>
            </div>
        </div>
        <div class="sider-top-stra sider-midd-2">
            <div class="icon-tabe-chan mmm">
                <a href="/Home/User/goods_collect.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">收藏</span>
                </a>
            </div>
            <div class="icon-tabe-chan hostry">
                <a href="/Home/User/visit_log.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">足迹</span>
                </a>
            </div>
            <!--<div class="icon-tabe-chan sign">-->
                <!--<a href="" target="_blank">-->
                    <!--<i class="share-side share-side1"></i>-->
                    <!--&lt;!&ndash;<i class="share-side tab-icon-tip"></i>&ndash;&gt;-->
                    <!--<span class="tab-tip">签到</span>-->
                <!--</a>-->
            <!--</div>-->
        </div>
    </div>
    <div class="sidertabs tab-lis-2">
        <div class="icon-tabe-chan advice">
            <a title="点击这里给我发消息" href="tencent://message/?uin=123456789&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">在线咨询</span>
            </a>
        </div>
        <div class="icon-tabe-chan request">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">意见反馈</span>
            </a>
        </div>
        <div class="icon-tabe-chan qrcode">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <i class="share-side tab-icon-tip triangleshow"></i>
                <span class="tab-tip qrewm">
                    <img src="/template/pc/rainbow/static/images/qrcode.png"/>
                    扫一扫下载APP
                </span>
            </a>
        </div>
        <div class="icon-tabe-chan comebacktop">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">返回顶部</span>
            </a>
        </div>
    </div>
    <div class="shop-car-sider">

    </div>
</div>
<script src="/template/pc/rainbow/static/js/common.js"></script>
    </div>
<!--看了又看-s-->
<div style="display: none" id="look_see">
        <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/1.html"><img class="wiahides" src="/public/upload/goods/thumb/1/goods_thumb_1_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/1.html">Apple iPhone 6s Plus 16G 玫瑰金 移动联通电信4G手机</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>6007.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/142.html"><img class="wiahides" src="/public/upload/goods/thumb/142/goods_thumb_142_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/142.html">海尔（Haier）BCD-251WDGW 251升 无霜两门冰箱（白色）</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>2699.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/143.html"><img class="wiahides" src="/public/upload/goods/thumb/143/goods_thumb_143_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/143.html">haier海尔 BC-93TMPF 93升单门冰箱</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>0.01</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/66.html"><img class="wiahides" src="/public/upload/goods/thumb/66/goods_thumb_66_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/66.html">迎馨家纺全棉斜纹印花双人四件套邂逅 AB版纯棉，亲肤透气</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>110.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/67.html"><img class="wiahides" src="/public/upload/goods/thumb/67/goods_thumb_67_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/67.html">迎馨家纺 全棉斜纹印花双人四件套 约定 桔色 1.5米床</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>100.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/123.html"><img class="wiahides" src="/public/upload/goods/thumb/123/goods_thumb_123_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/123.html">Canon/佳能 EOS 750D单反套机（18-55mm）高清数码相机苏宁易购</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>3997.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/124.html"><img class="wiahides" src="/public/upload/goods/thumb/124/goods_thumb_124_206_206.png" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/124.html">Nikon/尼康D3300入门单反相机 升级版AF-P 18-55镜头套机 分期购</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>2399.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/125.html"><img class="wiahides" src="/public/upload/goods/thumb/125/goods_thumb_125_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/125.html">【0首付分期】蚂蚁摄影联保单反数码相机Canon/佳能 EOS 760D套机</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>5499.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/126.html"><img class="wiahides" src="/public/upload/goods/thumb/126/goods_thumb_126_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/126.html">Canon/佳能 EOS 700D套机（18-55mm)数码单反相机 苏宁易购</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>3499.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/127.html"><img class="wiahides" src="/public/upload/goods/thumb/127/goods_thumb_127_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/127.html">Canon/佳能 EOS 70D套机(18-135mm)数码相机单反套机 苏宁易购</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>6798.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/129.html"><img class="wiahides" src="/public/upload/goods/thumb/129/goods_thumb_129_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/129.html">【蚂蚁摄影】Canon/佳能 PowerShot SX410 IS 媲单反长焦数码相机</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>1098.00</span>
            </p>
        </div>
    </div>
    <div class="tjhot-shoplist type-bot">
        <div class="alone-shop">
            <a href="/Home/Goods/goodsInfo/id/130.html"><img class="wiahides" src="/public/upload/goods/thumb/130/goods_thumb_130_206_206.jpeg" style="display: inline;"></a>
            <p class="shop_name2">
                <a href="/Home/Goods/goodsInfo/id/130.html">Nikon/尼康 D7200套机(18-140mm) 尼康D7200 单反相机 正品</a>
            </p>
            <p class="price-tag">
                <span class="li_xfo">￥</span><span>6340.00</span>
            </p>
        </div>
    </div>
<!--看了又看-s-->
</div>
    <!--footer-e-->
    <script src="/template/pc/rainbow/static/js/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
    <!--<script src="/template/pc/rainbow/static/js/popt.js" type="text/javascript" charset="utf-8"></script>-->
    <!--------收货地址，物流运费-开始-------------->
    <script src="/template/pc/rainbow/static/js/location.js"></script>
    <!--------收货地址，物流运费--结束-------------->
    <script type="text/javascript" src="/template/pc/rainbow/static/js/headerfooter.js" ></script>
    <script type="text/javascript">
        var commentType = 1;// 默认评论类型
        $(document).ready(function () {
            /*商品缩略图放大镜*/
            $(".jqzoom").jqueryzoom({
                xzoom: 500,
                yzoom: 500,
                offset: 1,
                position: "right",
                preload: 1,
                lens: 1
            });
            get_goods_price();
            ajaxComment(commentType,1);// ajax 加载评价列表
            replace_look();
        });

        //看了又看切换
        var tmpindex = 0;
        var look_see_length = $('#look_see').children().length;
        function replace_look(){
            var listr='';
            if(tmpindex*2>=look_see_length) tmpindex = 0;
            $('#look_see').children().each(function(i,o){
                if((i>=tmpindex*2) && (i<(tmpindex+1)*2)){
                    listr += '<div class="tjhot-shoplist type-bot">'+$(o).html()+'</div>';
                }
            });
            tmpindex++;
            $('#see_and_see').empty().append(listr);
        }

        var store_count = 1000; // 商品起始库存
        //缩略图切换
        $('.small-pic-li').each(function (i, o) {
            var lilength = $('.small-pic-li').length;
            $(o).hover(function () {
                $(o).siblings().removeClass('active');
                $(o).addClass('active');
                $('#zoomimg').attr('src', $(o).find('img').attr('data-img'));
                $('#zoomimg').attr('jqimg', $(o).find('img').attr('data-big'));

                $('.next-btn').removeClass('disabled');
                if (i == 0) {
                    $('.next-left').addClass('disabled');
                }
                if (i + 1 == lilength) {
                    $('.next-right').addClass('disabled');
                }
            });
        })

        //前一张缩略图
        $('.next-left').click(function () {
            var newselect = $('.small-pic>.active').prev();
            $('.small-pic>.active').removeClass('active');
            $(newselect).addClass('active');
            $('#zoomimg').attr('src', $(newselect).find('img').attr('data-img'));
            $('#zoomimg').attr('jqimg', $(newselect).find('img').attr('data-big'));
            var index = $('.small-pic>li').index(newselect);
            if (index == 0) {
                $('.next-left').addClass('disabled');
            }
            $('.next-right').removeClass('disabled');
        })

        //后前一张缩略图
        $('.next-right').click(function () {
            var newselect = $('.small-pic>.active').next();
            $('.small-pic>.active').removeClass('active');
            $(newselect).addClass('active');
            $('#zoomimg').attr('src', $(newselect).find('img').attr('data-img'));
            $('#zoomimg').attr('jqimg', $(newselect).find('img').attr('data-big'));
            var index = $('.small-pic>li').index(newselect);
            if (index + 1 == $('.small-pic>li').length) {
                $('.next-right').addClass('disabled');
            }
            $('.next-left').removeClass('disabled');
        })
        $(function(){
            $("#area").click(function (e) {
                SelCity(this,e);
            });
        })
        //切换规格
//        $(function(){
//            $('.colo a').click(function(){
//                $(this).addClass('red').siblings('a').removeClass('red');
//            })
//        })
        $(function() {
            // 好评差评 切换
            $('.cte-deta ul li').click(function(){
                $(this).addClass('red').siblings().removeClass('red');
                commentType = $(this).data('t');// 评价类型   好评 中评  差评
                ajaxComment(commentType,1);
            })
        });
        $(function(){
            $('.datail-nav-top ul li').click(function(){
                $(this).addClass('red').siblings().removeClass('red');
                var er = $('.datail-nav-top ul li').index(this);
                $('.shop-con-describe').eq(er).show().siblings('.shop-con-describe').hide();
            })
        })


        /**
         * 加减数量
         * n 点击一次要改变多少
         * maxnum 允许的最大数量(库存)
         * number ，input的id
         */
        function altergoodsnum(n){
            var num = parseInt($('#number').val());
            var maxnum = parseInt($('#number').attr('max'));
            num += n;
            num <= 0 ? num = 1 :  num;
            if(num >= maxnum){
                $(this).addClass('no-mins');
                num = maxnum;
            }
            $('#store_count').text(maxnum-num); //更新库存数量
            $('#number').val(num)
        }

        function get_goods_price()
        {
            var goods_price = 84.90; // 商品起始价
            var store_count = 1000; // 商品起始库存
            var spec_goods_price = {"103":{"key":"103","price":"84.90","store_count":100},"104":{"key":"104","price":"84.90","store_count":100},"105":{"key":"105","price":"84.90","store_count":100}};  // 规格 对应 价格 库存表   //alert(spec_goods_price['28_100']['price']);
            // 优先显示抢购活动库存
                        // 如果有属性选择项
            if(spec_goods_price != null && spec_goods_price !='')
            {
                goods_spec_arr = new Array();
                $("input[name^='goods_spec']:checked").each(function(){
                    goods_spec_arr.push($(this).val());
                });
                var spec_key = goods_spec_arr.sort(sortNumber).join('_');  //排序后组合成 key
                goods_price = spec_goods_price[spec_key]['price']; // 找到对应规格的价格
                store_count = spec_goods_price[spec_key]['store_count']; // 找到对应规格的库存
            }

            var goods_num = parseInt($("#goods_num").val());
            // 库存不足的情况
            if(goods_num > store_count)
            {
                goods_num = store_count;
                layer.alert('库存仅剩 '+store_count+' 件',{icon:2});
                $("#goods_num").val(goods_num);
            }
            $('#store_count').html(store_count);    //对应规格库存显示出来
            $('#number').attr('max',store_count); //对应规格最大库存
            $("#goods_price").html('<span>￥</span><span>'+goods_price+'</span>'); // 变动价格显示
        }
        /***用作 sort 排序用*/
        function sortNumber(a,b)
        {
            return a - b;
        }

        /***收藏商品**/
        $('#collectLink').click(function(){
            if(getCookie('user_id') == ''){
                layer.msg('请先登录！', {icon: 1});
            }else{
                $.ajax({
                    type:'post',
                    dataType:'json',
                    data:{goods_id:$('input[name="goods_id"]').val()},
                    url:"/Home/Goods/collect_goods.html",
                    success:function(res){
                        if(res.status == 1){
                            layer.msg('成功添加至收藏夹', {icon: 1});
                        }else{
                            layer.msg(res.msg, {icon: 3});
                        }
                    }
                });
            }
        });

        /***用ajax分页显示评论**/
        function ajaxComment(commentType,page){
            $.ajax({
                type : "GET",
                url:"/index.php?m=Home&c=goods&a=ajaxComment&goods_id=115&commentType="+commentType+"&p="+page,//+tab,
                success: function(data){
                    $("#ajax_comment_return").html('');
                    $("#ajax_comment_return").append(data);
                }
            });
        }
        /**
         * 切换图片
         */
        function switch_zooming(img)
        {
            if(img != ''){
                $('#zoomimg').attr('jqimg', img);
                $('#zoomimg').attr('src', img);
            }
        }
    </script>
	</body>
</html>";
?>