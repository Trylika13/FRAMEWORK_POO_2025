<aside class="space-y-4">
    <?php
    $categories = \App\Models\CategoriesRepository::findAll();
    include '../app/views/categories/index.php'
    ?>
</aside>