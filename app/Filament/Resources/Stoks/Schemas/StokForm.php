<?php

namespace App\Filament\Resources\Stoks\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StokForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('supplier_id')->relationship('supplier', 'supplier_nama')->required(),
                Select::make('barang_id')->relationship('barang', 'barang_nama')->required(),
                Select::make('user_id')->relationship('user', 'nama')->required(),
                TextInput::make('stok_jumlah')
                    ->label('Jumlah Stok')
                    ->numeric()
                    ->required(),
                DateTimePicker::make('stok_tanggal')
                    ->label('Tanggal Stok')
                    ->required()
                    ->default(now()),
                ]);
    }
}
