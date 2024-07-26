<?php
// Register Custom Post Type
function member()
{

    $labels = array(
        'name' => _x('Membres', 'Post Type General Name', 'nexo'),
        'singular_name' => _x('Membre', 'Post Type Singular Name', 'nexo'),
        'menu_name' => __('Membres', 'nexo'),
        'name_admin_bar' => __('Membres', 'nexo'),
        'archives' => __('Item Archives', 'nexo'),
        'attributes' => __('Item Attributes', 'nexo'),
        'parent_item_colon' => __('Parent Item:', 'nexo'),
        'all_items' => __('All Items', 'nexo'),
        'add_new_item' => __('Add New Item', 'nexo'),
        'add_new' => __('Add New', 'nexo'),
        'new_item' => __('New Item', 'nexo'),
        'edit_item' => __('Edit Item', 'nexo'),
        'update_item' => __('Update Item', 'nexo'),
        'view_item' => __('View Item', 'nexo'),
        'view_items' => __('View Items', 'nexo'),
        'search_items' => __('Search Item', 'nexo'),
        'not_found' => __('Not found', 'nexo'),
        'not_found_in_trash' => __('Not found in Trash', 'nexo'),
        'featured_image' => __('Featured Image', 'nexo'),
        'set_featured_image' => __('Set featured image', 'nexo'),
        'remove_featured_image' => __('Remove featured image', 'nexo'),
        'use_featured_image' => __('Use as featured image', 'nexo'),
        'insert_into_item' => __('Insert into item', 'nexo'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'nexo'),
        'items_list' => __('Items list', 'nexo'),
        'items_list_navigation' => __('Items list navigation', 'nexo'),
        'filter_items_list' => __('Filter items list', 'nexo'),
    );
    $args = array(
        'label' => __('Membres', 'nexo'),
        'description' => __('Membres Nexo', 'nexo'),
        'labels' => $labels,
        'supports' => array('title', 'nexo'),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => false,
        'can_export' => false,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'rewrite' => false,
        'capability_type' => 'page',
    );
    register_post_type('member', $args);

}
add_action('init', 'member', 0);

function getMemberById($id)
{
    $args = array(
        'post_type' => 'member',
        'page_id' => $id,
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 1,
    );

    $member_data = getMemberData($args);
    $member = null;

    if ($member_data) {
        $member = $member_data[0];
    }

    wp_reset_query();

    return $member;
}

function getMemberData($args)
{
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $data[] = array(
                'title' => $title,
                'picture' => get_field('picture'),
                'job' => get_field('job'),
                'bio' => get_field('bio'),
                'phone' => get_field('phone'),
                'email' => get_field('email'),
                'linkedin' => get_field('link_linkedin'),
            );
        }
        wp_reset_postdata();

        return $data;
    }
}