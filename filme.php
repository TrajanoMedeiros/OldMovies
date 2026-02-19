<?php
$filmes = [
    1 => [
        'titulo' => 'A General (1926)',
        'video' => 'https://archive.org/embed/TheGeneral1926'
    ],
    2 => [
        'titulo' => 'Nosferatu (1922)',
        'video' => 'https://archive.org/embed/Nosferatu1922VHS'
    ],
    3 => [
        'titulo' => 'Viagem à Lua (1902)',
        'video' => 'https://archive.org/embed/LeVoyageDansLaLun'
    ],
    4 => [
        'titulo' => 'A Saída dos Operários da Fábrica Lumière (1895)',
        'video' => 'https://archive.org/embed/LaSortieDeLUsineLumireLyon'
    ],
    5 => [
        'titulo' => 'O Garoto (1921)',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ],
    6 => [
        'titulo' => 'Blackmail (1929)',
        'video' => 'https://archive.org/embed/blackmail_1929'
    ],
    7 => [
        'titulo' => 'Steamboat Willie (1928)',
        'video' => 'https://archive.org/embed/steamboat-willie_1928'
    ],
    8 => [
        'titulo' => 'O Garoto (1921)',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ],
    9 => [
        'titulo' => 'O Garoto (1921)',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ],
    10 => [
        'titulo' => 'O Garoto (1921)',
        'video' => 'https://archive.org/embed/TheKid_201708'
    ]
];

$id = $_GET['id'] ?? null;
if (!$id || !isset($filmes[$id])) {
    die('Filme não encontrado.');
}
$filme = $filmes[$id];
include 'includes/header.php';
?>

<div class="container mt-4 text-center">
    <h2><?= htmlspecialchars($filme['titulo']) ?></h2>
    <div class="mt-4">
        <?php
        $video = $filme['video'];

        // Player do YouTube
        if (strpos($video, 'youtube.com') !== false || strpos($video, 'youtu.be') !== false) {
            preg_match('/(v=|be\/)([a-zA-Z0-9_-]+)/', $video, $match);
            $idVideo = $match[2] ?? '';
            echo "<iframe width='100%' height='500' src='https://www.youtube.com/embed/$idVideo' frameborder='0' allowfullscreen></iframe>";
        }
        // Player do Internet Archive (embed)
        elseif (strpos($video, 'archive.org/embed/') !== false) {
            echo "<iframe src='$video' width='100%' height='500' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
        }
        // Fallback: arquivo MP4 direto
        elseif (strpos($video, '.mp4') !== false) {
            echo "<video width='100%' height='500' controls>
                    <source src='$video' type='video/mp4'>
                    Seu navegador não suporta o elemento de vídeo.
                  </video>";
        }
        else {
            echo "<p>Formato de vídeo não reconhecido.</p>";
        }
        ?>
    </div>
    <a href="index.php" class="btn btn-secondary mt-3">← Voltar</a>
</div>

<?php include 'includes/footer.php'; ?>
