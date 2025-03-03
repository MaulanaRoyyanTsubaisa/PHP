<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-blue-500 mb-2.5 underline ">
            <a href="/notes">Go Back</a>
        </p>
        <p> <?= htmlspecialchars($note['body']) ?></p>
        <form class="mt-4" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500" type="submit">delete</button>

            <a href="/note/edit?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">edit</a>
            <!-- <button class="text-sm text-blue-500">edit</button> -->
        </form>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>