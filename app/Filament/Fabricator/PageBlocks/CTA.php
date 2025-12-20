<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class CTA extends PageBlock
{
    protected static string $name = 'c-t-a';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('FROCHI → GARNISH'),
                TextInput::make('subtitle')->label('Alt Başlık')->default('Profesyonel Mutfaklar İçin Premium Çözümler'),
                Textarea::make('description')->label('Açıklama')->rows(3),
                TextInput::make('stat_1_value')->label('İstatistik 1 Değer')->default('Yüksek'),
                TextInput::make('stat_1_label')->label('İstatistik 1 Etiket')->default('Performans'),
                TextInput::make('stat_2_value')->label('İstatistik 2 Değer')->default('Stabil'),
                TextInput::make('stat_2_label')->label('İstatistik 2 Etiket')->default('Kalite'),
                TextInput::make('stat_3_value')->label('İstatistik 3 Değer')->default('Düşük'),
                TextInput::make('stat_3_label')->label('İstatistik 3 Etiket')->default('Fire Oranı'),
                TextInput::make('cta_text')->label('CTA Metni')->default('Toplu Satış Bilgi Al'),
                TextInput::make('cta_link')->label('CTA Link')->default('#contact'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
