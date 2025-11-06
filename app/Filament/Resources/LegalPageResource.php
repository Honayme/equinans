<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LegalPageResource\Pages;
use App\Models\LegalPage;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class LegalPageResource extends Resource
{
    protected static ?string $model = LegalPage::class;

    protected static ?string $navigationLabel = 'Pages Legales';

    protected static ?string $modelLabel = 'Page Legale';

    protected static ?string $pluralModelLabel = 'Pages Legales';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contenu Principal')
                    ->schema([
                        Select::make('type')
                            ->label('Type de page')
                            ->options([
                                'reglement_interieur' => 'Reglement Interieur',
                                'informations_legales' => 'Informations Legales',
                            ])
                            ->required()
                            ->unique(ignoreRecord: true),

                        TextInput::make('title')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) =>
                                $set('slug', \Illuminate\Support\Str::slug($state))
                            ),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        MarkdownEditor::make('content')
                            ->label('Contenu')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'heading',
                                'bulletList',
                                'orderedList',
                                'blockquote',
                            ]),

                        Toggle::make('is_active')
                            ->label('Page active')
                            ->default(true),
                    ]),

                Section::make('SEO & Metadonnees')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(60)
                            ->helperText('Si vide, utilise le titre de la page. Max 60 caracteres.'),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3)
                            ->maxLength(160)
                            ->helperText('Recommande : 150-160 caracteres'),

                        TextInput::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->helperText('Mots-cles separes par des virgules'),

                        TextInput::make('og_image')
                            ->label('Image Open Graph (URL)')
                            ->url()
                            ->helperText('Image utilisee lors du partage sur les reseaux sociaux'),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
                    ->label('Type')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'reglement_interieur' => 'Reglement Interieur',
                        'informations_legales' => 'Informations Legales',
                        default => $state,
                    })
                    ->badge()
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Derniere modification')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Type')
                    ->options([
                        'reglement_interieur' => 'Reglement Interieur',
                        'informations_legales' => 'Informations Legales',
                    ]),

                SelectFilter::make('is_active')
                    ->label('Statut')
                    ->options([
                        true => 'Active',
                        false => 'Inactive',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('type');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLegalPages::route('/'),
            'create' => Pages\CreateLegalPage::route('/create'),
            'edit' => Pages\EditLegalPage::route('/{record}/edit'),
        ];
    }
}
