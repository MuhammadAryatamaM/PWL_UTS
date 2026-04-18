<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('level_id')
                    ->relationship('level', 'level_nama')
                    ->required(),
                TextInput::make('username')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('nama')->required(),
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->minLength(8)
            ]);
    }
}
