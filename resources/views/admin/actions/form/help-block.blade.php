@if($help)
<span class="help-block">
    <i class="fa {{ \Hyperf\Utils\Arr::get($help, 'icon') }}"></i>&nbsp;{!! \Hyperf\Utils\Arr::get($help, 'text') !!}
</span>
@endif