<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MerchandiseResource\Pages;
use App\Filament\Resources\MerchandiseResource\RelationManagers;
use App\Models\Merchandise;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MerchandiseResource extends Resource
{
    protected static ?string $model = Merchandise::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Name')
                    ->maxLength(255),
                 Forms\Components\FileUpload::make('thumbnail')
                        ->image()
                        ->required(),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->label('description')
                    ->maxLength(1000),
                
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->label('Price')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Image')
                    ->rounded()
                    ->size(50),
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d-m-Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMerchandises::route('/'),
            'create' => Pages\CreateMerchandise::route('/create'),
            'edit' => Pages\EditMerchandise::route('/{record}/edit'),
        ];
    }
}