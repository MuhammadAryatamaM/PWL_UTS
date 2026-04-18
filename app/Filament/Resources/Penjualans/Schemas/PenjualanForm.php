<?php

namespace App\Filament\Resources\Penjualans\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenjualanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('penjualan_kode')
                    ->label('No. Nota')
                    ->required()
                    ->default('PWL/' . date('Ymd') . '/' . date('His')),
                TextInput::make('pembeli')
                    ->label('Nama Pembeli')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'nama')
                    ->label('Kasir')
                    ->required(),
                DateTimePicker::make('penjualan_tanggal')
                    ->label('Tanggal Penjualan')
                    ->required()
                    ->default(now()),
            ]);
    }
}
