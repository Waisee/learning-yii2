<?php
/* @var $this yii\web\View */
/* @var $bookList frontend\models\Book */
use yii\helpers\Url;
?>

<h1>Books!</h1>

<a href="<?php echo Url::to(['create'])?>" class="btn btn-primary">Create book</a>

<?php foreach ($bookList as $book): ?>
    <div>
        <h3><?php echo $book->name; ?></h3>
        <p><?php echo $book->getDatePublished(); ?></p>
        <p><?php echo $book->getPublisherName(); ?></p>

        <?php foreach ($book->getAuthors() as $author): ?>
            <p><?php echo $author->first_name . ' ' . $author->last_name; ?></p>
        <?php endforeach; ?>
    </div>
    <hr>
<?php endforeach; ?>

