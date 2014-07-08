<?php
$element = '<object width="250" height="250" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="gsPlaylist{{id}}69" name="gsPlaylist{{id}}69"><param name="movie" value="http://grooveshark.com/widget.swf" /><param name="wmode" value="window" /><param name="allowScriptAccess" value="always" /><param name="flashvars" value="hostname=grooveshark.com&playlistID={{id}}&p=1&bbg=000000&bth=000000&pfg=000000&lfg=000000&bt=FFFFFF&pbg=FFFFFF&pfgh=FFFFFF&si=FFFFFF&lbg=FFFFFF&lfgh=FFFFFF&sb=FFFFFF&bfg=666666&pbgh=666666&lbgh=666666&sbh=666666" /><object type="application/x-shockwave-flash" data="http://grooveshark.com/widget.swf" width="250" height="250"><param name="wmode" value="window" /><param name="allowScriptAccess" value="always" /><param name="flashvars" value="hostname=grooveshark.com&playlistID={{id}}&p=1&bbg=000000&bth=000000&pfg=000000&lfg=000000&bt=FFFFFF&pbg=FFFFFF&pfgh=FFFFFF&si=FFFFFF&lbg=FFFFFF&lfgh=FFFFFF&sb=FFFFFF&bfg=666666&pbgh=666666&lbgh=666666&sbh=666666" /></object></object>';

//get id
$id = file_get_contents('id.txt');

$element = str_replace("{{id}}", $id, $element);

echo json_encode(array('data' => $element));