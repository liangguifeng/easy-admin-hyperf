@if(\Admin\Facades\Admin::user()->visible(\Hyperf\Utils\Arr::get($item, 'roles', []))&& \Admin\Facades\Admin::user()->can(\Hyperf\Utils\Arr::get($item, 'permission')))
    @if(!isset($item['children']))
        <li>
{{--            @if(url()->isValidUrl($item['uri']))--}}
                <a href="{{ $item['uri'] }}" target="_blank">
{{--            @else--}}
{{--                 <a href="{{ admin_url($item['uri']) }}"></a>--}}
{{--            @endif--}}
                <i class="fa {{$item['icon']}}"></i>
{{--                @if (Lang::has($titleTranslation = 'admin.menu_titHasPermissionsles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))--}}
{{--                    <span>{{ __($titleTranslation) }}</span>--}}
{{--                @else--}}
                    <span>{{ $item['title'] }}</span>
{{--                @endif--}}
                </a>
        </li>
    @else
        <li class="treeview">
            <a href="#">
                <i class="fa {{ $item['icon'] }}"></i>
{{--                @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))--}}
{{--                    <span>{{ __($titleTranslation) }}</span>--}}
{{--                @else--}}
                    <span>{{ $item['title'] }}</span>
{{--                @endif--}}
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                @foreach($item['children'] as $item)
                    @include('admin::partials.menu', $item)
                @endforeach
            </ul>
        </li>
    @endif
@endif