<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kategori_id')
                    ->relationship('kategori', 'kategori_nama')
                    ->searchable()
                    ->preload()
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('barang_kode')
                    ->label('Kode Barang')
                    ->required(),
                TextInput::make('barang_nama')
                    ->label('Nama Barang')
                    ->required(),
                TextInput::make('harga_beli')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
                TextInput::make('harga_jual')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
            ]);
    }
}
