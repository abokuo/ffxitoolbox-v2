<div wire:poll.1000ms>
    <div class="row no-gutters">
        <div class="col-lg-4 col-md-6">
            <div class="icon-box">
                <h4 class="title">渡船</h4>
                <table width="90%" align="center" border="1">
                    <tr><th bgcolor="#eeeeee">機船航路</th></tr>
                    <tr><td>セルビナ 往 マウラ</td></tr>
                    <tr><td>{!! $shipTime !!}</td></tr>
                    <tr><td>マウラ 往 セルビナ</td></tr>
                    <tr><td>{!! $shipTime !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">外洋航路</th></tr>
                    <tr><td >マウラ 往 アトルガン白門</td></tr>
                    <tr><td>{!! $silverShip !!}</td></tr>
                    <tr><td>アトルガン白門 往 マウラ</td></tr>
                    <tr><td>{!! $silverShip !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">銀海航路</th></tr>
                    <tr><td>アトルガン白門 往 ナシュモ</td></tr>
                    <tr><td>{!! $shipTime !!}</td></tr>
                    <tr><td>ナシュモ 往 アトルガン白門</td></tr>
                    <tr><td>{!! $shipTime !!}</td></tr>
                </table>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="icon-box">
                <h4 class="title">ギルド桟橋駁船</h4>
                <table width="90%" align="center" border="1">
                    <tr><th bgcolor="#eeeeee">南桟橋（エメフィ支水路）至中桟橋</th></tr>
                    <tr><td>{!! $bargeStoM !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">中桟橋（井守ヶ淵）至南桟橋 第一班</th></tr>
                    <tr><td>{!! $bargeMtoS !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">南桟橋（主水路）至北桟橋</th></tr>
                    <tr><td>{!! $bargeStoN !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">北桟橋（主水路）中桟橋</th></tr>
                    <tr><td>{!! $bargeNtoM !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">中桟橋（井守ヶ淵）至南桟橋 第二班</th></tr>
                    <tr><td>{!! $bargeMtoS2 !!}</td></tr>
                </table>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="icon-box">
                <h4 class="title">マナクリッパー</h4>
                <table width="90%" align="center" border="1">
                    <tr><th bgcolor="#eeeeee">夕照桟橋：ダルメルロック遊覧</th></tr>
                    <tr><td>{!! $travelDarumeru !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">夕照桟橋 往 プルゴノルゴ島 第一班</th></tr>
                    <tr><td>{!! $bibikiToIsland1 !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">夕照桟橋：マリヤカレヤリーフ遊覧</th></tr>
                    <tr><td>{!! $travelMariyaka !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">夕照桟橋 往 プルゴノルゴ島 第二班</th></tr>
                    <tr><td>{!! $bibikiToIsland2 !!}</td></tr>
                </table>
                <p>&nbsp;</p>
                <table width="90%" align="center" border="1">
                    <tr><th bgcolor="#eeeeee">プルゴノルゴ島 往 夕照桟橋 第一班</th></tr>
                    <tr><td>{!! $islandToBibiki1 !!}</td></tr>
                    <tr><th bgcolor="#eeeeee">プルゴノルゴ島 往 夕照桟橋 第二班</th></tr>
                    <tr><td>{!! $islandToBibiki2 !!}</td></tr>
                </table>

            </div>
        </div>
    </div>

</div>
