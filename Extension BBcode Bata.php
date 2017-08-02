<?php
/*
Plugin Name: Extension BBcode Bata
Plugin URI: http://jianmingyong.freeiz.com/wordpress/
Description: More BBcode to use then the other plugins.
Version: 1.2
Author: jianmingyong ( Yong Jian Ming )
Author URI: http://jianmingyong.freeiz.com/wordpress/
License:
Copyright 2012 Yong Jian Ming (email : jianming1993@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty ofMERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Variable */
add_shortcode('b' , 'bold');
add_shortcode('B' , 'bold');
add_shortcode('i' , 'italics');
add_shortcode('I' , 'italics');
add_shortcode('u' , 'underline');
add_shortcode('U' , 'underline');
add_shortcode('s' , 'strikethrough');
add_shortcode('S' , 'strikethrough');
add_shortcode('size' , 'size');
add_shortcode('SIZE' , 'size');
add_shortcode('color' , 'color');
add_shortcode('COLOR' , 'color');
add_shortcode('center' , 'center');
add_shortcode('CENTER' , 'center');
add_shortcode('quote' , 'quote');
add_shortcode('QUOTE' , 'quote');
add_shortcode('url' , 'url');
add_shortcode('URL' , 'url');
add_shortcode('img' , 'image');
add_shortcode('IMG' , 'image');
add_shortcode('ul' , 'unorderedlist');
add_shortcode('UL' , 'unorderedlist');
add_shortcode('ol' , 'orderedlist');
add_shortcode('OL' , 'orderedlist');
add_shortcode('li' , 'listitem');
add_shortcode('LI' , 'listitem');
add_shortcode('code' , 'code');
add_shortcode('CODE' , 'code');
add_shortcode('youtube' , 'youtube');
add_shortcode('YOUTUBE' , 'youtube');
add_shortcode('gvideo' , 'gvideo');
add_shortcode('GVIDEO' , 'gvideo');
add_shortcode('spoiler' , 'spoiler');
add_shortcode('SPOILER' , 'spoiler');
add_shortcode('hr' , 'line');
add_shortcode('HR' , 'line');
add_shortcode('sub' , 'subscript');
add_shortcode('SUB' , 'subscript');
add_shortcode('sup' , 'superscript');
add_shortcode('SUP' , 'superscript');
add_shortcode('table' , 'table');
add_shortcode('TABLE' , 'table');
add_shortcode('tr' , 'tablerow');
add_shortcode('TR' , 'tablerow');
add_shortcode('td' , 'tablecol');
add_shortcode('TD' , 'tablecol');
add_shortcode('hnote' , 'note');
add_shortcode('HNOTE' , 'note');
add_shortcode('textarea' , 'textarea');
add_shortcode('TEXTAREA' , 'textarea');

/* Functions */
function bold($atts, $content='')
{
	if (!empty($content)) return '<strong>'.do_shortcode($content).'</strong>';
}

function italics($atts, $content='')
{
	if (!empty($content)) return '<em>'.do_shortcode($content).'</em>';
}

function underline($atts, $content='')
{
	if (!empty($content)) return '<span style="text-decoration:underline">'.do_shortcode($content).'</span>';
}

function strikethrough($atts, $content='')
{
	if (!empty($content)) return '<del>'.do_shortcode($content).'</del>';
}

function size( $atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = substr ( $attribs, 1);
	if (!empty($subattribs)) return '<span style="font-size:'.$subattribs.'px">'.do_shortcode($content).'</span>';
}

function color( $atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = substr ( $attribs, 1);
	if (!empty($subattribs)) return '<font color='.$subattribs.'>'.do_shortcode($content).'</font>';
}

function center($atts, $content='')
{
	if (!empty($content)) return '<center>'.do_shortcode($content).'</center>';
}

function quote($atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = substr ( $attribs, 1);
	if (empty($subattribs))
	{
		return '<strong>Quote:</strong><br><table border="1"><tr><td><blockquote>'.do_shortcode($content).'</blockquote></td></tr></table>';
	}
	if (!empty($subattribs))
	{
		return '<strong>Quote:</strong><br><table border="1"><tr><td><strong>'.$subattribs.':</strong><blockquote>'.do_shortcode($content).'</blockquote></td></tr></table>';
	}
}

function url($atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = substr ( $attribs, 1);
	if (empty($subattribs))
	{
		return '<a href="'.$content.'">'.do_shortcode($content).'</a>';
	}
	if (!empty($subattribs))
	{
		return '<a href="'.$subattribs.'">'.do_shortcode($content).'</a>';
	}
}

function image($atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = explode(":", $attribs); 
	if (empty($subattribs))
	{
		return '<img src="'.do_shortcode($content).'" alt="'.$content.'" />';
	}
	if (!empty($subattribs))
	{
		return '<img src="'.do_shortcode($content).'" alt="'.$content.'" width="'.$subattribs[0].'" height="'.$subattribs[1].'" />';
	}
}

