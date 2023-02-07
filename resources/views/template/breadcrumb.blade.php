<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Movie DB</h4>

            {{-- <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach($breadcrumbs as $item)
                    <li class="breadcrumb-item @if($item['active'] === true) active @endif" )>
                        @if(!$item['active'])
                        <a href="{{$item['link']}}">{{$item['title']}}</a>
                    </li>
                    @else
                    {{$item['title']}}
                    @endif

                    </li>
                    @endforeach
                </ol>
            </div> --}}

        </div>
    </div>
</div>
@include('template.notification')

<!-- end page title -->