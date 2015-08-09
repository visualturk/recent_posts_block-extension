<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionRecentPostsBlockCreateRecentPostsBlockFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionRecentPostsBlockCreateRecentPostsBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'limit' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'default_value' => 5,
                'min'           => 1
            ]
        ]
    ];

}
