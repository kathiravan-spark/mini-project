<?php

namespace PaymentProcess\AdminDashboard;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PaymentProcess\AdminDashboard\Skeleton\SkeletonClass
 */
class AdminDashboardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'admin-dashboard';
    }
}
