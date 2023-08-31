<nav>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>

        <? if (isset($_SESSION['user']) && $_SESSION['user'] === "admin"): ?>
            <li>
                <a href="products.php">Products</a>
            </li>
        <? else: ?>
            <li>
                <a href="products.php">No products</a>
            </li>
        <? endif; ?>

        <li>
            <a href="index.php">Sign In</a>
        </li>

        <li>
            <a href="index.php">Sign Up</a>
        </li>
    </ul>
</nav>