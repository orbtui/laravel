@isset($items)
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

    @foreach($items as $breadcrumb)
    <li class="breadcrumb-item text-muted">
        <a href="index.html" class="text-muted text-hover-primary">Home</a>
    </li>
    @endforeach


    <li class="breadcrumb-item">
        <span class="bullet bg-gray-500 w-5px h-2px"></span>
    </li>


    <li class="breadcrumb-item text-muted">Dashboards</li>

</ul>
@endisset
