<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Club;
use App\ClubBoardMember;
use App\ExcelFile;
use App\User;
use App\Policies\ClubPolicy;
use App\Policies\ClubBoardMemberPolicy;
use App\Policies\ExcelFilePolicy;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Club::class => ClubPolicy::class,
        ClubBoardMember::class => ClubBoardMemberPolicy::class,
        ExcelFile::class => ExcelFilePolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
