<?php require_once 'views/header.php'; ?>
        <div class="book-shelf-block">
            <?php
                require_once './includes/bookloader.php';
                $bookinfo = getBookInfoArray();

                foreach ($bookinfo as $book) {
                    echo '<div class="book-block">
                        <a href="bookview.php?id=' . $book["id"] . '">
                            <img class="book-image-block" src="' . $book["image_path"] . '">
                        </a>

                        <div class="book-text-block">
                            <div class="book-title-text">
                                ' . $book["title"] . '
                            </div>
                            <div class="book-author-text">
                                ' . $book["author"] . '
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
<?php require_once 'views/footer.php'; ?>
