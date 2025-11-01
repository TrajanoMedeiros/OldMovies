<?php
$filmes = [
    [
        'id' => 1,
        'titulo' => 'A General (1926)',
        'poster' => 'https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/92/49/12/20202917.jpg',
        'video' => 'https://archive.org/download/TheGeneral1926/TheGeneral1926.mp4'
    ],
    [
        'id' => 2,
        'titulo' => 'Nosferatu (1922)',
        'poster' => 'https://images.eu-west-1.prod.magine.com/i/filmicca/v/164c30c6-2fb7-4130-bc37-a65b9fdd97ff.jpg',
        'video' => 'https://www.youtube.com/watch?v=-l2uo7h3c1U&t=2611s'
    ],
    [
        'id' => 3,
        'titulo' => 'Viagem à Lua (1902',
        'poster' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/92/15/32/20183442.jpg',
        'video' => 'https://www.youtube.com/watch?v=S5dG3Skdq6U'
    ],
     [
        'id' => 4,
        'titulo' => 'A Saída dos Operários da Fábrica Lumière (1895)',
        'poster' => 'https://m.media-amazon.com/images/M/MV5BYjdkY2I3ZDItMmY2MC00ZmU1LTk4NTYtMzcwMWM4MzYzOTA2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'video' => 'https://www.youtube.com/watch?v=xZx3eEr1pqc'
     ],
     [
        'id' => 5,
        'titulo' => 'O Garoto (1921)',
        'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREZeHeec_OA6QuiolKmnUgatqc_vmOM1agBA&s',
        'video' => 'https://www.youtube.com/watch?v=q1U0eKOOwsQ'
     ]
];
?>
<?php include 'includes/header.php'; ?>

<div class="container mt-4">
    <h2>Filmes Disponíveis</h2>
    <div class="row">
        <?php foreach ($filmes as $f): ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="<?= $f['poster'] ?>" class="card-img-top" alt="<?= $f['titulo'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $f['titulo'] ?></h5>
                        <a href="filme.php?id=<?= $f['id'] ?>" class="btn btn-primary">Assistir</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
