<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <h1 class="font-semibold">Create New Note</h1>

        <form class="max-w-sm mx-auto" method="POST">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                Note</label>
            <textarea id="body" name="body" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment..."><?= $_POST['body'] ?? '' ?></textarea>
            <p>
                <button
                    class="inline-block px-6 py-2 mt-4 text-sm font-medium leading-6 text-center text-white uppercase transition bg-blue-500 rounded shadow ripple hover:shadow-lg hover:bg-blue-600 focus:outline-none"
                    type="submit">Create Note</button>
            </p>
            <?php if (isset($errors['body'])): ?>
                <p class=" text-red-600 "><?= $errors['body'] ?></p>
            <?php endif; ?>
        </form>



    </div>
</main>
<?php require('views/partials/footer.php') ?>