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
        'video' => 'https://archive.org/embed/Nosferatu1922VHS'
    ],
    [
        'id' => 3,
        'titulo' => 'Viagem à Lua (1902)',
        'poster' => 'https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/92/15/32/20183442.jpg',
        'video' => 'https://archive.org/embed/LeVoyageDansLaLun'
    ],
    [
        'id' => 4,
        'titulo' => 'A Saída dos Operários da Fábrica Lumière (1895)',
        'poster' => 'https://m.media-amazon.com/images/M/MV5BYjdkY2I3ZDItMmY2MC00ZmU1LTk4NTYtMzcwMWM4MzYzOTA2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'video' => 'https://archive.org/embed/LaSortieDeLUsineLumireLyon'
    ],
    [
        'id' => 5,
        'titulo' => 'O Garoto (1921)',
        'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREZeHeec_OA6QuiolKmnUgatqc_vmOM1agBA&s',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ],
    [
        'id' => 6,
        'titulo' => 'Blackmail (1929)',
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/thumb/7/7b/Blackmail_1929_poster.jpg/250px-Blackmail_1929_poster.jpg',
        'video' => 'https://archive.org/embed/blackmail_1929'
    ],
    [
        'id' => 7,
        'titulo' => 'Steamboat Willie (1928)',
        'poster' => 'https://upload.wikimedia.org/wikipedia/commons/5/50/Steamboat_Willie_1928_Poster.png',
        'video' => 'https://archive.org/embed/steamboat-willie_1928'
    ],
    [
        'id' => 8,
        'titulo' => 'O Garoto (1921)',
        'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREZeHeec_OA6QuiolKmnUgatqc_vmOM1agBA&s',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ],
    [
        'id' => 9,
        'titulo' => 'O Garoto (1921)',
        'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREZeHeec_OA6QuiolKmnUgatqc_vmOM1agBA&s',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ],
    [
        'id' => 10,
        'titulo' => 'O Garoto (1921)',
        'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREZeHeec_OA6QuiolKmnUgatqc_vmOM1agBA&s',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ]
];
?>
<?php include 'includes/header.php'; ?>
<body>
<div class="container mt-4">
    <h2>Filmes Disponíveis</h2>
    <div class="row">
        <?php foreach ($filmes as $f): ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="<?= $f['poster'] ?>" class="card-img-top" alt="<?= $f['titulo'] ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title flex-grow-1"><?= $f['titulo'] ?></h5>
                        <a href="filme.php?id=<?= $f['id'] ?>" class="btn btn-primary mt-auto">Assistir</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
<?php include 'includes/footer.php'; ?>
