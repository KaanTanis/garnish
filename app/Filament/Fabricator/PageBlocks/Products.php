<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Products extends PageBlock
{
    protected static string $name = 'products';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('badge')->label('Badge')->default('Ürün Gamı'),
                TextInput::make('title')->label('Başlık')->default('Ürünlerimiz'),
                Textarea::make('subtitle')->label('Alt Başlık')->rows(2),
                TextInput::make('product_1_name')->label('Ürün 1 Adı')->default('Tenders'),
                Textarea::make('product_1_description')->label('Ürün 1 Açıklama')->rows(2),
                TextInput::make('product_2_name')->label('Ürün 2 Adı')->default('Şinitzel'),
                Textarea::make('product_2_description')->label('Ürün 2 Açıklama')->rows(2),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
