<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class QualityPrinciples extends PageBlock
{
    protected static string $name = 'quality-principles';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Kalite Prensiplerimiz'),
                Repeater::make('principles')
                    ->label('Prensipler')
                    ->schema([
                        TextInput::make('title')->label('Başlık')->required(),
                        Textarea::make('description')->label('Açıklama')->rows(3)->required(),
                    ])
                    ->defaultItems(4)
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

