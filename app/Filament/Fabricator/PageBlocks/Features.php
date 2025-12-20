<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Features extends PageBlock
{
    protected static string $name = 'features';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                // Section 1: Yüksek Kaliteli Ham Maddeler
                TextInput::make('section_1_badge')->label('Bölüm 1 Badge')->default('Yüksek Kaliteli Ham Maddeler'),
                TextInput::make('section_1_title_1')->label('Bölüm 1 Başlık 1'),
                TextInput::make('section_1_title_2')->label('Bölüm 1 Başlık 2'),
                Repeater::make('section_1_chips')
                    ->label('Bölüm 1 Chip\'ler')
                    ->simple(TextInput::make(''))
                    ->defaultItems(3),
                Textarea::make('section_1_paragraph_1')->label('Bölüm 1 Paragraf 1')->rows(2),
                Textarea::make('section_1_paragraph_2')->label('Bölüm 1 Paragraf 2')->rows(2),
                Textarea::make('section_1_paragraph_3')->label('Bölüm 1 Paragraf 3')->rows(2),
                TextInput::make('section_1_image_badge')->label('Bölüm 1 Görsel Badge'),
                TextInput::make('section_1_image_text_1')->label('Bölüm 1 Görsel Metin 1'),
                TextInput::make('section_1_image_text_2')->label('Bölüm 1 Görsel Metin 2'),

                // Section 2: Şef Dokunuşu
                TextInput::make('section_2_badge')->label('Bölüm 2 Badge')->default('Şef Dokunuşu'),
                TextInput::make('section_2_title_1')->label('Bölüm 2 Başlık 1'),
                TextInput::make('section_2_title_2')->label('Bölüm 2 Başlık 2'),
                Textarea::make('section_2_paragraph_1')->label('Bölüm 2 Paragraf 1')->rows(2),
                Textarea::make('section_2_paragraph_2')->label('Bölüm 2 Paragraf 2')->rows(2),
                Repeater::make('section_2_stats')
                    ->label('Bölüm 2 İstatistikler')
                    ->schema([
                        TextInput::make('title')->label('Başlık'),
                        TextInput::make('value')->label('Değer'),
                    ])
                    ->defaultItems(3),
                TextInput::make('section_2_image_badge')->label('Bölüm 2 Görsel Badge'),

                // Section 3: Güvenli ve Özenli Üretim
                TextInput::make('section_3_badge')->label('Bölüm 3 Badge')->default('Güvenli ve Özenli Üretim'),
                TextInput::make('section_3_title')->label('Bölüm 3 Başlık'),
                Textarea::make('section_3_paragraph_1')->label('Bölüm 3 Paragraf 1')->rows(2),
                Textarea::make('section_3_paragraph_2')->label('Bölüm 3 Paragraf 2')->rows(2),
                Textarea::make('section_3_paragraph_3')->label('Bölüm 3 Paragraf 3')->rows(2),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
