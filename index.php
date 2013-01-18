<html lang="en" manifest="cache.appcache">
<head>
<title>Sandbox</title>
<!-- _  _ ___ _  _ _    ___ _ ____ -->
<!-- |__|  |  |\/| |     |  | |___ -->
<!-- |  |  |  |  | |___  |  | |___ -->

<!-- version 4.3 (frameset) made with <3 by MN -->
<!-- Open source code at http://github.com/mtthw/HTMLTIE -->
<link href="favicon.ico" rel="Shortcut Icon" />
<script type="text/javascript">

var editboxHTML = 
'<html class="expand close">' +
'<head>' +
'<script src="codemirror/lib/codemirror.js" type="text/javascript"></scr' + 'ipt>' +
'<script src="codemirror/mode/xml/xml.js"></scr' + 'ipt>' +
'<script src="codemirror/mode/javascript/javascript.js"></scr' + 'ipt>' +
'<script src="codemirror/mode/css/css.js"></scr' + 'ipt>' +
'<link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">' +
'<script src="codemirror/mode/htmlmixed/htmlmixed.js"></scr' + 'ipt>' +
'<link rel=stylesheet href="codemirror/lib/codemirror.css">' +
'<link rel=stylesheet href="codemirror/doc/docs.css">' +
'<script src="codemirror/lib/util/match-highlighter.js"></scr' + 'ipt>' +
'<script src="codemirror/lib/util/dialog.js"></scr' + 'ipt>' +
'<link rel="stylesheet" href="codemirror/lib/util/dialog.css">' +
'<script src="codemirror/lib/util/searchcursor.js"></scr' + 'ipt>' +
'<script src="codemirror/lib/util/search.js"></scr' + 'ipt>' +
'<script src="hotkeys.js"></scr' + 'ipt>' +
'<script>shortcut.add("Shift+Tab",function() { window.setCookie();   });' +
'shortcut.add("Alt+Shift+Tab",function() { var value = editor.getValue(); prompt("Data URI:", "data:text/html, " + value); });</scr' + 'ipt>' +
'<script>' +
'function setCookie() {' +
'var cookieDiv = document.getElementById("cookie").innerHTML;' +
'var cookie = prompt("Project name:", cookieDiv);' +
'document.getElementById("cookie").innerHTML = cookie;' +
'editor.setValue("");' +
'window.localStorage.setItem("cookie", cookie);'+
'document.getElementById("loaded").innerHTML = "false"; }' +
'</scr' + 'ipt>' +
'<style type="text/css">' +
'.expand { width: 100%; height: 100%; }' +
'.close { border: none; margin: 0px; padding: 0px; }' +
'html,body { overflow: hidden; }' +
'::-webkit-scrollbar {' +
'        width: 5px;' +
'        height: 5px;' +
'}' +
'::-webkit-scrollbar-track {' +
'        background-color: transparent;' +
'}' +
'::-webkit-scrollbar-thumb {' +
'        background-color: #444;' +
'        border-radius: 5px;' +
'        padding-right: 50px;' +
'}' +
'.CodeMirror-line-numbers {' + 
'        width: 2.2em;' +
'        color: #aaa;' +
'        background-color: #eee;' +
'        text-align: right;' +
'        padding-right: .3em;' +
'        font-size: 10pt;' +
'        font-family: monospace;' +
'        padding-top: .4em;' +
'}' +

'.CodeMirror-scroll {' +
'        height: 100%;' +
'}' +
'.activeline {background: #222 !important;}' +
'.CodeMirror-matchingbracket {background: #555 !important;}' +
'span.CodeMirror-matchhighlight { background: #555; }' +
'.CodeMirror-focused span.CodeMirror-matchhighlight { background: #555; !important }' +
'.cm-tab {' +
'         background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAMCAYAAAAkuj5RAAAAQklEQVR42mNgGAWjYEQA5v9AAKQFQBwoe8gBJajDBVE88H+IgqEYA3JQhxsNRQ+A80BhYaH/UM4DIMA4Wp6NAioDADWL2WV1e3w1AAAAAElFTkSuQmCC);' +
'         background-position: right;' +
'         background-repeat: no-repeat;' +
'}'+

'<\/style>' +
'<\/head>' +
'<body class="expand close">' +
'<form class="expand close" name="f">' +
'<textarea id=code class="expand close" style="background: #def; font-family: monospace;" name="ta" wrap="hard" spellcheck="false">' +
'<\/textarea>' +
'<\/form>' +
'<div id="cookie" style="display: none;"><\/div>' +
'<div id="loaded" style="display: none;">false<\/div>' +

'<script type="text/javascript">' +
'var editor = CodeMirror.fromTextArea(document.getElementById("code"), {mode: "text/html", lineNumbers: true, matchBrackets: true, lineWrapping: true, tabMode: "indent", onCursorActivity: function() {editor.setLineClass(hlLine, null, null);hlLine = editor.setLineClass(editor.getCursor().line, null, "activeline"); editor.matchHighlight("CodeMirror-matchhighlight");}});' +
'var hlLine = editor.setLineClass(0, "activeline");' +
'editor.setOption("theme", "vibrant-ink");' +
'editor.focus();' +
'document.getElementById("cookie").addEventListener("load", function () { document.getElementById("cookie").innerHTML=window.localStorage.getItem("cookie"); }, false);' +
'</scr' + 'ipt>' +

'<\/body>' +
'<\/html>';

var defaultStuff = '';

//var extraStuff = '<div style="position:absolute; margin:.3em; bottom:0em; right:0em;"><small><\/small><\/div>';
var extraStuff = '';

var old = '';
         
function init() {
  window.editbox.document.write(editboxHTML);
  window.editbox.document.close();
  //window.editbox.document.f.ta.value = defaultStuff;
  setInterval("update()", 500);
  setInterval("saveLocally()", 500);
}

function update()
{
  if (window.editbox.editor == undefined) return;
  code = window.editbox.editor.getValue();
  var d = dynamicframe.document; 

  if (old != code) {
    old = code;
    d.open();
    d.write(old);
    if (old.replace(/[\r\n]/g,'') == defaultStuff.replace(/[\r\n]/g,''))
      d.write(extraStuff);
    d.close();
  }
}

var cookie = ""
function saveLocally() {
    var cookie = window.editbox.document.getElementById('cookie').innerHTML;
    if (window.editbox.document.getElementById('loaded').innerHTML == 'false') {
        code = localStorage.getItem(cookie);
        if (code == null) code = "";
        window.editbox.editor.setValue(code);
        window.editbox.document.getElementById('loaded').innerHTML = 'true';
    } else {
        code = window.editbox.editor.getValue();
        localStorage.setItem(cookie, code);
    }
}

</script>
</head>

<frameset resizable="yes" cols="*, 42%" onload="init();">
  <frame name="dynamicframe" src="javascript:'';">
  <frame name="editbox" src="javascript:'';">
</frameset>

</html>