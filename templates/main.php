<main>
    <section>
        <img src="<?= $poster_url ?>" style="height: 600px; width: auto;" alt="Poster de la pelicula">
    </section>
    <hgroup>
        <h3><?= $title ?> - <?= $until_message ?></h3>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>La siguiente es: <?= $following_production["title"] ?></p>
    </hgroup>
</main>