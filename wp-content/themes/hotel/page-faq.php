
<?php get_header();?>

<!-- subheader begin -->
<div id="subheader" class="subheaderfaq" style="background:url(<?php echo get_field('sub-faq','option');?>) top center no-repeat; background-size: cover;">
    <h1>FAQ</h1>
    <h3>QUESTIONS</h3>
</div>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="faq-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="question-box">
                    <div class="col01">

                        <?php
                        $i = 0;
                        $args_faq01 = array(
                            'post_type' 	 => 'faq',
                            'order'             => 'ASC',
                            'posts_per_page' => -1
                        );
                        $queryfaq01 = query_posts($args_faq01);
                        foreach ($queryfaq01 as $faq01) {
                            $i++;
                            if($i%2 != 0){
                        ?>
                        <div class="question-row">
                            <div class="question-head">
                                <div class="plus-close"></div>
                                <div class="question-new"><i><img src="img/faq/plus.png"/></i> <div class="q-text"><span><?php echo $faq01->post_title?></span></div><div class="clear"></div></div>
                                <div class="answer-box">
                                    <?php echo wpautop($faq01->post_content);?>
                                </div>
                            </div>
                            <div class="small-border"></div>
                        </div>
                        <?php } }?>

                    </div>

                    <div class="col01">
                        <?php
                        $i = 0;
                        $args_faq01 = array(
                            'post_type' 	 => 'faq',
                            'order'             => 'ASC',
                            'posts_per_page' => -1
                        );
                        $queryfaq01 = query_posts($args_faq01);
                        foreach ($queryfaq01 as $faq01) {
                            $i++;
                            if($i%2 == 0){
                                ?>
                                <div class="question-row">
                                    <div class="question-head">
                                        <div class="plus-close"></div>
                                        <div class="question-new"><i><img src="img/faq/plus.png"/></i> <div class="q-text"><span><?php echo $faq01->post_title?></span></div><div class="clear"></div></div>
                                        <div class="answer-box">
                                            <?php echo wpautop($faq01->post_content);?>
                                        </div>
                                    </div>
                                    <div class="small-border"></div>
                                </div>
                            <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content close -->

<?php get_footer();?>

<script>
    jQuery(document).ready(function(){
        jQuery('.question-box .question-new').on('click',function(){
            jQuery(this).addClass('active');
            jQuery(this).parent().find('.plus-close').show();
            jQuery(this).parent().find('.answer-box').fadeIn(300);
       });
        jQuery('.question-box .plus-close').click(function(){
            jQuery(this).parent().find('.question-new').removeClass('active');
            jQuery(this).hide();
            jQuery(this).parent().find('.answer-box').hide();
        });
    });
</script>