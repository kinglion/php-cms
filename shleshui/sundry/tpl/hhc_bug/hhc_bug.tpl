<html>

<!--***************************************
 * hhc_bug    hhc_bug模板
 ******************************************
 * $Website = 'wwww.ithhc.cn';
 ******************************************
 * $Author = '郝海川';
 ******************************************
 * $DateTime = '2014-06-23 09:52';
 ***************************************-->

    <head>
        <script type="text/javascript" src="./sundry/static_file/js/jquery.js"></script>
        <style type="text/css">
            .hhc_bug_body,.hhc_bug_main,.hhc_bug_body ul,.hhc_bug_body ol,.hhc_bug_body li{margin:0;padding:0;border:0;}
            .hhc_bug_body li{list-style:none;}
            .hhc_bug_main{width:100%;height:260px;position:fixed;bottom:-225px;left:0px;}
            .hhc_bug_top{width:220px;margin:0 auto;height:30px;line-height:30px;border-width: 5px 1px 0 1px;
                border-color:#444444 #CCCCCC #CCCCCC #CCCCCC;
                border-style:solid;text-align:center;
                background:#FFFFFF;
            }
            .hhc_bug_medium{background:#FFFFFF;box-shadow:0px 0px 10px #444444;height:230px;border-top: 1px solid #AAAAAA;}
            .hhc_bug_medium_top{background:#DFDFDF;
                border-bottom:1px solid #AAAAAA;height:21px;width:100%;
                }
            .hhc_bug_body ul li{font-size:13px;float:left;
                width:60px;text-align:center;padding:4px 0;
                font-family:"宋体";}
            .hhc_bug_top,.hhc_bug_top span{font-family:"宋体"}
            .hhc_bug_top span{font-weight:bold;}
            .hhc_bug_body li,.hhc_bug_top{cursor: default;}
            .hhc_bug_body ol li{font-size:13px;font-family:"宋体";margin-bottom:3px;}
            .hhc_bug_body ol,.hhc_bug_medium{overflow:auto;}
            .hhc_bug_body_li1{background:url('./sundry/tpl/hhc_bug/img/debg.jpg') no-repeat;}
            *html{background-image:url(about:blank);background-attachment:fixed;}
        </style>
        <!--[if lt IE 7]>
        <style type="text/css">
            .hhc_bug_main{_position:absolute;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));}
        </style>
        <![endif]-->
        <script type="text/javascript">
            $(function(){
                $('.hhc_bug_body ul li').click(function(){
                    var index = $(this).index();
                    $('.hhc_bug_body ul li').removeClass('hhc_bug_body_li1');
                    $(this).addClass('hhc_bug_body_li1');
                    $('.hhc_bug_body ol').hide();
                    $('.hhc_bug_body ol:eq('+index+')').show();
                })
                $('.hhc_bug_top').click(function(){
                        hhc_bug_start()
                })
                $(document).keyup(function(e){
                var key =  e.which;
                    if(key==32)
                        hhc_bug_start()
                });
            })
            function hhc_bug_start(){
                 if($('.hhc_bug_main').css('bottom').indexOf('-')==false){
                        $('.hhc_bug_main').animate({'bottom':'0px'});
                    }else{
                        $('.hhc_bug_main').animate({'bottom':'-225px'});
                    }
            }
        </script>
    </head>
    <body class=""><div class="hhc_bug_body">
        <div class="hhc_bug_main">
            <div class="hhc_bug_top"><span>空格(Space)</span>&nbsp;&nbsp;&nbsp;hhc_bug</div>
            <div class="hhc_bug_medium">
                <div class="hhc_bug_medium_top">
                    <ul>
                        <li class="hhc_bug_body_li1">系统信息</li>
                        <li>sql信息</li>
                        <li>其他</li>
                    <div style="clear:both;"></div>
                    </ul>
                </div>
                    <div style="clear:both;"></div>
                    <div style="margin-top:5px;"></div>
                    <ol class="hhc_bug_body_ol1">
                        <li><?php echo self::$data['0']['0']; ?></li>
                        <li id="hhc_onload_time">xx</li>
                        <?php
                        unset(self::$data['0']['0']);
                         foreach(self::$data['0'] as $v){ ?>
                            <li><?php echo $v; ?></li>
                        <?php } ?>
                    </ol>
                    <ol style="display:none;" class="hhc_bug_body_ol2">
                        <?php foreach(self::$data['1'] as $v){ ?>
                            <li><?php echo $v; ?></li>
                        <?php } ?>
                    </ol>
                    <ol style="display:none;" class="hhc_bug_body_ol3">
                        <?php foreach(self::$data['2'] as $v){ ?>
                            <li><?php echo $v; ?></li>
                        <?php } ?>
                    </ol>
            </div>
        </div>
    </div></body>
</html>
