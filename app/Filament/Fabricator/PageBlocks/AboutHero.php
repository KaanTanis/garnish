<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class AboutHero extends PageBlock
{
    protected static string $name = 'about-hero';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('badge')->label('Badge')->default('Hakkımızda'),
                TextInput::make('title')->label('Başlık')->default('FROCHI Hikayesi'),
                TextInput::make('subtitle')->label('Alt Başlık')->default('Hayatın koşturmacasında yanınızdayız'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

