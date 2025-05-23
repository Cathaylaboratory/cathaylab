<?php
  $pagename = 'Tepehuan (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
      p { font: 10pt Tahoma }
      h1 { font: bold 16pt Tahoma; color: #4444cc }
      h2 { font: bold 12pt Tahoma; color: #4444cc }
      table.display tr .gap { width: 16px; border: none; }
      table.display tr td { font: 10pt "HI Keawe Unicode"; border: solid 1px #ccccff; padding: 4px }
      table.display tr th { font: bold 10pt Tahoma; border: solid 1px #ccccff; padding: 4px; text-align: left }
      table.display { border-collapse: collapse; }
      table.tableizer-table {
          font-size: 12px;
          border: 1px solid #CCC; 
          font-family: Arial, Helvetica, sans-serif;
      } 
      .tableizer-table td {
          padding: 4px;
          margin: 3px;
          border: 1px solid #CCC;
      }
      .tableizer-table th {
          background-color: #104E8B; 
          color: #FFF;
          font-weight: bold;
      }
      kbd {
          background-color: #eee;
          border-radius: 3px;
          border: 1px solid #b4b4b4;
          box-shadow: 0 1px 1px rgba(0, 0, 0, .2), 0 2px 0 0 rgba(255, 255, 255, .7) inset;
          color: #333;
          display: inline-block;
          font-size: .85em;
          font-weight: 700;
          line-height: 1;
          padding: 2px 4px;
          white-space: nowrap; }
    END;
require_once('header.php');
?>

<h2>Keyboard</h2>
<p>
    Southern Tepehuan/Durango Unicode keyboard in modified roman or phonetic script. Use this keyboard with fonts such as Doulos SIL. This keyboard includes the Unicode code points for glottal stops U+A78B and U+A78C.
</p>

<h3>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'>
</div>

<h2>Key Sequences</h2>

<table class="tableizer-table">
<thead><tr class="tableizer-firstrow"><th>Key Sequence</th><th>Output</th></tr></thead><tbody>
 <tr><td><kbd>!</kbd> + <kbd>!</kbd></td><td> ¡ </td></tr>
 <tr><td><kbd>%</kbd> + <kbd>%</kbd></td><td> ‰ </td></tr>
 <tr><td><kbd>b</kbd> + <kbd>-</kbd></td><td> β </td></tr>
 <tr><td><kbd>d</kbd> + <kbd>-</kbd></td><td> ð </td></tr>
 <tr><td><kbd>g</kbd> + <kbd>-</kbd></td><td> ɣ </td></tr>
 <tr><td><kbd>l</kbd> + <kbd>-</kbd></td><td> ƚ </td></tr>
 <tr><td><kbd>L</kbd> + <kbd>-</kbd></td><td> Ƚ </td></tr>
 <tr><td><kbd>-</kbd> + <kbd>-</kbd></td><td> – </td></tr>
 <tr><td><kbd>-</kbd> + <kbd>-</kbd> + <kbd>-</kbd></td><td> — </td></tr>
 <tr><td><kbd>-</kbd> + <kbd>-</kbd> + <kbd>-</kbd> + <kbd>-</kbd></td><td> ---- </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>.</kbd> + <kbd>.</kbd></td><td> ... </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>.</kbd> + <kbd>.</kbd> + <kbd>.</kbd></td><td> .... </td></tr>
 <tr><td><kbd>?</kbd> + <kbd>/</kbd></td><td> ʔ </td></tr>
 <tr><td><kbd>1</kbd> + <kbd>/</kbd> + <kbd>2</kbd></td><td> ½ </td></tr>
 <tr><td><kbd>1</kbd> + <kbd>/</kbd> + <kbd>4</kbd></td><td> ¼ </td></tr>
 <tr><td><kbd>‹</kbd> + <kbd>‹</kbd></td><td> « </td></tr>
 <tr><td><kbd>Ꞌ</kbd> + <kbd>‹</kbd></td><td> ‘ </td></tr>
 <tr><td><kbd>"</kbd> + <kbd>‹</kbd></td><td> “ </td></tr>
 <tr><td><kbd>=</kbd> + <kbd>=</kbd></td><td> ­ (SOFT HYPHEN U+00AD)</td></tr>
 <tr><td><kbd>=</kbd> + <kbd>=</kbd> + <kbd>=</kbd></td><td> — </td></tr>
 <tr><td><kbd>=</kbd> + <kbd>=</kbd> + <kbd>=</kbd> + <kbd>=</kbd></td><td> ==== </td></tr>
 <tr><td><kbd>ɇ</kbd> + <kbd>=</kbd></td><td> w </td></tr>
 <tr><td><kbd>Ɇ</kbd> + <kbd>=</kbd></td><td> W </td></tr>
 <tr><td><kbd>ɨ</kbd> + <kbd>=</kbd></td><td> [ </td></tr>
 <tr><td><kbd>Ɨ</kbd> + <kbd>=</kbd></td><td> { </td></tr>
 <tr><td><kbd>ñ</kbd> + <kbd>=</kbd></td><td> ] </td></tr>
 <tr><td><kbd>Ñ</kbd> + <kbd>=</kbd></td><td> } </td></tr>
 <tr><td><kbd>Ꞌ</kbd> + <kbd>=</kbd></td><td> ' </td></tr>
 <tr><td><kbd>-</kbd> + <kbd>=</kbd></td><td> - </td></tr>
 <tr><td><kbd>›</kbd> + <kbd>›</kbd></td><td> » </td></tr>
 <tr><td><kbd>Ꞌ</kbd> + <kbd>›</kbd></td><td> ’ </td></tr>
 <tr><td><kbd>"</kbd> + <kbd>›</kbd></td><td> ” </td></tr>
 <tr><td><kbd>?</kbd> + <kbd>?</kbd></td><td> ¿ </td></tr>
 <tr><td><kbd>a</kbd> + <kbd>@</kbd></td><td> ª </td></tr>
 <tr><td><kbd>c</kbd> + <kbd>@</kbd></td><td> © </td></tr>
 <tr><td><kbd>d</kbd> + <kbd>@</kbd></td><td> ° </td></tr>
 <tr><td><kbd>h</kbd> + <kbd>@</kbd></td><td> ʰ </td></tr>
 <tr><td><kbd>o</kbd> + <kbd>@</kbd></td><td> º </td></tr>
 <tr><td><kbd>r</kbd> + <kbd>@</kbd></td><td> ® </td></tr>
 <tr><td><kbd>t</kbd> + <kbd>@</kbd></td><td> ™ </td></tr>
 <tr><td><kbd>ɇ</kbd> + <kbd>@</kbd></td><td> ʷ </td></tr>
 <tr><td><kbd>y</kbd> + <kbd>@</kbd></td><td> ʸ </td></tr>
 <tr><td><kbd>1</kbd> + <kbd>@</kbd></td><td> ¹ </td></tr>
 <tr><td><kbd>2</kbd> + <kbd>@</kbd></td><td> ² </td></tr>
 <tr><td><kbd>3</kbd> + <kbd>@</kbd></td><td> ³ </td></tr>
 <tr><td><kbd>.</kbd> + <kbd>@</kbd></td><td> • </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>@</kbd></td><td> ¨ </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>A</kbd></td><td> /Á </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>A</kbd></td><td> "Ä </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>A</kbd></td><td> /A </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>A</kbd></td><td> "A </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>A</kbd></td><td> Á </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>A</kbd></td><td> Ä </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>E</kbd></td><td> /É </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>E</kbd></td><td> "Ë </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>E</kbd></td><td> /E </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>E</kbd></td><td> "E </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>E</kbd></td><td> É </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>E</kbd></td><td> Ë </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>I</kbd></td><td> /Í </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>I</kbd></td><td> "Ï </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>I</kbd></td><td> /I </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>I</kbd></td><td> "I </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>I</kbd></td><td> Í </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>I</kbd></td><td> Ï </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>O</kbd></td><td> /Ó </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>O</kbd></td><td> "Ö </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>O</kbd></td><td> /O </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>O</kbd></td><td> "O </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>O</kbd></td><td> Ó </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>O</kbd></td><td> Ö </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>U</kbd></td><td> /Ú </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>U</kbd></td><td> "Ü </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>U</kbd></td><td> /U </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>U</kbd></td><td> "U </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>U</kbd></td><td> Ú </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>U</kbd></td><td> Ü </td></tr>
 <tr><td><kbd>c</kbd> + <kbd>^</kbd></td><td> č </td></tr>
 <tr><td><kbd>j</kbd> + <kbd>^</kbd></td><td> ǰ </td></tr>
 <tr><td><kbd>s</kbd> + <kbd>^</kbd></td><td> š </td></tr>
 <tr><td><kbd>z</kbd> + <kbd>^</kbd></td><td> ž </td></tr>
 <tr><td><kbd>S</kbd> + <kbd>^</kbd></td><td> Š </td></tr>
 <tr><td><kbd>‹</kbd> + <kbd>`</kbd></td><td> < </td></tr>
 <tr><td><kbd>›</kbd> + <kbd>`</kbd></td><td> > </td></tr>
 <tr><td><kbd>‹</kbd> + <kbd>‹</kbd> + <kbd>`</kbd></td><td> << </td></tr>
 <tr><td><kbd>›</kbd> + <kbd>›</kbd> + <kbd>`</kbd></td><td> >> </td></tr>
 <tr><td><kbd>Ꞌ</kbd> + <kbd>›</kbd> + <kbd>`</kbd></td><td> ' </td></tr>
 <tr><td><kbd>Ꞌ</kbd> + <kbd>‹</kbd> + <kbd>`</kbd></td><td> ' </td></tr>
 <tr><td><kbd>"</kbd> + <kbd>›</kbd> + <kbd>`</kbd></td><td> "</td></tr>
 <tr><td><kbd>"</kbd> + <kbd>‹</kbd> + <kbd>`</kbd></td><td> "</td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>a</kbd></td><td> /á </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>a</kbd></td><td> "ä </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>a</kbd></td><td> /a </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>a</kbd></td><td> "a </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>a</kbd></td><td> á </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>a</kbd></td><td> ä </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>e</kbd></td><td> /é </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>e</kbd></td><td> "ë </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>e</kbd></td><td> /e </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>e</kbd></td><td> "e </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>e</kbd></td><td> é </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>e</kbd></td><td> ë </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>i</kbd></td><td> /í </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>i</kbd></td><td> "ï </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>i</kbd></td><td> /i </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>i</kbd></td><td> "i </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>i</kbd></td><td> í </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>i</kbd></td><td> ï </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>o</kbd></td><td> /ó </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>o</kbd></td><td> "ö </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>o</kbd></td><td> /o </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>o</kbd></td><td> "o </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>o</kbd></td><td> ó </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>o</kbd></td><td> ö </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>/</kbd> + <kbd>u</kbd></td><td> /ú </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>:</kbd> + <kbd>u</kbd></td><td> "ü </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>/</kbd> + <kbd>u</kbd></td><td> /u </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>:</kbd> + <kbd>u</kbd></td><td> "u </td></tr>
 <tr><td><kbd>/</kbd> + <kbd>u</kbd></td><td> ú </td></tr>
 <tr><td><kbd>:</kbd> + <kbd>u</kbd></td><td> ü </td></tr>
 <tr><td><kbd>e</kbd> + <kbd>|</kbd></td><td> ɇ </td></tr>
 <tr><td><kbd>E</kbd> + <kbd>|</kbd></td><td> Ɇ </td></tr>
 <tr><td><kbd>0</kbd> + <kbd>|</kbd></td><td> ∅ </td></tr>
 <tr><td><kbd>c</kbd> + <kbd>|</kbd></td><td> ¢ </td></tr>
 <tr><td><kbd>n</kbd> + <kbd>|</kbd></td><td> ŋ </td></tr>
 <tr><td><kbd>+</kbd> + <kbd>|</kbd></td><td> † </td></tr>
 <tr><td><kbd>r</kbd> + <kbd>~</kbd></td><td> r̃ </td></tr>
 <tr><td><kbd>r</kbd> + <kbd>~</kbd> + <kbd>~</kbd></td><td> r~ </td></tr>
 <tr><td><kbd>r</kbd> + <kbd>~</kbd> + <kbd>~</kbd> + <kbd>~</kbd></td><td> r̃~ </td></tr>
 <tr><td><kbd>e</kbd> + <kbd>~</kbd></td><td> ə </td></tr>
 <tr><td><kbd>e</kbd> + <kbd>~</kbd> + <kbd>~</kbd></td><td> e~ </td></tr>
 <tr><td><kbd>e</kbd> + <kbd>~</kbd> + <kbd>~</kbd> + <kbd>~</kbd></td><td> ə~ </td></tr>
</tbody></table>
