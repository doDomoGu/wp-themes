<?php
    get_header();

if(WP_THEME_LANG=='cn')
    $langFix = '';
else
    $langFix = '_en';

?>

<?php
    $banner_pics = [1=>[],2=>[],3=>[]];
    $pics_1 = of_get_option('index_banner_pics_1'.$langFix);
    $pics_2 = of_get_option('index_banner_pics_2'.$langFix);
    $pics_3 = of_get_option('index_banner_pics_3'.$langFix);
    $pics_4 = of_get_option('index_banner_pics_4'.$langFix);
    $pics_5 = of_get_option('index_banner_pics_5'.$langFix);
    if($pics_1)
        $banner_pics[1]['p'] = $pics_1;
    if($pics_2)
        $banner_pics[2]['p'] = $pics_2;
    if($pics_3)
        $banner_pics[3]['p'] = $pics_3;
    if($pics_4)
        $banner_pics[4]['p'] = $pics_4;
    if($pics_5)
        $banner_pics[5]['p'] = $pics_5;
    $link_1 = of_get_option('index_banner_link_1'.$langFix);
    $link_2 = of_get_option('index_banner_link_2'.$langFix);
    $link_3 = of_get_option('index_banner_link_3'.$langFix);
    $link_4 = of_get_option('index_banner_link_4'.$langFix);
    $link_5 = of_get_option('index_banner_link_5'.$langFix);
    if($pics_1)
        $banner_pics[1]['l'] = $link_1;
    if($pics_2)
        $banner_pics[2]['l'] = $link_2;
    if($pics_3)
        $banner_pics[3]['l'] = $link_3;
    if($pics_4)
        $banner_pics[4]['l'] = $link_4;
    if($pics_5)
        $banner_pics[5]['l'] = $link_5;

