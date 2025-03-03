<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <h1 class="font-semibold">Edit Note</h1>

        <form class="max-w-sm mx-auto" method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                Note</label>
            <textarea id="body" name="body" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment..."><?= $note['body'] ?></textarea>
            <p>
                <button
                    class="inline-block px-6 py-2 mt-4 text-sm font-medium leading-6 text-center text-white uppercase transition bg-blue-500 rounded shadow ripple hover:shadow-lg hover:bg-blue-600 focus:outline-none"
                    type="submit">Update</button>
                <a href="/notes"
                    class="inline-block px-6 py-2 mt-4 text-sm font-medium leading-6 text-center text-white uppercase transition bg-blue-500 rounded shadow ripple hover:shadow-lg hover:bg-blue-600 focus:outline-none"
                    type="submit">Cancel</a>
            </p>
            <?php if (isset($errors['body'])): ?>
                <p class=" text-red-600 "><?= $errors['body'] ?></p>
            <?php endif; ?>
        </form>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>