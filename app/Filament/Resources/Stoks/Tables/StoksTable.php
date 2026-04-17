<?php

namespace App\Filament\Resources\Stoks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StoksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('supplier.supplier_nama')
                ->label('Supplier')
                ->searchable()
                ->sortable(),

            TextColumn::make('barang.barang_nama')
                ->label('Barang')
                ->searchable()
                ->sortable(),

            TextColumn::make('user.nama')
                ->label('Diinput Oleh')
                ->sortable(),

            TextColumn::make('stok_jumlah')
                ->label('Jumlah Masuk')
                ->numeric()
                ->badge()
                ->color('info')
                ->sortable(),

            TextColumn::make('stok_tanggal')
                ->label('Tanggal Masuk')
                ->dateTime('d M Y, H:i')
                ->sortable(),
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
