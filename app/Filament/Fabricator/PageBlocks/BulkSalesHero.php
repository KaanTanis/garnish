<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BulkSalesHero extends PageBlock
{
    protected static string $name = 'bulk-sales-hero';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('badge')->label('Badge')->default('Toplu Satış'),
                TextInput::make('title')->label('Başlık')->default('GARNISH'),
                TextInput::make('subtitle')->label('Alt Başlık')->default('Profesyonel Mutfaklar İçin Premium Tavuk Ürünleri'),
                Textarea::make('description')->label('Açıklama')->rows(3),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

