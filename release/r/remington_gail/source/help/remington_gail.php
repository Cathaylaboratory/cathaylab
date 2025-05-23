<?php 
  $pagename = 'Remington GAIL (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    deva {font: 14pt Annapurna SIL;}
  END;
  require_once('header.php');
?>

<p>This keyboard is an implementation
of the Remington-GAIL typewriter layout for inputting Unicode-compliant Devanagari.
The layout was designed for Hindi input, but may suffice for other Devanagari
script based languages. It faithfully implements the default and Shift keys of
the legacy Remington-GAIL layout on a standard QWERTY keyboard. It also
provides a number of additional characters from the APS Saral layout using the
AltGr (Right Alt) and AltGR+Shift key modifiers.</p>
<p>This keyboard was developed to fill the gap provided by two IMEs (APS Saral Hindi Indic Input 3 by Webdunia) and which are no longer supported on Windows and not available on other OSes:</p>

<ul>
  <li>APS Saral</li>
  <li> Hindi Indic Input 3 </li>
</ul>

<p>The sections below describe what users coming from either of the IMEs above can expect from this implementation.</p>

<h2>Notation for this document</h2>
<h3>Modifier Keys</h3>
<p><b>&lt;Shift&gt;X</b> = Left or right Shift key pressed and held while ‘X’ key is pressed</p>

<p><b>&lt;AltGr&gt;X</b> = Right Alt key being pressed and held while ‘X’ key is pressed</p>

<p><b>&lt;AltGr&gt;&lt;Shift&gt;x</b> = Right Alt key being pressed and held along with left or right shift key pressed and held while ‘X’ key is pressed</p>

<p>The letter shown after the modifier will be shown in upper-case as is the convention for printing letters on (English) keyboards. ‘X’ does not imply that the Shift key is being held. A modifier key will be explicitly given, if required, otherwise the default state (i.e. no modifier key being pressed) is assumed.</p>


<h3>Key Sequences</h3>

<p>A sequence of keys may appear like D<b>&lt;Shift&gt;</b>S<b>&lt;AltGr&gt;&lt;Shift&gt;</b>ZD</p>
<p>This can be interpreted as:</p>

<ul>
  <li>Press ‘d’ key</li>
  <li>Press Shift + ‘s’ keys</li>
  <li>Press RightAlt + Shift + ‘z’ keys</li>
  <li>Press ‘d’ key</li>
</ul>

<h2>APS Saral – Similarities and Differences</h2>

<h3>Keyboard input</h3>

<h4>Alternate Glyphs Not Supported</h4>

<p>Note that several glyphs may not appear on screen as
expected because APS provided multiple glyphs for the same (Unicode) character.
Multi-glyph support is a font display technology not currently supported in
this keyboard input layout.</p>

<h4>Modifier Key Usage</h4>

<p>In APS Saral, modifier keys were pressed and released before
pressing the keyboard key for a particular glyph/character. In this keyboard
layout, modifier keys must be pressed and held while the key of interest is
pressed.</p>

<h4>Unicode Phonetic Input vs Visual Inputting</h4>

