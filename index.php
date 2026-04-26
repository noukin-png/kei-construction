<?php get_header(); ?>

<style>
    .error {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
    .error-inner {
        text-align: center;
    }
    .error-message {
        margin-bottom: 2rem;
        line-height: 2;
    }
</style>


<div class="error">
    <div class="error-inner">
        <p class="error-message">ページが見つかりませんでした。<br>
        URLをご確認いただくか、<br class="sp">トップページからお探しください。
        </p>
    </div>
</div>

<?php get_footer(); ?>
