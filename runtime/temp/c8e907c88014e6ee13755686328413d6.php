<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:35:"template/zuoyou/html/label/new.html";i:1774360482;s:76:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/style.html";i:1774360483;s:77:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/header.html";i:1774360484;s:75:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/list.html";i:1774360483;s:77:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/footer.html";i:1774360484;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="content-language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>最新更新 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="最新更新,<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
    <meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('user/index'); ?>" />
    <meta itemprop="name" property="og:title" content="最新更新 - <?php echo $maccms['site_name']; ?>" />
    <meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'logo.png')); ?>" />
    <meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
    <script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script>var maccms={"path":"/video","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<link href="<?php echo $maccms['path_tpl']; ?>style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
    <!-- 左侧导航 -->
    <aside class="sidebar">
        <div class="logo">
            <a href="<?php echo $maccms['path']; ?>">
               <img src="<?php echo $maccms['path_tpl']; ?>logo.png" alt="<?php echo $maccms['site_name']; ?>" />
            </a>
        </div>
        <ul class="nav-list">
            <li class="nav-item"><a href="<?php echo $maccms['path']; ?>"<?php if($maccms['aid'] == 1): ?> class="active"<?php endif; ?>><i class="fas fa-home"></i> 首页</a></li>
            <?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li class="nav-item"><a href="<?php echo mac_url_type($vo); ?>"<?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?> class="active"<?php endif; ?>><i class="fas <?php if(($vo['type_id'] == 1)): ?>fa-film<?php elseif($vo['type_id'] == 2): ?>fa-film<?php elseif($vo['type_id'] == 3): ?>fa-tv<?php elseif($vo['type_id'] == 4): ?>fa-video<?php elseif($vo['type_id'] == 5): ?>fa-music<?php endif; ?>"></i> <?php echo $vo['type_name']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </aside>
    
    <!-- 右侧内容 -->
    <main class="main-content">
        <!-- 顶部搜索和功能区 -->
        <div class="top-bar">
            <div class="search-container">
                <form class="search-form" id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onsubmit="return qrsearch();">
                    <input type="text" id="wd" name="wd"  value="<?php echo $param['wd']; ?>" placeholder="请输入内容..."  autocomplete="off" class="search-input">
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="right-controls">
                <a href="<?php echo mac_url('label/rank'); ?>" class="rank-link"><i class="fas fa-chart-line"></i> 排行榜</a>
                <a href="<?php echo mac_url('label/new'); ?>" class="rank-link"><i class="fas fa-clock"></i> 最新更新</a>
                <a href="tencent://message/?uin=<?php echo $maccms['site_qq']; ?>&Site=&Menu=yes" class="service-link"><i class="fas fa-headphones"></i> 客服</a>
            </div>
        </div>
    
    <!-- 影视列表 -->
  	<section>
        <h2 class="section-title">最新更新</h2>
    	 <div class="movie-list">
    	<?php $__TAG__ = '{"num":"40","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    	<div class="movie-item">
    <div class="movie-poster">
        <a href="<?php echo mac_url_vod_play($vo); ?>">
            <img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
            <span class="movie-rating"><?php echo $vo['vod_score']; ?></span>
        </a>
    </div>
    <div class="movie-info">
        <div class="movie-title"><a href="<?php echo mac_url_vod_play($vo); ?>"><?php echo $vo['vod_name']; ?></a></div>
        <div class="movie-meta">
            <span><?php echo $vo['vod_area']; ?></span>
            <span><?php echo $vo['vod_director']; ?></span>
        </div>
    </div>
</div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </section>

    
   <!-- 版权信息 -->
<footer class="footer">
    <p>
    <a href="<?php echo mac_url('rss/index'); ?>" target="_blank">RSS订阅</a> | 
    <a href="<?php echo mac_url('rss/baidu'); ?>" target="_blank">百度蜘蛛</a> | 
    <a href="<?php echo mac_url('rss/google'); ?>" target="_blank">谷歌地图</a> | 
    <a href="<?php echo mac_url('rss/sm'); ?>" target="_blank">神马爬虫</a> | 
    <a href="<?php echo mac_url('rss/sogou'); ?>" target="_blank">搜狗蜘蛛</a> | 
    <a href="<?php echo mac_url('rss/so'); ?>" target="_blank">奇虎地图</a> | 
    <a href="<?php echo mac_url('rss/bing'); ?>" target="_blank">必应爬虫</a>
    </p>
    <p>&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php echo $maccms['site_url']; ?>&nbsp;&nbsp;by&nbsp;<a href="<?php echo $maccms['site_url']; ?>" target="_blank"><?php echo $maccms['site_name']; ?></a></p>
    <p>本站内容均来自互联网公开渠道，仅供学习交流使用，如有侵权请联系删除</p>
</footer>
</body>
</html>
