<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nome do serviço'),
                TextInput::make('price')
                    ->label('Valor')
                    ->required()
                    ->numeric()
                    ->inputMode('decimal')
                    ->minValue('1.00'),
                RichEditor::make('description')
                    ->label('Descrição')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make('id')
                    ->label('Nº')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Serviço')
                    ->formatStateUsing(fn($state) => ucfirst(strtolower($state)))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Descrição')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Preço')
                    ->money('BRL')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn($state) => 'R$ ' . number_format($state, 2, ',', '.')),

                TextColumn::make('created_at')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('updated_at')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->searchable()
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
