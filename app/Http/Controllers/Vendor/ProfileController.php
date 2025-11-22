<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\FinancialUpdateRequest;
use App\Http\Requests\User\FirmUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\User\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index(){
        return view('vendor.profile.index');
    }

    public function update(ProfileUpdateRequest $request)
    {
        $user = auth()->user();

        // 1. Get valid data
        $validated = $request->validated();

        // 2. Handle Image Upload
        // ✅ Use 'profile_photo' everywhere
        if ($request->hasFile('profile_picture')) {

            // Delete old file if it exists in DB
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            // Store new file
            $validated['profile_picture'] = $request->file('profile_picture')
                ->store("uploads/users/{$user->id}", 'public');
        }

        // 3. Update User
        $user->update($validated);

        return back()->with('success', 'Profile updated successfully!');
    }

    public function updateFinancials(FinancialUpdateRequest $request)
    {
        $user = auth()->user();
        $validated = $request->validated();

        // Helper function to handle uploads to avoid repeating code
        $uploadFile = function ($fieldName, $dbColumnName) use ($request, $user, &$validated) {
            if ($request->hasFile($fieldName)) {
                // Delete old file if exists
                if ($user->$dbColumnName) {
                    Storage::disk('public')->delete($user->$dbColumnName);
                }
                // Save new file
                $validated[$dbColumnName] = $request->file($fieldName)
                    ->store("uploads/users/{$user->id}/{$fieldName}", 'public');
            }
            unset($validated[$fieldName]);
        };

        // Process the 3 files
        // format: uploadFile('input_name', 'database_column')
        $uploadFile('pan_photo', 'pan_photo_path');
        $uploadFile('aadhar_photo', 'aadhar_photo_path');
        $uploadFile('upi_qr', 'upi_qr_path');

        unset($validated['pan_photo']);
        unset($validated['aadhar_photo']);
        unset($validated['upi_qr']);

        $user->financial()->updateOrCreate(
            ['user_id' => $user->id],
            $validated
        );


        return back()->with('success', 'KYC details updated successfully!');
    }

    public function updateFirmDetails(FirmUpdateRequest $request)
    {
        // 1. Validate (Handled by Request)
        $validated = $request->validated();

        // 2. Update User
        $user = auth()->user();

        // If firm does not exist yet, create it
        $user->firm()->updateOrCreate(
            ['user_id' => $user->id],
            $validated
        );

        // 3. Return
        return back()->with('success', 'Firm details updated successfully!');
    }
}
