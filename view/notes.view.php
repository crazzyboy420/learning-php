   <?php require_once "partials/header.php"; ?>
   <?php require_once "partials/banner.php" ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="h-96">
                    <ul>
                        <?php foreach ($notes as $note): ?>
                           <li><a class="text-lime-700 text-lg mb-4 hover:text-lime-500" href="note?id=<?= $note['id'] ?>"><?= htmlspecialchars($note["body"])  ?></a></li>
                         <?php endforeach ?>

                         <a class="bg-green-500 text-white text-white mt-4 py-2 px-4 inline-block rounded" href="/note/create">Create Note</a>
                    </ul>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
   <?php require_once "partials/footer.php"; ?>