<p>In APS Saral, input was done in <i>visual</i> order (<span class="deva">&#2367;
+ &#2325; &#2325;&#2367;</span>).
Unicode input is done in <i>phonetic</i> order (<span class="deva">&#2325; + &#2367;  = &#2325;&#2367;</span>). </p>

<h3>Deletions</h3>

<p>Of 163 possible key inputs, 6 are no longer supported. Alternate formations are shown below. </p>

<table class=kb>
 <tr>
  <td>Character</td>
  <td>Example</td>
  <td>Previous layout</td>
  <td>Current layout</td>
 </tr>
 <tr>
  <td><span class="deva">--</span></td>
  <td>&#2346; -- </td>
  <td><b>&lt;Shift&gt;</b>6</td>
  <td><b>&lt;Shift&gt;</b>5<b>&lt;Shift&gt;</b>5</td>
 </tr>
 <tr>
  <td><img width=21 height=24 id="Picture 1" src="removed-glyph-q-key.png"></td>
  <td>&#2347;<br>
  &#2314;<br>
  &#2352;&#2369;</td>
  <td>I <b>&lt;Shift&gt;</b>Q<br>
  M <b>&lt;Shift&gt;</b>Q<br>
  J<b>&lt;Shift&gt;</b>Q</td>
  <td><b>&lt;Shift&gt;</b>Q<br>
  MQ<b> or &lt;AltGr&gt;</b>M<br>
  JQ</td>
 </tr>
 <tr>
  <td>&#2368;&#2352;&#2381;</td>
  <td>&#2325;&#2368;&#2352;&#2381;&#2325;</td>
  <td>D<b>&lt;AltGr&gt;</b>GD</td>
  <td>DH<b>&lt;Shift&gt;</b>ZD</td>
 </tr>
 <tr>
  <td>&#2368;&#2352;&#2381;&#2306;</td>
  <td>&#2325;&#2368;&#2352;&#2381;&#2325;&#2306;</td>
  <td>D<b>&lt;AltGr&gt;</b>GD</td>
  <td>DH<b>&lt;Shift&gt;</b>ZDA</td>
 </tr>
 <tr>
  <td>&#2375;&#2352;&#2381;</td>
  <td>&#2325;&#2375;&#2352;&#2381;&#2325;</td>
  <td>D<b>&lt;AltGr&gt;</b>ZD</td>
  <td>DS<b>&lt;Shift&gt;</b>ZD</td>
 </tr>
 <tr>
  <td>&#2376;&#2352;&#2381;</td>
  <td>&#2325;&#2376;&#2352;&#2381;&#2325;</td>
  <td>D<b>&lt;AltGr&gt;</b>ZD</td>
  <td>D<b>&lt;Shift&gt;</b>S<b>&lt;Shift&gt;</b>ZD</td>
 </tr>
</table>

<h3>Relocations</h3>

<p>Of 47 default state keys, 3 have been reassigned a different key.</p>

<table class=kb>
 <tr>
  <td>Character</td>
  <td>Example</td>
  <td>Previous layout</td>
  <td>Current layout</td>
 </tr>
 <tr>
  <td>&#9676;&#2364;</td>
  <td>&#2392; &#2396;</td>
  <td>-</td>
  <td>`</td>
 </tr>
 <tr>
  <td>&#2381;</td>
  <td>&#2325;&#2381; &#2337;&#2381;</td>
  <td>=</td>
  <td><b>&lt;Shift&gt;</b>=</td>
 </tr>
 <tr>
  <td>&#2381;&#2352;</td>
  <td>&#2325;&#2381;&#2352; &#2337;&#2381;&#2352;</td>
  <td>\</td>
  <td>Z</td>
 </tr>
</table>

<p>Of 45 Shift state keys, 16 have been reassigned a different key.</p>

<table class=kb>
 <tr>
  <td>Character</td>
  <td>Example</td>
  <td>Previous layout</td>
  <td>Current layout</td>
 </tr>
 <tr>
  <td>&#2381;&#2352;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>`</td>
  <td>Z</td>
 </tr>
 <tr>
  <td>&#2329;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>1</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>1</td>
 </tr>
 <tr>
  <td>&#2343;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>2</td>
  <td><b>&lt;AltGr&gt;</b>D</td>
 </tr>
 <tr>
  <td>‘</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>4</td>
  <td><b>&lt;Shift&gt;</b>6</td>
 </tr>
 <tr>
  <td>’</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>5</td>
  <td><b>&lt;Shift&gt;</b>7</td>
 </tr>
 <tr>
  <td>&#2340;&#2381;&#2352;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>7</td>
  <td><b>&lt;Shift&gt;</b>9</td>
 </tr>
 <tr>
  <td>&#2315;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>8</td>
  <td><b>&lt;Shift&gt;</b>0</td>
 </tr>
 <tr>
  <td>(</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>9</td>
  <td>\</td>
 </tr>
 <tr>
  <td>)</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>0</td>
  <td><b>&lt;Shift&gt;</b>\</td>
 </tr>
 <tr>
  <td>&#2334;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>-</td>
  <td><b>&lt;AltGr&gt;</b>-</td>
 </tr>
 <tr>
  <td>&#2371;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>=</td>
  <td>=</td>
 </tr>
 <tr>
  <td>&#2347;&#2381;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>\</td>
  <td><b>&lt;AltGr&gt;</b>Q</td>
 </tr>
 <tr>
  <td>&#2404;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>A</td>
  <td><b>&lt;Shift&gt;</b>1</td>
 </tr>
 <tr>
  <td>&#2351;&#2381;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>;</td>
  <td><b>&lt;AltGr&gt;</b>F</td>
 </tr>
 <tr>
  <td><span class="deva">&#2333;&#2381;</td>
  <td>&nbsp;</td>
  <td><b>&lt;Shift&gt;</b>.</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>.</td>
 </tr>
</table>

<p>Of 34 AltGr (RAlt) state keys, 9 have been reassigned a different key (and 2 have been removed).</p>

<table class=kb>
 <tr>
  <td>Character</td>
  <td>Example</td>
  <td>Previous layout</td>
  <td>Current layout</td>
 </tr>
 <tr>
  <td>&#2361;&#2381;&#2344;</td>
  <td>&nbsp;</td>
  <td>&lt;AltGr&gt;</b>4</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>3</td>
 </tr>
 <tr>
  <td>÷</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>5</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>7</td>
 </tr>
 <tr>
  <td>&#2340;&#2381;&#2352;&#2381;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>7</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b><span class="deva">&#2332;&#2381;</td>
 </tr>
 <tr>
  <td>&#10799;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>8</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>8</td>
 </tr>
 <tr>
  <td>&#2342;&#2381;&#2327;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>9</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>9</td>
 </tr>
 <tr>
  <td>&#2342;&#2381;&#2349;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>0</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>Y</td>
 </tr>
 <tr>
  <td>&#2334;&#2381;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>-</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>-</td>
 </tr>
 <tr>
  <td>&#2367;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>F</td>
  <td>F</td>
 </tr>
 <tr>
  <td>&#2342;&#2381;&#2351;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;</b>N</td>
  <td><b>&lt;Shift&gt;</b>`</td>
 </tr>
</table>


<p>Of 35 AltGr+Shift state keys, 12 have been reassigned a
different key (and 2 have been removed).</p>

<table class=kb>
 <tr>
  <td>Character</td>
  <td>Example</td>
  <td>Previous layout</td>
  <td>Current layout</td>
 </tr>
 <tr>
  <td>!</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>3</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>0</td>
 </tr>
 <tr>
  <td>&#2333;&#2381;&#2352;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>7</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>Q</td>
 </tr>
 <tr>
  <td>*</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>8</td>
  <td><b>&lt;Shift&gt;</b>4</td>
 </tr>
 <tr>
  <td>&#2342;&#2381;&#2342;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>9</td>
  <td><b>&lt;AltGr&gt;</b>Y</td>
 </tr>
 <tr>
  <td>&#2334;&#2381;&#2330;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>0</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>H</td>
 </tr>
 <tr>
  <td>&#2334;&#2381;&#2332;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>-</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>;</td>
 </tr>
 <tr>
  <td>&#2315;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>W</td>
  <td><b>&lt;Shift&gt;</b>0</td>
 </tr>
 <tr>
  <td>&#2358;&#2381;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>P</td>
  <td><b>‘<br>&lt;AltGr&gt;&lt;Shift&gt;</b>J</td>
 </tr>
 <tr>
  <td>&#2327;&#2381;&#2352;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>X</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>G</td>
 </tr>
 <tr>
  <td>&#2349;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>J</td>
  <td><b>&lt;AltGr&gt;</b>S</td>
 </tr>
 <tr>
  <td>&#2307;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>;</td>
  <td><b>&lt;Shift&gt;</b>3</td>
 </tr>
 <tr>
  <td><span class="deva">&#2359;&#2381;&#2335;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>V</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>S</td>
 </tr>
 <tr>
  <td>&#2359;&#2381;&#2336;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>B</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>D</td>
 </tr>
 <tr>
  <td>&#2333;</td>
  <td>&nbsp;</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>.</td>
  <td><b>&lt;Shift&gt;</b>.</td>
 </tr>
</table>

<h3>Additions</h3>

<p>52 modified key  states which were unused are now used for relocations or not previously available glyphs.</p>

<table class=kb>
 <tr>
  <td>Character</td>
  <td>Example</td>
  <td>Previous layout</td>
  <td>Current layout</td>
 </tr>
 <tr>
<td>ZWNJ</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>`</td>
 </tr>
 <tr>
<td>ZWJ</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>`</td>
 </tr>
 <tr>
  <td>&#2407;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>1</td>
 </tr>
 <tr>
  <td>&#2329;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>1</td>
 </tr>
 <tr>
  <td>&#2408;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>2</td>
 </tr>
 <tr>
  <td>&#2409;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>3</td>
 </tr>
 <tr>
  <td>&#2412;</td>
   <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>6</td>
 </tr>
 <tr>
  <td>&#2347;&#2381;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>Q</td>
 </tr>
 <tr>
  <td>&#2333;&#2381;&#2352;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>Q</td>
 </tr>
 <tr>
  <td>&#2372;</span></td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>W</td>
 </tr>
 <tr>
  <td>&#2340;&#2381;&#2340;&#2381;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>R</td>
 </tr>
 <tr>
  <td>&#2340;&#2381;&#2352;&#2381;</td>
   <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>T</td>
 </tr>
 <tr>
  <td>&#2342;&#2381;&#2349;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>Y</td>
 </tr>
 <tr>
  <td>&#2398;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>U</td>
 </tr>
 <tr>
  <td>&#2393;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>A</td>
 </tr>
 <tr>
  <td>&#2349;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>S</td>
 </tr>
 <tr>
  <td>&#2359;&#2381;&#2335;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>S</td>
 </tr>
 <tr>
  <td>&#2343;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>D</td>
 </tr>
 <tr>
  <td>&#2359;&#2381;&#2336;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>D</td>
 </tr>
 <tr>
  <td>&#2396;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>C</td>
 </tr>
 <tr>
  <td>&#2395;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>C</td>
 </tr>
 <tr>
  <td>&#2335;&#2381;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>V</td>
 </tr>
 <tr>
  <td>&#2312;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;</b>B</td>
 </tr>
 <tr>
  <td>&#2337;&#2381;&#2337;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>M</td>
 </tr>
 <tr>
  <td>&#2338;&#2381;&#2338;</td>
  <td>&nbsp;</td>
  <td>(not used)</td>
  <td><b>&lt;AltGr&gt;&lt;Shift&gt;</b>,</td>
 </tr>
</table>

<h2>Hindi Indic Input 3 – Similarities and Differences</h2>

<p>&lt;ESC&gt;</b>KEY combination no longer use this combination.
Instead, those keys are directly available via one of the modifier key states (<b>&lt;Shift&gt;</b>
and/or <b>&lt;AltGr&gt;</b>).</p>

<p>Combining ligatures should be
inputted in phonetic order. For example: </p>


<p>Rakar <span class=deva>&#2381;&#2352;</span> (Z) should
be typed after a consonant/conjunct. </p>
<ul>
   <li><span class=deva>&#2325; + &#2381;&#2352; = &#2325;&#2381;&#2352;</span></li>
</ul>
<p>Reph <span class=deva>&#2352;&#2381;</span> <b>(&lt;Shift&gt;</b>Z) should
be typed before a consonant/conjunct.</p>

<ul>
   <li><span class=deva>&#2325; + &#2352;&#2381; + &#2325; = &#2325;&#2352;&#2381;&#2325;</span></li>
</ul>

<p>To get <span class=deva>&#2312;</span> first you need to type the letter <span class=deva>&#2311;</span> (B) then you have to type <span class=deva>&#2352;&#2381;</span> <b>(&lt;Shift&gt;</b>Z). This
is an exception to the Reph rule and maintained for the legacy style of visual construction.</p>

<ul>
   <li><span class=deva>&#2311; + &#2352;&#2381; = &#2312;</span></li>
   <li>You can also use <b>&lt;AltGr&gt;</b>B to get the whole glyph.</li>
</ul>

<p>i matra <span class=deva>&#2367;</span> (F) should be typed after a consonant/conjunct, i.e. phonetic order.</p>

<ul>
   <li><span class=deva>&#2325; + &#2367; = &#2325;&#2367;</span></li>
</ul>

<h2>Devanagari Alphabet to Keyboard Map</h2>
<p><i>This section is expected to be populated in future revisions of this document.</i></p>

<h2>Desktop Keyboard Layout</h2>
<h3>General Considerations</h3>

<p>Half forms and full consonant
letters are sometimes present in same key (i.e. some combination of default, <b>&lt;Shift&gt;</b>,<b>
&lt;AltGr&gt;</b>, and <b>&lt;AltGr&gt;&lt;Shift&gt;</b> states). For example <span class=deva>&#2325;</span>
and <span class=deva>&#2325;&#2381;&#8205;</span> are placed on same key.</p>

<p>Some consonant letters do not have
dedicated keys for half letters. To get the half letter, a halant (<span class=deva> &#2381; </span>), typed by ‘+’ (<b>&lt;Shift&gt;</b>=), should
be pressed after a full consonant letter. For example, there is no key for
typing <span class=deva>&#2331;&#2381;</span> We have to type <span class=deva>&#2331;</span> and then <span class=deva> &#2381; </span> to get <span class=deva>&#2331;&#2381;</span></p>


<p>There are no dedicated full
consonant letters for some consonants they are only available in a
modified key state. In most cases, typing the half form then <span class=deva>&#2366;</span> (<b>&lt;Shift&gt;</b>A
or K) will create the full form. For example, <span class=deva>&#2326;&#2381;</span>
+ <span class=deva>&#2366; = &#2326;</span> ([K or [<b>&lt;Shift&gt;</b>A)</p>

<h4>Zero Width Joiner and Non Zero Width Joiner</h4>

<p>Non Zero Width Joiner (NZWJ) (<b>&lt;AltGr&gt;</b>`) and Zero Width Joiner (ZWJ) (<b>&lt;AltGr&gt;&lt;Shift&gt;</b>`)
are supported. This provides flexibility in how characters are constructed and
appear.</p>

<ul>
  <li><span class=deva>क् + क = क्क</span></li>
  <li><span class=deva>क् + ZWNJ + क = क्‌क</span></li>
  <li><span class=deva>क् + ZWJ = क्‍</span></li>
</ul>

<h2>Visual Map</h3>

<p>The keyboard layout is demonstrated in the keyboard images below.</p>


<h3>Desktop Keyboard Layout</h3>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h3>Mobile/Tablet Keyboard Layout</h3>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them.</p>

<div id='osk-tablet' data-states='default shift'>
</div>
