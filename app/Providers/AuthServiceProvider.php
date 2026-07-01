<?php

namespace App\Providers;

use App\Models\Conversation;
use App\Models\Donation;
use App\Models\Message;
use App\Models\Ngo;
use App\Models\Post;
use App\Models\Report;
use App\Models\VolunteerOpportunity;
use App\Policies\ConversationPolicy;
use App\Policies\DonationPolicy;
use App\Policies\MessagePolicy;
use App\Policies\NgoPolicy;
use App\Policies\PostPolicy;
use App\Policies\ReportPolicy;
use App\Policies\VolunteerOpportunityPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Post::class => PostPolicy::class,
        Ngo::class => NgoPolicy::class,
        Donation::class => DonationPolicy::class,
        VolunteerOpportunity::class => VolunteerOpportunityPolicy::class,
        Conversation::class => ConversationPolicy::class,
        Message::class => MessagePolicy::class,
        Report::class => ReportPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
