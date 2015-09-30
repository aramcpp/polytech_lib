<?php require_once 'views/header.php'; ?>
        <?php
            require_once 'includes/bookloader.php';

            if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
                $book = getBookByID($_GET["id"]-1);

                if ($book["description"] == NULL) {
                    $book["description"] = "<h1>No description.</h1>";
                }

                echo '<div class="book-info-block">
                    <img class="book-info-image" src="' . $book["image_path"] . '">
                    <button class="down" type="button">DOWNLOAD</button>
                    <div class="book-info-text">
                        <div class="book-text-block">
                            <div class="book-title-text big-title">
                                ' . $book["title"] . '
                            </div>
                            <div class="book-author-text info-author">
                                ' . $book["author"] . '
                            </div>
                        </div>
                        ' . $book["description"] . '
                    </div>
                </div>';
            } else {
                echo '<h1>Sorry, something went worng :(</h1>';
            }
        ?>
<?php require_once 'views/footer.php'; ?>
