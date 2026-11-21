<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use MahmoudSehsah\FilamentResourceManager\Models\ResourceSetting;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResourceSettingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ResourceSetting');
    }

    public function view(AuthUser $authUser, ResourceSetting $resourceSetting): bool
    {
        return $authUser->can('View:ResourceSetting');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ResourceSetting');
    }

    public function update(AuthUser $authUser, ResourceSetting $resourceSetting): bool
    {
        return $authUser->can('Update:ResourceSetting');
    }

    public function delete(AuthUser $authUser, ResourceSetting $resourceSetting): bool
    {
        return $authUser->can('Delete:ResourceSetting');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:ResourceSetting');
    }

    public function restore(AuthUser $authUser, ResourceSetting $resourceSetting): bool
    {
        return $authUser->can('Restore:ResourceSetting');
    }

    public function forceDelete(AuthUser $authUser, ResourceSetting $resourceSetting): bool
    {
        return $authUser->can('ForceDelete:ResourceSetting');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ResourceSetting');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ResourceSetting');
    }

    public function replicate(AuthUser $authUser, ResourceSetting $resourceSetting): bool
    {
        return $authUser->can('Replicate:ResourceSetting');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ResourceSetting');
    }

}