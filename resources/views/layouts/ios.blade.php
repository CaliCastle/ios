<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iOS 10网页模拟</title>

    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>

    <main class="Main Presentation">
        <div class="iPhone__wrapper">
            <section class="iPhone iPhone--reflection iPhone--black">
                <div class="iPhone__front">
                    <div class="iPhone__top">
                        <div class="Flex">
                            <div class="iPhone__sensor"></div>
                        </div>
                        <div class="Flex Flex--horizontal">
                            <div class="iPhone__camera"></div>
                            <div class="iPhone__microphone"></div>
                        </div>
                    </div>
                    <screen class="iPhone__screen">
                        <header class="Screen__status-bar">
                            <aside class="Status__signals">
                                <div class="Status__carrier" carrier="运营商"></div>
                                <div class="Status__wifi"></div>
                            </aside>
                            <aside class="Status__clock" time="{{ \Carbon\Carbon::now()->format('H:i') }}"></aside>
                            <aside class="Status__services">
                                <div class="Status__bluetooth"></div>
                                <div class="Status__battery"></div>
                            </aside>
                        </header>
                        <div class="Screen__content" style="background-image: url('/images/screen-wallpaper.jpg')">
                            <main class="Screen__home">
                                @foreach(($apps = \iOS\App::defaultApps()) as $app)
                                    <app>
                                        <div class="App__icon"{{ $app->badge != 0 ? ' badge=' . $app->badge : '' }}>
                                            <img src="{{ $app->icon }}" alt="{{ $app->name }}">
                                        </div>
                                        <div class="App__label">
                                            <span>{{ $app->name }}</span>
                                        </div>
                                    </app>
                                    {{--<folder></folder>--}}
                                @endforeach
                            </main>
                            <dock class="Screen__dock">
                                @for($i = 4; $i > 0; $i--)
                                    <app>
                                        <div class="App__icon"{{ $apps[$i]->badge != 0 ? ' badge=' . $apps[$i]->badge : '' }}>
                                            <img src="{{ $apps[$i]->icon }}" alt="{{ $apps[$i]->name }}">
                                        </div>
                                        <div class="App__label">
                                            <span>{{ $apps[$i]->name }}</span>
                                        </div>
                                    </app>
                                @endfor
                            </dock>
                        </div>
                    </screen>
                    <div class="iPhone__home">
                        <div class="iPhone__home__outer"></div>
                        <div class="iPhone__home__inner"></div>
                    </div>
                </div>
            </section>
            <aside class="iPhone__side">
                <div class="iPhone__stripes">
                    <div class="iPhone__stripe"></div>
                    <div class="iPhone__stripe"></div>
                    <div class="iPhone__stripe"></div>
                    <div class="iPhone__stripe"></div>
                </div>
                <div class="iPhone__buttons">
                    <div class="iPhone__silent"></div>
                    <div class="iPhone__vol-up"></div>
                    <div class="iPhone__vol-down"></div>
                    <div class="iPhone__lock"></div>
                </div>
            </aside>
        </div>
    </main>

</body>
</html>