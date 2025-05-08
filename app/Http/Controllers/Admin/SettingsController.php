<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdateContactSettingsRequest;
use App\Http\Requests\Settings\UpdateFooterSettingsRequest;
use App\Http\Requests\Settings\UpdateMapSettingsRequest;
use App\Http\Requests\Settings\UpdatePhotoSettingsRequest;
use App\Http\Requests\Settings\UpdateSeoSettingsRequest;
use App\Http\Requests\Settings\UpdateTopbarSettingsRequest;
use App\Models\Settings;
use App\Services\Core\HelperService;
use App\Services\SettingsService;

class SettingsController extends Controller
{
    protected SettingsService $settingsService;
    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService = $settingsService;
        // $this->timezoneService = $timezoneService;
    }

    public function index()
    {
        $settings = $this->settingsService->getSettings();
        $responseData = [
            'settings' => $settings
        ];
        return view('admin.settings.index', $responseData);
    }

    public function photoSettings(UpdatePhotoSettingsRequest $request, Settings $settings = null)
    {
        $validatedData = $request->validated();
        if($request->hasFile('logo_1')) {
            $validatedData['logo_1'] = HelperService::uploadPhoto(request()->file('logo_1'), 'settings_logo_1', $settings->logo_1 ?? null);
        }

        if($request->hasFile('logo_2')) {
            $validatedData['logo_2'] = HelperService::uploadPhoto($request->file('logo_2'), 'settings_logo_2', $settings->logo_2 ?? null);
        }

        if($request->hasFile('favicon')) {
            $validatedData['favicon'] = HelperService::uploadPhoto($request->file('favicon'), 'settings_favicon', $settings->favicon ?? null);
        }

        if($request->hasFile('banner')) {
            $validatedData['banner'] = HelperService::uploadPhoto($request->file('banner'), 'settings_banner', $settings->banner ?? null);
        }
        
        if(!$settings) {
            $settings = $this->settingsService->create($validatedData);
            $status = $settings ? 'success' : 'error';
            $message = $settings ? 'Photo\'s setting is created successfully' : 'Photo\'s setting could not be created successfully';
        } else {
            $isUpdated = $settings->update($validatedData);
            $status = $isUpdated ? 'success' : 'error';
            $message = $isUpdated ? 'Photo\'s setting is updated successfully' : 'Photo\'s setting could not be updated successfully';
        }
        return redirect()->back()->with($status, $message);
    }

    public function seoSettings(UpdateSeoSettingsRequest $request, Settings $settings)
    {
        $validatedData = $request->validated();
        $isUpdated = $settings->update($validatedData);
        $status = $isUpdated ? 'success' : 'error';
        $message = $isUpdated ? 'Seo\'s setting is updated successfully' : 'Seo\'s setting could not be updated successfully';
        return redirect()->back()->with($status, $message);
    }

    public function topbarSettings(UpdateTopbarSettingsRequest $request, Settings $settings)
    {
        $validatedData = $request->validated();
        $isUpdated = $settings->update($validatedData);
        $status = $isUpdated ? 'success' : 'error';
        $message = $isUpdated ? 'Topbar\'s setting is updated successfully' : 'Topbar\'s setting could not be updated successfully';
        return redirect()->back()->with($status, $message);
    }

    public function contactSettings(UpdateContactSettingsRequest $request, Settings $settings)
    {
        $validatedData = $request->validated();
        $isUpdated = $settings->update($validatedData);
        $status = $isUpdated ? 'success' : 'error';
        $message = $isUpdated ? 'Contact\'s setting is updated successfully' : 'Contact\'s setting could not be updated successfully';
        return redirect()->back()->with($status, $message);
    }

    public function footerSettings(UpdateFooterSettingsRequest $request, Settings $settings)
    {
        $validatedData = $request->validated();
        if($request->hasFile('footer_logo')) {
            $validatedData['footer_logo'] = HelperService::uploadPhoto(request()->file('footer_logo'), 'settings_footer_logo', $settings->footer_logo ?? null);
        }
        $isUpdated = $settings->update($validatedData);
        $status = $isUpdated ? 'success' : 'error';
        $message = $isUpdated ? 'Footer\'s setting is updated successfully' : 'Footer\'s setting could not be updated successfully';
        return redirect()->back()->with($status, $message);
    }

    public function mapSettings(UpdateMapSettingsRequest $request, Settings $settings)
    {
        $validatedData = $request->validated();
        if($request->hasFile('map_1_country_photo')) {
            $validatedData['map_1_country_photo'] = HelperService::uploadPhoto($request->file('map_1_country_photo'), 'settings_map_1_country_photo', $settings->map_1_country_photo ?? null);
        }
        if($request->hasFile('map_2_country_photo')) {
            $validatedData['map_2_country_photo'] = HelperService::uploadPhoto($request->file('map_2_country_photo'), 'settings_map_2_country_photo', $settings->map_2_country_photo ?? null);
        }
        $isUpdated = $settings->update($validatedData);
        $status = $isUpdated ? 'success' : 'error';
        $message = $isUpdated ? 'Map\'s setting is updated successfully' : 'Map\'s setting could not be updated successfully';
        return redirect()->back()->with($status, $message);
    }
}
