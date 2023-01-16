@if (count($breadcrumbs))
<ol class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
@foreach ($breadcrumbs as $breadcrumb)

@if ($breadcrumb->url && !$loop->last)
<li class="breadcrumbs_li"><a class="fw_text" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
@else
<li class="breadcrumbs_li" ><a class="fw_text">{{ $breadcrumb->title }}</a></li>
@endif

@endforeach
</ol>

@endif