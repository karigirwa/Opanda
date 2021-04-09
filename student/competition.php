<?php
$title = "Student";
require_once 'includes/header.php';
?>

<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    O'Genius Panda
                </a>
            </li>
            <div class="sponsor">
                Sponsored by Master Card Foundation
            </div>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="#">Competition</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <div class="alert-black d-flex justify-content-between align-items-center h-nav">
        <div class="side-bar-menu" id="menu-toggle"><i class="fas fa-bars"></i></div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="test-id">Test ID: <b>#0121DE2</b></div>
            <button class="btn btn-outline-warning btn-sm" type="submit">logout</button>
        </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-4 col-sm-12">
                    <div class="alert alert-warning pad-3" role="alert">
                        <h5>High Ranking Challengers(List of at most 100)</h5>
                        <div class="chal-container alert alert-secondary">
                            <div class="chal-name alert alert-light text-center fw-bold text-uppercase pad-5">Muhire Johnson</div>
                            <div class="chal-content alert alert-light">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Subject:</span>
                                    <span class="text-end">Biology</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Academic Level:</span>
                                    <span class="text-end">1</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Units:</span>
                                    <span class="text-end">Unit1, Unit2, Unit3</span>
                                </div>
                            </div>
                            <div class="chal-mark alert alert-light">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Number of Challenges:</span>
                                    <span class="text-end">5</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Compound marks:</span>
                                    <span class="text-end">70/100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="alert alert-warning pad-3" role="alert">
                        <h5>Ongoing Challenges (O’Genious Panda allow 20 max)</h5>
                        <div class="chal-container alert alert-secondary">
                            <div class="chal-name alert alert-light text-center fw-bold text-uppercase pad-5">challenge</div>
                            <div class="chal-content alert alert-light">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Subject:</span>
                                    <span class="text-end">Biology</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Academic Level:</span>
                                    <span class="text-end">1</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Units:</span>
                                    <span class="text-end">Unit1, Unit2, Unit3</span>
                                </div>
                            </div>
                            <div class="chal-mark alert alert-light">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Number of Challenges:</span>
                                    <span class="text-end">5</span>
                                </div>
                                <div class="d-flex justify-content-between ">
                                    <span class="fw-bold">Compound marks:</span>
                                    <span class="text-end">70/100</span>
                                </div>
                            </div>
                            <div class="alert alert-info pad-5">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">Code:</span>
                                    <span class="text-end fw-bold">#000CDE3</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" name="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#courses">Statistics</button>
                                <button type="submit" name="submit" class="btn btn-info">Join Challenge</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="alert alert-warning pad-3" role="alert">
                        <h5>Challenges I Launched or Attempted</h5>
                        <div class="chal-container alert alert-secondary">
                            <div class="d-flex justify-content-between mb-2">
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Attempted</button>
                                <button type="submit" name="submit" class="btn btn-light btn-sm">Launched</button>
                            </div>
                            <div class="chal-name alert alert-light text-center fw-bold text-uppercase pad-5">Muhire Johnson</div>
                            <div class="chal-content alert alert-light">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Subject:</span>
                                    <span class="text-end">Biology</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Academic Level:</span>
                                    <span class="text-end">1</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Units:</span>
                                    <span class="text-end">Unit1, Unit2, Unit3</span>
                                </div>
                            </div>
                            <div class="chal-mark alert alert-light">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Number of Challenges:</span>
                                    <span class="text-end">5</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-bold">Compound marks:</span>
                                    <span class="text-end">70/100</span>
                                </div>
                            </div>
                            <div class="alert alert-info pad-5">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">Code:</span>
                                    <span class="text-end fw-bold">#000CDE3</span>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" name="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#courses">Statistics</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <!-- </div> -->
    <!-- /#wrapper -->
    <!-- Modal -->
</div>
<div class="modal fade" id="courses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <h3 class="mb-2">Performance List from the top</h3>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="chal-name alert alert-primary text-center fw-bold text-uppercase pad-5">1</div>
                        <div class="chal-name alert alert-light text-center fw-bold text-uppercase pad-5">#000CD23E</div>
                    </div>
                    <div class="chal-container alert alert-secondary">
                        <div class="chal-name alert alert-light text-center fw-bold text-uppercase pad-5">challenge</div>
                        <div class="chal-content alert alert-light">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Subject:</span>
                                <span class="text-end">Biology</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Academic Level:</span>
                                <span class="text-end">1</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Units:</span>
                                <span class="text-end">Unit1, Unit2, Unit3</span>
                            </div>
                        </div>
                        <div class="chal-mark alert alert-light">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Number of Challenges:</span>
                                <span class="text-end">5</span>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <span class="fw-bold">Compound marks:</span>
                                <span class="text-end">70/100</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'includes/footer.php'
?>