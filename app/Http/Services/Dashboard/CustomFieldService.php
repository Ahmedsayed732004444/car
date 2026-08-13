<?php

namespace App\Http\Services\Dashboard;

use App\Enums\CustomFieldTypeEnum;
use App\Http\Services\BaseService;
use App\Models\CustomField;
use Illuminate\Http\Request;

class CustomFieldService extends BaseService
{
    public function __construct(protected \App\Http\Repositories\Dashboard\CustomFieldRepository $customFieldRepository) {}

    public function getCustomFieldsByCategoryId($categoryId)
    {
        $this->validate(['categoryId' => $categoryId], ['categoryId' => 'required|integer|exists:categories,id']);

        return $this->customFieldRepository->getCustomFieldsByCategoryId($categoryId);
    }

    public function saveCustomField(Request $request)
    {
        return CustomField::updateOrCreate(
            ['category_id' => $request->categoryId, 'field_name' => $request->fieldName],
            [
                'label_ar' => $request->labelAr,
                'label_en' => $request->labelAr,
                'field_type' => $request->fieldType,
                'is_required' => $request->isRequired,
                'min_length' => $this->customMinLength($request->fieldType),
                'max_length' => $this->customMaxLength($request->fieldType),
            ]
        );
    }

    public function deleteCustomField($id)
    {
        $this->validate(['id' => $id], ['id' => 'required|integer|exists:custom_fields,id']);
        $model =  CustomField::where('id', $id)->first(['id']);
        return $model->delete();
    }

    private function customMinLength($minLength)
    {
        $value = null;
        if ($minLength == CustomFieldTypeEnum::Text->value || $minLength == CustomFieldTypeEnum::TextArea->value)
            $value = 1;

        return $value;
    }

    private function customMaxLength($maxLength)
    {
        $value = null;
        if ($maxLength == CustomFieldTypeEnum::Text->value)
            $value = 255;

        if ($maxLength == CustomFieldTypeEnum::TextArea->value)
            $value = 2000;

        return $value;
    }
}
