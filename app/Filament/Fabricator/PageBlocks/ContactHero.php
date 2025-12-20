<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContactHero extends PageBlock
{
    protected static string $name = 'contact-hero';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('badge')->label('Badge')->default('İletişim'),
                TextInput::make('title')->label('Başlık')->default('Bize Ulaşın'),
                Textarea::make('subtitle')->label('Alt Başlık')->rows(2),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