?>
<div id="content">
    <div id="banner">
        <ul class="pics">
            <?php if(!empty($banner_pics)):?>
            <?php $i=1;foreach($banner_pics as $bp):?>
                <?php if(isset($bp['p']) && $bp['p']!=''):?>
            <li style="background-image: url('<?=$bp['p']?>');" class="b<?=$i?>"><a href="<?=isset($bp['l']) && $bp['l']!=''?$bp['l']:'/'?>" target="_blank"></a></li>
                <?php $i++;endif;?>
            <?php endforeach;?>
            <?php endif;?>
        </ul>
        <div class="btns">
            <a href="javascript:void(0);" class="prev"><span class="off"></span><span class="on"></span></a>
            <a href="javascript:void(0);" class="next"><span class="off"></span><span class="on"></span></a>
        </div>
        <div class="g-wrap">
            <ul class="idxs">
                <?php for($i=0;$i<count($banner_pics);$i++):?>
                <li style="margin-top: 0;" class="<?=$i==0?'on':''?>"></li>
                <?php endfor;?>
            </ul>
        </div>
    </div>
        <?php
            $news_cate_id = of_get_option('index_news_cate_id'.$langFix);
            $recent = new WP_Query("showposts=5&cat=".$news_cate_id);

        ?>


    <div id="news-slide">
        <?php while($recent->have_posts()) : $post_item = $recent->the_post();?>
        <div class="item">
            <a href="<?=get_the_permalink()?>"><?php the_title();?><span><?php the_time('Y.m.d')?></span></a>
            <a class="more" href="<?php echo get_category_link(get_the_category()[0]->term_id)?>"><?=WP_THEME_LANG=='cn'?'更多新闻':'more'?></a>
        </div>
        <?php   endwhile; wp_reset_query();  ?>
    </div>

    <?php
        $template_url = get_template_directory_uri();
        $mag_pics = [
            1=>['p'=>$template_url."/static/img/home/magizine_01.png"],
            2=>['p'=>$template_url."/static/img/home/magizine_02.png"],
            3=>['p'=>$template_url."/static/img/home/magizine_03.png"],
        ];
        $mag_pics_1 = of_get_option('index_mag_pics_1'.$langFix);
        $mag_pics_2 = of_get_option('index_mag_pics_2'.$langFix);
        $mag_pics_3 = of_get_option('index_mag_pics_3'.$langFix);
        if($mag_pics_1)
            $mag_pics[1]['p'] = $mag_pics_1;
        if($mag_pics_2)
            $mag_pics[2]['p'] = $mag_pics_2;
        if($mag_pics_3)
            $mag_pics[3]['p'] = $mag_pics_3;

        $mag_link_1 = of_get_option('index_mag_link_1'.$langFix);
        $mag_link_2 = of_get_option('index_mag_link_2'.$langFix);
        $mag_link_3 = of_get_option('index_mag_link_3'.$langFix);
        if($mag_link_1)
            $mag_pics[1]['l'] = $mag_link_1;
        if($mag_link_2)
            $mag_pics[2]['l'] = $mag_link_2;
        if($mag_link_3)
            $mag_pics[3]['l'] = $mag_link_3;
    ?>

    <div id="pic_mag" >
        <div class="container">
            <div class="mag_00">
                <?php if(WP_THEME_LANG=='cn'){
                    $homeTitleImg =  $template_url.'/static/img/home/home_login_title.jpg';
                    $loginBtnText = '登 录';
                }else{
                    $homeTitleImg =  $template_url.'/static/img/home/home_login_title_en.jpg';
                    $loginBtnText = 'login';
                }

                ?>

                <section id="email-login">
                    <article>
                        <form method="post" target="_blank" action="http://login.songtang.net/" name="form1">
                            <input type="hidden" value="false" name="firstlogin">
                            <input type="hidden" value="dm_loginpage" name="errtemplate">
                            <input type="hidden" value="other" name="aliastype">
                            <input type="hidden" value="bizmail" name="dmtype">
                            <input type="hidden" value="" name="p">
                            <div class="email-login-header2">
                                <img src="<?=$homeTitleImg?>" width="250" height="42"/>
                            </div>
                            <br/>
                            <div class="bizmail_column">
                                <div class="bizmail_inputArea">
                                    <input type="text" value="" class="text" name="LoginForm[username]" /><span class="email-suffix">@songtang.net</span>
                                    <input type="hidden" value="songtang.net" name="domain">
                                </div>
                            </div>
                            <br/>
                            <div class="bizmail_column">
                                <div class="bizmail_inputArea">
                                    <input type="password" value="" class="text1" name="LoginForm[password]">
                                </div>
                            </div>
                            <div class="bizmail_SubmitArea">

                                <input class="submit-btn" type="submit" value="<?=$loginBtnText?>"/>
                            </div>

                        </form>
                    </article>
                </section>
                <!--<section id="email-login">
                    <article>
                        <form method="post" target="_blank" action="https://exmail.qq.com/cgi-bin/login" name="form1">
                            <input type="hidden" value="false" name="firstlogin">
                            <input type="hidden" value="dm_loginpage" name="errtemplate">
                            <input type="hidden" value="other" name="aliastype">
                            <input type="hidden" value="bizmail" name="dmtype">
                            <input type="hidden" value="" name="p">
                            <div class="email-login-header2">
                                <img src="<?/*=$template_url*/?>/static/img/home/home_login_title.jpg" width="250" height="42"/>
                            </div>
                            <br/>
                            <div class="bizmail_column">
                                <div class="bizmail_inputArea">
                                    <input type="text" value="" class="text" name="uin" /><span class="email-suffix">@songtang.net</span>
                                    <input type="hidden" value="songtang.net" name="domain">
                                </div>
                            </div>
                            <br/>
                            <div class="bizmail_column">
                                <div class="bizmail_inputArea">
                                    <input type="password" value="" class="text1" name="pwd">
                                </div>
                            </div>
                            <div class="bizmail_SubmitArea">
                                <input class="submit-btn" type="submit" value="登 录"/>
                            </div>

                        </form>
                    </article>
                </section>-->
                <!--<img src="<?php /*bloginfo('template_url');*/?>/static/img/home/magizine_0.png" />-->
            </div>
            <div class="mag_div mag_01">
                <?php if(isset($mag_pics[1]['l']) && $mag_pics[1]['l']!=''):?>
                <a href="<?=$mag_pics[1]['l']?>" target="_blank" />
                <?php endif;?>
                    <img src="<?=$mag_pics[1]['p']?>" />
                <?php if(isset($mag_pics[1]['l']) && $mag_pics[1]['l']!=''):?>
                </a>
                <?php endif;?>
            </div>
            <div class="mag_div mag_02">
                <?php if(isset($mag_pics[2]['l']) && $mag_pics[2]['l']!=''):?>
                    <a href="<?=$mag_pics[2]['l']?>" target="_blank" />
                <?php endif;?>
                <img src="<?=$mag_pics[2]['p']?>" />
                <?php if(isset($mag_pics[2]['l']) && $mag_pics[2]['l']!=''):?>
                    </a>
                <?php endif;?>
            </div>
            <div class="mag_div mag_03">
                <?php if(isset($mag_pics[3]['l']) && $mag_pics[3]['l']!=''):?>
                    <a href="<?=$mag_pics[3]['l']?>" target="_blank" />
                <?php endif;?>
                <img src="<?=$mag_pics[3]['p']?>" />
                <?php if(isset($mag_pics[3]['l']) && $mag_pics[3]['l']!=''):?>
                    </a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>