<?php

namespace App\Services\Core;

use Carbon\Carbon;

class HelperService
{
    public static function uploadPhoto($key, $fileName, $col = null)
    {
        $directory = public_path('uploads/');
        if(isset($col, $directory)) {
            $filePath = $directory . $col;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $finalName = $fileName . '-' . time() . '.' . $key->extension();
        $key->move($directory, $finalName);
        return $finalName;
    }

    public static function uploadPhotos($files, $fileNamePrefix, $col = null)
    {
        $uploadedFiles = [];
        $directory = public_path('uploads/');

        foreach ($files as $file) {
            if (isset($col, $directory)) {
                $filePath = $directory . $col;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $finalName = $fileNamePrefix . '-' . time() . '-' . uniqid() . '.' . $file->extension();
            $file->move($directory, $finalName);
            $uploadedFiles[] = $finalName;
        }

        return $uploadedFiles;
    }

    public static function getProgramTypes()
    {
        return [
            [ 'value' =>'trade show', 'text' => 'Trade Show' ],
            [ 'value' => 'conference', 'text' => 'Conference' ],
            [ 'value' => 'workshop', 'text' => 'Workshop' ],
            [ 'value' => 'seminar', 'text' => 'Seminar' ]
        ];
    }

    public static function getExecutiveRoles()
    {
        return [
            [ 'value' =>'member', 'text' => 'Member' ],
            [ 'value' => 'executive', 'text' => 'Executive' ]
        ];
    }

    public static function getNameTitles()
    {
        return [
            [ 'value' =>'mr.', 'text' => 'Mr.' ],
            [ 'value' => 'conference', 'text' => 'Mrs.' ],
            [ 'value' => 'miss', 'text' => 'Miss' ]
        ];
    }

    public static function getGenders()
    {
        return [
            [ 'value' =>'male', 'text' => 'Male' ],
            [ 'value' => 'female', 'text' => 'Female' ],
            [ 'value' => 'others', 'text' => 'Others' ]
        ];
    }

    public static function getEconomicStatuses()
    {
        return [
            [ 'value' =>'orphan', 'text' => 'Orphan' ],
            [ 'value' => 'ultra poor', 'text' => 'Ultra poor' ],
            [ 'value' => 'street children', 'text' => 'Street children' ]
        ];
    }

    public static function getSupportTypes()
    {
        return [
            [ 'value' =>'food', 'text' => 'Food' ],
            [ 'value' => 'cloth', 'text' => 'Cloth' ],
            [ 'value' => 'home', 'text' => 'Home' ],
            [ 'value' => 'education', 'text' => 'Education' ],
            [ 'value' => 'medication', 'text' => 'Medication' ]
        ];
    }

    public static function getRelationships()
    {
        return [
            [ 'value' =>'father', 'text' => 'Father' ],
            [ 'value' => 'mother', 'text' => 'Mother' ],
            [ 'value' => 'brother', 'text' => 'Brother' ],
            [ 'value' => 'sister', 'text' => 'Sister' ],
            [ 'value' => 'paternal grandfather', 'text' => 'Paternal grandfather' ],
            [ 'value' => 'maternal grandfather', 'text' => 'Maternal grandfather' ],
            [ 'value' => 'paternal grandmother', 'text' => 'Paternal grandmother' ],
            [ 'value' => 'maternal grandmother', 'text' => 'Maternal grandmother' ],
            [ 'value' => 'paternal uncle', 'text' => 'Paternal uncle' ],
            [ 'value' => 'maternal uncle', 'text' => 'Maternal uncle' ],
            [ 'value' => 'paternal aunty', 'text' => 'Paternal aunty' ],
            [ 'value' => 'maternal aunty', 'text' => 'Maternal aunty' ],
            [ 'value' => 'caregiver', 'text' => 'Caregiver' ],
            [ 'value' => 'none', 'text' => 'None' ]
        ];
    }

    public static function getFormattedDateTime($model)
    {
        return Carbon::parse($model->created_at)->format('l, j F, Y h:i A');
    }
}
