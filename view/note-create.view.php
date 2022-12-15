   <?php require_once "partials/header.php"; ?>
   <?php require_once "partials/banner.php" ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="h-96">
                    <div>
                       <form action="" method="POST">
                        <label for="body" class="mb-2 text-xl block text-sm font-medium text-gray-700">Body</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <textarea name="body" id="body" class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Type your own note"><?= $_POST['body'] ?? '' ?></textarea>
                                <?php if(isset($errors)): ?>
                                <p class="text-sm text-red-500 mt-1"><?= $errors['body'] ?></p>
                                <?php endif;?>
                                <input class="py-2 px-4 rounded mt-4 bg-green-700 text-white cursor-pointer" type="submit" value="Save">
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
   <?php require_once "partials/footer.php"; ?>