<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $phone;

    public string $email;

    public string $address;

    public string $opening_hours;

    public ?string $facebook_url;

    public static function group(): string
    {
        return 'general';
    }
}
