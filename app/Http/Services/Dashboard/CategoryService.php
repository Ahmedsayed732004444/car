<?php

namespace App\Http\Services\Dashboard;

use App\Enums\CategoryStatusEnum;
use App\Enums\CommissionTypeEnum;
use App\Http\Services\BaseService;
use App\Utils\UploadUtils;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryService extends BaseService
{
    public function __construct(protected \App\Http\Repositories\Dashboard\CategoryRepository $categoryRepository) {}

    public function all()
    {
        return $this->categoryRepository->all();
    }

    public function createCategory(Request $request)
    {
        $imageName = UploadUtils::uploadImageToPublic($request->file, 'uploads/categories-icon');
        $commission = $request->commissionType == CommissionTypeEnum::Rate->value ? ($request->commission / 100) : $request->commission;

        $create = $this->categoryRepository->createCategory([
            'cat_name_ar' => $request->catNameAr,
            'cat_name_en' => $request->catNameAr,
            'cat_icon_path' => $imageName,
            'commission_type' => $request->commissionType,
            'commission' => $commission,
            'active' => CategoryStatusEnum::Inactive->value,
        ]);

        if ($request->categoryHasBrand) {
            $this->categoryRepository->addCategoryHasBrandField($create->id);
        }
    }

    public function editCategory($id)
    {
        return $this->categoryRepository->editCategory($id);
    }

    public function updateCategory(Request $request)
    {
        $imageName = UploadUtils::uploadImageToPublic($request->file, 'uploads/categories-icon');
        $commission = $request->commissionType == CommissionTypeEnum::Rate->value ? ($request->commission / 100) : $request->commission;

        $data = [
            'cat_name_ar' => $request->catNameAr,
            'cat_name_en' => $request->catNameAr,
            'commission_type' => $request->commissionType,
            'commission' => $commission,
        ];

        if (!empty($imageName)) {
            $data['cat_icon_path'] = $imageName;
        }

        $updated = $this->categoryRepository->updateCategory($data, $request->id);

        if ($request->categoryHasBrand) {
            $this->categoryRepository->updateCategoryHasBrandField($request->id);
        } else {
            $this->categoryRepository->deleteCategoryHasBrandField($request->id);
        }
    }

    public function deleteCategory(Request $request, $id)
    {
        $deleted = $this->categoryRepository->deleteCategory($id);
        if ($deleted)
            $this->categoryRepository->deleteCategoryHasBrandField($request->id);

        return $deleted;
    }

    public function updateStatusActiveCategory(Request $request)
    {
        $this->validate($request->all(), [
            'id' => 'required|integer|exists:categories,id',
            'status' => ['required', Rule::enum(CategoryStatusEnum::class)],
        ]);

        return $this->categoryRepository->updateCategory(['active' => $request->status], $request->id);
    }

    public function getCategoryNameById(int $categoryId)
    {
        return $this->categoryRepository->getCategoryNameById($categoryId);
    }
}
