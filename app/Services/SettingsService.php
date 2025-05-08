<?php

namespace App\Services;

use App\Models\Settings;
use App\Services\Core\BaseModelService;

class SettingsService extends BaseModelService
{
    public function model(): string
    {
        return Settings::class;
    }

    public function getSettings()
    {
        return $this->model()::first();
    }
}
