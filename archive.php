<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="container" id="main-archive" style="display: none;">
    <div class="post-content">
        <h4 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('Category: %s'),
            'search'    =>  _t('Search: %s'),
            'tag'       =>  _t('Tag: %s'),
            'author'    =>  _t('Author: %s')
        ), '', ''); ?></h4>
        <ul>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post">
                <ul><li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y/m/d'); ?></time> - <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li></ul>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post" style="text-align: center;">
                <h1 class="post-title"><?php _e(',,Ծ‸Ծ,,'); ?></h1>
                <h6>表示没有写过这内容唉...</h6>
            </article>
        <?php endif; ?>
        </ul>
    </div>

  <div id="pagenav" class="text-center" style="display: none;">
    <ul class="pager">
      <li class="previous">
        <?php $this->pageLink('<span><i class="fui-arrow-left"></i></span>','next'); ?>
      </li>

      <li class="next">
        <?php $this->pageLink('<span><i class="fui-arrow-right"></i></span>'); ?>
      </li>
    </ul>
  </div>
    </div>

	<?php $this->need('footer.php'); ?>