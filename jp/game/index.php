<?php require('jp-header.php'); ?>

<div id="center">
    <div id="wrapper">
        <div id="header">
            <a href="/jp/"><img src="/img/pony-aqua.png" width="100px" height="100px" border="0" class="logo" alt="Logo" /></a>
            <div lang="en" class="title">JOYRIDE LABORATORIES GBR, BERLIN</div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="/jp/" class="button-left"><span>ホーム</span></a>
                    </li>
                    <li>
                        <a href="/jp/game/" class="button-middle"><span class="aqua">ゲーム</span></a>
                    </li>
                    <li>
                        <a href="/jp/blog/" class="button-middle"><span>ブログ</span></a>
                    </li>
                    <li>
                        <a href="/jp/shop/" class="button-middle"><span>ショップ</span></a>
                    </li>
                    <li>
                        <a href="/jp/about/" class="button-middle"><span>アバウト</span></a>
                    </li>
                    <li>
                        <a href="/jp/contact/" class="button-middle"><span>コンタクト</span></a>
                    </li>
                    <li class="button-dummy-middle">
                        <span>&nbsp;</span>
                    </li>
                    <li>
                        <a href="/game/" class="button-right"><span lang="en">EN / DE</span></a>
                    </li>
                </ul>
            </div>
            <div class="subnav gapTopHalf">
                <ul>
                    <li>
                        <a href="/jp/game/" class="button-sub"><span class="aqua">インフォ</span></a>
                    </li>
                    <li>
                        <a href="/jp/game/gallery/" class="button-sub"><span>ギャラリー</span></a>
                    </li>
                    <li>
                        <a href="/jp/game/trailer/" class="button-sub"><span>ヨコクヘン</span></a>
                    </li>
                    <li>
                        <a href="/jp/game/code/" class="button-sub"><span>コード</span></a>
                    </li>
                    <li>
                        <a href="/jp/game/download/" class="button-sub"><span>ダウンロード</span></a>
                    </li>
                    <li class="button-sub-dummy">
                        <span>&nbsp;</span>
                    </li>
                    <li class="button-sub-dummy">
                        <span>&nbsp;</span>
                    </li>
                    <li class="button-sub-dummy">
                        <span>&nbsp;</span>
                    </li>
                </ul>
            </div>
        </div>
        <div id="jp-content" class="gapTopHalf">
            <div class="field3">
                <a href="http://buy.joyridelabs.de" onmouseover="banner01.src='/img/banner-se-over.png';" onmouseout="banner01.src='/img/banner-se.png';"><img name="banner01" src="/img/banner-se.png" width="800" height="196" border="0" alt="Nikki and the Robots" /></a>
            </div>
            <div class="field1 gapTopFull">
                <h1 class="aqua">イントロダクション</h1>
                <p>とある未来の架空の世界、悪名だかい極悪非道のラクロワ博士が、ロボットの軍隊を率いて世界征服をたくらんだ。キミは秘密組織のエージェントNikkiとなって、この邪悪な計画を阻止しなければならない。この任務を遂行する過程でキミは、近未来の大都市から、海底の秘密基地、漂流する島々、そして宇宙空間にいたるまで、さまざまな世界を旅することになるだろう。</p>
                <h1 class="gapTopFull aqua">リリース・コンセプト</h1>
                <img src="/img/artwork-02.png" alt="Free Version / Story Mode" class="gapTopSmall" />
                <p style="margin-top:15px">Nikki and the Robotsをどのようにリリースしようか長い間かんがえてきましたが、やっと次のように決定しました。 まず、さまざまなレベル、レベルエディター、それからオンライン機能をフィーチャーした、十分に楽しめるヴァージョンを出します。これは、LGPL and Creative Commonsのもとでフリーのソフトウェアとしてリリースされ、ただ今アルファヴァージョンをダウンロードできます。今年の終わりにはNikkiやDr. Lacroix、そしてロボットたちが迎えるアドベンチャーについて語られる、４つのエピソードで構成されたストーリーモードをリリースします。これらのエピソードは、比較的安価でダウンロードできるようにする予定です。</p>
                <h1 class="gapTopFull aqua">ゲームプレイ</h1>
                <p>Nikki and the Robotsは、８０年代、９０年代のクラシックなゲームへのオマージュであると同時に、非常にユニークなゲームプレイのアイデアを実現してもいます。メイン・キャラクターのNikkiは、ゲーム全体を通して、どんな武器も装備も使わず、ただジャンプし、走ることしかできません。しかし、コンピュータ・ターミナルを利用することで、ラクロワ博士のロボットたちをハッキングし、コントロールすることができます。それらのロボットをうまく操り、個々の特殊な能力を組み合わせることで、Nikkiはパズルを解き、障害を克服し、それぞれのレベルでの課題任務を果たすことができるのです。</p>
                <h1 class="aqua gapTopFull">テクノロジー</h1>
                <p>Nikki and the Robotsのメインのプログラミング言語は、Haskellです。２Dグラフィックのレンダリングには、（他のいくつかのことにも使っていますが）Qtを、正確にいえばハードウェア・アクセラレーションのOpenGL®Backendを使っています。ゲームプレイの不可欠な部分として、ヒップムンク・バインディングスを利用した、チップムンク・フィジックスエンジンを組み込んでいます。このフィジックスエンジンは、われわれの「ユーバーピクセル・グラフィック」というコンセプトを実現するうえで、非常に役立ってくれています。</p>
            </div>
            <div class="field2 gapTopFull">
                <h1 class="aqua">アルファヴァージョン！</h1>
                <a href="/jp/game/download/" onmouseover="link_download.src='/img/link-download-over.png';" onmouseout="link_download.src='/img/link-download.png';"><img name="link_download" src="/img/link-download.png" border="0" alt="Download!!" class="gapTopSmall" /></a>
                <h1>BUY STORY EPISODES!</h1>
                <a href="http://buy.joyridelabs.de" onmouseover="link_buy.src='/img/link-buy-over.png';" onmouseout="link_buy.src='/img/link-buy.png';"><img name="link_buy" src="/img/link-buy.png" border="0" alt="Buy Story Episodes!!" class="gapTopSmall" /></a>
                <h1 class="aqua gapTopFull">リリース・インフォ</h1>
                <p lang="en">System: Linux | Windows | Mac<br />Date: 2011 TBA<br />Languages: EN | DE | JP</p>
                <h1 class="gapTopFull aqua">スクリーンショット</h1>
                <a href="/jp/game/gallery/04.php"><img src="/img/thumb-04.png" alt="Test" class="gapTopSmall" /></a>
                <a href="/jp/game/gallery/02.php"><img src="/img/thumb-02.png" alt="Test" class="gapTopFull" /></a>
                <a href="/jp/game/gallery/"><img src="/img/thumb-01.png" alt="Test" class="gapTopFull" /></a>
                <a href="/jp/game/gallery/03.php"><img src="/img/thumb-03.png" alt="Test" class="gapTopFull" /></a>
            </div>
        </div>
        <div id="footer" lang="en">
            &copy;2012 JOYRIDE LABORATORIES GBR. [<a href="/jp/contact/">LEGAL INFORMATION</a>]
        </div>
    </div>
</div>

<?php require('footer.php'); ?>
