<?php
    register_nav_menus(array('header-menu' => __( '导航自定义菜单' ),)); //注册支持导航栏菜单


    add_filter( 'wp_nav_menu_objects', 'songtang_wp_nav_menu_objects' );
    function songtang_wp_nav_menu_objects( $sorted_menu_items )
    {
        foreach ( $sorted_menu_items as $menu_item ) {
            if ( $menu_item->current ) {
                $GLOBALS['songtang_title'] = $menu_item->title;
                break;
            }
        }
        return $sorted_menu_items;
    }

    function get_menu_items(){
        $nav_menu_loctions = get_nav_menu_locations();
        $header_menu_id = isset($nav_menu_loctions['header-menu'])?$nav_menu_loctions['header-menu']:0;
        return wp_get_nav_menu_items($header_menu_id);
    }

    function get_current_menu_item_id(){
        global $post;
        global $wpdb;
        global $cat;

        //get_query_var('cat');
        $menu_item_id = false;

        if($post->post_type=='page'){
            $object_id = $post->ID;

        }else{
            $object_id = $cat;
        }

        $menu_item_id = $wpdb->get_var($wpdb->prepare("SELECT `post_id`
                              FROM `$wpdb->postmeta`
                              WHERE `meta_key` = '_menu_item_object_id'
                                    AND `meta_value` = %s", $object_id));

        return $menu_item_id;
    }

    function get_related_menu_items($current_menu_item_id){
        //注意：视当前menu为二级栏目
        global $wpdb;
        $menu_items_all = get_menu_items();
        $menu_items = [];
        //查找父ID
        $menu_item_parent_id = $wpdb->get_var($wpdb->prepare("SELECT `meta_value`
                              FROM `$wpdb->postmeta`
                              WHERE `meta_key` = '_menu_item_menu_item_parent'
                                    AND `post_id` = %s", $current_menu_item_id));

        //通过父ID查找子ID
        if($menu_item_parent_id>0){
            $menu_items_id = $wpdb->get_col($wpdb->prepare("SELECT `post_id`
                              FROM `$wpdb->postmeta`
                              WHERE `meta_key` = '_menu_item_menu_item_parent'
                                    AND `meta_value` = %s", $menu_item_parent_id));
            if(!empty($menu_items_id)){
                foreach($menu_items_all as $m){
                    if(in_array($m->ID,$menu_items_id)){
                        $menu_items[] = $m;
                    }
                }
                /*$posts_id = $wpdb->get_col("SELECT `meta_value`
                              FROM `$wpdb->postmeta`
                              WHERE `meta_key` = '_menu_item_object_id'
                                    AND `post_id` in (".implode(',',$menu_items_id).")");
                if(!empty($posts_id)){
                    foreach($menu_items_all as $m){
                        //if(in_array($m->object_id,$posts_id)){
                        if(in_array($m->ID,$menu_items_id)){
                            $menu_items[] = $m;
                        }
                    }
                }*/
            }
        }
        return $menu_items;
    }


    function get_category_parents_ex($cat_id){
        $id = $cat_id;
        $link = true;
        $separator = '';
        $nicename = false;
        $visited = array();
        $chain = '';
        $parent = get_term( $id, 'category' );
        if ( is_wp_error( $parent ) )
            return $parent;

        if ( $nicename )
            $name = $parent->slug;
        else
            $name = $parent->name;

        if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
            $visited[] = $parent->parent;
            $chain .= get_category_parents_ex( $parent->parent, $link, $separator, $nicename, $visited );
        }

        if ( $link )
            $chain .= '<a href="' . esc_url( get_category_link( $parent->term_id ) ) . '" class="on">'.$name.'</a>' . $separator;
        else
            $chain .= $name.$separator;
        return $chain;
    }
?>