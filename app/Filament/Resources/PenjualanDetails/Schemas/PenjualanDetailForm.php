<?php

namespace App\Filament\Resources\PenjualanDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenjualanDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Select::make('penjualan_id')
                ->relationship('penjualan', 'penjualan_kode')
                ->label('Pilih Nomor Nota')
                ->searchable()
                ->preload()
                ->required(),

            Select::make('barang_id')
                ->relationship('barang', 'barang_nama')
                ->label('Pilih Barang')
                ->searchable()
                ->preload()
                ->required(),

            TextInput::make('harga')
                ->label('Harga')
                ->numeric()
                ->prefix('Rp')
                ->required(),

            TextInput::make('jumlah')
                ->label('Jumlah Barang')
                ->numeric()
                ->default(1)
                ->required(),
            ]);
    }
}
