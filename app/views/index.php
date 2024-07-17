<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container">
        <div class="row g-5 py-5 row-cols-1 row-cols-lg-2">
            <div class="col order-last order-lg-first">
                <h1 class="display-5 fw-bold lh-1 mb-3">AvdragsBerserk: A Coding Project</h1>
                <h4 class="lead">
                    Cut down on payments with AvdragsBerserk (Payment Berserker), a loan calculator written in Javascript using loops, functions and DOM manipulations.
                </h4>
                <ul class="fa-ul pt-2 checklist">
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>CSS and Bootstrap Layout</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Javascript Fundamentals</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Javascript Loops</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Javascript Functions</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Javascript DOM Manipulation</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Javascript If/Then/Else</li>
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Javascript Boolean Logic</li>
                </ul>
                <div>
                    <a type="button" class="btn btn-outline-dark btn-lg px-4 me-md-2" href="<?php echo URLROOT; ?>/demo">Try It Out!</a>
                </div>
                <h5 class="fw-bold mt-5">
                    <div class="d-flex">
                        <div class="row">
                            <div class="col"><i class="fab fa-js-square fa-4x jsicon"></i></div>
                            <div class="col"><i class="fab fa-bootstrap fa-4x bsicon"></i></div>
                            <div class="col"><i class="fab fa-html5 fa-4x html5icon"></i></div>
                            <div class="col"><i class="fab fa-css3-alt fa-4x css3icon"></i></div>
                        </div>
                    </div>
                </h5>
            </div>
            <div class="col">
                <img src="img/AvdragsBerserk-logo.png" alt="App Logo" class="img-fluid center-block d-block mx-auto">
            </div>
        </div>
    </div>
</main>

<?php
require_once 'shared/footer.php';
?>