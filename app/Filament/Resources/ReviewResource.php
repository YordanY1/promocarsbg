<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Models\Review;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class ReviewResource extends Resource {
    protected static ?string $model = Review::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationLabel = 'Ревюта';
    protected static ?string $navigationGroup = 'Съдържание';

    public static function form( Forms\Form $form ): Forms\Form {
        return $form->schema( [
            TextInput::make( 'name' )
            ->label( 'Име на клиента' )
            ->required(),
            Textarea::make( 'content' )
            ->label( 'Съдържание' )
            ->required(),
            Select::make( 'car_id' )
            ->label( 'Автомобил' )
            ->getOptionLabelFromRecordUsing( fn ( $record ) => "{$record->brand->name} {$record->model}" )
            ->relationship( 'car', 'model' )
            ->preload()
            ->required(),

        ] );
    }

    public static function table( Tables\Table $table ): Tables\Table {
        return $table
        ->columns( [
            TextColumn::make( 'name' )
            ->label( 'Име на клиента' )
            ->sortable()
            ->searchable(),
            TextColumn::make( 'content' )
            ->label( 'Съдържание' )
            ->wrap()
            ->limit( 100 ),
            TextColumn::make( 'car.title' )
            ->label( 'Автомобил' )
            ->sortable()
            ->searchable(),
        ] )
        ->actions( [
            EditAction::make(),
            DeleteAction::make(),
        ] );
    }

    public static function getRelations(): array {
        return [];
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListReviews::route( '/' ),
            'create' => Pages\CreateReview::route( '/create' ),
            'edit' => Pages\EditReview::route( '/{record}/edit' ),
        ];
    }
}
