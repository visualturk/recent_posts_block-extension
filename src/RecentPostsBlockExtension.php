<?php namespace Anomaly\RecentPostsBlockExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class RecentPostsBlockExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\RecentPostsBlockExtension
 */
class RecentPostsBlockExtension extends Extension
{

    /**
     * This extension provides the recent
     * posts block for the Blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.recent_posts';

}
