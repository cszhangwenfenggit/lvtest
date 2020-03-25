<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title', 'Hello')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
        </div>
    </body>
</html>
