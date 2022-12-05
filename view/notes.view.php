   <?php require_once "partials/header.php"; ?>
   <?php require_once "partials/banner.php" ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                    <ul>
                        <?php foreach ($notes as $note): ?>
                           <li><?= $note["body"];  ?></li>
                         <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
   <?php require_once "partials/footer.php"; ?>