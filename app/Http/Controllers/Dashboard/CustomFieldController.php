<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CustomField\SaveCustomFieldRequest;
use Illuminate\Http\Request;

class CustomFieldController extends Controller
{
    public function __construct(protected \App\Http\Services\Dashboard\CustomFieldService $customFieldService, protected \App\Http\Services\Dashboard\CategoryService $categoryService) {}
    public function index(Request $request, $categoryId)
    {
        $customFields = $this->customFieldService->getCustomFieldsByCategoryId($categoryId);
        $categoryName = $this->categoryService->getCategoryNameById($categoryId)?->cat_name_ar ?? '';
        return view('dashboard.custom-fields.index', compact('customFields', 'categoryName'));
    }

    public function saveCustomField(SaveCustomFieldRequest $request)
    {
        $saved = $this->customFieldService->saveCustomField($request);
        return $saved ? redirect()->back()->with('success', 'تم حفظ الحقل بنجاح') : redirect()->back()->with('error', 'حدث خطاء');
    }

    public function delete(Request $request, $id)
    {
        $deleted = $this->customFieldService->deleteCustomField($id);
        return $deleted ? buildApiResponseHelper(true, 'تم حذف الحقل بنجاح') : buildApiResponseHelper(false, 'حدث خطاء');
    }
}
