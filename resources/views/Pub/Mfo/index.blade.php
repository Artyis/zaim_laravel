@extends('Pub::layouts.middle')
@section ('title', 'MфО')
@section ('content')
<div class="body_wrapper">
  <div class="body_wrapper_info mb-20">
  <div class="container">
    <nav class="breadcrumbs_cont">

      {{ Breadcrumbs::render('mfo')}}
    </nav>
    
    <div class="body_wrapper_banner">
      <div class="banner_wrapper_text">
        <h1 class="banner_text">Каталог крупных и малоизвестных МФО и МКК в России
        </h1>
        <p>Хотите срочно оформить микрозайм на банковскую карту без проверок? Юником24 собрал список МФО, которые могут дать деньги в долг даже если везде отказывают. Предложения по займам со ставкой от 0%, суммой до 100 000 рублей и моментальным решением без отказа.</p>
      </div>
      <img class="banner_img"src="img/money.png" alt="текст">
    </div>
  </div>
</div>
  <div class="container">
    <div class="calculator_tab mb-20">
      <ul class="calculator_tab_ul">
        <li class="calculator_tab_li">
          <a class="calculator_tab_a" href="#"><span>Микрозаймы</span></a>
        </li>
        <li class="calculator_tab_li">
          <a class="calculator_tab_a" href="#"><span>Не микрозаймы</span></a>
        </li>
        <li class="calculator_tab_li">
          <a class="calculator_tab_a" href="#"><span>Просто</span></a>
        </li>
        <li class="calculator_tab_li">
          <a class="calculator_tab_a" href="#"><span>Ну чисто так</span></a>
        </li>
        <li class="calculator_tab_li">
          <a class="calculator_tab_a" href="#"><span>Микрозаймы</span></a>
        </li>
      </ul>
    </div>
    <div class="offers_main mb-20">
      <div class="">
        <div name="show" class="offers_main_box">
            <h2>Список популярных МФО</h2>
            <div class="offer_wall">
              <div class="offer_list">
                @foreach ($mfo as $item)
                <div class="offers_list_post">
                  <div class="offers_a_wrap_logo">
                    <a href="#">
                      <img class="sbb_logo logo_size" src="{{$item->img}}" alt="">
                    </a>
                    <p class="sbb_text_logo fw_text_bold" style="margin: 20px 0 10px 10px;">{{$item->name}}</p>
                  </div>
                  <div class="sbb_info2">
                      <div class="sbb_info_box">
                        <p class="sbb_info_text1 fw_text">Сумма</p>
                        <p class="sbb_info_text2 fw_text_bold">до 100 000 руб</p>
                      </div>
                      <div class="sbb_info_box">
                        <p class="sbb_info_text1 fw_text">Ставка в день</p>
                        <p class="sbb_info_text2 fw_text_bold">от 1 %</p>
                      </div>
                      <div class="sbb_info_box">
                        <p class="sbb_info_text1 fw_text">Макс. срок</p>
                        <p class="sbb_info_text2 fw_text_bold">365 дней</p>
                      </div>
                      <div class="sbb_info_box">
                        <p class="sbb_info_text1 fw_text">Рейтинг</p>
                        <div class="sbb_info_text2 up-rating">
                          <div class="rating">
                            <ul class="unit-rating">
                              <li class="current-rating" style="width:60%;">60</li>
                              <li><a href="#" title="Плохо" class="r1-unit" onclick="doRate('1', '468'); return false;">1</a></li>
                              <li><a href="#" title="Приемлемо" class="r2-unit" onclick="doRate('2', '468'); return false;">2</a></li>
                              <li><a href="#" title="Средне" class="r3-unit" onclick="doRate('3', '468'); return false;">3</a></li>
                              <li><a href="#" title="Хорошо" class="r4-unit" onclick="doRate('4', '468'); return false;">4</a></li>
                              <li><a href="#" title="Отлично" class="r5-unit" onclick="doRate('5', '468'); return false;">5</a></li>
                            </ul>
                          </div>
                          <span style="margin: 0 0 0 10px;">3.3</span>
                        </div>
                      </div>
                      <div class="sbb_info_box">
                        <p class="sbb_info_text1 fw_text">Кред.история</p>
                        <p class="sbb_info_text2 fw_text_bold">Любая</p>
                      </div>
                      <div class="sbb_info_box ">
                        <p class="sbb_info_text1 fw_text">Возраст</p>
                        <p class="sbb_info_text2 fw_text_bold">от 18 лет</p>
                      </div>
                  </div>
                  <div class="sbb_bnt">
                     <a class="sbb_btn mb-20"><span>Онлайн заявка</span></a>
                     <p class="fw_text" style="font-size:12px;">Лицензия ЦБ № 651303045002916</p>
                     </div>
                  </div>
            </div>
                @endforeach
                
              </div>
            </div>
        </div>
      </div>

    <div class="offers_texts mb-20">
      <p></p>
    </div>
    <div class="offers_tab_wall mb-20">
      @include ('Pub::layouts.parts.populars')
    </div>
  </div>
  <div>
  </div>
</div>
@endsection
