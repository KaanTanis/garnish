<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ProductsHero extends PageBlock
{
    protected static string $name = 'products-hero';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('badge')->label('Badge')->default('Ürünlerimiz'),
                TextInput::make('title')->label('Başlık')->default('Premium Tavuk Ürünleri'),
                Textarea::make('subtitle')->label('Alt Başlık')->rows(3),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

