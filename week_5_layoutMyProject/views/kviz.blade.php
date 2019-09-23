@extends('layouts.master')
@section('title', 'Kviz')

@section('content')
  <div class="container" style="margin-top:30px">
    <div class="row">
      <!-- Start left section -->
      <div class="col-sm-4 left">
        <div class="slika">
          <img src="images/kviz.png" alt="kviz" class="img-fluid rounded-circle">
        </div>
        <div class="gift">
                <i class="fa fa-check"></i>
                <i class="fa fa-times"></i>
                <h2>Tvoj rezultat</h2>
                <!--show score upon submit-->
                <div>
                    <h5 class="quizScore" id="userScore"></h5>
                </div>
    
          </div><!-- end gift-->
                <hr class="d-sm-none">
      </div><!-- end left-->
      
      <div class="col-sm-8 text-center kviz">
        <h2 class="quizHeader">Kreni sa kvizom!</h2>
    
      <table class="quiz" border=1 cellpadding="10" cellspacing="5">
      <tr>
        <td>
            <div>
                <p class="question">1. U kojem gradu sam provela djetinjstvo?</p>
  
              <ul>
              <input class="answer" type="radio" name="q1" value="1"> 
              <label id="correctString1">Jastrebarskom</label>
              <br>
              <input class="answer" type="radio" name="q1" value="0"> 
              <label>Karlovcu</label>
              <br>
              <input class="answer" type="radio" name="q1" value="0"> 
              <label>Banjoj Luci</label>
              </ul>
            </div>
        </td>
      </tr>

      <tr>
        <td>
            <div>
                <p class="question">2. Šta želim kao svoj rođendanski poklon?</p>
  
              <ul>
              <input class="answer" type="radio" name="q2" value="0"> Knjigu
              <label></label>
              <br>
              <input class="answer" type="radio" name="q2" value="1"> Bicikl
              <label id="correctString2"></label>
              <br>
              <input class="answer" type="radio" name="q2" value="0">Šešir
              <label></label>
              </ul>
            </div>
        </td>
      </tr>
      
      <tr>
        <td>
            <div>
                <p class="question">3. Šta je tema filma <i>Trancendence</i>?</p>
  
              <ul>
              <input class="answer" type="radio" name="q3" value="0"> Smrt
              <label></label>
              <br>
              <input class="answer" type="radio" name="q3" value="1"> Postoji li svijest u mašinama
              <label id="correctString3"></label>
              <br>
              <input class="answer" type="radio" name="q3" value="0"> Avanture dvoje mladih ljudi
              <label></label>
              </ul>
          </div>
        </td>
      </tr>

      <tr>
        <td>
            <div>
                <p class="question">4. Šta je budrovka?</p>
  
              <ul>
              <input class="answer" type="radio" name="q4" value="1"> Hvarska lavanda
              <label id="correctString4"></label>
              <br>
              <input class="answer" type="radio" name="q4" value="0"> Staroslovenski naziv za suncokret
              <label></label>
              <br>
             <input class="answer" type="radio" name="q4" value="0">  Naziv za ostavu
              <label></label>
              </ul>
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <div>
                <p class="question">5. Joga je...</p>
  
              <ul>
              <input class="answer" type="radio" name="q5" value="1"> Filozofija i sistem vježbi
              <label id="correctString5"></label>
              <br>
              <input class="answer" type="radio" name="q5" value="0"> Religija
              <label></label>
              <br>
              <input class="answer" type="radio" name="q5" value="0"> Najlakši model Lenovo laptopa
              <label></label>
              </ul>
            </div>
        </td>
      </tr>
      </table>
  <br/>
    <div class="submitter">
            <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
            type="submit" value="Submit" />
      </div>
    
  <!--show only wrong answers on submit-->
      <div class="quizAnswers" id="correctAnswer1"></div>
          <div class="quizAnswers" id="correctAnswer2"></div>
      <div class="quizAnswers" id="correctAnswer3"></div>
      <div class="quizAnswers" id="correctAnswer4"></div>
      <div class="quizAnswers" id="correctAnswer5"></div>

    </div><!-- end col8-->
    </div><!-- end row-->
  </div><!-- end container-->
@endsection('content')
  