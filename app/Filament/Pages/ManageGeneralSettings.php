<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Pages\SettingsPage;

class ManageGeneralSettings extends SettingsPage
{
    protected static string $settings = GeneralSettings::class;

    protected static ?string $navigationLabel = 'Informations générales';

    protected static ?string $title = 'Informations générales';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Coordonnées')
                    ->schema([
                        TextInput::make('phone')
                            ->label('Téléphone')
                            ->required()
                            ->maxLength(20)
                            ->placeholder('06 76 12 22 25')
                            ->helperText('Format accepté : 0676122225 ou 06 76 12 22 25 ou +33 6 76 12 22 25'),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        Textarea::make('address')
                            ->label('Adresse')
                            ->required()
                            ->rows(3)
                            ->maxLength(500),

                        Textarea::make('opening_hours')
                            ->label('Horaires d\'ouverture')
                            ->required()
                            ->rows(4)
                            ->maxLength(500),
                    ])
                    ->columns(2),

                Section::make('Réseaux sociaux')
                    ->schema([
                        TextInput::make('facebook_url')
                            ->label('URL Facebook')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://facebook.com/votre-page'),
                    ]),
            ]);
    }
}
