<?php
$title = "Courses";
require_once 'includes/header.php';
require_once 'db/connect.php';

if (isset($_POST['submit'])) {
    $subject= $_POST['subject'];
    $level= $_POST['level'];
    $units= $_POST['units'];
    $result = $crud->getExerciseQuest($subject, $level, $units);
}
?>

 <div class="search-container mb-2">
            <form action="evaluate_exercises.php" method="POST" class="">
                <div class="row p-3">
                    <div class="col-md-7 col-12 search-select">
                        <div class="form-group col-md-5 col-4">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" class="form-select input-color">
                                <option selected>Select</option>
                                <option>Biology</option>
                                <option>Chemistry</option>
                                <option>Agriculture</option>
                                <option>Physics</option>
                                <option>History</option>
                                <option>Mathematics</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3 col-4">
                            <label for="level">Level</label>
                            <select id="level" name="level" class="form-select input-color">
                                 <option selected>Select</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                <option> 5</option>
                                <option> 6</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="units">Units</label>
                            <select id="units" name="units" class="form-select input-color">
                                <option selected>Select</option>
                                <option>Unit 1</option>
                                <option>Unit 2</option>
                                <option>Unit 3</option>
                                <option>Unit 4</option>
                                <option>Unit 5</option>
                                <option>Unit 6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 search-select">
                        <div class="form-group mt-4 col-md-8 col-8">
                            <input type="search" class="form-control" name="search" placeholder="search...">
                        </div>
                        <div class="form-group mt-4 d-grid gap-2 col-md-3 col-3">
                            <button type="submit" name="submit" class="btn input-color">filter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

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
    <div class="col-lg-8 sidebar rounded content-size d-flex">
        <div class="content-header d-flex justify-content-between py-2">
            <a href="#wrapper">
                <div class="left-icon">
                    <i class="fas fa-align-left"></i>
                </div>
            </a>
        </div>
        <div class="mar-l p-2">
            <div class="mb-3">
                <div class="h6">Question data:</div>
                <div class="row mar-y-o">
                    <div class="card col-md-8 col-12 exercise-color">
                        <div class="card-body">
                            <!-- <span>panda_questions_auto_question_data</span> -->
                          <?php if (isset($result)) echo $result['panda_questions_auto_question_data']?>;
                          
                           
     
                        </div>
                    </div>
                    <div class="col-md-4 col-12 question-btn">
                        <button type="submit" name="submit" class="btn input-color" data-bs-toggle="modal" data-bs-target="#courses">Add your review</button>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="h6">Explanation data:</div>
                <div class="row mar-y-o">
                    <div class="card col-md-8 col-12 exercise-color">
                        <div class="card-body">
                            <span><?php if (isset($result)) echo $result['panda_answer_explanation']?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 question-btn">
                        <button type="submit" name="submit" class="btn input-color" data-bs-toggle="modal" data-bs-target="#courses">Add your review</button>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="h6">Answer Options</div>
                <div class="row mar-y-o">
                    <div class="card col-md-8 col-12 exercise-color">
                        <div class="card-body d-flex justify-content-between answer-options">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Answer options
                                </label>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#courses">Add your review</button>
                            </div>
                        </div>

                        <div class="card-body d-flex justify-content-between answer-options">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Answer options
                                </label>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#courses">Add your review</button>
                            </div>
                        </div>

                        <div class="card-body d-flex justify-content-between answer-options">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Answer options
                                </label>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#courses">Add your review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="courses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
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
                                        Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                                        Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                                        Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
                                        source.</p>
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