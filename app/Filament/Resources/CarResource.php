<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationLabel = 'Автомобили';
    protected static ?string $navigationGroup = 'Съдържание';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('make_id')
                ->label('Марка')
                ->relationship('brand', 'name')
                ->searchable()
                ->required(),

            TextInput::make('model')
                ->label('Модел'),
                // ->required(),

            TextInput::make('category')
                ->label('Категория'),
                // ->required(),

            TextInput::make('year')
                ->label('Година')
                ->numeric(),
                // ->required(),

            TextInput::make('slug')
                ->label('Slug')
                ->disabled(),

            Textarea::make('description')
                ->label('Описание'),
                // ->required(),

            TextInput::make('mileage')
                ->label('Пробег (км)')
                ->numeric(),
                // ->required(),

            TextInput::make('horsepower')
                ->label('Конски сили')
                ->numeric()
                ->nullable(),


            TextInput::make('transmission')
                ->label('Скоростна кутия'),
                // ->required(),

            TextInput::make('engine')
                ->label('Двигател'),
                // ->required(),

            // TextInput::make( 'vin' )
            // ->label( 'VIN номер' )
            // ->unique( ignoreRecord: true )
            // ->required(),

            TextInput::make('exterior_color')
                ->label('Външен цвят'),
                // ->required(),

            // TextInput::make( 'interior_color' )
            // ->label( 'Вътрешен цвят' )
            // ->required(),

            TextInput::make('drive')
                ->label('Задвижване'),
                // ->required(),

            TextInput::make('price')
                ->label('Цена')
                ->numeric(),
                // ->required(),

            // TextInput::make( 'keys' )
            // ->label( 'Брой ключове' )
            // ->required(),

            // TextInput::make( 'ownership' )
            // ->label( 'Брой собственици' )
            // ->required(),

            FileUpload::make('image_upload')
                ->label('Снимки')
                ->multiple()
                ->image()
                ->disk('public')
                ->directory('cars')
                ->preserveFilenames(),

        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_upload')
                    ->label('Снимка')
                    ->size(50)
                    ->disk('public')
                    ->getStateUsing(fn($record) => optional($record->images->first())->path
                        ? asset("storage/{$record->images->first()->path}")
                        : null),

                TextColumn::make('brand.name')
                    ->label('Марка')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('model')
                    ->label('Модел')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category')
                    ->label('Категория')
                    ->sortable(),

                TextColumn::make('year')
                    ->label('Година')
                    ->sortable(),

                TextColumn::make('mileage')
                    ->label('Пробег (км)')
                    ->sortable(),

                TextColumn::make('transmission')
                    ->label('Скоростна кутия')
                    ->sortable(),

                TextColumn::make('engine')
                    ->label('Двигател')
                    ->sortable(),

                // TextColumn::make( 'vin' )
                // ->label( 'VIN' )
                // ->copyable()
                // ->sortable(),

                TextColumn::make('exterior_color')
                    ->label('Външен цвят')
                    ->sortable(),

                // TextColumn::make( 'interior_color' )
                // ->label( 'Вътрешен цвят' )
                // ->sortable(),

                TextColumn::make('drive')
                    ->label('Задвижване')
                    ->sortable(),

                TextColumn::make('price')
                    ->label('Цена')
                    ->money('BGN')
                    ->sortable(),

                // TextColumn::make( 'keys' )
                // ->label( 'Ключове' )
                // ->sortable(),

                // TextColumn::make( 'ownership' )
                // ->label( 'Брой собственици' )
                // ->sortable(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
