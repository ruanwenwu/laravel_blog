<!DOCTYPE html>
<html xmlns:itranswarp="http://www.itranswarp.com/" xmlns:wb="http://open.weibo.com/wb">
<!--

-->
<head>
    <meta charset="utf-8" />
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="description" content="{{$title}}" />
    <meta property="x-nav" content="/" />
    <link rel="alternate" href="/feed" title="" application/rss+xml" />
    
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.liaoxuefeng.com/" />
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:description" content="{{$title}}" />
    <meta property="og:tag" content="index" />

    
    <link rel="stylesheet" href="/css/index.css" />
    
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="/static/themes/default/css/ie.css?v=e6763a1" />
    <![endif]-->
    
    <script src="https://cdn.liaoxuefeng.com/cdn/static/themes/default/js/all.js?v=e6763a1"></script>
    
    <script id="tplComment" type="text/plain">
        <div class="uk-comment">
            <div class="uk-comment-header" style="margin-bottom:0">
                <a target="_blank" href="/user/{ user.id }"><img class="uk-comment-avatar uk-border-circle x-avatar" src="{ user.image_url }" width="50" height="50" alt=""></a>
                <h4 class="uk-comment-title"><a target="_blank" href="/discuss/{ board_id }/{ id }">{ name }</a></h4>
                <div class="uk-comment-meta"><a target="_blank" href="/user/{ user.id }">{ user.name }</a> created at { created_at.toSmartDate() }, Last updated at { updated_at.toSmartDate() }</div>
            </div>
            <div class="uk-comment-body x-auto-content">
                { content|safe }
            </div>
        </div>
    </script>

    <script id="tplCommentReply" type="text/plain">
        <div class="uk-comment">
            <div class="uk-comment-header" style="margin-bottom:0">
                <a target="_blank" href="/user/{ user.id }"><img class="uk-comment-avatar uk-border-circle x-avatar" src="{ user.image_url }" width="50" height="50" alt=""></a>
                <div class="uk-comment-meta"><a target="_blank" href="/user/{ user.id }">{ user.name }</a></div>
                <div class="uk-comment-meta">Created at { created_at.toSmartDate() }, Last updated at { updated_at.toSmartDate() }</div>
            </div>
            <div class="uk-comment-body x-auto-content">
                { content|safe }
            </div>
        </div>
    </script>

    <script id="tplCommentInfo" type="text/plain">
        <li>
            <div class="x-comment-info">
                <hr>
                <a target="_blank" class="uk-button uk-button-small" href="/discuss/{ board_id }/{ id }"><i class="uk-icon-list-ul"></i> 全部讨论</a>
                &nbsp;
                <a target="_blank" class="uk-button uk-button-small" href="/discuss/{ board_id }/{ id }#reply"><i class="uk-icon-reply"></i> 回复</a>
            </div>
        </li>
    </script>

    <script id="tplCommentArea" type="text/plain">
        <div class="x-display-if-signin">
            <p><button id="comment-make-button" type="button" class="uk-button uk-button-primary"><i class="uk-icon-comment"></i> 发表评论</button></p>
            <form id="comment-form" class="uk-form" style="display:none;">
                <fieldset>
                    <div class="uk-alert uk-alert-danger" style="display:none"></div>
                    <div class="uk-form-row">
                        <label>标题:</label>
                    </div>
                    <div class="uk-form-row">
                        <input type="text" name="name" maxlength="100" style="width:100%">
                    </div>
                    <div class="uk-form-row">
                        <label>内容:</label>
                    </div>
                    <div class="uk-form-row x-textarea">
                    </div>
                    <div class="uk-form-row">
                        <button type="submit" class="uk-button uk-button-primary"><i class="uk-icon-check"></i> 发布</button>
                        &nbsp;&nbsp;
                        <button type="button" class="uk-button x-cancel"><i class="uk-icon-close"></i> 取消</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </script>

    <style id="x-doc-style">
        .x-display-none { display: none; }

        .x-display-if-signin { display: none; }

    </style>
