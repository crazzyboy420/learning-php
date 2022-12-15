   <?php require_once "partials/header.php"; ?>
   <?php require_once "partials/banner.php" ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="h-96">
                    <ul>
                        <li><a class="inline-block py-4 text-blue-500" href="notes">Go back</a></li>
                        <li><?= htmlspecialchars($note["body"]);  ?></li>
                    </ul>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
   <?php require_once "partials/footer.php"; ?>