function unorderedlist($atts, $content='')
{
	if (!empty($content)) return '<ul>'.do_shortcode($content).'</ul>';
}

function orderedlist( $atts, $content='')
{
	if (!empty($content)) return '<ol>'.do_shortcode($content).'</ol>';
}

function listitem( $atts, $content='')
{
	if (!empty($content)) return '<li>'.do_shortcode($content).'</li>';
}

function code($atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = substr ( $attribs, 1);
	if (empty($subattribs))
	{
		return '<table border="1"><tr><td>Code:</td></tr><tr><td><code>'.do_shortcode($content).'</code></td></tr></table>';
	}
	if (!empty($subattribs))
	{
		return '<table border="1"><tr><td>'.$subattribs.':</td></tr><tr><td><code>'.do_shortcode($content).'</code></td></tr></table>';
	}
}

function youtube($atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = explode(":", $attribs);
	if (empty($content))
	{
		return 'No YouTube Video ID Set';
	}
	if (empty($subattribs))
	{
		return '<object width="400" height="325"><param name="movie" value="http://www.youtube.com/v/'.do_shortcode($content).'"></param><embed src="http://www.youtube.com/v/'.$content.'" type="application/x-shockwave-flash" width="400" height="325"></embed></object>';
	}
	if (!empty($subattribs))
	{
		return '<object width="'.$subattribs[0].'" height="'.$subattribs[1].'"><param name="movie" value="http://www.youtube.com/v/'.do_shortcode($content).'"></param><embed src="http://www.youtube.com/v/'.$content.'" type="application/x-shockwave-flash" width="'.$subattribs[0].'" height="'.$subattribs[1].'"></embed></object>';
	}
}

function gvideo($atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = explode(":", $attribs);
	if (empty($content))
	{
		return 'No Google Video ID Set';
	}
	if (empty($subattribs))
	{
		return '<embed style="width:400px; height:325px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId='.do_shortcode($content).'&hl=en"></embed>';
	}
	if (!empty($subattribs))
	{
		return '<embed style="width:'.$subattribs[0].'; height:'.$subattribs[1].';" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId='.do_shortcode($content).'&hl=en"></embed>';
	}
}

function spoiler($atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = substr ( $attribs, 1);
	if (empty($subattribs))
	{
		return '<div style="margin:20px; margin-top:5px"><div class="smallfont" style="margin-bottom:2px"><b>Spoiler: </b><input type="button" value="Show" style="width:45px;font-size:10px;margin:0px;padding:0px;" onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show\'; }"></div><div class="alt2" style="margin: 0px; padding: 6px; border: 1px inset;"><div style="display: none;">'.do_shortcode($content).'</div></div></div>';
	}
	if (!empty($subattribs))
	{
		return '<div style="margin:20px; margin-top:5px"><div class="smallfont" style="margin-bottom:2px"><b>Spoiler</b> for <i>'. $subattribs .'</i> <input type="button" value="Show" style="width:45px;font-size:10px;margin:0px;padding:0px;" onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show\'; }"></div><div class="alt2" style="margin: 0px; padding: 6px; border: 1px inset;"><div style="display: none;">'.do_shortcode($content).'</div></div></div>';
	}
}

function line( $atts, $content='')
{
	if (empty($content)) return '<hr></hr>';
	if (!empty($content)) return '<hr></hr>';
}

function subscript( $atts, $content='')
{
	if (!empty($content)) return '<sub>'.do_shortcode($content).'</sub>';
}

function superscript( $atts, $content='')
{
	if (!empty($content)) return '<sup>'.do_shortcode($content).'</sup>';
}

function table( $atts, $content='')
{
	$attribs = implode("",$atts);
	$subattribs = substr ( $attribs, 1);
	if (empty($subattribs)) return '<table>'.do_shortcode($content).'</table>';
	if (!empty($subattribs)) return '<table border="'.$subattribs.'">'.do_shortcode($content).'</table>';
}

function tablerow( $atts, $content='')
{
	if (!empty($content)) return '<tr>'.do_shortcode($content).'</tr>';
}

function tablecol( $atts, $content='')
{
	if (!empty($content)) return '<td>'.do_shortcode($content).'</td>';
}

function note( $atts, $content='')
{
	if (!empty($content)) return '<!--'.do_shortcode($content).'-->';
}

function textarea( $atts = array(), $content = NULL )
{
	$attribs = implode("",$atts);
	$subattribs = explode(":", $attribs);
	if (empty($subattribs))
	{
		return '<textarea>'.do_shortcode($content).'</textarea>';
	}
	if (!empty($subattribs))
	{
		return '<textarea width="'.$subattribs[0].'" height="'.$subattribs[1].'">'.do_shortcode($content).'</textarea>';
	}
}
?>