<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class AboutValues extends PageBlock
{
    protected static string $name = 'about-values';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Değerlerimiz'),
                Repeater::make('values')
                    ->label('Değerler')
                    ->schema([
                        TextInput::make('title')->label('Başlık')->required(),
                        TextInput::make('description')->label('Açıklama')->required(),
                    ])
                    ->defaultItems(3)
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

