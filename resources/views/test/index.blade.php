@extends('layouts.master')

@section('title', 'Test')

@section('content')
    @forelse ($users as $user)
        姓名：{{ $user['username'] }}
        性别：{{ $user['sex'] }}
        国籍：
        @switch ($user['country'])
            @case ('cn')
            中国
            @break
            @case ('usa')
            美国
            @break
            {{--@case ('uk')--}}
            {{--英国--}}
            {{--@break--}}
            @default
            未知
        @endswitch
        <br>
    @empty
        没用用户
    @endforelse

    @if (!empty($users))
        有用户
    @else
        没用户
    @endif

    {!! $html !!}

    @unless ($users)
        没有用户
    @endunless

    @include('layouts.button', ['text' => '跳转到百度'])

    @component('layouts.button', ['text' => '百度'])
        <a href="http://www.taobao.com">跳转到淘宝</a>
    @endcomponent

    <x-alert type="error" :message="$message" class="test" style="font-size:24px;" />
@endsection


@section('footerScripts')
    @parent
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection

<script>
    var users = @json($users);
</script>
