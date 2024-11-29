<?php get_header(); ?>
<main>
    <div class="l-404 p-404">
        <h2 class="p-404__title">404 Not Found</h2>
        <p class="p-404__text">
            お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にトップページに自動移動します。
        </p>
    </div>
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
</main>
<?php get_footer(); ?>
<a href="<?php echo esc_url( home_url( 'coconuts2.github.io' ) ); ?>">自動移動しない場合はクリック</a>
