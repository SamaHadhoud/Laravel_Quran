@props(['surah'])
<div class="col m-1 flex-fill pe-auto" id="{{$surah['id']}}" onclick="location.href='/{{$surah->id}}'" style="cursor: pointer;">
    <div class="container border m-1 diam">
        <div class ="row d-flex justify-content-between ">
            <div class="col col-9 d-flex justify-content-start">
                <div class ="row d-flex justify-content-start align-items-center">
                    <div class = "col col-4 text-start">
                        <div class=" d-flex justify-content-center ">
                            <span class="position-absolute mt-4 pt-1 num fa-lg">
                              @php
                              if(App::getLocale() == 'ar')
                              echo Numbers::ShowInArabicDigits($surah['id']);
                            else
                              echo $surah['id'];

                            @endphp </span>
                            <span class="fa-solid fa-diamond diam2 fa-3x m-2"> </span>
                        </div>
                    </div>
                    <div class=" col align-items-center text-start">

                        <h class="row fw-bold m-1 diam"> {{$surah[__('name')]}} </h>
                        @if(App::getLocale() != 'ar')
                        <h class="row fw-normal m-1  "> {{$surah['translatedName']}}</h>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <div class="row me-2"> @php
                  if(App::getLocale() == 'ar')
                    echo Numbers::ShowInArabicDigits($surah['ayahs']);
                  else
                    echo $surah['ayahs'];

                  @endphp {{__('Ayahs')}}</div>
            </div>
        </div>

    </div>
</div>
