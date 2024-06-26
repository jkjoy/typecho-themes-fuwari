<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
  <div class="card-base px-8 py-6" data-astro-cid-up4uz3l3>          
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comments-img">
            <?php $comments->gravatar('48', ''); ?>
        </div>
        <div class="comment-main">
            <div class="comment-meta">
                <div class="flex items-center">
                    <span class="comment-author"><?php $comments->author(); ?></span> &nbsp;&nbsp;&nbsp; 
                    <time class="text-sm text-50 font-medium"><?php $comments->date("m月d日"); ?></time>
                </div>
                <div class="comment-meta-content">
                    <?php if ($comments->parent) {echo getPermalinkFromCoid($comments->parent);}?>
                    <?php $comments->content(); ?>
                    <span class="onload-animation mb-6 custom-md dark:prose-invert markdown-content max-w-none prose prose-base" data-astro-cid-qtyrxm4s>&nbsp;<?php $comments->reply("RE"); ?>&nbsp;</span>
                </div> 
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>
<div id="comments" class="post-comments">
<?php $this->comments()->to($comments); ?>
    
    <?php if($this->allow('comment')): ?>
		<div id="<?php $this->respondId(); ?>" class="respond">
        <div class="onload-animation mb-6 custom-md dark:prose-invert markdown-content max-w-none prose prose-base">
        <?php $comments->cancelReply(); ?>
        </div>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p class="transition font-bold before:absolute before:bg-[var(--primary)] before:rounded-md before:w-1 before:h-4 before:left-[-16px] before:top-[5.5px] dark:text-neutral-100 mb-2 ml-8 mt-4 relative text-lg text-neutral-900"><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
                <div class="comments-info-box">
                    <input type="text" name="author" id="author" class="form-control comments-user" placeholder="称呼,必填项">
                    <input type="text" name="mail" id="mail" class="form-control comments-mail" placeholder="邮箱,必填项">
                    <input type="text" name="url" id="url" class="form-control comments-site" placeholder="网站,可不填">
                </div>
				<?php endif; ?>	
            <div class="onload-animation mb-6 custom-md dark:prose-invert markdown-content max-w-none prose prose-base">
                <textarea class="form-control" rows="6" name="text" id="textarea" placeholder="文明发言"></textarea>
            </div>
            <div class="comments-submit ">
                <button id="from_submit" type="submit" ><?php _e('提交'); ?></button>
            </div>
        </form>
		<br><br>
	    <?php if ($comments->have()): ?>
            <div class="transition font-bold before:absolute before:bg-[var(--primary)] before:rounded-md before:w-1 before:h-4 before:left-[-16px] before:top-[5.5px] dark:text-neutral-100 mb-2 ml-8 mt-4 relative text-lg text-neutral-900"
            style="--collapsedHeight:7.5rem"  ><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></div>
		<br><div class="onload-animation mb-6 custom-md dark:prose-invert markdown-content max-w-none prose prose-base"></div>
    <?php $comments->listComments(); ?>
	<br>
    <?php
            $comments->pageNav(
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z" fill="var(--main)"></path></svg>',
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z" fill="var(--main)"></path></svg>',
                1,
                '...',
                array(
                    'wrapTag' => 'div',
                    'wrapClass' => 'pagination_page',
                    'itemTag' => '',
                    'textTag' => 'a',
                    'currentClass' => 'active',
                    'prevClass' => 'prev',
                    'nextClass' => 'next'
                )
            );
        ?>
    </div>
	<?php endif; ?>
    <?php else: ?>
    <h3 style="text-align:center"><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
</div>
      
 
 
<style>
/* 分页 */
.pagination_page{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: var(--margin);
    gap: 10px;
}
.pagination_page li.active a {
    background: var(--theme);
    color: #fff;
    font-weight: 500;
}
.pagination_page a{
    display: flex;
    padding: 12px;
    font-size: 22px;
    width: 40px;
    height: 40px;
    background: var(--background);
    border-radius: 50%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: 0.2s;
    -webkit-transition: 0.2s;
    justify-content: center;
    align-items: center;
    letter-spacing: 0;
}
.pagination_page span.next{
    cursor: pointer;
}
.pagination_page li.active a:hover{
    cursor: not-allowed;
}
/* 分页 */	
/*评论模板开始*/
.post-comments{
	padding-top: 50px;
}
.post-comments-btn{
	display: block;
	width: 100%;
	padding: 10px 0;
	margin-bottom: 15px;
	text-align: center;
	font-size: 20px;
	font-weight: 200;
	border: 1px solid #eee;
	border-radius: 180px;
}
.post-comments-script{
	/*display: none;*/
}
/*TYPECHO评论样式开始*/
#comment-form{

}
.comments-info-box{
	width: 100%;
    display: flex; /* 添加这一行 */
    justify-content: space-between;
}
.comments-info-box>input{
	width: 31.5%;
	padding: 6px 4px;
	margin: 0px 1.3px;
	background: none;
	border: 1px solid #eee;
	border-radius: 4px;
	font-size: 9pt;
	color: #ccc;
}
input{
	outline-color: #eeeeee;
}
textarea{
	outline-color: #eee;
}
.comments-text{
	padding-top: 10px;
	width: 100%;
}
.comments-text>textarea{
	display: inline-block;
	width: 100%;
	margin: 0;
	padding: 6px;
	resize: none;
	background: none;
	border: 1px solid #eee;
	border-radius: 4px;
}
.comments-text>textarea,
.comments-submit>button{
	font-size: 20px;
	color: #999;
}   
.comments-submit{
	width: 100%;
	margin-top: 10px;
}
.comments-submit>button{
	width: 100%;
	padding: 8px;
	background: #fafafa;
	border: 1px solid #eee;
	border-radius: 4px;
	outline: none;
}
/*评论列表*/
.comments-number{
	border-bottom: 1px dashed #eee;
	color: #000000;
	font-size: 24px;
	padding-bottom: 2px;

}
.response{
	display: inline-block;
	padding: 8px 0;
	color: #666;
	font-size: 11pt;
}
.comment-list{
    list-style-type: none;
}
.comment-list>li{
	margin-bottom: 10px;
}
.comment-children{
	padding-left: 20px;
	margin-top: 8px;
}
.comment-author{
	float: left;
}
.comments-img{
	width: 54px;
	height: 54px;
	display: block;
	overflow: hidden;
	border-radius: 6px;
	border: 2px solid #eee;
	float: left;
}
.comments-img>img{
	width: 100%;
	height: 100%;
}
.comment-main{
	float: left;
	padding-left: 16px;
}
.comment-meta{
	padding: 0;
	font-size: 16px;
	color: #eee;
}
.comment-meta-info{

}
.comment-meta-info>span>a,
.comment-author{
	font-size: 20px;
	color: #555;
}
.comment-meta-info>time{
	display: inline-block;
	font-size: 16px;
	color: #ccc;
	padding-left: 20px;
	padding-top: 4px;
}
.comment-meta-content{
	padding: 16px 0;
	font-size: 20px;
	color: #666;
}	
.comment-reply{
	display: inline-block;
	font-size: 12px;
	color: #666;
	margin-top: 5px;
}
/*TYPECHO评论样式结束*/    
</style>
