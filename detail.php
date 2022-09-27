<?php
include 'data.php';
include 'functions.php';

$personParam = $_GET["id"];
$person = $people[$_GET['id']];
?>

<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<body>
    <link rel="stylesheet" href="assets/css/detail.css" />
    <title>
        <?php echo 'ASE 230 - ' . $person['name']; ?>
    </title>
    <div class="container text-center mb-5">
			<a href="index.php" type="button" class="btn btn-primary">Return to Index Page</a>
        <h1>
            <?php echo 'This is ASE 230 - ' . $person['name']; ?>
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="mb-2">
                    <?php echo '<img class="w-100" src=' . $person['image'] .' alt="" />'; ?>
                </div>
                <div class="mb-2 d-flex">
                    <h4 class="font-weight-normal">
                        <?php echo $person['name']; ?>
                    </h4>
                    <div class="social d-flex ml-auto">
                        <p class="pr-2 font-weight-normal">
                            <?php echo 'Follow me on:'; ?>
                        </p>
                        <a href="#NoSocialMedia" class="text-muted mr-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#NoSocialMedia" class="text-muted mr-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#NoSocialMedia" class="text-muted mr-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href=<?= $person['linkedin']; ?> class="text-muted">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
					<p class="font-weight-normal">
                        <?php echo "Age: " . GetAge($person['birthday']); ?>
                    </p>
					 <p class="font-weight-normal">
                        <?php echo "Born: " . GetTime($person['birthday']); ?>
                    </p>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="media">
                            <?php echo '<span class="w-25 text-black font-weight-normal">Dream profession:</span>'; ?>
                            <?php echo '<label class="media-body">' . $person['profession'] .'</label>'; ?>
                        </li>
                        <li class="media">
                            <?php echo '<span class="w-25 text-black font-weight-normal">Dream company:</span>'; ?>
                            <?php echo '<label class="media-body">' . $person['company'] .'</label>'; ?>
                        </li>
                        <li class="media">
                            <?php echo '<span class="w-25 text-black font-weight-normal">Email: </span>'; ?>
                            <?php echo '<label class="media-body">' . $person['email'] .'</label>'; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 pl-xl-3">
                <?php echo '<h5 class="font-weight-normal">Short intro</h5>'; ?>
                <p>
                    <?php echo $person['intro']; ?>
                </p>
                <div class="my-2 bg-light p-2">
                    <p class="font-italic mb-0">
                        <?php echo $person['quote']; ?>
                    </p>
                </div>
                <div class="mb-2 mt-2 pt-1">
                    <h5 class="font-weight-normal">
                        <?php echo 'Top skills'; ?>
                    </h5>
                </div>
                <?php foreach ($people[$_GET['id']]['skills'] as $name => $e) : ?>
                <div class="py-1">
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style=<?= "'width: " . $e . "%'"; ?> aria-valuenow=<?= $e; ?> aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar-title">
                                <?php echo $name; ?>
                            </div>
                            <span class="progress-bar-number">
                                <?php echo $e . "%"; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <h5 class="font-weight-normal">
                    <?php echo 'Fun fact'; ?>
                </h5>
                <p>
                    <?php echo $person['funFact']; ?>
                </p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>