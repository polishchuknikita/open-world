<?php

namespace RebelCode\Wpra\Core\Handlers\FeedSources;

use RebelCode\Wpra\Core\Entities\Feeds\Sources\WpPostFeedSource;
use WP_Post;

/**
 * Handler for saving feed source meta data submitted from the edit page meta box.
 *
 * @since 4.14
 */
class FeedSourceSaveMetaHandler
{
    /**
     * @inheritdoc
     *
     * @since 4.14
     */
    public function __invoke($postId, WP_Post $post)
    {
        // Verify the nonce to ensure that the data is coming from the feed source edit page
        $nonce = filter_input(INPUT_POST, 'wprss_meta_box_nonce');
        if (!wp_verify_nonce($nonce, 'wpra_feed_source')) {
            return;
        }

        // Stop if doing AJAX, cron or an auto save
        if (wp_doing_ajax() || wp_doing_cron() || defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        // Get the post type object.
        $post_type = get_post_type_object($post->post_type);

        // Check if the current user has permission to edit the post.
        if (!current_user_can($post_type->cap->edit_post, $postId)) {
            return;
        }

        // Get the submitted post meta
        $meta = filter_input(INPUT_POST, 'wpra_feed', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        if (empty($meta)) {
            return;
        }

        // Get the feed source model object
        $feed = new WpPostFeedSource($post);
        // Save the meta to the feed
        foreach ($meta as $key => $value) {
            $feed[$key] = $value;
        }
    }
}