<style>
.x-index-visible {
    display: block;
}
</style>



<style>
.x-center {
    margin: 0;
}




.x-center {
    margin-right: 316px;
    padding-right: 15px;
}


</style>


<!-- END custom_header -->
</head>
<body>
    <div class="x-goto-top">
        <div class="x-arrow"></div>
        <div class="x-stick"></div>
    </div>

    <div id="header" class="uk-navbar uk-navbar-attached">
        <div class="uk-container x-container">
            <div class="uk-navbar uk-navbar-attached">
                
                <a href="/" class="uk-navbar-brand uk-visible-large">阮文武的官方网站</a>
                <a href="/" class="uk-navbar-brand uk-hidden-large"><i class="uk-icon-home"></i></a>
                <ul id="ul-navbar" class="uk-navbar-nav uk-hidden-small">
                    
					@foreach($navs as $nav)
                    <li><a href="{{$nav->url}}">{{$nav->name}}</a></li>
                    @endforeach
                </ul>
                
                <ul class="uk-navbar-nav uk-visible-small">
                    <li class="uk-parent" data-uk-dropdown>
                        <a style="padding-top:15px;" href="#0"><i class="uk-icon-navicon"></i></a>
                        <div class="uk-dropdown uk-dropdown-navbar">
                            <ul class="uk-nav uk-nav-navbar">
                               @foreach($navs as $nav)
                                    <li><a href="{{$nav->url}}">{{$nav->name}}</a></li>
                               @endforeach 
                            </ul>
                        </div>
                    </li>
                </ul>
                

<!--
                <div class="uk-navbar-content x-hidden-tiny">
                    <form id="form-search" class="uk-form uk-margin-remove uk-display-inline-block">
                        <div class="uk-form-icon">
                            <i class="uk-icon-search"></i>
                            <input type="text" placeholder="Search">
                        </div>
                    </form>
                </div>
-->

                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav">
                        <li class="uk-parent x-display-if-signin" data-uk-dropdown>
                            <a href="#0"><i class="uk-icon-user"></i><span class="x-hidden-tiny">&nbsp;</span><span class="x-user-name x-hidden-tiny"></span></a>
                            <div class="uk-dropdown uk-dropdown-navbar">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li><a target="_blank" href="/me/profile"><i class="uk-icon-cog"></i> 个人资料</a></li>
                                    <li class="uk-nav-divider"></li>
                                
                                
                                    <li><a href="/auth/signout"><i class="uk-icon-power-off"></i> 登出</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="x-display-if-not-signin uk-hidden-small"><a href="javascript:showSignin()"><i class="uk-icon-sign-in"></i> 登录</a></li>
                        <li class="x-display-if-not-signin uk-visible-small"><a style="padding-top:15px;" href="javascript:showSignin()"><i class="uk-icon-sign-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- // header -->

    <div id="main">
        <div class="x-placeholder-50"><!-- placeholder --></div>
        <div class="x-placeholder"><!-- placeholder --></div>
        <div class="uk-container x-container">
            <div class="uk-grid">
                <div class="x-body-top uk-width-1-1">
                    <!-- body_top -->
                </div>
                <div class="uk-width-1-1">
                
                
                    <div class="x-sidebar-right">
                        <div class="x-sidebar-right-top">
                            <!-- __snippets__.sidebar_right_top --><!-- sidebar_right_top -->
                        </div>
                        <div class="x-sidebar-right-content">
                            

