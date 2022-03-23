<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path."/backend/config.php";
include_once($config);
include_once($path."/backend/BooksController.php");

$boeken =  getAllBooks()
?>

<?php foreach($boeken as $boek): ?>
    <tr>
        <td><?php echo $boek['title']; ?></td>
        <td><?php echo $boek['author']; ?></td>
        <td><?php echo $boek['description']; ?></td>
        <td><?php echo $boek['pages']; ?></td>
        <td><?php echo $boek['price']; ?></td>
    </tr>
<?php endforeach; ?>