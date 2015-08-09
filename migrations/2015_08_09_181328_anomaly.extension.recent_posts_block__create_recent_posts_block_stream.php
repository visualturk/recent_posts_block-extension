<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionRecentPostsBlockCreateRecentPostsBlockStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionRecentPostsBlockCreateRecentPostsBlockStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'recent_posts_block'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'limit' => [
            'required' => true
        ]
    ];

}
