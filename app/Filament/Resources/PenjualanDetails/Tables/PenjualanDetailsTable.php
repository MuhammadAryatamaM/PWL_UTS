<?php

namespace App\Filament\Resources\PenjualanDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenjualanDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('penjualan.penjualan_kode')
                    ->label('No. Nota')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('barang.barang_nama')
                    ->label('Nama Barang')
                    ->searchable(),

                TextColumn::make('harga')
                    ->label('Harga Satuan')
                    ->money('IDR'),

                TextColumn::make('jumlah')
                    ->label('Qty')
                    ->badge(),

                TextColumn::make('subtotal')
                    ->label('Subtotal')
                    ->state(fn($record) => $record->harga * $record->jumlah)
                    ->money('IDR'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
