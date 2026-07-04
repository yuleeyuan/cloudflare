<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:34:"template/zuoyou/html/vod/type.html";i:1774360482;s:77:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/seokey.html";i:1774360483;s:76:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/style.html";i:1774360483;s:77:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/header.html";i:1774360484;s:75:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/list.html";i:1774360483;s:75:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/page.html";i:1774360482;s:77:"/www/wwwroot/www.yulee.ggff.net/video/template/zuoyou/html/public/footer.html";i:1774360484;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="content-language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <?php if($maccms['aid']==1): ?>
<title><?php echo mac_default($vfedcc['seos']['index']['title'],$maccms['site_name']); ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['index']['word'],$maccms['site_keywords']); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['index']['info'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('index/index'); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['index']['title'],$maccms['site_name']); ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['index']['info'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==4): ?>
<title>留言板 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="留言板,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('gbook/index'); ?>" />
<meta itemprop="name" property="og:title" content="留言板 - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==6): ?>
<title>个人中心 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="个人中心,<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('user/index'); ?>" />
<meta itemprop="name" property="og:title" content="个人中心 - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==11): ?>
<title><?php echo mac_filter_html(mac_default($obj['type_title'],$obj['type_name'])); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['type_key'],$obj['type_name'])); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_type($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html(mac_default($obj['type_title'],$obj['type_name'])); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==12): ?>
<title><?php echo $param['year']; ?><?php echo $param['area']; ?><?php echo $param['class']; ?><?php echo mac_filter_html($obj['type_name']); ?>_第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['type_key'],$maccms['site_keywords']); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year']],'show'); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $param['year']; ?><?php echo $param['area']; ?><?php echo mac_filter_html($obj['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==13): ?>
<title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?>_搜索结果 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?>,<?php echo $param['actor']; ?>,<?php echo $param['director']; ?>,<?php echo $param['area']; ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('vod/search',['wd'=>$param['wd']]); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['year']; ?>_搜索结果 - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==14): ?>
<title><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?>_<?php echo mac_filter_html(mac_default($vfedcc['seos']['vinfo']['title'],$obj['type_1']['type_name'])); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html(mac_default($vfedcc['seos']['vinfo']['word'],$obj['type_1']['type_name'])); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $vfedcc['seos']['vinfo']['info']; ?><?php echo $obj['vod_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['vod_name']); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?>_<?php echo mac_filter_html(mac_default($vfedcc['seos']['vinfo']['title'],$obj['type_1']['type_name'])); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="videolist" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['vod_pic']); ?>" />
<meta itemprop="class" property="og:video:class" content="<?php echo mac_filter_html($obj['type']['type_name']); ?>" />
<meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
<meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
<meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
<meta itemprop="description" property="og:description" content="<?php echo $vfedcc['seos']['vinfo']['info']; ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==15): ?>
<title><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo mac_default($vfedcc['seos']['vplay']['title'],'在线播放'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['vplay']['word'],'在线播放'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html($obj['type_1']['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['vplay']['info'],'在线播放'); ?><?php echo $obj['vod_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['vod_name']); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo mac_default($vfedcc['seos']['vplay']['title'],'在线播放'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="video" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['vod_pic']); ?>" />
<meta itemprop="class" property="og:video:class" content="<?php echo mac_filter_html($obj['type']['type_name']); ?>" />
<meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
<meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
<meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['vplay']['info'],'在线播放'); ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==16): ?>
<title><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?>_<?php echo $obj['vod_down_list'][$param['sid']]['player_info']['show']; ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?><?php echo mac_filter_html($obj['type_1']['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html($obj['type_1']['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $obj['vod_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['vod_name']); ?>_<?php echo $obj['vod_down_list'][$param['sid']]['player_info']['show']; ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?><?php echo mac_filter_html($obj['type_1']['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="download" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['vod_pic']); ?>" />
<meta itemprop="class" property="og:video:class" content="<?php echo mac_filter_html($obj['type']['type_name']); ?>" />
<meta itemprop="actor" property="og:video:actor" content="<?php echo $obj['vod_actor']; ?>" />
<meta itemprop="uploadDate" property="og:video:date" content="<?php echo date('Y-m-d',$obj['vod_time']); ?>" />
<meta itemprop="contentLocation" property="og:video:area" content="<?php echo $obj['vod_area']; ?>" />
<meta itemprop="description" property="og:description" content="<?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==20): ?>
<title><?php echo mac_default($vfedcc['seos']['artic']['title'],'资讯'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['artic']['word'],'资讯,'.$maccms['site_keywords']); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['artic']['info'],'24小时滚动报道国内、国际及社会新闻。每日编发新闻数以万计。'); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url('art/index'); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['artic']['title'],'资讯'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['artic']['info'],'24小时滚动报道国内、国际及社会新闻。每日编发新闻数以万计。'); ?>" />
<?php elseif($maccms['aid']==21): ?>
<title><?php echo mac_filter_html(mac_default($obj['type_title'],$obj['type_name'])); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['type_key'],$obj['type_name'])); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_type($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==24): ?>
<title><?php echo mac_default(mac_filter_html($obj['art_name']),'404'); ?>_<?php echo mac_default($vfedcc['seos']['rinfo']['title'],'资讯'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['art_tag'],$obj['type']['type_name'])); ?>,<?php echo mac_default($vfedcc['seos']['rinfo']['word'],'资讯'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['rinfo']['info'],'资讯'); ?><?php echo $obj['art_blurb']; ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_art_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_filter_html($obj['art_name']); ?>_<?php echo mac_default($vfedcc['seos']['rinfo']['title'],'资讯'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="type" property="og:type" content="article" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['art_pic']); ?>" />
<meta itemprop="releaseDate" property="og:release_date" content="<?php echo date('Y-m-d',$obj['art_time']); ?>"/>
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['rinfo']['info'],'资讯'); ?><?php echo $obj['art_blurb']; ?>" />
<?php elseif($maccms['aid']==30): ?>
<title><?php echo mac_default($vfedcc['seos']['topic']['title'],'专题首页'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['topic']['word'],'电影专题,电视剧专题,动漫专题,综艺专题'); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['topic']['info'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_topic_index(); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['topic']['title'],'专题首页'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['topic']['info'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==34): ?>
<title><?php echo mac_default($obj['topic_title'],$obj['topic_name']); ?>_<?php echo mac_default($vfedcc['seos']['tinfo']['title'],'专题'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['topic_key'],$obj['topic_name']); ?>,<?php echo mac_default($vfedcc['seos']['tinfo']['word'],'专题'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['tinfo']['info'],'专题'); ?><?php echo mac_default($obj['topic_des'],$obj['topic_blurb']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_topic_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $obj['topic_name']; ?>_<?php echo mac_default($vfedcc['seos']['tinfo']['title'],'专题'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['topic_pic']); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['tinfo']['info'],'专题'); ?><?php echo mac_default($obj['topic_des'],$obj['topic_blurb']); ?>" />
<?php elseif($maccms['aid']==80): ?>
<title><?php echo mac_default($vfedcc['seos']['actor']['title'],'明星首页'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($vfedcc['seos']['actor']['word'],'明星娱乐,八卦新闻,明星绯闻,影视资讯,音乐资讯,八卦爆料'); ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['actor']['info'],'明星资讯网为大家提供, 明星娱乐八卦新闻, 明星绯闻,影视资讯,音乐资讯,八卦爆料, 娱乐视频等'); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_topic_index(); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo mac_default($vfedcc['seos']['actor']['title'],'明星首页'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img(mac_default($vfedcc['main']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['actor']['info'],'明星资讯网为大家提供, 明星娱乐八卦新闻, 明星绯闻,影视资讯,音乐资讯,八卦爆料, 娱乐视频等'); ?>" />
<?php elseif($maccms['aid']==84): ?>
<title><?php echo $obj['actor_name']; ?>_<?php echo mac_default($vfedcc['seos']['ainfo']['title'],'个人资料'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['actor_key'],$obj['actor_name']); ?>,<?php echo mac_default($vfedcc['seos']['ainfo']['word'],'明星'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($vfedcc['seos']['ainfo']['info'],'明星'); ?><?php echo mac_default($obj['actor_blurb'],$maccms['site_description']); ?>" />
<meta itemprop="url" property="og:url" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_actor_detail($obj); ?>" />
<meta itemprop="name" property="og:title" content="<?php echo $obj['actor_name']; ?>_<?php echo mac_default($vfedcc['seos']['ainfo']['title'],'个人资料'); ?> - <?php echo $maccms['site_name']; ?>" />
<meta itemprop="image" property="og:image" content="<?php echo $maccms['http_type']; ?><?php echo $maccms['site_url']; ?><?php echo mac_url_img($obj['actor_pic']); ?>" />
<meta itemprop="description" property="og:description" content="<?php echo mac_default($vfedcc['seos']['ainfo']['info'],'明星'); ?><?php echo mac_default($obj['actor_blurb'],$maccms['site_description']); ?>" />
<?php endif; ?>
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
    
    <?php if($obj['childids']||$obj['parent']['childids']): ?>
    <!-- 筛选条件 -->
    <div class="horizontal-menu">
        <div class="menu-items">
            <div class="menu-item"><a href="<?php echo mac_url_type($obj,[],'show'); ?>" class="active">全部</a></div>
            <?php $__TAG__ = '{"ids":"current","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <div class="menu-item"><a href="<?php echo mac_url_type($vo,[],'show'); ?>"><?php echo $vo['type_name']; ?></a></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- 影视列表 -->
    <section>
        <h2 class="section-title"><?php echo $obj['type_name']; ?></h2>
        <div class="movie-list">
            <?php $__TAG__ = '{"num":"16","paging":"yes","half":"3","pageurl":"vod\/show","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
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
    
   <?php if($__PAGING__['page_total']>1): ?>
<div class="pagination">
    <a href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" class="page-btn<?php if($__PAGING__['page_current']==1): ?> active<?php endif; ?>">首页</a>
    <a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" class="page-btn<?php if($__PAGING__['page_current']==1): ?> active<?php endif; ?>"><i class="fas fa-chevron-left"></i></a>
    <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): ?>
    <a href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" class="page-btn<?php if($__PAGING__['page_current'] == $num): ?> active<?php endif; ?>"><?php echo $num; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" class="page-btn<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> active<?php endif; ?>"><i class="fas fa-chevron-right"></i></a>
    <a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" class="page-btn<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> active<?php endif; ?>">尾页</a>	
</div>
<?php endif; ?>
    
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