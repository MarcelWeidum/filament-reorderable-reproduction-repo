<?php

declare(strict_types=1);

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

final class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->columnSpanFull()
                    ->required(),
                Checkbox::make('manual_tags')
                    ->columnSpanFull()
                    ->live(),
                Select::make('tags')
                    ->options([
                        'test1' => 'test1',
                        'test2' => 'test2',
                    ])
                    ->reorderable(fn (Get $get): bool => $get('manual_tags'))
                    ->multiple()
                    ->columnSpanFull()
                    ->live(),
            ]);
    }
}