<div class="uk-margin">
    <h3>最新问答</h3>
    <ul class="uk-nav">
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/0015302594203756f749831668f4cd7b252303a871ed7ef000" target="_blank">legohouse丶: 记录下</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001528016879242a2eec13510444d59a6c4faa27d48674b000" target="_blank">tomsky: test.html中jinja2报语法错误</a></li>
        
        <li><a href="/discuss/001409195939432748a2c9fae3846bc98b3c2a547fa321b000/0015169703490907f18df3db1914ed0843d9edc0743ed0f000" target="_blank">的神烦大叔是谁: 看了老师教程后，git的大部分操作都会了，但是想到了一个问题，不知道如何解决</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001439521021651d81c549850da4d0d959b56a2c3e67c60000" target="_blank">努云尼尼: 有关使用stringIO读写文件有个问题</a></li>
        
        <li><a href="/discuss/001434785951277d88c0f2037a2409682c8f0de5384c232000/0015302564450100187720a7a394b589cd78accb5d076df000" target="_blank">evoMiami: js的时间设计的应该是和tm结构体一样的规则</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001530152796803799145ae735942f8856a44ff8ec174cc000" target="_blank">antonio1979: 作业</a></li>
        
        <li><a href="/discuss/001409195939432748a2c9fae3846bc98b3c2a547fa321b000/0015251404559304842c5148abe49f7959f0c433a86e84a000" target="_blank">枫落曳_: 最下面的图有个疑惑点</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/0015127001924353835b09d96c84d7498c9be4308ad886f000" target="_blank">樊睡懒觉: IO编程：两条大水管，团结你我他</a></li>
        
        <li><a href="/discuss/001434785951277d88c0f2037a2409682c8f0de5384c232000/0015286788170677ede8cbb9d68483491ad2cf8b989f07d000" target="_blank">沙倫血夜: 疑問疑問</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001530254185449a13df969847e40d5b26305214b117259000" target="_blank">凯文丶希特勒: 交作业</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/00153025109676878726f58b2f146fcbd0df5c34be3da8f000" target="_blank">杰森斯坦森森森森o_O: 有关r是否迭代器的问题。</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001530252561427401b21bccc2541cf8a4e54cd7ad5e91d000" target="_blank">viper1090: answer</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001530247578872c6d5bc090e764913865e6fe63d0306ae000" target="_blank">好烦啊我怎么一点都不开心: digits</a></li>
        
        <li><a href="/discuss/001434785951277d88c0f2037a2409682c8f0de5384c232000/001530251280639ce2c0907e26b4816bb78173daf2d3790000" target="_blank">Robin97172: 练习题</a></li>
        
        <li><a href="/discuss/001434785951277d88c0f2037a2409682c8f0de5384c232000/0015302504550168719593d352c40cc97ad4ae972ada110000" target="_blank">光仔鱼蛋: 练习</a></li>
        
        <li><a href="/discuss/001434785951277d88c0f2037a2409682c8f0de5384c232000/001530250302655c0e1a8fcb5f74e0da5b1a49942b32e08000" target="_blank">Robin97172: 练习中</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001530173360609b33a5fe0eb754c00854385bcb2b9a6ac000" target="_blank">Andy奥迪: 交作业，顺便问一下s[i]与s[i,i+1]有没有区别</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/0015291412926721c6c08b2d2064ece9da2818f3ecbedfe000" target="_blank">翃时: 谁知道为什么username = username？？</a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/0015302442926705cb7b5de52e64a219addc8dbe1b41f2e000" target="_blank">记得吐籽: input value属性为什么要赋值变量 username </a></li>
        
        <li><a href="/discuss/001409195742008d822b26cf3de46aea14f2b7378a1ba91000/001530243186810eb057f55b8fb4433ad7fa2fe916d7e09000" target="_blank">哈克斯里: 第二题作业</a></li>
        
    </ul>
</div>


                        </div>
                        <div class="x-sidebar-right-bottom">
                            <h3>关于作者</h3>
