@extends('Pub::layouts.middle')
@section ('title', $mfo->title)
@section ('content')
<div class="body_wrapper">
  <div class="body_wrapper_info mb-20">
  <div class="container">
    <nav class="breadcrumbs_cont">
     {{ Breadcrumbs::render('mfo_showCard', $mfo)}}
    </nav>
    <div class="body_wrapper_banner">
      <img class="banner_img db"src="img/money.png" alt="текст">
      <div class="banner_wrapper_text">
        <div class="banner_mfo">
          <h1 class="banner_text">{{$mfo->name}}
          </h1>
          <p class="fw_text text_mfo">Свидетельство ЦБ №{{$mfo->number}}</p>
        </div>
        <div class="sbb_info2 mfo_cbox">
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
                <span style="margin: 0 0 0 10px;">{{$mfo->raiting}}</span>
              </div>
            </div>
            <div class="sbb_info_box">
              <p class="sbb_info_text1 fw_text">Кред.история</p>
              <p class="sbb_info_text2 fw_text_bold">Любая</p>
            </div>
            <div class="sbb_info_box ">
              <p class="sbb_info_text1 fw_text">Возраст</p>
              <p class="sbb_info_text2 fw_text_bold">от {{$mfo->age}} лет</p>
            </div>
            <div class="sbb_info_box ">
              <p class="sbb_info_text1 fw_text">Cайт</p>
              <a class="fw_text_bold" href="#">{{$mfo->url_name}}</a>
            </div>
            <div class="sbb_info_box ">
              <p class="sbb_info_text1 fw_text">Телефон</p>
              <a class="fw_text_bold" href="tel:">{{$mfo->phone}}</a>
            </div>
            <div class="sbb_info_box ">
              <p class="sbb_info_text1 fw_text">Email</p>
              <a class="fw_text_bold" href="mailto:">{{$mfo->email}}</a>
            </div>


        </div>
        <div class="sbb_bnt">
           <a href="{{$mfo->url_pp}}" target="_blank" rel="nofollow" class="sbb_btn mb-20"><span>Онлайн заявка</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="offers_texts mb-50">
      <p>{{$mfo->text}}</p>
    </div>
    <div class="offers_main mb-20">
      <div class="offer_feedback mb-50">
          <h2 class="mb-20">Отзывы</h2>
          <ul class="feedback">
            <li class="feedback_wall" style="display: none;">
              <div class="comment_ava">
                <img src="img/noavatar.png" alt="">
              </div>
              <div class="comment_box">
                <span class="comment_author">Тимур</span>
                <time class="comment_date fw_text mb-20" itemprop="commentTime" datetime="2021-04-20"><i class="icon-clock-o"></i> 20 апреля 2021 12:52</time>
                <div class="post_content">
                  <span itemprop="commentText">Чаще всего отзывы об МФО – это накрутки и оговорки, чтобы не было проблем. О себе скажу, что такие организации мне часто отказывали. Сейчас на мне уже есть несколько займов. И нареканий к этой компании у меня нет. Планирую в дальнейшем обращаться. Жаль, что процент за первый займ еще не вернули!</span>
                </div>
              </div>
            </li>
            <li class="feedback_wall " style="display: none;">
              <div class="comment_ava">
                <img src="img/noavatar.png" alt="">
              </div>
              <div class="comment_box">
                <span class="comment_author">Тимур</span>
                <time class="comment_date fw_text mb-20" itemprop="commentTime" datetime="2021-04-20"><i class="icon-clock-o"></i> 20 апреля 2021 12:52</time>
                <div class="post_content">
                  <span itemprop="commentText">Чаще всего отзывы об МФО – это накрутки и оговорки, чтобы не было проблем. О себе скажу, что такие организации мне часто отказывали. Сейчас на мне уже есть несколько займов. И нареканий к этой компании у меня нет. Планирую в дальнейшем обращаться. Жаль, что процент за первый займ еще не вернули!</span>
                </div>
              </div>
            </li>
            <li class="feedback_wall" style="display: none;">
              <div class="comment_ava">
                <img src="img/noavatar.png" alt="">
              </div>
              <div class="comment_box">
                <span class="comment_author">Тимур</span>
                <time class="comment_date fw_text mb-20" itemprop="commentTime" datetime="2021-04-20"><i class="icon-clock-o"></i> 20 апреля 2021 12:52</time>
                <div class="post_content">
                  <span itemprop="commentText">Чаще всего отзывы об МФО – это накрутки и оговорки, чтобы не было проблем. О себе скажу, что такие организации мне часто отказывали. Сейчас на мне уже есть несколько займов. И нареканий к этой компании у меня нет. Планирую в дальнейшем обращаться. Жаль, что процент за первый займ еще не вернули!</span>
                </div>
              </div>
            </li>
            <li class="feedback_wall"style="display: none;">
              <div class="comment_ava">
                <img src="img/noavatar.png" alt="">
              </div>
              <div class="comment_box">
                <span class="comment_author">Тимур</span>
                <time class="comment_date fw_text mb-20" itemprop="commentTime" datetime="2021-04-20"><i class="icon-clock-o"></i> 20 апреля 2021 12:52</time>
                <div class="post_content">
                  <span itemprop="commentText">Чаще всего отзывы об МФО – это накрутки и оговорки, чтобы не было проблем. О себе скажу, что такие организации мне часто отказывали. Сейчас на мне уже есть несколько займов. И нареканий к этой компании у меня нет. Планирую в дальнейшем обращаться. Жаль, что процент за первый займ еще не вернули!</span>
                </div>
              </div>
            </li>
          </ul>
          <div class="sbb_bnt feedback_bnt">
             <a class="sbb_btn mr-20"><span>Написать отзыв</span></a>
             <a class="sbb_btn show-more"><span>Все отзывы</span></a>
          </div>
      </div>
      <div class="">
        <div name="show" class="offers_main_box">
            <h2>Похожие МФО</h2>
            <div class="offer_wall">
              <div class="offer_list">
                <div class="offers_list_post">
                      <div class="offers_a_wrap_logo">
                        <a href="#">
                          <img class="sbb_logo logo_size" src="/img/logo.svg" alt="">
                        </a>
                        <p class="sbb_text_logo fw_text_bold" style="margin: 20px 0 10px 10px;">Екапуста</p>
                      </div>
                      <div class="sbb_info2">
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Нужно</p>
                          <p class="sbb_info_text2 fw_text_bold">5000 руб</p>
                        </div>
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Комиссия за 3дня</p>
                          <p class="sbb_info_text2 fw_text_bold">250 руб</p>
                        </div>
                        <div class="sbb_info_box ">
                          <p class="sbb_info_text1 fw_text">Сумма долга</p>
                          <p class="sbb_info_text2 fw_text_bold">5250 руб</p>
                        </div>
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
                      </div>
                      <div class="sbb_bnt">
                         <a class="sbb_btn" rel="nofollow" target="_blank"><span>Онлайн заявка</span></a>
                      </div>
                </div>
                <div class="offers_list_post">
                      <div class="offers_a_wrap_logo">
                        <a href="#">
                          <img class="sbb_logo logo_size" src="/img/logo.svg" alt="">
                        </a>
                        <p class="sbb_text_logo fw_text_bold" style="margin: 20px 0 10px 10px;">Екапуста</p>
                      </div>
                      <div class="sbb_info2">
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Нужно</p>
                          <p class="sbb_info_text2 fw_text_bold">5000 руб</p>
                        </div>
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Комиссия за 3дня</p>
                          <p class="sbb_info_text2 fw_text_bold">250 руб</p>
                        </div>
                        <div class="sbb_info_box ">
                          <p class="sbb_info_text1 fw_text">Сумма долга</p>
                          <p class="sbb_info_text2 fw_text_bold">5250 руб</p>
                        </div>
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
                      </div>
                      <div class="sbb_bnt">
                         <a class="sbb_btn"><span>Онлайн заявка</span></a>
                      </div>
                </div>
                <div class="offers_list_post">
                      <div class="offers_a_wrap_logo">
                        <a href="#">
                          <img class="sbb_logo logo_size" src="/img/logo.svg" alt="">
                        </a>
                        <p class="sbb_text_logo fw_text_bold" style="margin: 20px 0 10px 10px;">Екапуста</p>
                      </div>
                      <div class="sbb_info2">
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Нужно</p>
                          <p class="sbb_info_text2 fw_text_bold">5000 руб</p>
                        </div>
                        <div class="sbb_info_box">
                          <p class="sbb_info_text1 fw_text">Комиссия за 3дня</p>
                          <p class="sbb_info_text2 fw_text_bold">250 руб</p>
                        </div>
                        <div class="sbb_info_box ">
                          <p class="sbb_info_text1 fw_text">Сумма долга</p>
                          <p class="sbb_info_text2 fw_text_bold">5250 руб</p>
                        </div>
                          <div class="sbb_info_box">
                            <p class="sbb_info_text1 fw_text">Макс.сумма</p>
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
                      </div>
                      <div class="sbb_bnt">
                         <a class="sbb_btn" href="#"><span>Онлайн заявка</span></a>
                      </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    <div class="offers_tab_wall mb-20">
      <div class="tab_wall_offers">
        <h3 class="mb-20">Популярные предложения</h3>
        <ul class="calculator_tab_ul">
          <li class="calculator_tab_li">
              <a class="calculator_tab_a" href="#"><span>Микрозаймы fgvc</span></a>
          </li>
          <li class="calculator_tab_li">
              <a class="calculator_tab_a" href="#"><span>Микрозаймы ff</span></a>
          </li>
          <li class="calculator_tab_li">
              <a class="calculator_tab_a" href="#"><span>Микрозаймыeewgvc</span></a>
          </li>
          <li class="calculator_tab_li">
              <a class="calculator_tab_a" href="#"><span>Микрозаймы tjh</span></a>
          </li>
          <li class="calculator_tab_li">
              <a class="calculator_tab_a" href="#"><span>Микрозаймы 777</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
