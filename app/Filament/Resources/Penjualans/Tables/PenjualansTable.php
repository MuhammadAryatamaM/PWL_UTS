<?php

namespace App\Filament\Resources\Penjualans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenjualansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('penjualan_kode')
                    ->label('No. Nota')
                    ->searchable(),

                TextColumn::make('pembeli')
                    ->label('Nama Pembeli')
                    ->searchable(),

                TextColumn::make('user.nama')
                    ->label('Kasir yang Melayani')
                    ->sortable(),

                TextColumn::make('penjualan_tanggal')
                    ->label('Tanggal Transaksi')
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
