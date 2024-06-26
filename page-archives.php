<?php 
/**
 * 文章归档
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html class="transition bg-[var(--page-bg)] md:text-[16px] text-[14px]" style=--configHue:250>
<head>
<?php $this->need('h.php'); ?>
</head>
<body class="transition min-h-screen" data-astro-cid-sckkx6r4 style=--configHue:250>
    <div id=config-carrier data-hue=250></div>
    <div>
        <div class="absolute w-full" id=banner-wrapper style=--configHue:250 data-astro-cid-sckkx6r4>
            <div class="overflow-hidden relative h-full hidden object-center object-cover">
                <div class="transition absolute pointer-events-none bg-opacity-50 dark:bg-black/10 inset-0"></div><img
                    alt="Banner image of the blog" class="object-cover h-full w-full" decoding=async height=1369
                    loading=lazy src=/_astro/demo-banner.WD4SMgz__nlqjd.webp style=object-position:center width=1920>
            </div>
        </div>
        <div
            class="relative mx-auto gap-4 grid grid-cols-[17.5rem_auto] grid-rows-[auto_auto_1fr_auto] lg:grid-rows-[auto_1fr_auto] max-w-[var(--page-width)] md:px-4 min-h-screen px-0">
            <?php $this->need('nav.php'); ?>
            <?php $this->need('s.php'); ?>
            <div class="overflow-hidden onload-animation col-span-2 lg:col-span-1 row-end-3 row-start-2" id=content-wrapper>
                <main class=transition-fade id=swup>
                <div class="card-base px-8 py-6" data-astro-cid-up4uz3l3>
<?php
$stat = Typecho_Widget::widget('Widget_Stat');
Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize=' . $stat->publishedPostsNum)->to($archives);

$year = 0;
$mon = 0;
$output = '<div data-astro-cid-up4uz3l3>'; // Start archives container

$yearlyPosts = array();

// 计算每年的文章数
while ($archives->next()) {
    $year_tmp = date('Y', $archives->created);
    if (!isset($yearlyPosts[$year_tmp])) {
        $yearlyPosts[$year_tmp] = 0;
    }
    $yearlyPosts[$year_tmp]++;
}

// 重置游标
$archives->rewind();

while ($archives->next()) {
    $year_tmp = date('Y', $archives->created);
    $mon_tmp = date('m', $archives->created);

    // 获取文章标签
    $tagsString = '';
    $db = Typecho_Db::get();
    $rows = $db->fetchAll($db->select()->from('table.metas')
        ->join('table.relationships', 'table.metas.mid = table.relationships.mid')
        ->where('table.relationships.cid = ?', $archives->cid)
        ->where('table.metas.type = ?', 'tag'));

    foreach ($rows as $row) {
        $tagsString .= '#' . $row['name'] . ' ';
    }
    $tagsString = trim($tagsString);

    // 检查是否需要新的年份标题
    if ($year != $year_tmp) {
        if ($year > 0) {
            $output .= '</ul>'; // 结束上一个年份的月份列表和包裹的div
        }

        $year = $year_tmp;
        $mon = 0; // 重置月份

        $output .= '<div class="flex items-center flex-row h-[3.75rem] w-full" data-astro-cid-up4uz3l3>
                        <div class="transition font-bold md:w-[10%] text-2xl text-75 text-right w-[15%]"
                            data-astro-cid-up4uz3l3>' . $year . '</div>
                        <div class="w-[15%] md:w-[10%]" data-astro-cid-up4uz3l3>
                            <div class="mx-auto outline z-50 -outline-offset-[2px] bg-none h-3 outline-3 outline-[var(--primary)] rounded-full w-3"
                                data-astro-cid-up4uz3l3></div>
                        </div>
                        <div class="transition text-50 md:w-[80%] text-left w-[70%]" data-astro-cid-up4uz3l3>' . $yearlyPosts[$year] . ' posts</div>
                    </div>'; // 开始新的年份div
    }
    // 输出文章项
    $output .= '<a href="' . $archives->permalink . '" aria-label="' . $archives->title . '" class="rounded-lg btn-plain w-full block group h-10 hover:text-[initial]" data-astro-cid-up4uz3l3>';
    $output .= '<div class="flex items-center h-full flex-row justify-start" data-astro-cid-up4uz3l3>';
    $output .= '<div class="transition text-sm text-50 md:w-[10%] text-right w-[15%]" data-astro-cid-up4uz3l3>' . date('m-d', $archives->created) . '</div>';
    $output .= '<div class="flex items-center h-full dash-line md:w-[10%] relative w-[15%]" data-astro-cid-up4uz3l3>';
    $output .= '<div class="transition-all bg-[oklch(0.5_0.05_var(--hue))] group-active:outline-[var(--btn-plain-bg-active)] group-hover:bg-[var(--primary)] group-hover:h-5 group-hover:outline-[var(--btn-plain-bg-hover)] h-1 mx-auto outline outline-4 outline-[var(--card-bg)] rounded w-1 z-50" data-astro-cid-up4uz3l3></div>';
    $output .= '</div>';
    $output .= '<div class="overflow-hidden overflow-ellipsis text-left whitespace-nowrap font-bold group-hover:text-[var(--primary)] group-hover:translate-x-1 md:max-w-[65%] md:w-[65%] pr-8 text-75 transition-all w-[70%]" data-astro-cid-up4uz3l3>' . $archives->title . '</div>';
    $output .= '<div class="transition text-sm hidden md:block md:w-[15%] overflow-ellipsis overflow-hidden text-30 text-left whitespace-nowrap" data-astro-cid-up4uz3l3>' . $tagsString . '</div>';
    $output .= '</div>';
    $output .= '</a>';
}

// 循环后，确保所有标签都已经关闭
if ($mon > 0) {
    $output .= '</ul>'; // 结束最后一个月份的列表
}
if ($year > 0) {
    $output .= '</div>'; // 结束最后一个年份的div
}
$output .= '</div>'; // End archives container
echo $output;
?>
       </div>
                   
 </main>
            </div>
            <?php $this->need('f.php'); ?>
  </div>
    </div>
</body>

</html>
