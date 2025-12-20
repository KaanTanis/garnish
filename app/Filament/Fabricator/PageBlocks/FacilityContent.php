<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FacilityContent extends PageBlock
{
    protected static string $name = 'facility-content';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Tarsus OSB'),
                Textarea::make('description')->label('Açıklama')->rows(4),
                Repeater::make('features')
                    ->label('Tesis Özellikleri')
                    ->schema([
                        TextInput::make('')->label('Özellik')->required(),
                    ])
                    ->defaultItems(4)
                    ->simple(TextInput::make('')),
                Repeater::make('images')
                    ->label('Görseller')
                    ->schema([
                        TextInput::make('')->label('Görsel Yolu')->required(),
                    ])
                    ->defaultItems(3)
                    ->simple(TextInput::make('')),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

