<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class ServicesTableWidget extends BaseWidget
{
    protected static ?string $heading = 'Serviços';

    public function getColumnSpan(): int
    {
        return 12; // Número total de colunas em um grid de 12 colunas
    }
    protected function getTableQuery(): Builder
    {
        return Service::query(); // Query para buscar os serviços
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('Nome')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('description')
                ->label('Descrição')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('price')
                ->label('Preço')
                ->sortable()
                ->formatStateUsing(fn($state) => 'R$ ' . number_format($state, 2, ',', '.')),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Criado em')
                ->dateTime('d/m/Y H:i'),
        ];
    }
}
