<?php require('header.php'); ?>

<div id="center">
    <div id="wrapper">
        <div id="header">
            <a href="/"><img src="/img/pony-aqua.png" width="100px" height="100px" border="0" class="logo" alt="Logo" /></a>
            <div class="title">JOYRIDE LABORATORIES GBR, BERLIN</div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="/" class="button-left"><span>HOME</span></a>
                    </li>
                    <li>
                        <a href="/game/" class="button-middle"><span class="aqua">GAME</span></a>
                    </li>
                    <li>
                        <a href="/blog/" class="button-middle"><span>BLOG</span></a>
                    </li>
                    <li>
                        <a href="/shop/" class="button-middle"><span>SHOP</span></a>
                    </li>
                    <li>
                        <a href="/about/" class="button-middle"><span>ABOUT</span></a>
                    </li>
                    <li>
                        <a href="/contact/" class="button-middle"><span>CONTACT</span></a>
                    </li>
                    <li class="button-dummy-middle">
                        <span>&nbsp;</span>
                    </li>
                    <li>
                        <a href="/jp/game/code/" class="button-right"><span>日本語</span></a>
                    </li>
                </ul>
            </div>
            <div class="subnav gapTopHalf">
                <ul>
                    <li>
                        <a href="/game/" class="button-sub"><span>INFO</span></a>
                    </li>
                    <li>
                        <a href="/game/gallery/" class="button-sub"><span>GALLERY</span></a>
                    </li>
                    <li>
                        <a href="/game/trailer/" class="button-sub"><span>TRAILER</span></a>
                    </li>
                    <li>
                        <a href="/game/code/" class="button-sub"><span class="aqua">CODE</span></a>
                    </li>
                    <li>
                        <a href="/game/download/" class="button-sub"><span>DOWNLOAD</span></a>
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
        <div id="content" class="gapTopHalf">
            <div class="field1 gapTopFull">
                <h1>PROGRAMMERS WELCOME!<br /><span class="aqua">PROGRAMMERS WELCOME!</span></h1>
                <h2>Publishing</h2>
                <p>The game and the level editor are released under an open source license (<a href="http://www.gnu.org/copyleft/lesser.html" target="_blank">LGPL</a>). The included graphics are published under a permissive Creative Commons license (<a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">cc-by-sa</a>). We're also planning to create a server that will allow players to upload the levels they created and download levels from other players. We hope that a community of coders, level creators and players will emerge around the game.</p>
                <p>Simultaneously, we are working on closed source episodes that we plan to sell via the game. These will include new graphics, more robots, a story line, other characters and other surprises.</p>
                <p>(Just to clarify: The licensing is very permissive. It allows others to create their own episodes and distribute them freely or sell them. This would be very welcome. If anybody is interested in this, please talk to us. We propose to join forces and sell all our episodes through one system.)</p>
                <h2 class="gapTopFull">Used Technologies</h2>
                <ul>
                    <li>
                        <a href="http://haskell.org/" target="_blank">Haskell</a>, our chosen programming language.
                    </li>
                    <li>
                        <a href="http://qt.nokia.com/" target="_blank">Qt</a> for user input and rendering.
                    </li>

                    <li>
                        <a href="http://www.opengl.org/" target="_blank">OpenGL</a> as an efficient rendering backend for Qt. As it's only used as a backend, we don't write real OpenGL code (neither in Haskell nor in C).
                    </li>
                    <li>
                        <a href="http://hackage.haskell.org/package/Hipmunk" target="_blank">Hipmunk</a>, the Haskell bindings to chipmunk.
                    </li>
                    <li>
                        <a href="http://code.google.com/p/chipmunk-physics/" target="_blank">Chipmunk</a>, a 2D physics engine.
                    </li>

                    <li>
                        <a href="http://www.haskell.org/cabal/" target="_blank">cabal</a>, Haskell's build framwork.
                    </li>
                    <li>
                        <a href="http://darcs.net/" target="_blank">darcs</a>, the revision control system.
                    </li>
                </ul>
                <h2 class="gapTopFull">Getting involved</h2>
                <p>Some features that aren't yet implemented. For some, we have a clear vision on how to implement them; for others, we don't. If you want to get involved, don't hesitate to contact us: <a href="mailto:mail@joyridelabs.de">mail@joyridelabs.de</a>.</p>
                <h2 class="gapTopFull">Getting the source:</h2>
                <p><code>darcs get http://code.joyridelabs.de/nikki</code></p>
                <h2 class="gapTopFull">Getting started:</h2>
                <p>There is a wiki, that tries to document how to compile the game on different platforms (which is quite involved): <a href="http://www.patch-tag.com/r/shahn/nikki-wiki/wiki/" target="_blank">Nikki Wiki</a>. If there is anything missing, please let us know.</p>
            </div>
            <div class="field2 gapTopFull">
                <h1>LINKS:<br /><span class="aqua">LINKS:</span></h1>
                <ul>
                    <li><a href="http://www.patch-tag.com/r/shahn/nikki-wiki/wiki/" target="_blank">Nikki Wiki</a>
                        <br />
                        - our wiki (hosted by <a href="http://www.patch-tag.com/">patch-tag</a>).
                    </li>

                    <li><a href="http://code.joyridelabs.de" target="_blank">code.joyridelabs.de</a>
                        <br />
                        - our code directory
                    </li>
                    <li><a href="http://code.joyridelabs.de/nikki" target="_blank">code.joyridelabs.de/nikki</a>
                        <br />
                        - the darcs repo of the game
                    </li>
<!--                    <li><a href="http://code.joyridelabs.de/docs/nikki/html/nikki/nikki/" target="_blank">Nikki code docs</a>

                        <br />
                        - generated haddock documentation of the game
                    </li>-->
                    <li><a href="https://bugs.launchpad.net/nikki" target="_blank">bugs.launchpad.net/nikki</a>
                        <br />
                        - our bug tracker
                    </li>
                </ul>
            </div>
        </div>
        <div id="footer">
            &copy;2012 JOYRIDE LABORATORIES GBR. [<a href="/contact/">LEGAL INFORMATION</a>]
        </div>
    </div>
</div>

<?php require('footer.php'); ?>
