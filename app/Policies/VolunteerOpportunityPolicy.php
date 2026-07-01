<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VolunteerOpportunity;

class VolunteerOpportunityPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, VolunteerOpportunity $volunteerOpportunity): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, VolunteerOpportunity $volunteerOpportunity): bool
    {
        return $user->id === $volunteerOpportunity->user_id;
    }

    public function delete(User $user, VolunteerOpportunity $volunteerOpportunity): bool
    {
        return $user->id === $volunteerOpportunity->user_id;
    }
}
