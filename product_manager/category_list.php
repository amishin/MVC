<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category['categoryName']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_category">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->
    <form action="index.php" method="post" id="category_add">
        <input type="hidden" name="action" value="category_add">
        <label>Name:</label>
        <input type="text" name="category" />

        <input type="submit" value="Add">
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>