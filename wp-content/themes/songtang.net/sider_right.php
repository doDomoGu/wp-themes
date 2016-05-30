<?php
    $post_name = '';

    $pics_1 = '';
    $pics_2 = '';
    $pics_3 = '';

    $link_1 = '';
    $link_2 = '';
    $link_3 = '';

    if(is_page()){
        $p = get_post();
        $post_name = $p->post_name;
    }else if(is_single()){
        $p = get_the_category();
        $post_name = $p[0]->slug;
    }else if(is_category()){
        $cat_ID = get_query_var('cat');
        $category = get_category($cat_ID);
        $post_name = $category->slug;
    }
    if($post_name!=''){
        $pics_1 = of_get_option('page_'.$post_name.'_pics_1');
        $pics_2 = of_get_option('page_'.$post_name.'_pics_2');
        $pics_3 = of_get_option('page_'.$post_name.'_pics_3');

        $link_1 = of_get_option('page_'.$post_name.'_link_1');
        $link_2 = of_get_option('page_'.$post_name.'_link_2');
        $link_3 = of_get_option('page_'.$post_name.'_link_3');
    }

?>
<?php if($pics_1!=''):?>
    <?php if($link_1!=''):?>
    <a href="<?=$link_1?>" target="_blank">
    <?php endif;?>
        <img width="300px" alt="" src="<?=$pics_1?>">
    <?php if($link_1!=''):?>
    </a>
    <?php endif;?>
<?php endif;?>
<?php if($pics_2!=''):?>
    <?php if($link_2!=''):?>
    <a href="<?=$link_2?>" target="_blank">
    <?php endif;?>
        <img width="300px" alt="" src="<?=$pics_2?>">
    <?php if($link_2!=''):?>
    </a>
    <?php endif;?>
<?php endif;?><?php if($pics_3!=''):?>
    <?php if($link_3!=''):?>
    <a href="<?=$link_3?>" target="_blank">
    <?php endif;?>
        <img width="300px" alt="" src="<?=$pics_3?>">
    <?php if($link_3!=''):?>
    </a>
    <?php endif;?>
<?php endif;?>