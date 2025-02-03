<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $defaultSettings = [
            ['id' => Settings::LANGUAGE, 'value' => 'en'],
            ['id' => Settings::SVG_LOGO, 'value' => 'logo.svg'],
            ['id' => Settings::STORE_NAME, 'value' => 'My Store'],
            ['id' => Settings::STORE_ADDRESS, 'value' => '123 Street'],
            ['id' => Settings::STORE_PHONE_NUMBER, 'value' => '123456789'],
            ['id' => Settings::STORE_WEBSITE, 'value' => 'www.example.com'],
            ['id' => Settings::STORE_EMAIL, 'value' => 'info@example.com'],
            ['id' => Settings::STORE_ADDITIONAL_INFO, 'value' => 'Additional Info'],
            ['id' => Settings::DEFAULT_TAX_RATE, 'value' => 10.0],
            ['id' => Settings::VAT_TYPE, 'value' => 'inclusive'],
            ['id' => Settings::DEFAULT_DELIVERY_CHARGE, 'value' => 5.0],
            ['id' => Settings::DEFAULT_DISCOUNT, 'value' => 0.0],
            ['id' => Settings::NEW_ITEM_AUDIO, 'value' => true],
            ['id' => Settings::TIMEZONE, 'value' => 'UTC'],
            ['id' => Settings::DATE_FORMATE, 'value' => 'Y-m-d'],
            ['id' => Settings::TIME_FORMATE, 'value' => 'H:i:s'],
            ['id' => Settings::CURRENCY_SYMBOL, 'value' => '$'],
            ['id' => Settings::CURRENCY_POSITION, 'value' => 'before'],
            ['id' => Settings::CURRENCY_THOUSAND_SEPARATOR, 'value' => ','],
            ['id' => Settings::CURRENCY_DECIMAL_SEPARATOR, 'value' => '.'],
            ['id' => Settings::CURRENCY_PRECISION, 'value' => 2],
            ['id' => Settings::SHOW_TRAILING_ZEROS, 'value' => true],
            ['id' => Settings::SHOW_EXCHANGE_RATE_ON_RECEIPT, 'value' => false],
            ['id' => Settings::ENABLE_EXCHANGE_RATE_FOR_ITEMS, 'value' => false],
            ['id' => Settings::EXCHANGE_RATE, 'value' => 1.0],
            ['id' => Settings::EXCHANGE_CURRENCY, 'value' => 'USD'],
            ['id' => Settings::ENABLE_TAKEOUT_AND_DELIVERY, 'value' => true],
            ['id' => Settings::ENABLE_CASH_DRAWER, 'value' => true],
            ['id' => Settings::STARTING_CASH, 'value' => 100.0],
        ];

        foreach ($defaultSettings as $setting) {
            Settings::updateOrCreate(['id' => $setting['id']], $setting);
        }
    }
}
