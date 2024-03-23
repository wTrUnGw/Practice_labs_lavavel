/* This PHP code is including the "header.php" file at the beginning and the "footer.php" file at the
end of the page. In between, it is displaying an unordered list with two list items. The first list
item contains a link to the "product-list.php" page with the text "List of products". The second
list item contains a link to the "product-add.php" page with the text "More products". */
<?php
include_once("header.php");
?>
<!-- lab 4 là 4,5,6 -->
<ul>
    <li>
        <a href="product-list.php">List of products</a>
    </li>

    <li>
        <!-- TODO: Add the correct link and text for the "More products" page -->
        <a href="product-add.php">More products</a>
    </li>

</ul>

<?php
include_once("footer.php");
?>