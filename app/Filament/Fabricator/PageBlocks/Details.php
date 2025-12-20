<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Details extends PageBlock
{
    protected static string $name = 'details';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Markanıza Sağladığı Avantajlar'),
                Repeater::make('advantages')
                    ->label('Avantajlar')
                    ->schema([
                        TextInput::make('')->label('Avantaj')->required(),
                    ])
                    ->defaultItems(5)
                    ->simple(TextInput::make('')),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
