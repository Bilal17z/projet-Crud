<?php
require dirname(__DIR__) . '\functions\project.fn.php';
$results = getAllProjects($db);
var_dump($results);

?>
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <?php foreach($results as $result){ ?>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="index.php?id=<?= $result['id']; ?>" title="Project Name">
                    <img class="img-fluid" src="<?= $result['image_path']; ?>" alt="mignature du projet <?= $result['name']; ?>" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50"><?= $result['category']; ?></div>
                        <div class="project-name"><?= $result['name']; ?></div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>