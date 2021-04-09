<?php
$title = "Courses";
require_once 'includes/header.php';
?>

<div class="row m-0">
    <div class="col-lg-4 p-4 sidebar rounded d-none d-lg-block" id="wrapper">
        <div class="overflow-auto hei63 scroll">
            <div class="card mb-3 sidebar-card-color">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Name:</span>
                        <span class="text-end">Biology of plants</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Subject:</span>
                        <span class="text-end">Senior 1 Biology</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Units:</span>
                        <span class="text-end">Unit 1, Unit 2, Unit 3</span>
                    </div>
                    <button type="submit" name="submit" class="btn input-color py-1 mt-2">Evaluate</button>
                </div>
            </div>

            <div class="card my-3 sidebar-card-color">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Name:</span>
                        <span class="text-end">Biology of plants</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Subject:</span>
                        <span class="text-end">Senior 1 Biology</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Units:</span>
                        <span class="text-end">Unit 1, Unit 2, Unit 3</span>
                    </div>
                    <button type="submit" name="submit" class="btn input-color py-1 mt-2">Evaluate</button>
                </div>
            </div>

            <div class="card sidebar-card-color">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Name:</span>
                        <span class="text-end">Biology of plants</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Subject:</span>
                        <span class="text-end">Senior 1 Biology</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-bold">Units:</span>
                        <span class="text-end">Unit 1, Unit 2, Unit 3</span>
                    </div>
                    <button type="submit" name="submit" class="btn input-color py-1 mt-2">Evaluate</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 sidebar rounded content-size">
        <div class="content-header d-flex justify-content-between py-2">
            <a href="#wrapper">
                <div class="left-icon">
                    <i class="fas fa-align-left"></i>
                </div>
            </a>

            <!-- <div class="h5 mt-2">Summary</div> -->

            <div class="form-group d-block col-md-3">
                <button type="submit" name="submit" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#courses">View this document</button>
            </div>

            <div class="form-group d-block col-md-3">
                <button type="submit" name="submit" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#courses">Add your review</button>
            </div>
        </div>

        <div class="page-content rounded overflow-auto hei40 scroll bg-light p-2 mb-3">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
                source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
                during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                section 1.10.32.</p>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
                1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
            </p>
        </div>

        <div class="d-flex justify-content-between pb-3">
            <button type="submit" name="submit" class="btn btn-light">Previous</button>
            <button type="submit" name="submit" class="btn btn-light">Next</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="courses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7 col-12">
                        <div class="page-content rounded overflow-auto hei65 scroll bg-light p-2 mb-3">
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
                                1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                                original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="page-content rounded overflow-auto hei30 scroll bg-light p-2 mb-3">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                        <div class="search-select">
                            <div class="form-group mt-4 col-md-8 col-8">
                                <input type="search" class="form-control" name="search" placeholder="your comment">
                            </div>
                            <div class="form-group mt-4 d-grid gap-2 col-md-3 col-3">
                                <button type="submit" name="submit" class="btn input-color">Add</button>
                            </div>
                        </div>
                        <div class="form-group mt-4 d-grid gap-2">
                            <button type="submit" name="submit" class="btn input-color">Send your update review</button>
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