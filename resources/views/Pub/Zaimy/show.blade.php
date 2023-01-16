@foreach ($calcul as $mfo)
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
