<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.phone', '');
        $this->migrator->add('general.email', '');
        $this->migrator->add('general.address', '');
        $this->migrator->add('general.opening_hours', '');
        $this->migrator->add('general.facebook_url', null);
    }
};
