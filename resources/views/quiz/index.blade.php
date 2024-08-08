<!DOCTYPE html>
<html lang="id">
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
   <!-- Custom CSS -->
   <style>
       .form_items ul {
           padding: 0;
           margin: 0;
           list-style: none;
           display: flex;
           flex-direction: column;
       }

       .form_items li {
           margin-bottom: 15px;
       }

       .form_items label {
           display: flex;
           align-items: center;
           cursor: pointer;
           padding: 10px;
           border-radius: 25px;
           border: 1px solid #ddd;
           transition: background-color 0.3s, border-color 0.3s;
       }

       .form_items label:hover {
           background-color: #f0f0f0;
           border-color: #ccc;
       }

       .label-pointer {
           display: inline-block;
           width: 30px;
           height: 30px;
           line-height: 30px;
           text-align: center;
           border-radius: 50%;
           background-color: #eee;
           margin-right: 10px;
           font-size: 16px;
           color: #333;
       }

       .label-content {
           flex: 1;
           text-align: left;
       }

       input[type="radio"]:checked + .label-content {
           background-color: #007bff;
           color: white;
       }

       .form_btn {
           text-align: center;
       }

       .form_btn button {
           margin: 0 10px;
           padding: 10px 20px;
       }
   </style>
</head>
<body class="boxed-version">

   <div class="wrapper position-relative">
      <div class="container-fluid px-5">
         <div class="step_bar_content ps-5 pt-5">
            <h5 class="text-white text-uppercase d-inline-block">Pertanyaan dan Jawaban Kuesioner</h5>
         </div>
         <div class="progress_bar steps_bar mt-3 ps-5 d-inline-block">
            @for ($i = 1; $i <= count($questions); $i++)
               <div class="step rounded-pill d-inline-block text-center position-relative {{ $i === 1 ? 'active current' : '' }}">{{ $i }}</div>
            @endfor
         </div>
         <form class="multisteps_form position-relative" id="wizard" method="POST" action="SubmitQuiz">
            @csrf
            @foreach ($questions as $index => $question)
               <div class="multisteps_form_panel {{ $index === 0 ? 'active' : '' }}" data-animation="slideVert">
                  <div class="form_content">
                     <div class="row">
                        <div class="col-lg-4">
                           <div class="form_title ps-5">
                              <h1 class="text-white">{{ $question->question }}</h1>
                           </div>
                        </div>
                        <div class="col-lg-4 text-center">
                           <div class="form_img">
                              <img src="{{ asset('QuizAssets/images/bg_1.png') }}" alt="gambar_tidak_ditemukan">
                           </div>
                        </div>
                        <div class="col-lg-4 text-end">
                           <div class="form_items radio-list">
                              <ul class="text-uppercase list-unstyled">
                                 <li>
                                    <label for="opt_1_{{ $index }}" class="step_{{ $index + 1 }} rounded-pill animate__animated animate__fadeInRight animate_25ms">
                                       <div style="margin-top:-15px;"><span class="label-pointer rounded-pill text-center"><div style="margin-top:-15px;margin-left:-5px;">A</div></span></div>
                                       <input type="radio" class="required" id="opt_1_{{ $index }}" name="stp_{{ $index + 1 }}_select_option" value="0">
                                       <span class="label-content d-inline-block text-center rounded-pill">Tidak sama sekali</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label for="opt_2_{{ $index }}" class="step_{{ $index + 1 }} rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                    <div style="margin-top:-15px;"><span class="label-pointer rounded-pill text-center"><div style="margin-top:-15px;margin-left:-5px;">B</div></span></div>
                                       <input type="radio" id="opt_2_{{ $index }}" name="stp_{{ $index + 1 }}_select_option" value="1">
                                       <span class="label-content d-inline-block text-center rounded-pill">Beberapa hari</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label for="opt_3_{{ $index }}" class="step_{{ $index + 1 }} rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                    <div style="margin-top:-15px;"><span class="label-pointer rounded-pill text-center"><div style="margin-top:-15px;margin-left:-5px;">C</div></span></div>
                                       <input type="radio" id="opt_3_{{ $index }}" name="stp_{{ $index + 1 }}_select_option" value="2">
                                       <span class="label-content d-inline-block text-center rounded-pill">Lebih dari setengah hari</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label for="opt_4_{{ $index }}" class="step_{{ $index + 1 }} animate__animated animate__fadeInRight animate_150ms">
                                    <div style="margin-top:-15px;"><span class="label-pointer rounded-pill text-center"><div style="margin-top:-15px;margin-left:-5px;">D</div></span></div>
                                       <input type="radio" id="opt_4_{{ $index }}" name="stp_{{ $index + 1 }}_select_option" value="3">
                                       <span class="label-content d-inline-block text-center rounded-pill">Hampir setiap hari</span>
                                    </label>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form_btn py-5 d-flex justify-content-center align-items-center">
                     @if ($index > 0)
                        <button type="button" class="js-btn-prev f_btn rounded-pill text-uppercase" id="prevBtn"> Pertanyaan Sebelumnya <span><i class="fas fa-arrow-left ps-1"></i></span></button>
                     @endif
                     @if ($index < count($questions) - 1)
                        <button type="button" class="js-btn-next f_btn rounded-pill active text-uppercase" id="nextBtn"> Pertanyaan Berikutnya <span><i class="fas fa-arrow-right ps-1"></i></span></button>
                     @else
                        <button type="submit" class="f_btn rounded-pill active text-uppercase" id="submitBtn"> Kirim <span><i class="fas fa-arrow-right ps-1"></i></span></button>
                     @endif
                  </div>
               </div>
            @endforeach
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
