@if(session()->has('toastr'))
    @php
        $toastr     = session()->get('toastr');
        $type       = \Hyperf\Utils\Arr::get($toastr->get('type'), 0, 'success');
        $message    = \Hyperf\Utils\Arr::get($toastr->get('message'), 0, '');
        $options    = json_encode($toastr->get('options', []));
    @endphp
    <script>
        $(function () {
            toastr.{{$type}}('{!!  $message  !!}', null, {!! $options !!});
        });
    </script>
@endif