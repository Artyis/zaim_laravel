@extends('Pub::layouts.middle')
@section ('title', $page->title)
@section ('content')
<div class="body_wrapper">
  <div class="body_wrapper_info mb-20">
  <div class="container">
    <nav class="breadcrumbs_cont">
         {{ Breadcrumbs::render('zaimy_name', $page)}}
    </nav>
    <div class="body_wrapper_banner">
      <div class="banner_wrapper_text">
        <h1 class="banner_text">{{$page->name}}
        </h1>
        <p class="mb-20">{{$page->description}}</p>
         <p class="fw_text">База микрозаймов обновлена : </p>
      </div>
      
    </div>
    <div class="calculator">
      <div class="calculator_input">
        <div class="calculatot_input_txt">от</div>
        <input type="text" name="credit_sum" value="3000" class="input_cal">
        <label for="credit_sum" class="calculator_input_text">Сумма займа, руб</label>
        <div class="slider_bar">
          <div id="polzunok-1" class="jqueryui_slider calc_loanslider loan_amount_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-val="3000" data-min="1000" data-max="100000" data-step="1000" ></div>
        </div>
      </div>
      <div class="calculator_input" style="margin-left:15px;">
        <div class="calculatot_input_txt">дней</div>
        <input type="text" name="credit_day" value="5" class="input_cal">
        <label for="credit_sum" class="calculator_input_text">Срок в днях</label>
        <div class="slider_bar">
          <div id="polzunok-1" class="jqueryui_slider calc_loanslider loan_amount_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-val="5" data-min="1" data-max="90" data-step="1" ></div>
        </div>
      </div>
    </div>
    @csrf
  </div>
</div>
  <div class="container">
    <div class="offers_main mb-20">
      <div class="">
        <div name="show" class="offers_main_box">
            <h2>Рекомендуем срочные микрозаймы</h2>
            <div class="offer_wall">
              <div class="offer_list">
                @foreach ($page->getAllMfo() as $mfo)
                <div class="offers_list_post">
                      <div class="offers_a_wrap_logo">
                        <a href="#">
                          <img class="sbb_logo logo_size" src="" alt="">
                        </a>
                        <p class="sbb_text_logo fw_text_bold" style="margin: 20px 0 10px 10px;">{{$mfo->name}}</p>
                      </div>
                      <div class="sbb_info2">
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Нужно</p>
                          <p class="sbb_info_text2 fw_text_bold">50 руб</p>
                        </div>
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Комиссия <span>5 дн.</p>
                          <p class="sbb_info_text2 fw_text_bold">500 руб</p>
                        </div>
                        <div class="sbb_info_box ">
                          <p class="sbb_info_text1 fw_text">Сумма долга</p>
                          <p class="sbb_info_text2 fw_text_bold">555 руб</p>
                        </div>
                          <div class="sbb_info_box">
                            <p class="sbb_info_text1 fw_text">Сумма</p>
                            <p class="sbb_info_text2 fw_text_bold">до {{$mfo->sumto}} руб</p>
                          </div>
                          <div class="sbb_info_box">
                            <p class="sbb_info_text1 fw_text">Ставка в день</p>
                            <p class="sbb_info_text2 fw_text_bold">от {{$mfo->stavka}} %</p>
                          </div>
                          <div class="sbb_info_box">
                            <p class="sbb_info_text1 fw_text">Макс. срок</p>
                            <p class="sbb_info_text2 fw_text_bold">{{$mfo->dayto}} дней</p>
                          </div>
                      </div>
                      <div class="sbb_bnt">
                         <a  href="{{$mfo->url_pp}}" class="sbb_btn mb-20" target="_blank" rel="nofollow"><span>Онлайн заявка</span></a>
                         <p class="fw_text" style="font-size:12px;">Лицензия ЦБ № {{$mfo->number}} </p>
                      </div>
                </div>
                @endforeach
              </div>
            </div>
        </div>
      </div>

    </div>
    <div class="offers_texts mb-20">
      {{$page->text}}
    </div>
    <div class="offers_tab_wall mb-20 ">
      @include ('Pub::layouts.parts.populars')
    </div>
</div>
</div>
