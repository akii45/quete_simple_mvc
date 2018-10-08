<!DOCTYPE html>
<html>
<head> </head>
<body>
<section>
    <h1>Category</h1>
    <ul>
        <?php foreach ($categorys as $category) : ?>
            <li><?= $category['name'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>