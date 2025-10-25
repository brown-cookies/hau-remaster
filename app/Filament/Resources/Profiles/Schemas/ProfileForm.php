<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('User ID')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('first_name'),
                TextInput::make('middle_name'),
                TextInput::make('last_name'),
                TextInput::make('profile_picture'),
                TextInput::make('address'),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('nationality'),
                TextInput::make('religion'),
                DatePicker::make('birthdate'),
                TextInput::make('gender'),
                Textarea::make('bio')
                    ->columnSpanFull(),
            ]);
    }
}