<iframe width="100%" height="90" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=1&speed=0&skin=5&isTitle=0&noborder=0&isWeibo=0&isFans=0&uid=1658384301&verifier=078cedea&colors=0593d3,ffffff,666666,0593d3,0477ab&dpc=1"></iframe>

                        </div>
                        <div id="x-sponsor-b" class="uk-clearfix"><!-- sponsor B --></div>
                    </div>
                

                    <div class="x-center">
                        <div class="x-content-top">
                            <!-- content_top -->
                        </div>
                        <div class="x-content" style="width:100%">
                            

    <div class="uk-grid">
        <div class="x-index-top uk-width-1-1">
                <h3>推荐教程</h3>

    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/wiki/001434446689867b27157e896e74d51a89c25cc8b43bdb3000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/0014355670304100cdaa4e7e651474d9672ed73797378bd000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/wiki/001434446689867b27157e896e74d51a89c25cc8b43bdb3000" target="_blank">JavaScript教程</a></h3>
            <p>这是小白的零基础JavaScript全栈教程，可以在线免费学习！可以在线编写JavaScript代码并直接运行！零基础迈向全栈开发工程师！</p>
        </div>
    </div>

    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/wiki/0014316089557264a6b348958f449949df42a6d3a2e542c000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/001431608955727f25be118770e460fad1296261e01213d000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/wiki/0014316089557264a6b348958f449949df42a6d3a2e542c000" target="_blank">Python教程</a></h3>
            <p>小白的Python新手教程，具有如下特点：中文，免费，零起点，完整示例，基于最新的Python 3版本。随着AI时代的来临，Python已经是必学语言。</p>
        </div>
    </div>

    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/wiki/0013739516305929606dd18361248578c67b8067c8c017b000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/0015102977048535e123db6e86b4fbf9899e945e1b20ca3000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/wiki/0013739516305929606dd18361248578c67b8067c8c017b000" target="_blank">Git教程</a></h3>
            <p>史上最浅显易懂的Git教程，绝对面向初学者！如果你是一个开发人员，想用上这个世界上目前最先进的分布式版本控制系统，那么，赶快开始学习吧！</p>
        </div>
    </div>

        </div>
    </div>

    <h3>热门文章</h3>
    <div style="max-width:640px;" class="uk-slidenav-position" data-uk-slideshow="{autoplay:true,pauseOnHover:false,kenburns:true}">
        <ul class="uk-slideshow uk-overlay-active">
            
            <li>
                <img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/0014965443173530504358d47c34a76a30a4993c3609b2e000/l" width="640" height="360">
                <div onclick="window.open('/article/001496544318690aa4a6b0ecc6e42358a5b57ce5a84e65e000')" style="cursor:pointer" class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom">
                    <h3>数字货币与区块链原理</h3>
                    <p>自08年诞生的第一种数字货币——比特币，从一万个币换一个披萨到一个币单价近两万，比特币8年暴涨百万倍，其背后的区块链技术更是被各大金融巨头竞相研究。到底什么是数字货币？没有中心节点的数字货币却号称不可伪造，数字货币和区块链究竟是如何运行的？</p>
                </div>
            </li>
            
            <li>
                <img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/0014935227110056b3f284f14814545ba5447ee5ac33b0d000/l" width="640" height="360">
                <div onclick="window.open('/article/001493522711597674607c7f4f346628a76145477e2ff82000')" style="cursor:pointer" class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom">
                    <h3>Java的Fork/Join任务，你写对了吗？</h3>
                    <p>Java的Fork/Join任务，你写对了吗？</p>
                </div>
            </li>
            
            <li>
                <img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/001525354340372c2bfb3745fd74066be9039bb6dd614b3000/l" width="640" height="360">
                <div onclick="window.open('/article/001525354340369ebbb9117c33545218e4ef060523b8c84000')" style="cursor:pointer" class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom">
                    <h3>区块链安全，要从设计抓起</h3>
                    <p>最近爆发的层出不穷的区块链安全问题，从以太坊RPC攻击转移用户资产，到ERC20代币频繁爆出溢出漏洞，这些问题其实大部分应该在区块链系统的设计阶段解决，而不是留给开发者来自己关注安全问题。</p>
                </div>
            </li>
            
        </ul>
        <a href="#0" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
        <a href="#0" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
    </div>

    <h3>最新发表</h3>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/001525354340369ebbb9117c33545218e4ef060523b8c84000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/001525354340372c2bfb3745fd74066be9039bb6dd614b3000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/001525354340369ebbb9117c33545218e4ef060523b8c84000" target="_blank">区块链安全，要从设计抓起</a></h3>
            <p>最近爆发的层出不穷的区块链安全问题，从以太坊RPC攻击转移用户资产，到ERC20代币频繁爆出溢出漏洞，这些问题其实大部分应该在区块链系统的设计阶段解决，而不是留给开发者来自己关注安全问题。</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/001523444489789210f7acb0355485d91cfb1a44788ac9b000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/001523444489790b53f850db43c4633902820322c97665f000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/001523444489789210f7acb0355485d91cfb1a44788ac9b000" target="_blank">EOS映射完全指南</a></h3>
            <p>EOS映射从原理到代码完全指南</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/0015123874275468ba1f56df2964129bf363f60d1925e4c000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/0015123874275470c568377e44f410e81383175b7fddf66000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/0015123874275468ba1f56df2964129bf363f60d1925e4c000" target="_blank">合约交易系统设计与开发</a></h3>
            <p>本文讨论如何设计并实现一个合约交易系统。</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/001511866762041974a7c8929d04943a4cf7550e523da99000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/001511866762042096a0dcdc92048c1941214f4f5678749000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/001511866762041974a7c8929d04943a4cf7550e523da99000" target="_blank">证券交易系统设计与开发</a></h3>
            <p>本文讨论如何设计并实现一个证券交易系统。</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/00151282477270429b51f0649c847c2b4ddc4de8d351d8e000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/00151282477270499b04286fe414cb1b0932578ed108b92000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/00151282477270429b51f0649c847c2b4ddc4de8d351d8e000" target="_blank">深度解读区块链撸猫</a></h3>
            <p>深度解读区块链撸猫游戏运行原理。</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/00151054582348974482c20f7d8431ead5bc32b30354705000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/001510545823491498ae069012749f9b5be644e8c5f675f000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/00151054582348974482c20f7d8431ead5bc32b30354705000" target="_blank">Spring主从数据库的配置和动态数据源切换原理</a></h3>
            <p>本文讲述如何在Spring应用程序中实现主从数据库的配置和动态数据源切换。</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/00151045553343934ba3bb4ed684623b1bf00488231d88d000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/00151045553344099d9368ac6604e81ac1c4ab8bbc70ad3000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/00151045553343934ba3bb4ed684623b1bf00488231d88d000" target="_blank">使用jQuery实现图片懒加载原理</a></h3>
            <p>本文介绍如何使用jQuery实现图片懒加载：即显示时即时加载。</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/001509844125769eafbb65df0a04430a2d010a24a945bfa000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/001509844125770cb3ed15aea6b4ea49a99268bc40fd5c9000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/001509844125769eafbb65df0a04430a2d010a24a945bfa000" target="_blank">使用Nginx过滤网络爬虫</a></h3>
            <p>本文讲述如何使用Nginx根据User-Agent过滤网络爬虫。</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/001496544318690aa4a6b0ecc6e42358a5b57ce5a84e65e000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/0014965443173530504358d47c34a76a30a4993c3609b2e000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/001496544318690aa4a6b0ecc6e42358a5b57ce5a84e65e000" target="_blank">数字货币与区块链原理</a></h3>
            <p>自08年诞生的第一种数字货币——比特币，从一万个币换一个披萨到一个币单价近两万，比特币8年暴涨百万倍，其背后的区块链技术更是被各大金融巨头竞相研究。到底什么是数字货币？没有中心节点的数字货币却号称不可伪造，数字货币和区块链究竟是如何运行的？</p>
        </div>
    </div>
    
    <div class="uk-margin uk-clearfix">
        <div style="float:left">
            <a href="/article/001493522711597674607c7f4f346628a76145477e2ff82000" target="_blank"><img src="https://cdn.liaoxuefeng.com/cdn/files/attachments/0014935227110056b3f284f14814545ba5447ee5ac33b0d000/s" /></a>
        </div>
        <div class="uk-margin" style="margin-left:180px;">
            <h3><a href="/article/001493522711597674607c7f4f346628a76145477e2ff82000" target="_blank">Java的Fork/Join任务，你写对了吗？</a></h3>
            <p>Java的Fork/Join任务，你写对了吗？</p>
        </div>
    </div>
    

    <div class="uk-grid">
        <div class="x-index-bottom uk-width-1-1">
            <!-- index_bottom -->
        </div>
    </div>

    <div id="x-sponsor-a" class="uk-clearfix"><!-- sponsor A --></div>


                        </div>
                        <div class="x-content-bottom">
                            <!-- content_bottom -->
                        </div>
                    </div>
                </div>

                <div class="x-body-bottom uk-width-1-1">
                    <!-- body_bottom -->
                </div>
            </div>
        </div>
    </div>



    <div id="footer">
        <div class="x-footer uk-container x-container">
            <hr>
            <div class="uk-grid">
                <div class="x-footer-copyright uk-width-small-1-2 uk-width-medium-1-3">
                    <p>
                        <a href="/">廖雪峰的官方网站</a>&copy;2017 ve6763a1
                        <br>
                        Powered by <a href="https://github.com/michaelliao/itranswarp.js" target="_blank">iTranswarp.js</a>
                    </p>
                </div>
                <div class="uk-width-small-1-2 uk-width-medium-1-3 x-hidden-tiny">
                    <a href="/feed" target="_blank" class="uk-icon-button uk-icon-rss" data-uk-tooltip title="Subscribe the RSS"></a>
                    <a href="https://github.com/michaelliao/itranswarp.js" target="_blank" class="uk-icon-button uk-icon-github" data-uk-tooltip title="View source code on GitHub"></a>
                    <a href="https://twitter.com/liaoxuefeng" target="_blank" class="uk-icon-button uk-icon-twitter" data-uk-tooltip title="Follow author on Twitter"></a>
                    <a href="https://www.weibo.com/liaoxuefeng" target="_blank" class="uk-icon-button uk-icon-weibo uk-visible-large uk-hidden-medium" data-uk-tooltip title="Follow author on Weibo"></a>
                </div>
                <div class="uk-width-medium-1-3 uk-hidden-small">
                    <p>
                        <a href="https://github.com/michaelliao/itranswarp.js/issues" target="_blank">意见反馈</a>
                        <br>
                        <a href="https://github.com/michaelliao/itranswarp.js/blob/master/LICENSE" target="_blank">使用许可</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-signin" class="uk-modal">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close uk-close"></a>
            <div class="uk-modal-header">
                <h2>Please Sign In</h2>
            </div>
            <p>You can sign in directly without register:</p>
            
            <h3><a href="/auth/from/weibo"><i class="uk-icon-weibo"></i> 使用新浪微博登录</a></h3>
            
            <p>You need authorize to allow connect to your social passport for the first time.</p>
        </div>
    </div>

    <div id="oldBrowser">
        <div class="uk-alert uk-alert-danger" data-uk-alert>
            <a href="#0" class="uk-alert-close uk-close"></a>
            <p>
                WARNING: You are using an old browser that does not support HTML5.
                Please choose a modern browser (<a href="https://www.google.com/chrome" target="_blank">Chrome</a> / <a href="https://www.microsoft.com/windows/microsoft-edge" target="_blank">Microsoft Edge</a> / <a href="https://www.mozilla.org/firefox/" target="_blank">Firefox</a> / <a href="https://www.apple.com/safari/" target="_blank">Sarafi</a>) to get a good experience.
            </p>
        </div>
    </div>
</body>
</html>
