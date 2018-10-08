<?php
namespace Controller;
use Model\CategoryManager;

class CategoryController
{
    /**
     * @return mixed
     */
    public function index()
    {
        $categoryManager = new CategoryManager();
        $categorys = $categoryManager->selectAllCategory();
        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showCategory.php';
    }
}