
@extends('layout')
@section ('body')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div class="container" style="margin-top: 100px;">
    <!-- Nav tabs -->
    <ul class="nav felx justify-content-center">
      <li class="nav-item">
        <a class="btn btn-light p-2 pe-5 ps-5" data-bs-toggle="tab" href="#Translation">{{__("Translation")}}</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-light active p-2 pe-5 ps-5" data-bs-toggle="tab" href="#Reading">{{__("Reading")}}</a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!---------------------------------- Tab Reading ------------------------------------------------->
        <div class="tab-pane container active mt-5"  id="Reading">
            <div class ="container text-center" style="margin-top: 50px;">
                <h class="fs-1" id ="Start">سُورَةُ {{$surah->Ar}}  </h>
            </div>
            <div class ="container text-center" style="margin-top: 50px; margin-bottom: 50px;">
                <h class="fs-2"> بّْسًّمُّ اٍّلَّلَّهّْ اٍّلَّرًّحّْمُّنِّ اٍّلَّرًّحّْيٌّمُّ</h>
            </div>

            @php $prev = Null @endphp
            <div class ="container text-center" style = "width: 65%;">
                @foreach ($surah->ar_ayats as $ar_aya)
                    @if($prev)
                        @if($ar_aya['page'] != $prev)
                            <div class = "fs-4 border-down"> {{$prev}} <br></div>
                            <hr>
                        @endif
                    @endif
                    <h class="fs-3"> {{$ar_aya->text}} </h>
                    <h class="fs-3">  ( {{Numbers::ShowInArabicDigits($ar_aya->aya)}} )  </h>
                    @php $prev = $ar_aya->page @endphp
                @endforeach
                <div class = "fs-4 border-down"> {{$prev}} <br></div>
                <hr>
            </div>

            <div class="container" style="margin-top: 50px;">
                <ul class="nav felx justify-content-center">
                    @if($surah->id+1 != 115)
                        <li class="nav-item">
                            <a class="btn btn-light p-2 pe-3 ps-3" href="/{{$surah->id+1}}">{{__("Next Surah")}}</a>
                        </li>
                    @endif
                        <li class="nav-item">
                            <a class="btn btn-light p-2 pe-3 ps-3" href="#Start">{{__("Beginning of Surah")}} </a>
                        </li>
                    @if($surah->id-1 !=0)
                        <li class="nav-item">
                            <a class="btn btn-light p-2 pe-3 ps-3" href="/{{$surah->id-1}}">{{__("Previous Surah")}} </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <!------------------------------- Tab Translation --------------------------------------------------------->
        <div class="tab-pane container fade mt-5" id="Translation">

            <div class ="container text-center" style="margin-top: 50px;margin-bottom: 50px;">
                <h class="fs-1" id ="Start2">سُورَةُ {{$surah->Ar}}  </h>
            </div>
            <div class ="container text-center" style="margin-top: 50px;">
                <h class="fs-2"> بّْسًّمُّ اٍّلَّلَّهّْ اٍّلَّرًّحّْمُّنِّ اٍّلَّرًّحّْيٌّمُّ</h>
            </div>

            @foreach ($surah->ar_ayats as $ar_aya)
                <div class ="container d-flex justify-content-between" style = "width: 80%;">
                    <h class="fs-5 in-line text-end"> {{$ar_aya->verse_key}} </h>
                    <h class="fs-5 in-line text-start"> {{__("Juz")}}: {{$ar_aya->juz}} /{{__("Hizb")}}: {{$ar_aya->hezb}} /{{__("page")}} {{$ar_aya->page_id}} </h>
                </div>
                <div class ="container text-center " style = "width: 80%;">
                    <div class ="container text-end  m-5">
                        <h class="fs-3"> {{$ar_aya->text}} </h>
                        <h class="fs-3">  ( {{Numbers::ShowInArabicDigits($ar_aya['aya'])}} )  </h>
                    </div>
                    <div class ="container text-start m-5">
                        <h class="fs-4"> {{$ar_aya->en_ayats->first()->text}}</h>
                    </div>
                    <hr style="margin-right: 75px; margin-left: 75px;">
                </div>
            @endforeach

            <div class="container" style="margin-top: 50px;">
                <ul class="nav felx justify-content-center">
                    @if($surah->id+1 != 115)
                        <li class="nav-item">
                            <a class="btn btn-light p-2 pe-3 ps-3" href="/{{$surah->id+1}}">{{__("Next Surah")}}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="btn btn-light  p-2 pe-3 ps-3" href="#Start2">{{__("Beginning of Surah")}} </a>
                    </li>
                    @if($surah->id-1 != 0)
                        <li class="nav-item">
                            <a class="btn btn-light  p-2 pe-3 ps-3" href="/{{$surah->id-1}}">{{__("Previous Surah")}} </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection ('body')
    </body>
</html>
