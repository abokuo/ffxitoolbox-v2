<!-- ======= Header ======= -->
<header id="header">
    <a name="top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{ route('home') }}">ffxitoolbox</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="@yield('nav_home')"><a href="{{ route('home') }}">首頁</a></li>
                <li class="@yield('nav_recipes') drop-down"><a href="">合成配方</a>
                    <ul>
                        <li class="drop-down"><a href="#">木工</a>
                            <ul>
                                <li><a href="/recipe/woodworking/s10">素人</a></li>
                                <li><a href="/recipe/woodworking/s20">見習</a></li>
                                <li><a href="/recipe/woodworking/s30">徒弟</a></li>
                                <li><a href="/recipe/woodworking/s40">下級</a></li>
                                <li><a href="/recipe/woodworking/s50">名取</a></li>
                                <li><a href="/recipe/woodworking/s60">目録</a></li>
                                <li><a href="/recipe/woodworking/s70">印可</a></li>
                                <li><a href="/recipe/woodworking/s80">高弟</a></li>
                                <li><a href="/recipe/woodworking/s90">皆伝</a></li>
                                <li><a href="/recipe/woodworking/s100">師範</a></li>
                                <li><a href="/recipe/woodworking/s110">高級</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">鍛治</a>
                            <ul>
                                <li><a href="/recipe/smithing/s10">素人</a></li>
                                <li><a href="/recipe/smithing/s20">見習</a></li>
                                <li><a href="/recipe/smithing/s30">徒弟</a></li>
                                <li><a href="/recipe/smithing/s40">下級</a></li>
                                <li><a href="/recipe/smithing/s50">名取</a></li>
                                <li><a href="/recipe/smithing/s60">目録</a></li>
                                <li><a href="/recipe/smithing/s70">印可</a></li>
                                <li><a href="/recipe/smithing/s80">高弟</a></li>
                                <li><a href="/recipe/smithing/s90">皆伝</a></li>
                                <li><a href="/recipe/smithing/s100">師範</a></li>
                                <li><a href="/recipe/smithing/s110">高級</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">彫金</a>
                            <ul>
                                <li><a href="/recipe/goldsmithing/s10">素人</a></li>
                                <li><a href="/recipe/goldsmithing/s20">見習</a></li>
                                <li><a href="/recipe/goldsmithing/s30">徒弟</a></li>
                                <li><a href="/recipe/goldsmithing/s40">下級</a></li>
                                <li><a href="/recipe/goldsmithing/s50">名取</a></li>
                                <li><a href="/recipe/goldsmithing/s60">目録</a></li>
                                <li><a href="/recipe/goldsmithing/s70">印可</a></li>
                                <li><a href="/recipe/goldsmithing/s80">高弟</a></li>
                                <li><a href="/recipe/goldsmithing/s90">皆伝</a></li>
                                <li><a href="/recipe/goldsmithing/s100">師範</a></li>
                                <li><a href="/recipe/goldsmithing/s110">高級</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">裁縫</a>
                            <ul>
                                <li><a href="/recipe/clothcraft/s10">素人</a></li>
                                <li><a href="/recipe/clothcraft/s20">見習</a></li>
                                <li><a href="/recipe/clothcraft/s30">徒弟</a></li>
                                <li><a href="/recipe/clothcraft/s40">下級</a></li>
                                <li><a href="/recipe/clothcraft/s50">名取</a></li>
                                <li><a href="/recipe/clothcraft/s60">目録</a></li>
                                <li><a href="/recipe/clothcraft/s70">印可</a></li>
                                <li><a href="/recipe/clothcraft/s80">高弟</a></li>
                                <li><a href="/recipe/clothcraft/s90">皆伝</a></li>
                                <li><a href="/recipe/clothcraft/s100">師範</a></li>
                                <li><a href="/recipe/clothcraft/s110">高級</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">革細工</a>
                            <ul>
                                <li><a href="/recipe/leathercraft/s10">素人</a></li>
                                <li><a href="/recipe/leathercraft/s20">見習</a></li>
                                <li><a href="/recipe/leathercraft/s30">徒弟</a></li>
                                <li><a href="/recipe/leathercraft/s40">下級</a></li>
                                <li><a href="/recipe/leathercraft/s50">名取</a></li>
                                <li><a href="/recipe/leathercraft/s60">目録</a></li>
                                <li><a href="/recipe/leathercraft/s70">印可</a></li>
                                <li><a href="/recipe/leathercraft/s80">高弟</a></li>
                                <li><a href="/recipe/leathercraft/s90">皆伝</a></li>
                                <li><a href="/recipe/leathercraft/s100">師範</a></li>
                                <li><a href="/recipe/leathercraft/s110">高級</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">骨細工</a>
                            <ul>
                                <li><a href="/recipe/bonecraft/s10">素人</a></li>
                                <li><a href="/recipe/bonecraft/s20">見習</a></li>
                                <li><a href="/recipe/bonecraft/s30">徒弟</a></li>
                                <li><a href="/recipe/bonecraft/s40">下級</a></li>
                                <li><a href="/recipe/bonecraft/s50">名取</a></li>
                                <li><a href="/recipe/bonecraft/s60">目録</a></li>
                                <li><a href="/recipe/bonecraft/s70">印可</a></li>
                                <li><a href="/recipe/bonecraft/s80">高弟</a></li>
                                <li><a href="/recipe/bonecraft/s90">皆伝</a></li>
                                <li><a href="/recipe/bonecraft/s100">師範</a></li>
                                <li><a href="/recipe/bonecraft/s110">高級</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">錬金術</a>
                            <ul>
                                <li><a href="/recipe/alchemy/s10">素人</a></li>
                                <li><a href="/recipe/alchemy/s20">見習</a></li>
                                <li><a href="/recipe/alchemy/s30">徒弟</a></li>
                                <li><a href="/recipe/alchemy/s40">下級</a></li>
                                <li><a href="/recipe/alchemy/s50">名取</a></li>
                                <li><a href="/recipe/alchemy/s60">目録</a></li>
                                <li><a href="/recipe/alchemy/s70">印可</a></li>
                                <li><a href="/recipe/alchemy/s80">高弟</a></li>
                                <li><a href="/recipe/alchemy/s90">皆伝</a></li>
                                <li><a href="/recipe/alchemy/s100">師範</a></li>
                                <li><a href="/recipe/alchemy/s110">高級</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">調理</a>
                            <ul>
                                <li><a href="/recipe/cooking/s10">素人</a></li>
                                <li><a href="/recipe/cooking/s20">見習</a></li>
                                <li><a href="/recipe/cooking/s30">徒弟</a></li>
                                <li><a href="/recipe/cooking/s40">下級</a></li>
                                <li><a href="/recipe/cooking/s50">名取</a></li>
                                <li><a href="/recipe/cooking/s60">目録</a></li>
                                <li><a href="/recipe/cooking/s70">印可</a></li>
                                <li><a href="/recipe/cooking/s80">高弟</a></li>
                                <li><a href="/recipe/cooking/s90">皆伝</a></li>
                                <li><a href="/recipe/cooking/s100">師範</a></li>
                                <li><a href="/recipe/cooking/s110">高級</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="@yield('nav_timetable') drop-down"><a href="#">時間表</a>
                    <ul>
                        <li><a href="/time/guild">工會商店</a></li>
                        <li><a href="/time/airship">飛空艇</a></li>
                        <li><a href="/time/ship">渡船</a></li>
                    </ul>
                </li>
                <li class="@yield('nav_discomposes') drop-down"><a href="#">分解配方</a>
                    <ul>
                        <li><a href="/discompose/beastman">獣人装備</a></li>
                        <li><a href="/discompose/special">特殊装備</a></li>
                        <li><a href="/discompose/d_woodworking">合成装備(木工)</a></li>
                        <li><a href="/discompose/d_smithing">合成装備(鍛冶)</a></li>
                        <li><a href="/discompose/d_goldsmithing">合成装備(彫金)</a></li>
                        <li><a href="/discompose/d_clothcraft">合成装備(裁縫)</a></li>
                        <li><a href="/discompose/d_leathercraft">合成装備(革細工)</a></li>
                        <li><a href="/discompose/d_bonecraft">合成装備(骨細工)</a></li>
                        <li><a href="/discompose/d_alchemy">合成装備(錬金術)</a></li>
                        <li><a href="/discompose/reassembling">合成幻珠</a></li>
                    </ul>
                </li>

                <li class="@yield('nav_foodresults') drop-down"><a href="#">食物效果</a>
                    <ul>
                        <li><a href="/foodresult/meat_and_eggs">肉、蛋料理</a></li>
                        <li><a href="/foodresult/sedfood_dishes">海鮮料理</a></li>
                        <li><a href="/foodresult/vegetables">蔬菜料理</a></li>
                        <li><a href="/foodresult/soups">湯類</a></li>
                        <li><a href="/foodresult/breads_and_rise">榖物料理</a></li>
                        <li><a href="/foodresult/sweets">甜點</a></li>
                        <li><a href="/foodresult/drinks">飲料</a></li>
                        <li><a href="/foodresult/ingredients">食材</a></li>
                        <li><a href="/foodresult/sedfood">海產</a></li>
                        <li><a href="/foodresult/others">其他</a></li>
                        <li><a href="/foodresult/unknow">不明</a></li>
                    </ul>
                </li>

                <li class="@yield('nav_guestbook')"><a href="/guestbook">留言板</a></li>

                @if(session()->has('user_id'))
                    @if(session('user_id') == 1)
                        <li class="@yield('nav_admin') drop-down"><a href="#">管理</a>
                            <ul>
                                <li><a href="/recipe/add">增加配方</a></li>
                                <li><a href="/discompose/add">增加分解資料</a></li>
                                <li><a href="/foodresult/add">增加食物資料</a></li>
                                <li><a href="/user/auth/logout">登出</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="/user/auth/logout">登出</a></li>
                    @endif
                @else
                    <li class="@yield('nav_login')"><a href="/user/auth/login">登入</a></li>
                <!--
                <li><a href="/user/auth/sign-up">註冊</a></li>
                -->
                @endif
                <li>
                    <form class="form-inline" action="{{ route('search') }}" method="GET">
                        <input type="text" name="search" size="16" required/>
                        <button type="submit">搜尋</button>
                    </form>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
</header><!-- End Header -->
