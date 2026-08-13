<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\CategoryStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Category\StoreCategoryRequest;
use App\Http\Requests\Dashboard\Category\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function __construct(protected \App\Http\Services\Dashboard\CategoryService $categoryService) {}

    public function index()
    {
        $categories = $this->categoryService->all();

        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->categoryService->createCategory($request);
            DB::commit();
            return redirect()->route('dashboard.categories.index');
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return back()->withErrors(['error' => 'حدث خطأ غير متوقع، يرجى المحاولة مرة أخرى.']);
        }
    }

    public function edit($id)
    {
        $category = $this->categoryService->editCategory($id);
        Log::info($category);
        return view('dashboard.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->categoryService->updateCategory($request);
            DB::commit();
            return redirect()->route('dashboard.categories.index');
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return back()->withErrors(['error' => 'حدث خطأ غير متوقع، يرجى المحاولة مرة أخرى.']);
        }
    }

    public function delete(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->categoryService->deleteCategory($request, $id);
            DB::commit();
            return buildApiResponseHelper(true, 'تم حذف القسم بنجاح');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return buildApiResponseHelper(false, $e->getMessage());
        }
    }

    public function updateStatusActiveCategory(Request $request)
    {
        $updated = $this->categoryService->updateStatusActiveCategory($request);
        return $updated ? buildApiResponseHelper(true, 'تم تغيير حالة القسم بنجاح') : buildApiResponseHelper(false, 'حدث خطأ في تغيير حالة القسم');
    }
}
