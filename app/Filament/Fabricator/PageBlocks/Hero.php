<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    protected static string $name = 'hero';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('badge_1')->label('Badge 1'),
                TextInput::make('badge_2')->label('Badge 2'),
                TextInput::make('badge_3')->label('Badge 3 (Görsel Üzeri)'),
                TextInput::make('title_1')->label('Başlık 1'),
                TextInput::make('title_2')->label('Başlık 2'),
                Textarea::make('subtitle')->label('Alt Başlık')->rows(2),
                TextInput::make('image_text')->label('Görsel Metin 1'),
                Textarea::make('image_text_2')->label('Görsel Metin 2')->rows(2),
                Textarea::make('image_quality')->label('Kalite Kartı Metin')->rows(2),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
