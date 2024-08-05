<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kuesioner</title>
   <!-- FontAwesome-cdn include -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Google fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
   <!-- Bootstrap-css include -->
   <link rel="stylesheet" href="{{ asset('QuizAssets/css/bootstrap.min.css') }}">
   <!-- Animate-css include -->
   <link rel="stylesheet" href="{{ asset('QuizAssets/css/animate.min.css') }}">
   <!-- Main-StyleSheet include -->
   <link rel="stylesheet" href="{{ asset('QuizAssets/css/style.css') }}">
</head>
<body class="boxed-version">

   <div class="wrapper position-relative">
      <div class="container-fluid px-5">
         <div class="step_bar_content ps-5 pt-5">
            <h5 class="text-white text-uppercase d-inline-block">Quiz Questions and Answers</h5>
         </div>
         <div class="progress_bar steps_bar mt-3 ps-5 d-inline-block">
            <div class="step rounded-pill d-inline-block text-center position-relative active current">1</div>
            <div class="step rounded-pill d-inline-block text-center position-relative">2</div>
            <div class="step rounded-pill d-inline-block text-center position-relative">3</div>
            <div class="step rounded-pill d-inline-block text-center position-relative">4</div>
         </div>
         <form class="multisteps_form position-relative" id="wizard" method="POST" action="../mail.php">
            <!------------------------- Step-1 ----------------------------->
            <div class="multisteps_form_panel active" data-animation="slideVert">
               <div class="form_content">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form_title ps-5">
                           <h1 class="text-white">Sedikit minat atau kesenangan dalam melakukan hal apapun</h1>
                        </div>
                     </div>
                     <div class="col-lg-4 text-center">
                        <div class="form_img">
                           <img src="{{ asset('QuizAssets/images/bg_1.png') }}" alt="image_not_found">
                        </div>
                     </div>
                     <div class="col-lg-4 text-end">
                        <div class="form_items radio-list">
                           <ul class="text-uppercase list-unstyled">
                              <li>
                                 <label for="opt_1" class="step_1 rounded-pill animate__animated animate__fadeInRight animate_25ms active">
                                    <span class="label-pointer rounded-pill text-center">A</span>
                                    <input type="radio" id="opt_1" name="stp_1_select_option" value="Jawaban A" checked>
                                    <span class="label-content d-inline-block text-center rounded-pill">Jawaban A</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_2" class="step_1 rounded-pill  animate__animated animate__fadeInRight animate_50ms">
                                    <span class="label-pointer rounded-pill text-center">B</span>
                                    <input type="radio" id="opt_2" name="stp_1_select_option" value="Jawaban A">
                                    <span class="label-content d-inline-block text-center rounded-pill">Jawaban A</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_3" class="step_1 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                    <span class="label-pointer rounded-pill text-center">C</span>
                                    <input type="radio" id="opt_3" name="stp_1_select_option" value="Jawaban A">
                                    <span class="label-content d-inline-block text-center rounded-pill">Jawaban A</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_4" class="step_1 animate__animated animate__fadeInRight animate_150ms">
                                    <span class="label-pointer rounded-pill text-center">D</span>
                                    <input type="radio" id="opt_4" name="stp_1_select_option" value="Jawaban A">
                                    <span class="label-content d-inline-block text-center rounded-pill">Jawaban A</span>
                                 </label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!---------- Form Button ---------->
               <div class="form_btn py-5 d-flex justify-content-center align-items-center">
                  <button type="button" class="js-btn-next f_btn rounded-pill active text-uppercase" id="nextBtn"> Next Question <span><i class="fas fa-arrow-right ps-1"></i></span></button>
               </div>
            </div>
            <!------------------------- Step-2 ----------------------------->
            <div class="multisteps_form_panel" data-animation="slideVert">
               <div class="form_content">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form_title ps-5">
                           <h1 class="text-white">Which option best Describes your Job?</h1>
                        </div>
                     </div>
                     <div class="col-lg-4 text-center">
                        <div class="form_img">
                           <img src="{{ asset('QuizAssets/images/bg_2.png') }}" alt="image_not_found">
                        </div>
                     </div>
                     <div class="col-lg-4 text-end">
                        <div class="form_items radio-list">
                           <ul class="text-uppercase list-unstyled">
                              <li>
                                 <label for="opt_5" class="step_2 rounded-pill animate__animated animate__fadeInRight animate_25ms">
                                    <span class="label-pointer rounded-circle text-center">A</span>
                                    <input type="radio" id="opt_5" class="required" name="stp_2_select_option" value="business" required>
                                    <span class="label-content d-inline-block text-center rounded-pill">business</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_6" class="step_2 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                    <span class="label-pointer rounded-circle text-center">B</span><input type="radio" id="opt_6" name="stp_2_select_option" value="Employee">
                                    <span class="label-content d-inline-block text-center rounded-pill">Employee</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_7" class="step_2 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                    <span class="label-pointer rounded-circle text-center">C</span><input type="radio" id="opt_7" name="stp_2_select_option" value="Journalist">
                                    <span class="label-content d-inline-block text-center rounded-pill">Journalist</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_8" class="step_2 animate__animated animate__fadeInRight animate_150ms">
                                    <span class="label-pointer rounded-circle text-center">D</span><input type="radio" id="opt_8" name="stp_2_select_option" value="Other">
                                    <span class="label-content d-inline-block text-center rounded-pill">Other</span>
                                 </label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!---------- Form Button ---------->
               <div class="form_btn py-5 d-flex justify-content-center align-items-center">
                  <button type="button" class="js-btn-prev f_btn rounded-pill text-uppercase" id="prevBtn"> Previous Question <span><i class="fas fa-arrow-right ps-1"></i></span></button>
                  <button type="button" class="js-btn-next f_btn rounded-pill active text-uppercase" id="nextBtn"> Next Question <span><i class="fas fa-arrow-right ps-1"></i></span></button>
               </div>
            </div>
            <!------------------------- Step-3 ----------------------------->
            <div class="multisteps_form_panel" data-animation="slideVert">
               <div class="form_content">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form_title ps-5">
                           <h1 class="text-white">In Your Childhood What is Your Favorite Chocolate</h1>
                        </div>
                     </div>
                     <div class="col-lg-4 text-center">
                        <div class="form_img">
                           <img src="{{ asset('QuizAssets/images/bg_3.png') }}" alt="image_not_found">
                        </div>
                     </div>
                     <div class="col-lg-4 text-end">
                        <div class="form_items radio-list">
                           <ul class="text-uppercase list-unstyled">
                              <li>
                                 <label for="opt_9" class="step_3 rounded-pill animate__animated animate__fadeInRight animate_25ms">
                                    <span class="label-pointer rounded-circle text-center">A</span>
                                    <input type="radio" id="opt_9" class="required" name="stp_3_select_option" value="Diary Milk" required>
                                    <span class="label-content d-inline-block text-center rounded-pill">Diary Milk</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_10" class="step_3 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                    <span class="label-pointer rounded-circle text-center">B</span>
                                    <input type="radio" id="opt_10" name="stp_3_select_option" value="Kit Kat">
                                    <span class="label-content d-inline-block text-center rounded-pill">Kit Kat</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_11" class="step_3 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                    <span class="label-pointer rounded-circle text-center">C</span>
                                    <input type="radio" id="opt_11" name="stp_3_select_option" value="LuvIt">
                                    <span class="label-content d-inline-block text-center rounded-pill">LuvIt</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_12" class="step_3 animate__animated animate__fadeInRight animate_150ms">
                                    <span class="label-pointer rounded-circle text-center">D</span>
                                    <input type="radio" id="opt_12" name="stp_3_select_option" value="Other">
                                    <span class="label-content d-inline-block text-center rounded-pill">Other</span>
                                 </label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!---------- Form Button ---------->
               <div class="form_btn py-5 d-flex justify-content-center align-items-center">
                  <button type="button" class="js-btn-prev f_btn rounded-pill text-uppercase" id="prevBtn"> Previous Question <span><i class="fas fa-arrow-right ps-1"></i></span></button>
                  <button type="button" class="js-btn-next f_btn rounded-pill active text-uppercase" id="nextBtn"> Next Question <span><i class="fas fa-arrow-right ps-1"></i></span></button>
               </div>
            </div>
            <!------------------------- Step-4 ----------------------------->
            <div class="multisteps_form_panel" data-animation="slideVert">
               <div class="form_content">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form_title ps-5">
                           <h1 class="text-white">What is Your Favorite Place</h1>
                        </div>
                     </div>
                     <div class="col-lg-4 text-center">
                        <div class="form_img">
                           <img src="{{ asset('QuizAssets/images/bg_4.png') }}" alt="image_not_found">
                        </div>
                     </div>
                     <div class="col-lg-4 text-end">
                        <div class="form_items radio-list">
                           <ul class="text-uppercase list-unstyled">
                              <li>
                                 <label for="opt_13" class="step_4 rounded-pill animate__animated animate__fadeInRight animate_25ms">
                                    <span class="label-pointer rounded-circle text-center">A</span>
                                    <input type="radio" id="opt_13" class="required" name="stp_4_select_option" value="Ladakh" required>
                                    <span class="label-content d-inline-block text-center rounded-pill">Ladakh</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_14" class="step_4 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                    <span class="label-pointer rounded-circle text-center">B</span>
                                    <input type="radio" id="opt_14" name="stp_4_select_option" value="Goa">
                                    <span class="label-content d-inline-block text-center rounded-pill">Goa</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_15" class="step_4 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                    <span class="label-pointer rounded-circle text-center">C</span>
                                    <input type="radio" id="opt_15" name="stp_4_select_option" value="Kerala">
                                    <span class="label-content d-inline-block text-center rounded-pill">Kerala</span>
                                 </label>
                              </li>
                              <li>
                                 <label for="opt_16" class="step_4 animate__animated animate__fadeInRight animate_150ms">
                                    <span class="label-pointer rounded-circle text-center">D</span>
                                    <input type="radio" id="opt_16" name="stp_4_select_option" value="Other">
                                    <span class="label-content d-inline-block text-center rounded-pill">Other</span>
                                 </label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!---------- Form Button ---------->
               <div class="form_btn py-5 d-flex justify-content-center align-items-center">
                  <button type="button" class="js-btn-prev f_btn rounded-pill text-uppercase" id="prevBtn"> Previous Question <span><i class="fas fa-arrow-right ps-1"></i></span></button>
                  <button type="submit" class="f_btn rounded-pill active text-uppercase" id="submitBtn"> Submit <span><i class="fas fa-arrow-right ps-1"></i></span></button>
               </div>
            </div>
         </form>
      </div>
   </div>

   <!-- jQuery-js include -->
   <script src="{{ asset('QuizAssets/js/jquery-3.6.0.min.js') }}"></script>
   <!-- Bootstrap-js include -->
   <script src="{{ asset('QuizAssets/js/bootstrap.min.js') }}"></script>
   <!-- jQuery-validate-js include -->
   <script src="{{ asset('QuizAssets/js/jquery.validate.min.js') }}"></script>
   <!-- Custom-js include -->
   <script src="{{ asset('QuizAssets/js/script.js') }}"></script>
</body>
</html>
