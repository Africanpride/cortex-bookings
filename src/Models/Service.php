<?php

declare(strict_types=1);

namespace Cortex\Bookings\Models;

use Rinvex\Tags\Traits\Taggable;
use Spatie\MediaLibrary\HasMedia;
use Rinvex\Bookings\Models\Bookable;
use Rinvex\Tenants\Traits\Tenantable;
use Cortex\Foundation\Traits\Auditable;
use Rinvex\Support\Traits\HashidsTrait;
use Cortex\Foundation\Events\ModelCreated;
use Cortex\Foundation\Events\ModelDeleted;
use Cortex\Foundation\Events\ModelUpdated;
use Cortex\Foundation\Events\ModelRestored;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\InteractsWithMedia;
use Cortex\Foundation\Traits\FiresCustomModelEvent;

class Service extends Bookable implements HasMedia
{
    use Taggable;
    use Auditable;
    use Tenantable;
    use HashidsTrait;
    use LogsActivity;
    use InteractsWithMedia;
    use FiresCustomModelEvent;

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ModelCreated::class,
        'deleted' => ModelDeleted::class,
        'restored' => ModelRestored::class,
        'updated' => ModelUpdated::class,
    ];

    /**
     * Indicates whether to log only dirty attributes or all.
     *
     * @var bool
     */
    protected static $logOnlyDirty = true;

    /**
     * The attributes that are logged on change.
     *
     * @var array
     */
    protected static $logFillable = true;

    /**
     * The attributes that are ignored on change.
     *
     * @var array
     */
    protected static $ignoreChangedAttributes = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable(['tags']);

        $this->mergeCasts(['tags' => 'array']);

        $this->mergeRules(['tags' => 'nullable|array']);

        $this->setTable(config('cortex.bookings.tables.services'));
    }

    /**
     * {@inheritdoc}
     */
    public static function getBookingModel(): string
    {
        return config('cortex.bookings.models.service_booking');
    }

    /**
     * {@inheritdoc}
     */
    public static function getRateModel(): string
    {
        return config('cortex.bookings.models.service_rate');
    }

    /**
     * {@inheritdoc}
     */
    public static function getAvailabilityModel(): string
    {
        return config('cortex.bookings.models.service_availability');
    }

    /**
     * Register media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('profile_picture')->singleFile();
        $this->addMediaCollection('cover_photo')->singleFile();
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
