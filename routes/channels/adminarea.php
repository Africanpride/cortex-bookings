<?php

declare(strict_types=1);

Broadcast::channel('adminarea-services-index', function ($user) {
    return $user->can('list', app('cortex.bookings.service'));
}, ['guards' => ['admin']]);

Broadcast::channel('adminarea-services-bookings-index', function ($user) {
    return $user->can('list', app('cortex.bookings.service.booking'));
}, ['guards' => ['admin']]);

Broadcast::channel('adminarea-events-index', function ($user) {
    return $user->can('list', app('cortex.bookings.event'));
}, ['guards' => ['admin']]);

Broadcast::channel('adminarea-tickets-index', function ($user) {
    return $user->can('list', app('cortex.bookings.ticket'));
}, ['guards' => ['admin']]);

Broadcast::channel('adminarea-tickets-bookings-index', function ($user) {
    return $user->can('list', app('cortex.bookings.ticket.booking'));
}, ['guards' => ['admin']]);
