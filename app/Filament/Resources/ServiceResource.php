<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->inputMode('decimal')
                    ->minValue('1.00'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('description'),
                TextColumn::make('price')
                    ->numeric(decimalPlaces: 2)
                    ->money('BRL'),
                TextColumn::make('created_at')
                    ->dateTime('d/m/Y'),
                TextColumn::make('updated_at')
                    ->dateTime('d/m/Y')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
