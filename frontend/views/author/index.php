<?php
/* @var $this yii\web\View */
/* @var $authorList[] frontend\models\Author */
use yii\helpers\Url;
?>

<h1>Authors</h1>
<a href="<?php echo Url::to(['author/create']);?>" class = "btn btn-primary">Create new author</a>
<table class = "table table-condensed">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($authorsList as $author): ?>
        <tr>
            <td><?php echo $author->id; ?></td>
            <td><?php echo $author->first_name; ?></td>
            <td><?php echo $author->last_name; ?></td>
            <td><a href="<?php echo Url::to(['author/update', 'id'=> $author->id]);?>">Edit</a></td>
            <td><a href="<?php echo Url::to(['author/delete', 'id'=> $author->id]);?>">Delete</a></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>