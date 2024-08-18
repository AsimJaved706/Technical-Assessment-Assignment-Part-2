<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Assignment;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',        // Added role field
        'permissions', // Added permissions field
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'permissions' => 'array', // Cast permissions as an array
    ];

    /**
     * Check if the user has a specific role.
     *
     * @param  string  $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Check if the user has a specific permission.
     *
     * @param  string  $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        return in_array($permission, $this->permissions ?? []);
    }

    /**
     * Assign a role to the user.
     *
     * @param  string  $role
     * @return void
     */
    public function assignRole($role)
    {
        $this->update(['role' => $role]);
    }

    /**
     * Assign permissions to the user.
     *
     * @param  array  $permissions
     * @return void
     */
    public function givePermissions(array $permissions)
    {
        $this->update(['permissions' => $permissions]);
    }

    /**
     * Add a single permission to the user.
     *
     * @param  string  $permission
     * @return void
     */
    public function addPermission($permission)
    {
        $permissions = $this->permissions ?? [];
        if (!in_array($permission, $permissions)) {
            $permissions[] = $permission;
            $this->update(['permissions' => $permissions]);
        }
    }

    /**
     * Remove a single permission from the user.
     *
     * @param  string  $permission
     * @return void
     */
    public function removePermission($permission)
    {
        $permissions = $this->permissions ?? [];
        if (in_array($permission, $permissions)) {
            $permissions = array_diff($permissions, [$permission]);
            $this->update(['permissions' => array_values($permissions)]);
        }
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
    public function roles()
{
    return $this->belongsToMany(Role::class, 'user_roles');
}

}
