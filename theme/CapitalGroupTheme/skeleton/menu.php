<div class="menu_content">
    <div id="nav" class="menu"><span>
        <ul>
            <?php get_i18n_navigation(return_page_slug(),0,99,I18N_SHOW_PAGES); ?>
        </ul></span>
    </div>
    <div id="lang" class="lang">
        <a class="ru" href="<?php echo htmlspecialchars(return_i18n_setlang_url('ru')); ?>"></a>
        <a class="en" href="<?php echo htmlspecialchars(return_i18n_setlang_url('en')); ?>"></a>
    </div>
</div>
