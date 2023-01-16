<div class="tab_wall_offers">
    <h3 class="mb-20">Популярные предложения</h3>
    <ul class="calculator_tab_ul">
        @if ($mfo)
        @foreach ($pages as $item)
        <li class="calculator_tab_li">
            <a class="calculator_tab_a" href="zaimy/{{$item->url}}"><span>{{$item->name}}</span></a>
        </li>
        @endforeach
        @else
        @foreach ($pages as $item)
        <li class="calculator_tab_li">
            <a class="calculator_tab_a" href="{{$item->url}}"><span>{{$item->name}}</span></a>
        </li>
        @endforeach
        @endif
  </ul>
    
</div>