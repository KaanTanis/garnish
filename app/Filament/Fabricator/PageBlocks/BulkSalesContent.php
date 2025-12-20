<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BulkSalesContent extends PageBlock
{
    protected static string $name = 'bulk-sales-content';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Garnish Ürünleri'),
                Textarea::make('description')->label('Açıklama')->rows(4),
                Repeater::make('advantages')
                    ->label('Avantajlar')
                    ->schema([
                        TextInput::make('')->label('Avantaj')->required(),
                    ])
                    ->defaultItems(5)
                    ->simple(TextInput::make('')),
                TextInput::make('cta_text')->label('CTA Metni')->default('Toplu Satış Bilgi Al'),
                TextInput::make('cta_link')->label('CTA Link')->default('/iletisim'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

