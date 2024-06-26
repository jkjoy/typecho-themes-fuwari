<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeInit($archive)
{
 Helper::options()->commentsAntiSpam = false; 
}
?>
<link rel='stylesheet' href='<?php echo Helper::options()->themeUrl . '/_astro/option.css'; ?>'>
<?php
function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'));
    $form->addInput($logoUrl);
    $icoUrl = new Typecho_Widget_Helper_Form_Element_Text('icoUrl', NULL, NULL, _t('站点 Favicon 地址'));
    $form->addInput($icoUrl);
    $avaUrl = new Typecho_Widget_Helper_Form_Element_Text('avaUrl', NULL, NULL, _t('头像链接地址'));
    $form->addInput($avaUrl);
    $telegramurl = new Typecho_Widget_Helper_Form_Element_Text('steamurl', NULL, NULL, _t('steam'), _t('会在个人信息显示'));
    $form->addInput($telegramurl);
    $githuburl = new Typecho_Widget_Helper_Form_Element_Text('githuburl', NULL, NULL, _t('github'), _t('会在个人信息显示'));
    $form->addInput($githuburl);
    $twitterurl = new Typecho_Widget_Helper_Form_Element_Text('twitterurl', NULL, NULL, _t('twitter'), _t('会在个人信息显示'));
    $form->addInput($twitterurl);
}
// 获取文章第一张图片
function img_postthumb($cid) {
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('table.contents.text')
        ->from('table.contents')
        ->where('table.contents.cid=?', $cid)
        ->order('table.contents.cid', Typecho_Db::SORT_ASC)
        ->limit(1));
    // 检查是否获取到结果
    if (!$rs) {
        return "";
    }
    preg_match_all("/https?:\/\/[^\s]*.(png|jpeg|jpg|gif|bmp|webp)/", $rs['text'], $thumbUrl);  //通过正则式获取图片地址
    // 检查是否匹配到图片URL
    if (count($thumbUrl[0]) > 0) {
        return $thumbUrl[0][0];  // 返回第一张图片的URL
    } else {
        return "";  // 没有匹配到图片URL，返回空字符串
    }
}
//获取文章字数
function getWordCount($text) {
    // 移除HTML标签
    $text = strip_tags($text);
    // 移除多余的空格
    $text = trim($text);
    // 计算字数
    $wordCount = mb_strlen($text, 'UTF-8');
    return $wordCount;
}
function getReadingTime($text, $wordsPerMinute = 500) {
    // 移除HTML标签
    $text = strip_tags($text);
    // 移除多余的空格
    $text = trim($text);
    // 计算字数
    $wordCount = mb_strlen($text, 'UTF-8');
    // 计算阅读时间
    $readingTime = ceil($wordCount / $wordsPerMinute);
    return $readingTime;
}
//回复加上@
function getPermalinkFromCoid($coid) {
	$db = Typecho_Db::get();
	$row = $db->fetchRow($db->select('author')->from('table.comments')->where('coid = ? AND status = ?', $coid, 'approved'));
	if (empty($row)) return '';
	return '<a href="#comment-'.$coid.'" style="text-decoration: none;">@'.$row['author'].'</a>';
}
