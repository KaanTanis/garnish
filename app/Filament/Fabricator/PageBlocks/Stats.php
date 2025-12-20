<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Stats extends PageBlock
{
    protected static string $name = 'stats';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                Repeater::make('stats')
                    ->label('İstatistikler')
                    ->schema([
                        TextInput::make('value')->label('Değer')->required(),
                        TextInput::make('label')->label('Etiket')->required(),
                    ])
                    ->defaultItems(4)
                    ->itemLabel(fn (array $state): ?string => ($state['value'] ?? '') . ' - ' . ($state['label'] ?? '')),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
