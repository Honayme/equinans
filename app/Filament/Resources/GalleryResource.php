<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationLabel = 'Galerie';

    protected static ?string $modelLabel = 'Image de galerie';

    protected static ?string $pluralModelLabel = 'Galerie';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Titre (optionnel)')
                    ->maxLength(255)
                    ->helperText('Peut rester vide pour une galerie simple'),

                TextInput::make('order')
                    ->label('Ordre d\'affichage')
                    ->numeric()
                    ->default(0)
                    ->required()
                    ->helperText('Les images seront affichées par ordre croissant'),

                Toggle::make('is_active')
                    ->label('Visible sur le site')
                    ->default(true)
                    ->required(),

                SpatieMediaLibraryFileUpload::make('gallery_images')
                    ->label('Images de la galerie')
                    ->collection('gallery_images')
                    ->multiple()
                    ->reorderable()
                    ->image()
                    ->imageEditor()
                    ->maxFiles(50)
                    ->helperText('Vous pouvez uploader plusieurs images à la fois')
                    ->customProperties(fn () => [
                        'alt' => '',
                    ])
                    ->manipulations([
                        'thumbnail' => ['width' => 300, 'height' => 300],
                        'large' => ['width' => 1200, 'height' => 800],
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                SpatieMediaLibraryImageColumn::make('gallery_images')
                    ->label('Aperçu')
                    ->collection('gallery_images')
                    ->conversion('thumbnail')
                    ->limit(3)
                    ->circular()
                    ->stacked(),

                TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->placeholder('Sans titre'),

                TextColumn::make('media_count')
                    ->label('Nombre d\'images')
                    ->counts('media')
                    ->sortable(),

                TextColumn::make('order')
                    ->label('Ordre')
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('Visible')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Visibilité')
                    ->placeholder('Toutes')
                    ->trueLabel('Visibles')
                    ->falseLabel('Cachées'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->reorderable('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
