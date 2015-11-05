<?

## css styles

$html_style = '';
$html_style .= 'height: 100%;';

$body_style = '';
$body_style .= 'height: inherit;';
$body_style .= 'margin: 0;';

$center_style = '';
$center_style .= 'height: inherit;';

$pre_00_style = '';
$pre_00_style .= 'font-size: 1.3em;';
$pre_00_style .= 'position: relative;';
$pre_00_style .= 'margin: 0;';
$pre_00_style .= 'top: 50%;';
$pre_00_style .= 'transform: translateY(-50%);';

$at_base = 'transform: scale(2, 1);';

$at_style = 'display: inline-block;';
$at_style .= 'font-size: 0.8em;';
$at_style .= '-webkit-' . $at_base;
$at_style .= '-moz-' . $at_base;
$at_style .= '-ms-' . $at_base;
$at_style .= '-o-' . $at_base;
$at_style .= $at_base;
$at_style .= 'top: -1px;';
$at_style .= 'position: relative;';

$pre_01_style = '';
$pre_01_style .= 'color: transparent;';
$pre_01_style .= 'font-size: 0.1em;';

## endof css styles

$ap = '';
$ap .= '<!DOCTYPE html>';
$ap .= '<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" style="%1$s">';
$ap .= '<head>';
#$ap .= '<!-- Keyword Meta -->';
$ap .= '<meta name="description" content="albert.park">';
$ap .= '<meta name="keywords" content="albertpark, albert park, albert, park, park.ac">';
$ap .= '<meta name="referrer" content="always">';
#$ap .= '<!-- Standard Meta -->';
$ap .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
$ap .= '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
#$ap .= '<!-- Mobile Meta -->';
$ap .= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">';
$ap .= '<meta name="apple-mobile-web-app-capable" content="yes">';
$ap .= '<link rel="image_src" type="image/jpeg" href="/images/logo.png">';

$ap .= '<title>albert.park.ac</title>';
$ap .= '</head>';

$ap .= '<body style="%2$s">';
$ap .= '<center style="%3$s">';
$ap .= '<pre style="%4$s"> albert <span style="%5$s">@</span> park.ac </pre>';
$ap .= '<pre style="%6$s">CCC9 BFCD B7F4 4E35 E303  5055 5E34 5DF2 FCAF 82F7</pre>';
$ap .= '</center>';
$ap .= '</body>';
$ap .= '</html>';

print(sprintf($ap, $html_style, $body_style, $center_style, $pre_00_style, $at_style, $pre_01_style));

?>