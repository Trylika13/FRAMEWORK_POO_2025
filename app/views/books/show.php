<h2><?php echo $book->title; ?></h2>
<div>
    <?php echo $book->resume; ?>
</div>
<hr />
<ul>
    <li>Author:
        <?php echo $book->author->lastname; ?>
        <?php echo $book->author->firstname; ?>
    </li>
    <li>ISBN: <?php echo $book->isbn; ?></li>
    <li>Category: <?php echo $book->category->name; ?></li>
</ul>
<hr />