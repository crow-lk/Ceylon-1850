<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Auth\Authenticatable;
use DutchCodingCompany\FilamentSocialite\Models\Contracts\FilamentSocialiteUser;
use Laravel\Socialite\Contracts\User as SocialiteUserContract;

class SocialiteUser extends Model implements FilamentSocialiteUser
{
    protected $fillable = [
        'user_id',
        'provider',
        'provider_id',
    ];

    /**
     * Get the user that owns the socialite user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user instance.
     */
    public function getUser(): Authenticatable
    {
        return $this->user;
    }

    /**
     * Get the provider name.
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * Get the provider ID.
     */
    public function getProviderId(): string
    {
        return $this->provider_id;
    }

    /**
     * Find a socialite user for a given provider and provider oauth user.
     */
    public static function findForProvider(string $provider, SocialiteUserContract $oauthUser): ?self
    {
        return static::where('provider', $provider)
            ->where('provider_id', $oauthUser->getId())
            ->first();
    }

    /**
     * Create a new socialite user for a user from a provider.
     */
    public static function createForProvider(string $provider, SocialiteUserContract $oauthUser, Authenticatable $user): self
    {
        return static::create([
            'user_id' => $user->getAuthIdentifier(),
            'provider' => $provider,
            'provider_id' => $oauthUser->getId(),
        ]);
    }
}
