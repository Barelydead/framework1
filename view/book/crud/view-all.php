<?php

namespace Anax\View;

/**
 * View to display all books.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToCreate = url("book/create");
$urlToDelete = url("book/delete");



?><h1>View all items</h1>

<p>
    <a href="<?= $urlToCreate ?>" class="btn btn-default">Create</a>
    <a href="<?= $urlToDelete ?>" class="btn btn-default">Delete</a>
</p>

<?php if (!$items) : ?>
    <p>There are no items to show.</p>
<?php
    return;
endif;
?>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
    </tr>
    <?php foreach ($items as $item) : ?>
    <tr>
        <td>
            <a href="<?= url("book/update/{$item->id}"); ?>" class="btn btn-warning"><?= $item->id ?></a>
        </td>
        <td><?= $item->title ?></td>
        <td><?= $item->author ?></td>
    </tr>
    <?php endforeach; ?>
</table>
