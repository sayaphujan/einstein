<?php
$title = '';
$page_url = (isset($_GET[ 'page' ])) ? $_GET['page'] : '';

require_once( 'inc/functions.php' );

if ( $_SERVER[ 'SERVER_PORT' ] !== '443' && $_SERVER[ 'SERVER_PORT' ] !== '80' ) {
    header( 'location: ' . root() );
    exit();
}

if ( isset( $_SESSION[ 'rid' ] ) ) {
    switch ( $_GET[ 'page' ] ) {

        case 'home':
            $page = 'pages/home.php';
            $title .= '';
            break;

        default:
            $page = 'pages/home.php';
            $title .= '';
            break;
    }
} 
else 
{
    switch ( isset($_GET[ 'page' ] ) )
    {
         
        case 'home':
            $page = 'pages/home.php';
            $title .= '';
            break;
            
        default:
            $page = 'pages/home.php';
            $title .= '';
            break;
    }

}
?>
<!doctype html>
<html lang="en-US" class="js">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <link rel="pingback" href="http://einsteinacademy.us/xmlrpc.php">
    <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
    <script async="" src="<?php echo root('js/gtm.js.download?').time(); ?>"></script>
    <script type="text/javascript" src="<?php echo root('js/bundle-playback.js.download?').time(); ?>" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo root('js/wombat.js.download?').time(); ?>" charset="utf-8"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo root('css/banner-styles.css?').time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo root('css/banner-styles.css?').time(); ?>">
    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>
    <title>
        <?php echo $title; ?> | The Einstein Academy
    </title>
</head>

<body>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <style id="et-divi-open-sans-inline-css">
        /* Original: https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext&#038;display=swap */
        /* User Agent: Mozilla/5.0 (Unknown; Linux x86_64) AppleWebKit/538.1 (KHTML, like Gecko) Safari/538.1 Daum/4.1 */
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWV4exQ.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWV4exQ.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 600;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWV4exQ.ttf) format('truetype');
                }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 700;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWV4exQ.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 800;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWV4exQ.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4uaVc.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4uaVc.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4uaVc.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4uaVc.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 800;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4uaVc.ttf) format('truetype');
            }
            /* User Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0 */
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 300;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWV4exg.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 400;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWV4exg.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 600;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWV4exg.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 700;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWV4exg.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: italic;
                font-weight: 800;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWV4exg.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4uaVQ.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4uaVQ.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4uaVQ.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4uaVQ.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 800;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4uaVQ.woff) format('woff');
            }
            /* User Agent: Mozilla/5.0 (Windows NT 6.3; rv:39.0) Gecko/20100101 Firefox/39.0 */
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWV4ewA.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWV4ewA.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWV4ewA.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWV4ewA.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWV4ewA.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4uaVI.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4uaVI.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4uaVI.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4uaVI.woff2) format('woff2');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v29/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4uaVI.woff2) format('woff2');
        }
        </style>
        <style id="et-builder-googlefonts-cached-inline">
            /* Original: https://fonts.googleapis.com/css?family=Rubik:300,regular,500,600,700,800,900,300italic,italic,500italic,600italic,700italic,800italic,900italic|Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Cabin+Sketch:regular,700&#038;subset=latin,latin-ext&#038;display=swap */
            /* User Agent: Mozilla/5.0 (Unknown; Linux x86_64) AppleWebKit/538.1 (KHTML, like Gecko) Safari/538.1 Daum/4.1 */
            @font-face {
                font-family: 'Cabin Sketch';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/cabinsketch/v19/QGYpz_kZZAGCONcK2A4bGOj8mNhI.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Cabin Sketch';
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/cabinsketch/v19/QGY2z_kZZAGCONcK2A4bGOj0I_1Y5tj2.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R8WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR9WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq_p9WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq5Z9WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq3p6WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq0N6WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR6WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: italic;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXh0ow.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 100;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Xw5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 200;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Hw5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr73w5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w5aX8.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: italic;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8sDE3U3f4c.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: italic;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tdE3U3f4c.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: italic;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tvE3U3f4c.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: italic;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8uDFHU3f4c.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: italic;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8u6FHU3f4c.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: italic;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8vdFHU3f4c.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: italic;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8v0FHU3f4c.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFV0Uw.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4iFV0Uw.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: normal;
                font-weight: 500;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFV0Uw.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: normal;
                font-weight: 600;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FV0Uw.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-FV0Uw.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: normal;
                font-weight: 800;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-h4-FV0Uw.ttf) format('truetype');
            }
            @font-face {
                font-family: 'Rubik';
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-ro-FV0Uw.ttf) format('truetype');
            }
            /* User Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0 */
        @font-face {
            font-family: 'Cabin Sketch';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cabinsketch/v19/QGYpz_kZZAGCONcK2A4bGOj8mNhL.woff) format('woff');
        }
        @font-face {
            font-family: 'Cabin Sketch';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cabinsketch/v19/QGY2z_kZZAGCONcK2A4bGOj0I_1Y5tj1.woff) format('woff');
        }
        @font-face {font-family: 'Montserrat';font-style: italic;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R8WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR9WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq_p9WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq5Z9WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq3p6WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq0N6WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR6WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXh0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Xw5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Hw5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr73w5aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w5aXw.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8sDE3U3f4Q.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tdE3U3f4Q.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tvE3U3f4Q.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8uDFHU3f4Q.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8u6FHU3f4Q.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8vdFHU3f4Q.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8v0FHU3f4Q.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFV0Uz.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4iFV0Uz.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFV0Uz.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FV0Uz.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-FV0Uz.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-h4-FV0Uz.woff) format('woff');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-ro-FV0Uz.woff) format('woff');}/* User Agent: Mozilla/5.0 (Windows NT 6.3; rv:39.0) Gecko/20100101 Firefox/39.0 */@font-face {font-family: 'Cabin Sketch';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/cabinsketch/v19/QGYpz_kZZAGCONcK2A4bGOj8mNhN.woff2) format('woff2');}@font-face {font-family: 'Cabin Sketch';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/cabinsketch/v19/QGY2z_kZZAGCONcK2A4bGOj0I_1Y5tjz.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R8WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR9WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq_p9WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq5Z9WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq3p6WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq0N6WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR6WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXh0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Xw5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Hw5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr73w5aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w5aXo.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8sDE3U3f4I.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tdE3U3f4I.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tvE3U3f4I.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8uDFHU3f4I.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8u6FHU3f4I.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8vdFHU3f4I.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: italic;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8v0FHU3f4I.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFV0U1.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4iFV0U1.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYiFV0U1.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-FV0U1.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-FV0U1.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-h4-FV0U1.woff2) format('woff2');}@font-face {font-family: 'Rubik';font-style: normal;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-ro-FV0U1.woff2) format('woff2');}</style><meta name="robots" content="max-image-preview:large">
<script type="text/javascript">
            let jqueryParams=[],jQuery=function(r){return jqueryParams=[...jqueryParams,r],jQuery},$=function(r){return jqueryParams=[...jqueryParams,r],$};window.jQuery=jQuery,window.$=jQuery;let customHeadScripts=!1;jQuery.fn=jQuery.prototype={},$.fn=jQuery.prototype={},jQuery.noConflict=function(r){if(window.jQuery)return jQuery=window.jQuery,$=window.jQuery,customHeadScripts=!0,jQuery.noConflict},jQuery.ready=function(r){jqueryParams=[...jqueryParams,r]},$.ready=function(r){jqueryParams=[...jqueryParams,r]},jQuery.load=function(r){jqueryParams=[...jqueryParams,r]},$.load=function(r){jqueryParams=[...jqueryParams,r]},jQuery.fn.ready=function(r){jqueryParams=[...jqueryParams,r]},$.fn.ready=function(r){jqueryParams=[...jqueryParams,r]};</script><link rel="alternate" type="application/rss+xml" title="The Einstein Academy » Feed" href="https://einsteinacademy.us/feed/">
<link rel="alternate" type="application/rss+xml" title="The Einstein Academy » Comments Feed" href="https://einsteinacademy.us/comments/feed/">
<meta content="Divi Child v.1.0.1551977126" name="generator"><style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('/web/20220703153935im_/http://einsteinacademy.us/home-page-4/#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}body { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<style id="divi-style-parent-inline-inline-css" type="text/css">
/*!
Theme Name: Divi
Theme URI: http://www.elegantthemes.com/gallery/divi/
Version: 4.14.1
Description: Smart. Flexible. Beautiful. Divi is the most powerful theme in our collection.
Author: Elegant Themes
Author URI: http://www.elegantthemes.com
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

a,abbr,acronym,address,applet,b,big,blockquote,body,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,form,h1,h2,h3,h4,h5,h6,html,i,iframe,img,ins,kbd,label,legend,li,object,ol,p,pre,q,s,samp,small,span,strike,strong,sub,sup,tt,u,ul,var{
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    -ms-text-size-adjust:100%;
    -webkit-text-size-adjust:100%;
    vertical-align:baseline;
    background:transparent}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";
    content:none}blockquote{margin:20px 0 30px;
        border-left:5px solid;
        padding-left:20px}:focus{outline:0}del{text-decoration:line-through}pre{overflow:auto;
            padding:10px}figure{margin:0}table{border-collapse:collapse;
                border-spacing:0}article,aside,footer,header,hgroup,nav,section{display:block}body{font-family:Open Sans,Arial,sans-serif;
                    font-size:14px;
                    color:#666;
                    background-color:#fff;
                    line-height:1.7em;
                    font-weight:500;
                    -webkit-font-smoothing:antialiased;
                    -moz-osx-font-smoothing:grayscale}body.page-template-page-template-blank-php #page-container{padding-top:0!important}body.et_cover_background{background-size:cover!important;
                        background-position:top!important;
                        background-repeat:no-repeat!important;
                        background-attachment:fixed}a{color:#2ea3f2}a,a:hover{text-decoration:none}p{padding-bottom:1em}p:not(.has-background):last-of-type{padding-bottom:0}p.et_normal_padding{padding-bottom:1em}strong{font-weight:700}cite,em,i{font-style:italic}code,pre{font-family:Courier New,monospace;
                            margin-bottom:10px}ins{text-decoration:none}sub,sup{height:0;
                                line-height:1;
                                position:relative;

                                vertical-align:baseline}sup{bottom:.8em}sub{top:.3em}dl{margin:0 0 1.5em}dl dt{font-weight:700}dd{margin-left:1.5em}blockquote p{padding-bottom:0}embed,iframe,object,video{max-width:100%}h1,h2,h3,h4,h5,h6{color:#333;
                                    padding-bottom:10px;
                                    line-height:1em;
                                    font-weight:500}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{color:inherit}h1{font-size:30px}h2{font-size:26px}h3{font-size:22px}h4{font-size:18px}h5{font-size:16px}h6{font-size:14px}input{-webkit-appearance:none}input[type=checkbox]{-webkit-appearance:checkbox}input[type=radio]{-webkit-appearance:radio}input.text,input.title,input[type=email],input[type=password],input[type=tel],input[type=text],select,textarea{background-color:#fff;
                                        border:1px solid #bbb;
                                        padding:2px;
                                        color:#4e4e4e}input.text:focus,input.title:focus,input[type=text]:focus,select:focus,textarea:focus{border-color:#2d3940;
                                            color:#3e3e3e}input.text,input.title,input[type=text],select,textarea{margin:0}textarea{padding:4px}button,input,select,textarea{font-family:inherit}img{max-width:100%;
                                                height:auto}.clear{clear:both}br.clear{margin:0;
                                                    padding:0}.pagination{clear:both}#et_search_icon:hover,.et-social-icon a:hover,.et_password_protected_form .et_submit_button,.form-submit .et_pb_buttontton.alt.disabled,.nav-single a,.posted_in a{color:#2ea3f2}.et-search-form,blockquote{border-color:#2ea3f2}#main-content{background-color:#fff}.container{width:80%;
                                                        max-width:1080px;
                                                        margin:auto;
                                                        position:relative}body:not(.et-tb) #main-content .container,body:not(.et-tb-has-header) #main-content .container{padding-top:58px}.et_full_width_page #main-content .container:before{display:none}.main_title{margin-bottom:20px}.et_password_protected_form .et_submit_button:hover,.form-submit .et_pb_button:hover{background:rgba(0,0,0,.05)}.et_button_icon_visible .et_pb_button{padding-right:2em;
                                                            padding-left:.7em}.et_button_icon_visible .et_pb_button:after{opacity:1;
                                                                margin-left:0}.et_button_left .et_pb_button:hover:after{left:.15em}.et_button_left .et_pb_button:after{margin-left:0;
                                                                    left:1em}.et_button_icon_visible.et_button_left .et_pb_button,.et_button_left .et_pb_button:hover,.et_button_left .et_pb_module .et_pb_button:hover{padding-left:2em;
                                                                        padding-right:.7em}.et_button_icon_visible.et_button_left .et_pb_button:after,.et_button_left .et_pb_button:hover:after{left:.15em}.et_password_protected_form .et_submit_button:hover,.form-submit .et_pb_button:hover{padding:.3em 1em}.et_button_no_icon .et_pb_button:after{display:none}.et_button_no_icon.et_button_icon_visible.et_button_left .et_pb_button,.et_button_no_icon.et_button_left .et_pb_button:hover,.et_button_no_icon .et_pb_button,.et_button_no_icon .et_pb_button:hover{padding:.3em 1em!important}.et_button_custom_icon .et_pb_button:after{line-height:1.7em}.et_button_custom_icon.et_button_icon_visible .et_pb_button:after,.et_button_custom_icon .et_pb_button:hover:after{margin-left:.3em}#left-area .post_format-post-format-gallery .wp-block-gallery:first-of-type{padding:0;
                                                                            margin-bottom:-16px}.entry-content table:not(.variations){border:1px solid #eee;
                                                                                margin:0 0 15px;
                                                                                text-align:left;
                                                                                width:100%}.entry-content thead th,.entry-content tr th{color:#555;

                                                                                    font-weight:700;
                                                                                    padding:9px 24px}.entry-content tr td{border-top:1px solid #eee;
                                                                                        padding:6px 24px}#left-area ul,.entry-content ul,.et-l--body ul,.et-l--footer ul,.et-l--header ul{list-style-type:disc;
                                                                                            padding:0 0 23px 1em;
                                                                                            line-height:26px}#left-area ol,.entry-content ol,.et-l--body ol,.et-l--footer ol,.et-l--header ol{list-style-type:decimal;
                                                                                                list-style-position:inside;
                                                                                                padding:0 0 23px;
                                                                                                line-height:26px}#left-area ul li ul,.entry-content ul li ol{padding:2px 0 2px 20px}#left-area ol li ul,.entry-content ol li ol,.et-l--body ol li ol,.et-l--footer ol li ol,.et-l--header ol li ol{padding:2px 0 2px 35px}#left-area ul.wp-block-gallery{display:-webkit-box
                                                                                                    display:-ms-flexbox;
                                                                                                    display:flex;
                                                                                                    -ms-flex-wrap:wrap;
                                                                                                    flex-wrap:wrap;
                                                                                                    list-style-type:none;
                                                                                                    padding:0}#left-area ul.products{padding:0!important;
                                                                                                        line-height:1.7!important;
                                                                                                        list-style:none!important}.gallery-item a{display:block}.gallery-caption,.gallery-item a{width:90%}#wpadminbar{z-index:100001}#left-area .post-meta{font-size:14px;
                                                                                                            padding-bottom:15px}#left-area .post-meta a{text-decoration:none;

                                                                                                                color:#666}#left-area .et_featured_image{padding-bottom:7px}.single .post{padding-bottom:25px}body.single .et_audio_content{margin-bottom:-6px}.nav-single a{text-decoration:none;
                                                                                                                    color:#2ea3f2;

                                                                                                                    font-size:14px;
                                                                                                                    font-weight:400}.nav-previous{float:left}.nav-next{float:right}.et_password_protected_form p input{background-color:#eee;

                                                                                                                        border:none!important;

                                                                                                                        width:100%!important;
                                                                                                                        border-radius:0!important;
                                                                                                                        font-size:14px;
                                                                                                                        color:#999!important;
                                                                                                                        padding:16px!important;
                                                                                                                        -webkit-box-sizing:border-box;
                                                                                                                        box-sizing:border-box}.et_password_protected_form label{display:none}.et_password_protected_form .et_submit_button{font-family:inherit;
                                                                                                                            display:block;
                                                                                                                            float:right;
                                                                                                                            margin:8px auto 0;
                                                                                                                            cursor:pointer}.post-password-required p.nocomments.container{max-width:100%}.post-password-required p.nocomments.container:before{display:none}.aligncenter,div.post .new-post .aligncenter{display:block;
                                                                                                                                margin-left:auto;
                                                                                                                                margin-right:auto}.wp-caption{border:1px solid #ddd;
                                                                                                                                    text-align:center;
                                                                                                                                    background-color:#f3f3f3;
                                                                                                                                    margin-bottom:10px;
                                                                                                                                    max-width:96%;
                                                                                                                                    padding:8px}.wp-caption.alignleft{margin:0 30px 20px 0}.wp-caption.alignright{margin:0 0 20px 30px}.wp-caption img{margin:0;
                                                                                                                                        padding:0;
                                                                                                                                        border:0}.wp-caption p.wp-caption-text{font-size:12px;
                                                                                                                                            padding:0 4px 5px;
                                                                                                                                            margin:0}.alignright{float:right}.alignleft{float:left}img.alignleft{display:inline;

                                                                                                                                                float:left;
                                                                                                                                                margin-right:15px}img.alignright{display:inline;
                                                                                                                                                    float:right;
                                                                                                                                                    margin-left:15px}.page.et_pb_pagebuilder_layout #main-content{background-color:transparent}body #main-content .et_builder_inner_content>h1,body #main-content .et_builder_inner_content>h2,body #main-content .et_builder_inner_content>h3,body #main-content .et_builder_inner_content>h4,body #main-content .et_builder_inner_content>h5,body #main-content .et_builder_inner_content>h6{line-height:1.4em}body #main-content .et_builder_inner_content>p{line-height:1.7em}.wp-block-pullquote{margin:20px 0 30px}.wp-block-pullquote.has-background blockquote{border-left:none}.wp-block-group.has-background{padding:1.5em 1.5em .5em}@media (min-width:981px){#left-area{width:79.125%;
                                                                                                                                                        padding-bottom:23px}#main-content .container:before{content:"";
                                                                                                                                                        position:absolute;
                                                                                                                                                        top:0;
                                                                                                                                                        height:100%;
                                                                                                                                                        width:1px;
                                                                                                                                                        background-color:#e2e2e2}.et_full_width_page #left-area,.et_no_sidebar #left-area{float:none;
                                                                                                                                                            width:100%!important}.et_full_width_page #left-area{padding-bottom:0}.et_no_sidebar #main-content .container:before{display:none}}@media (max-width:980px){#page-container{padding-top:80px}.et-tb #page-container,.et-tb-has-header #page-container{padding-top:0!important}#left-area,#sidebar{width:100%!important}#main-content .container:before{display:none!important}.et_full_width_page .et_gallery_item:nth-child(4n+1){clear:none}}@media print{#page-container{padding-top:0!important}}#wp-admin-bar-et-use-visual-builder a:before{font-family:ETmodules!important;
                                                                                                                                                                content:"\e625";
                                                                                                                                                                font-size:30px!important;
                                                                                                                                                                width:28px;
                                                                                                                                                                margin-top:-3px;
                                                                                                                                                                color:#974df3!important}#wp-admin-bar-et-use-visual-builder:hover a:before{color:#fff!important}#wp-admin-bar-et-use-visual-builder:hover a,#wp-admin-bar-et-use-visual-builder a:hover{transition:background-color .5s ease;
                                                                                                                                                                    -webkit-transition:background-color .5s ease;
                                                                                                                                                                    -moz-transition:background-color .5s ease;

                                                                                                                                                                    background-color:#7e3bd0!important;
                                                                                                                                                                    color:#fff!important}* html .clearfix,:first-child+html .clearfix{zoom:1}.iphone .et_pb_section_video_bg video::-webkit-media-controls-start-playback-button{display:none!important;
                                                                                                                                                                        -webkit-appearance:none}.et_mobile_device .et_pb_section_parallax .et_pb_parallax_css{background-attachment:scroll}.et-social-facebook a.icon:before{content:"\e093"}.et-social-twitter a.icon:before{content:"\e094"}.et-social-google-plus a.icon:before{content:"\e096"}.et-social-instagram a.icon:before{content:"\e09a"}.et-social-rss a.icon:before{content:"\e09e"}.ai1ec-single-event:after{content:" ";display:table;clear:both}.evcal_event_details .evcal_evdata_cell .eventon_details_shading_bot.eventon_details_shading_bot{z-index:3}.wp-block-divi-layout{margin-bottom:1em}*{-webkit-box-sizing:border-box;box-sizing:border-box}#et-info-email:before,#et-info-phone:before,#et_search_icon:before,.comment-reply-link:after,.et-cart-info span:before,.et-pb-arrow-next:before,.et-pb-arrow-prev:before,.et-social-icon a:before,.et_audio_container .mejs-playpause-button button:before,.et_audio_container .mejs-volume-button button:before,.et_overlay:before,.et_password_protected_form .et_submit_button:after,.et_pb_button:after,.et_pb_contact_reset:after,.et_pb_contact_submit:after,.et_pb_font_icon:before,.et_pb_newsletter_button:after,.et_pb_pricing_table_button:after,.et_pb_promo_button:after,.et_pb_testimonial:before,.et_pb_toggle_title:before,.form-submit .et_pb_button:after,.mobile_menu_bar:before,a.et_pb_more_button:after{font-family:ETmodules!important;speak:none;font-style:normal;font-weight:400;-webkit-font-feature-settings:normal;font-feature-settings:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;text-shadow:0 0;direction:ltr}.et-pb-icon,.et_pb_custom_button_icon.et_pb_button:after,.et_pb_login .et_pb_custom_button_icon.et_pb_button:after,.et_pb_woo_custom_button_icon .button.et_pb_custom_button_icon.et_pb_button:after,.et_pb_woo_custom_button_icon .button.et_pb_custom_button_icon.et_pb_button:hover:after{content:attr(data-icon)}.et-pb-icon{font-family:ETmodules;speak:none;font-weight:400;-webkit-font-feature-settings:normal;font-feature-settings:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;font-size:96px;font-style:normal;display:inline-block;-webkit-box-sizing:border-box;box-sizing:border-box;direction:ltr}#et-ajax-saving{display:none;-webkit-transition:background .3s,-webkit-box-shadow .3s;transition:background .3s,-webkit-box-shadow .3s;transition:background .3s,box-shadow .3s;transition:background .3s,box-shadow .3s,-webkit-box-shadow .3s;-webkit-box-shadow:rgba(0,139,219,.247059) 0 0 60px;box-shadow:0 0 60px rgba(0,139,219,.247059);position:fixed;top:50%;left:50%;width:50px;height:50px;background:#fff;border-radius:50px;margin:-25px 0 0 -25px;z-index:999999;text-align:center}#et-ajax-saving img{margin:9px}.et-safe-mode-indicator,.et-safe-mode-indicator:focus,.et-safe-mode-indicator:hover{-webkit-box-shadow:0 5px 10px rgba(41,196,169,.15);box-shadow:0 5px 10px rgba(41,196,169,.15);background:#29c4a9;color:#fff;font-size:14px;font-weight:600;padding:12px;line-height:16px;border-radius:3px;position:fixed;bottom:30px;right:30px;z-index:999999;text-decoration:none;font-family:Open Sans,sans-serif;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.et_pb_button{font-size:20px;font-weight:500;padding:.3em 1em;line-height:1.7em!important;background-color:transparent;background-size:cover;background-position:50%;background-repeat:no-repeat;border:2px solid;border-radius:3px;-webkit-transition-duration:.2s;transition-duration:.2s;-webkit-transition-property:all!important;transition-property:all!important}.et_pb_button,.et_pb_button_inner{position:relative}.et_pb_button:hover,.et_pb_module .et_pb_button:hover{border:2px solid transparent;padding:.3em 2em .3em .7em}.et_pb_button:hover{background-color:hsla(0,0%,100%,.2)}.et_pb_bg_layout_light.et_pb_button:hover,.et_pb_bg_layout_light .et_pb_button:hover{background-color:rgba(0,0,0,.05)}.et_pb_button:after,.et_pb_button:before{font-size:32px;line-height:1em;content:"\35";opacity:0;position:absolute;margin-left:-1em;-webkit-transition:all .2s;transition:all .2s;text-transform:none;-webkit-font-feature-settings:"kern" off;font-feature-settings:"kern" off;font-variant:none;font-style:normal;font-weight:400;text-shadow:none}.et_pb_button.et_hover_enabled:hover:after,.et_pb_button.et_pb_hovered:hover:after{-webkit-transition:none!important;transition:none!important}.et_pb_button:before{display:none}.et_pb_button:hover:after{opacity:1;margin-left:0}.et_pb_column_1_3 h1,.et_pb_column_1_4 h1,.et_pb_column_1_5 h1,.et_pb_column_1_6 h1,.et_pb_column_2_5 h1{font-size:26px}.et_pb_column_1_3 h2,.et_pb_column_1_4 h2,.et_pb_column_1_5 h2,.et_pb_column_1_6 h2,.et_pb_column_2_5 h2{font-size:23px}.et_pb_column_1_3 h3,.et_pb_column_1_4 h3,.et_pb_column_1_5 h3,.et_pb_column_1_6 h3,.et_pb_column_2_5 h3{font-size:20px}.et_pb_column_1_3 h4,.et_pb_column_1_4 h4,.et_pb_column_1_5 h4,.et_pb_column_1_6 h4,.et_pb_column_2_5 h4{font-size:18px}.et_pb_column_1_3 h5,.et_pb_column_1_4 h5,.et_pb_column_1_5 h5,.et_pb_column_1_6 h5,.et_pb_column_2_5 h5{font-size:16px}.et_pb_column_1_3 h6,.et_pb_column_1_4 h6,.et_pb_column_1_5 h6,.et_pb_column_1_6 h6,.et_pb_column_2_5 h6{font-size:15px}.et_pb_bg_layout_dark,.et_pb_bg_layout_dark h1,.et_pb_bg_layout_dark h2,.et_pb_bg_layout_dark h3,.et_pb_bg_layout_dark h4,.et_pb_bg_layout_dark h5,.et_pb_bg_layout_dark h6{color:#fff!important}.et_pb_module.et_pb_text_align_left{text-align:left}.et_pb_module.et_pb_text_align_center{text-align:center}.et_pb_module.et_pb_text_align_right{text-align:right}.et_pb_module.et_pb_text_align_justified{text-align:justify}.clearfix:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}.et_pb_bg_layout_light .et_pb_more_button{color:#2ea3f2}.et_builder_inner_content{position:relative;z-index:1}header .et_builder_inner_content{z-index:2}.et_pb_css_mix_blend_mode_passthrough{mix-blend-mode:unset!important}.et_pb_image_container{margin:-20px -20px 29px}.et_pb_module_inner{position:relative}.et_hover_enabled_preview{z-index:2}.et_hover_enabled:hover{position:relative;z-index:2}.et_pb_all_tabs,.et_pb_module,.et_pb_posts_nav a,.et_pb_tab,.et_pb_with_background{background-size:cover;background-position:50%;background-repeat:no-repeat}.et_pb_with_border{position:relative;border:0 solid #333}.post-password-required .et_pb_row{padding:0;width:100%}.post-password-required .et_password_protected_form{min-height:0}body.et_pb_pagebuilder_layout.et_pb_show_title .post-password-required .et_password_protected_form h1,body:not(.et_pb_pagebuilder_layout) .post-password-required .et_password_protected_form h1{display:none}.et_pb_no_bg{padding:0!important}.et_overlay.et_pb_inline_icon:before,.et_pb_inline_icon:before{content:attr(data-icon)}.et_pb_more_button{color:inherit;text-shadow:none;text-decoration:none;display:inline-block;margin-top:20px}.et_parallax_bg_wrap{overflow:hidden;position:absolute;top:0;right:0;bottom:0;left:0}.et_parallax_bg{background-repeat:no-repeat;background-position:top;background-size:cover;position:absolute;bottom:0;left:0;width:100%;height:100%;display:block}.et_parallax_bg.et_parallax_bg__hover,.et_parallax_bg.et_parallax_bg_phone,.et_parallax_bg.et_parallax_bg_tablet,.et_pb_section_parallax_hover:hover .et_parallax_bg:not(.et_parallax_bg__hover){display:none}.et_pb_section_parallax_hover:hover .et_parallax_bg.et_parallax_bg__hover{display:block}.et_pb_module.et_pb_section_parallax,.et_pb_posts_nav a.et_pb_section_parallax,.et_pb_tab.et_pb_section_parallax{position:relative}.et_pb_section_parallax .et_pb_parallax_css,.et_pb_slides .et_parallax_bg.et_pb_parallax_css{background-attachment:fixed}body.et-bfb .et_pb_section_parallax .et_pb_parallax_css,body.et-bfb .et_pb_slides .et_parallax_bg.et_pb_parallax_css{background-attachment:scroll;bottom:auto}.et_pb_section_parallax.et_pb_column .et_pb_module,.et_pb_section_parallax.et_pb_row .et_pb_column,.et_pb_section_parallax.et_pb_row .et_pb_module{z-index:9;position:relative}.et_pb_more_button:hover:after{opacity:1;margin-left:0}.et_pb_preload .et_pb_section_video_bg,.et_pb_preload>div{visibility:hidden}.et_pb_preload,.et_pb_section.et_pb_section_video.et_pb_preload{position:relative;background:#464646!important}.et_pb_preload:before{content:"";position:absolute;top:50%;left:50%;background:url(http://einsteinacademy.us/wp-content/themes/Divi/includes/builder/styles/images/preloader.gif) no-repeat;border-radius:32px;width:32px;height:32px;margin:-16px 0 0 -16px}.box-shadow-overlay{position:absolute;top:0;left:0;width:100%;height:100%;z-index:10;pointer-events:none}.et_pb_section>.box-shadow-overlay~.et_pb_row{z-index:11}.et_pb_row>.box-shadow-overlay{z-index:8}.has-box-shadow-overlay{position:relative}.et_clickable{cursor:pointer}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute!important;width:1px;word-wrap:normal!important}.et_multi_view_hidden,.et_multi_view_hidden_image{display:none!important}@keyframes multi-view-image-fade{0%{opacity:0}10%{opacity:.1}20%{opacity:.2}30%{opacity:.3}40%{opacity:.4}50%{opacity:.5}60%{opacity:.6}70%{opacity:.7}80%{opacity:.8}90%{opacity:.9}to{opacity:1}}.et_multi_view_image__loading{visibility:hidden}.et_multi_view_image__loaded{-webkit-animation:multi-view-image-fade .5s;animation:multi-view-image-fade .5s}#et-pb-motion-effects-offset-tracker{visibility:hidden!important;opacity:0;position:absolute;top:0;left:0}.et-pb-before-scroll-animation{opacity:0}header.et-l.et-l--header:after{clear:both;display:block;content:""}.et_pb_module{-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-duration:.2s;animation-duration:.2s}@-webkit-keyframes fadeBottom{0%{opacity:0;-webkit-transform:translateY(10%);transform:translateY(10%)}to{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes fadeBottom{0%{opacity:0;-webkit-transform:translateY(10%);transform:translateY(10%)}to{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}}@-webkit-keyframes fadeLeft{0%{opacity:0;-webkit-transform:translateX(-10%);transform:translateX(-10%)}to{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes fadeLeft{0%{opacity:0;-webkit-transform:translateX(-10%);transform:translateX(-10%)}to{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@-webkit-keyframes fadeRight{0%{opacity:0;-webkit-transform:translateX(10%);transform:translateX(10%)}to{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes fadeRight{0%{opacity:0;-webkit-transform:translateX(10%);transform:translateX(10%)}to{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@-webkit-keyframes fadeTop{0%{opacity:0;-webkit-transform:translateY(-10%);transform:translateY(-10%)}to{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes fadeTop{0%{opacity:0;-webkit-transform:translateY(-10%);transform:translateY(-10%)}to{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}}@-webkit-keyframes fadeIn{0%{opacity:0}to{opacity:1}}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.et-waypoint:not(.et_pb_counters){opacity:0}@media (min-width:981px){.et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_column .et_pb_module.et-last-child,.et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_column .et_pb_module:last-child,.et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module.et-last-child,.et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module:last-child,.et_pb_section div.et_pb_row .et_pb_column .et_pb_module.et-last-child,.et_pb_section div.et_pb_row .et_pb_column .et_pb_module:last-child{margin-bottom:0}}@media (max-width:980px){.et_overlay.et_pb_inline_icon_tablet:before,.et_pb_inline_icon_tablet:before{content:attr(data-icon-tablet)}.et_parallax_bg.et_parallax_bg_tablet_exist{display:none}.et_parallax_bg.et_parallax_bg_tablet{display:block}.et_pb_column .et_pb_module{margin-bottom:30px}.et_pb_row .et_pb_column .et_pb_module.et-last-child,.et_pb_row .et_pb_column .et_pb_module:last-child,.et_section_specialty .et_pb_row .et_pb_column .et_pb_module.et-last-child,.et_section_specialty .et_pb_row .et_pb_column .et_pb_module:last-child{margin-bottom:0}.et_pb_more_button{display:inline-block!important}.et_pb_bg_layout_light_tablet.et_pb_button,.et_pb_bg_layout_light_tablet.et_pb_module.et_pb_button,.et_pb_bg_layout_light_tablet .et_pb_more_button{color:#2ea3f2}.et_pb_bg_layout_light_tablet .et_pb_forgot_password a{color:#666}.et_pb_bg_layout_light_tablet h1,.et_pb_bg_layout_light_tablet h2,.et_pb_bg_layout_light_tablet h3,.et_pb_bg_layout_light_tablet h4,.et_pb_bg_layout_light_tablet h5,.et_pb_bg_layout_light_tablet h6{color:#333!important}.et_pb_module .et_pb_bg_layout_light_tablet.et_pb_button{color:#2ea3f2!important}.et_pb_bg_layout_light_tablet{color:#666!important}.et_pb_bg_layout_dark_tablet,.et_pb_bg_layout_dark_tablet h1,.et_pb_bg_layout_dark_tablet h2,.et_pb_bg_layout_dark_tablet h3,.et_pb_bg_layout_dark_tablet h4,.et_pb_bg_layout_dark_tablet h5,.et_pb_bg_layout_dark_tablet h6{color:#fff!important}.et_pb_bg_layout_dark_tablet.et_pb_button,.et_pb_bg_layout_dark_tablet.et_pb_module.et_pb_button,.et_pb_bg_layout_dark_tablet .et_pb_more_button{color:inherit}.et_pb_bg_layout_dark_tablet .et_pb_forgot_password a{color:#fff}.et_pb_module.et_pb_text_align_left-tablet{text-align:left}.et_pb_module.et_pb_text_align_center-tablet{text-align:center}.et_pb_module.et_pb_text_align_right-tablet{text-align:right}.et_pb_module.et_pb_text_align_justified-tablet{text-align:justify}}@media (max-width:767px){.et_pb_more_button{display:inline-block!important}.et_overlay.et_pb_inline_icon_phone:before,.et_pb_inline_icon_phone:before{content:attr(data-icon-phone)}.et_parallax_bg.et_parallax_bg_phone_exist{display:none}.et_parallax_bg.et_parallax_bg_phone{display:block}.et-hide-mobile{display:none!important}.et_pb_bg_layout_light_phone.et_pb_button,.et_pb_bg_layout_light_phone.et_pb_module.et_pb_button,.et_pb_bg_layout_light_phone .et_pb_more_button{color:#2ea3f2}.et_pb_bg_layout_light_phone .et_pb_forgot_password a{color:#666}.et_pb_bg_layout_light_phone h1,.et_pb_bg_layout_light_phone h2,.et_pb_bg_layout_light_phone h3,.et_pb_bg_layout_light_phone h4,.et_pb_bg_layout_light_phone h5,.et_pb_bg_layout_light_phone h6{color:#333!important}.et_pb_module .et_pb_bg_layout_light_phone.et_pb_button{color:#2ea3f2!important}.et_pb_bg_layout_light_phone{color:#666!important}.et_pb_bg_layout_dark_phone,.et_pb_bg_layout_dark_phone h1,.et_pb_bg_layout_dark_phone h2,.et_pb_bg_layout_dark_phone h3,.et_pb_bg_layout_dark_phone h4,.et_pb_bg_layout_dark_phone h5,.et_pb_bg_layout_dark_phone h6{color:#fff!important}.et_pb_bg_layout_dark_phone.et_pb_button,.et_pb_bg_layout_dark_phone.et_pb_module.et_pb_button,.et_pb_bg_layout_dark_phone .et_pb_more_button{color:inherit}.et_pb_module .et_pb_bg_layout_dark_phone.et_pb_button{color:#fff!important}.et_pb_bg_layout_dark_phone .et_pb_forgot_password a{color:#fff}.et_pb_module.et_pb_text_align_left-phone{text-align:left}.et_pb_module.et_pb_text_align_center-phone{text-align:center}.et_pb_module.et_pb_text_align_right-phone{text-align:right}.et_pb_module.et_pb_text_align_justified-phone{text-align:justify}}@media (max-width:479px){a.et_pb_more_button{display:block}}@media (min-width:768px) and (max-width:980px){[data-et-multi-view-load-tablet-hidden=true]:not(.et_multi_view_swapped){display:none!important}}@media (max-width:767px){[data-et-multi-view-load-phone-hidden=true]:not(.et_multi_view_swapped){display:none!important}}.et_pb_menu.et_pb_menu--style-inline_centered_logo .et_pb_menu__menu nav ul{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}@-webkit-keyframes multi-view-image-fade{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}50%{-webkit-transform:scale(1.01);transform:scale(1.01);opacity:1}to{-webkit-transform:scale(1);transform:scale(1);opacity:1}}
</style><link rel="stylesheet" id="et-dynamic-late-css" href="<?php echo root();?>css/et-divi-dynamic-294-late.css">
<style id="divi-dynamic-critical-inline-css" type="text/css">
@media (min-width:981px){.et_pb_gutters3 .et_pb_column,.et_pb_gutters3.et_pb_row .et_pb_column{margin-right:5.5%}.et_pb_gutters3 .et_pb_column_4_4,.et_pb_gutters3.et_pb_row .et_pb_column_4_4{width:100%}.et_pb_gutters3 .et_pb_column_4_4 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_4_4 .et_pb_module{margin-bottom:2.75%}.et_pb_gutters3 .et_pb_column_3_4,.et_pb_gutters3.et_pb_row .et_pb_column_3_4{width:73.625%}.et_pb_gutters3 .et_pb_column_3_4 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_3_4 .et_pb_module{margin-bottom:3.735%}.et_pb_gutters3 .et_pb_column_2_3,.et_pb_gutters3.et_pb_row .et_pb_column_2_3{width:64.833%}.et_pb_gutters3 .et_pb_column_2_3 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_2_3 .et_pb_module{margin-bottom:4.242%}.et_pb_gutters3 .et_pb_column_3_5,.et_pb_gutters3.et_pb_row .et_pb_column_3_5{width:57.8%}.et_pb_gutters3 .et_pb_column_3_5 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_3_5 .et_pb_module{margin-bottom:4.758%}.et_pb_gutters3 .et_pb_column_1_2,.et_pb_gutters3.et_pb_row .et_pb_column_1_2{width:47.25%}.et_pb_gutters3 .et_pb_column_1_2 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_1_2 .et_pb_module{margin-bottom:5.82%}.et_pb_gutters3 .et_pb_column_2_5,.et_pb_gutters3.et_pb_row .et_pb_column_2_5{width:36.7%}.et_pb_gutters3 .et_pb_column_2_5 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_2_5 .et_pb_module{margin-bottom:7.493%}.et_pb_gutters3 .et_pb_column_1_3,.et_pb_gutters3.et_pb_row .et_pb_column_1_3{width:29.6667%}.et_pb_gutters3 .et_pb_column_1_3 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_1_3 .et_pb_module{margin-bottom:9.27%}.et_pb_gutters3 .et_pb_column_1_4,.et_pb_gutters3.et_pb_row .et_pb_column_1_4{width:20.875%}.et_pb_gutters3 .et_pb_column_1_4 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_1_4 .et_pb_module{margin-bottom:13.174%}.et_pb_gutters3 .et_pb_column_1_5,.et_pb_gutters3.et_pb_row .et_pb_column_1_5{width:15.6%}.et_pb_gutters3 .et_pb_column_1_5 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_1_5 .et_pb_module{margin-bottom:17.628%}.et_pb_gutters3 .et_pb_column_1_6,.et_pb_gutters3.et_pb_row .et_pb_column_1_6{width:12.0833%}.et_pb_gutters3 .et_pb_column_1_6 .et_pb_module,.et_pb_gutters3.et_pb_row .et_pb_column_1_6 .et_pb_module{margin-bottom:22.759%}.et_pb_gutters3 .et_full_width_page.woocommerce-page ul.products li.product{width:20.875%;margin-right:5.5%;margin-bottom:5.5%}.et_pb_gutters3.et_left_sidebar.woocommerce-page #main-content ul.products li.product,.et_pb_gutters3.et_right_sidebar.woocommerce-page #main-content ul.products li.product{width:28.353%;margin-right:7.47%}.et_pb_gutters3.et_left_sidebar.woocommerce-page #main-content ul.products.columns-1 li.product,.et_pb_gutters3.et_right_sidebar.woocommerce-page #main-content ul.products.columns-1 li.product{width:100%;margin-right:0}.et_pb_gutters3.et_left_sidebar.woocommerce-page #main-content ul.products.columns-2 li.product,.et_pb_gutters3.et_right_sidebar.woocommerce-page #main-content ul.products.columns-2 li.product{width:48%;margin-right:4%}.et_pb_gutters3.et_left_sidebar.woocommerce-page #main-content ul.products.columns-2 li:nth-child(2n+2),.et_pb_gutters3.et_right_sidebar.woocommerce-page #main-content ul.products.columns-2 li:nth-child(2n+2){margin-right:0}.et_pb_gutters3.et_left_sidebar.woocommerce-page #main-content ul.products.columns-2 li:nth-child(3n+1),.et_pb_gutters3.et_right_sidebar.woocommerce-page #main-content ul.products.columns-2 li:nth-child(3n+1){clear:none}}
@media (min-width:981px){.et_pb_gutter.et_pb_gutters1 #left-area{width:75%}.et_pb_gutter.et_pb_gutters1 #sidebar{width:25%}.et_pb_gutters1.et_right_sidebar #left-area{padding-right:0}.et_pb_gutters1.et_left_sidebar #left-area{padding-left:0}.et_pb_gutter.et_pb_gutters1.et_right_sidebar #main-content .container:before{right:25%!important}.et_pb_gutter.et_pb_gutters1.et_left_sidebar #main-content .container:before{left:25%!important}.et_pb_gutters1 .et_pb_column,.et_pb_gutters1.et_pb_row .et_pb_column{margin-right:0}.et_pb_gutters1 .et_pb_column_4_4,.et_pb_gutters1.et_pb_row .et_pb_column_4_4{width:100%}.et_pb_gutters1 .et_pb_column_4_4 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_4_4 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_3_4,.et_pb_gutters1.et_pb_row .et_pb_column_3_4{width:75%}.et_pb_gutters1 .et_pb_column_3_4 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_3_4 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_2_3,.et_pb_gutters1.et_pb_row .et_pb_column_2_3{width:66.667%}.et_pb_gutters1 .et_pb_column_2_3 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_2_3 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_3_5,.et_pb_gutters1.et_pb_row .et_pb_column_3_5{width:60%}.et_pb_gutters1 .et_pb_column_3_5 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_3_5 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_1_2,.et_pb_gutters1.et_pb_row .et_pb_column_1_2{width:50%}.et_pb_gutters1 .et_pb_column_1_2 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_1_2 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_2_5,.et_pb_gutters1.et_pb_row .et_pb_column_2_5{width:40%}.et_pb_gutters1 .et_pb_column_2_5 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_2_5 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_1_3,.et_pb_gutters1.et_pb_row .et_pb_column_1_3{width:33.3333%}.et_pb_gutters1 .et_pb_column_1_3 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_1_3 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_1_4,.et_pb_gutters1.et_pb_row .et_pb_column_1_4{width:25%}.et_pb_gutters1 .et_pb_column_1_4 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_1_4 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_1_5,.et_pb_gutters1.et_pb_row .et_pb_column_1_5{width:20%}.et_pb_gutters1 .et_pb_column_1_5 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_1_5 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_column_1_6,.et_pb_gutters1.et_pb_row .et_pb_column_1_6{width:16.6667%}.et_pb_gutters1 .et_pb_column_1_6 .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column_1_6 .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_full_width_page.woocommerce-page ul.products li.product{width:25%;margin-right:0;margin-bottom:0}.et_pb_gutters1.et_left_sidebar.woocommerce-page #main-content ul.products li.product,.et_pb_gutters1.et_right_sidebar.woocommerce-page #main-content ul.products li.product{width:33.333%;margin-right:0}}@media (max-width:980px){.et_pb_gutters1 .et_pb_column,.et_pb_gutters1 .et_pb_column .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column,.et_pb_gutters1.et_pb_row .et_pb_column .et_pb_module{margin-bottom:0}.et_pb_gutters1 .et_pb_row_1-2_1-4_1-4>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1 .et_pb_row_1-4_1-4>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1 .et_pb_row_1-4_1-4_1-2>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1 .et_pb_row_1-5_1-5_3-5>.et_pb_column.et_pb_column_1_5,.et_pb_gutters1 .et_pb_row_3-5_1-5_1-5>.et_pb_column.et_pb_column_1_5,.et_pb_gutters1 .et_pb_row_4col>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1 .et_pb_row_5col>.et_pb_column.et_pb_column_1_5,.et_pb_gutters1.et_pb_row_1-2_1-4_1-4>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1.et_pb_row_1-4_1-4>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1.et_pb_row_1-4_1-4_1-2>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1.et_pb_row_1-5_1-5_3-5>.et_pb_column.et_pb_column_1_5,.et_pb_gutters1.et_pb_row_3-5_1-5_1-5>.et_pb_column.et_pb_column_1_5,.et_pb_gutters1.et_pb_row_4col>.et_pb_column.et_pb_column_1_4,.et_pb_gutters1.et_pb_row_5col>.et_pb_column.et_pb_column_1_5{width:50%;margin-right:0}.et_pb_gutters1 .et_pb_row_1-2_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1 .et_pb_row_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1 .et_pb_row_1-6_1-6_1-6_1-2>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1 .et_pb_row_6col>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1.et_pb_row_1-2_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1.et_pb_row_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1.et_pb_row_1-6_1-6_1-6_1-2>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1.et_pb_row_6col>.et_pb_column.et_pb_column_1_6{width:33.333%;margin-right:0}.et_pb_gutters1 .et_pb_row_1-6_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6,.et_pb_gutters1.et_pb_row_1-6_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6{width:50%;margin-right:0}}@media (max-width:767px){.et_pb_gutters1 .et_pb_column,.et_pb_gutters1 .et_pb_column .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column,.et_pb_gutters1.et_pb_row .et_pb_column .et_pb_module{margin-bottom:0}}@media (max-width:479px){.et_pb_gutters1 .et_pb_column,.et_pb_gutters1.et_pb_row .et_pb_column{margin:0!important}.et_pb_gutters1 .et_pb_column .et_pb_module,.et_pb_gutters1.et_pb_row .et_pb_column .et_pb_module{margin-bottom:0}}
@media (min-width:981px){.et_pb_gutter.et_pb_gutters2 #left-area{width:77.25%}.et_pb_gutter.et_pb_gutters2 #sidebar{width:22.75%}.et_pb_gutters2.et_right_sidebar #left-area{padding-right:3%}.et_pb_gutters2.et_left_sidebar #left-area{padding-left:3%}.et_pb_gutter.et_pb_gutters2.et_right_sidebar #main-content .container:before{right:22.75%!important}.et_pb_gutter.et_pb_gutters2.et_left_sidebar #main-content .container:before{left:22.75%!important}.et_pb_gutters2 .et_pb_column,.et_pb_gutters2.et_pb_row .et_pb_column{margin-right:3%}.et_pb_gutters2 .et_pb_column_4_4,.et_pb_gutters2.et_pb_row .et_pb_column_4_4{width:100%}.et_pb_gutters2 .et_pb_column_4_4 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_4_4 .et_pb_module{margin-bottom:1.5%}.et_pb_gutters2 .et_pb_column_3_4,.et_pb_gutters2.et_pb_row .et_pb_column_3_4{width:74.25%}.et_pb_gutters2 .et_pb_column_3_4 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_3_4 .et_pb_module{margin-bottom:2.02%}.et_pb_gutters2 .et_pb_column_2_3,.et_pb_gutters2.et_pb_row .et_pb_column_2_3{width:65.667%}.et_pb_gutters2 .et_pb_column_2_3 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_2_3 .et_pb_module{margin-bottom:2.284%}.et_pb_gutters2 .et_pb_column_3_5,.et_pb_gutters2.et_pb_row .et_pb_column_3_5{width:58.8%}.et_pb_gutters2 .et_pb_column_3_5 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_3_5 .et_pb_module{margin-bottom:2.551%}.et_pb_gutters2 .et_pb_column_1_2,.et_pb_gutters2.et_pb_row .et_pb_column_1_2{width:48.5%}.et_pb_gutters2 .et_pb_column_1_2 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_1_2 .et_pb_module{margin-bottom:3.093%}.et_pb_gutters2 .et_pb_column_2_5,.et_pb_gutters2.et_pb_row .et_pb_column_2_5{width:38.2%}.et_pb_gutters2 .et_pb_column_2_5 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_2_5 .et_pb_module{margin-bottom:3.927%}.et_pb_gutters2 .et_pb_column_1_3,.et_pb_gutters2.et_pb_row .et_pb_column_1_3{width:31.3333%}.et_pb_gutters2 .et_pb_column_1_3 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_1_3 .et_pb_module{margin-bottom:4.787%}.et_pb_gutters2 .et_pb_column_1_4,.et_pb_gutters2.et_pb_row .et_pb_column_1_4{width:22.75%}.et_pb_gutters2 .et_pb_column_1_4 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_1_4 .et_pb_module{margin-bottom:6.593%}.et_pb_gutters2 .et_pb_column_1_5,.et_pb_gutters2.et_pb_row .et_pb_column_1_5{width:17.6%}.et_pb_gutters2 .et_pb_column_1_5 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_1_5 .et_pb_module{margin-bottom:8.523%}.et_pb_gutters2 .et_pb_column_1_6,.et_pb_gutters2.et_pb_row .et_pb_column_1_6{width:14.1667%}.et_pb_gutters2 .et_pb_column_1_6 .et_pb_module,.et_pb_gutters2.et_pb_row .et_pb_column_1_6 .et_pb_module{margin-bottom:10.588%}.et_pb_gutters2 .et_full_width_page.woocommerce-page ul.products li.product{width:22.75%;margin-right:3%;margin-bottom:3%}.et_pb_gutters2.et_left_sidebar.woocommerce-page #main-content ul.products li.product,.et_pb_gutters2.et_right_sidebar.woocommerce-page #main-content ul.products li.product{width:30.64%;margin-right:4.04%}}
.et_animated{opacity:0;animation-duration:1s;animation-fill-mode:both!important}.et_animated.infinite{animation-iteration-count:infinite}.et_had_animation{position:relative}@keyframes et_pb_fade{to{opacity:1}}.et_animated.fade{animation-name:et_pb_fade}@keyframes et_pb_fadeTop{0%{transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.et_animated.fadeTop{animation-name:et_pb_fadeTop}@keyframes et_pb_fadeRight{0%{transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.et_animated.fadeRight{animation-name:et_pb_fadeRight}@keyframes et_pb_fadeBottom{0%{transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.et_animated.fadeBottom{animation-name:et_pb_fadeBottom}@keyframes et_pb_fadeLeft{0%{transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.et_animated.fadeLeft{animation-name:et_pb_fadeLeft}.et_animated.slide{animation-name:et_pb_zoomLeft}.et_animated.slideBottom,.et_animated.slideRight,.et_animated.slideTop{animation-name:et_pb_slideLeft}@keyframes et_pb_slideLeft{to{transform:translateZ(0);opacity:1}}.et_animated.slideLeft{animation-name:et_pb_slideLeft}@keyframes et_pb_bounce{0%,20%,40%,60%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{transform:scale3d(.3,.3,.3)}20%{transform:scale3d(1.1,1.1,1.1)}40%{transform:scale3d(.9,.9,.9)}60%{transform:scale3d(1.03,1.03,1.03)}80%{transform:scale3d(.97,.97,.97)}to{opacity:1;transform:scaleX(1)}}.et_animated.bounce{animation-name:et_pb_bounce}@keyframes et_pb_bounceTop{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{transform:translate3d(0,-200px,0)}60%{transform:translate3d(0,25px,0)}75%{transform:translate3d(0,-10px,0)}90%{transform:translate3d(0,5px,0)}to{transform:none;opacity:1}}.et_animated.bounceTop{animation-name:et_pb_bounceTop}@keyframes et_pb_bounceRight{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{transform:translate3d(200px,0,0)}60%{transform:translate3d(-25px,0,0)}75%{transform:translate3d(10px,0,0)}90%{transform:translate3d(-5px,0,0)}to{transform:none;opacity:1}}.et_animated.bounceRight{animation-name:et_pb_bounceRight}@keyframes et_pb_bounceBottom{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{transform:translate3d(0,200px,0)}60%{transform:translate3d(0,-20px,0)}75%{transform:translate3d(0,10px,0)}90%{transform:translate3d(0,-5px,0)}to{transform:translateZ(0);opacity:1}}.et_animated.bounceBottom{animation-name:et_pb_bounceBottom}@keyframes et_pb_bounceLeft{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{transform:translate3d(-200px,0,0)}60%{transform:translate3d(25px,0,0)}75%{transform:translate3d(-10px,0,0)}90%{transform:translate3d(5px,0,0)}to{transform:none;opacity:1}}.et_animated.bounceLeft{animation-name:et_pb_bounceLeft}.et_animated.zoom,.et_animated.zoomTop{animation-name:et_pb_zoomLeft}.et_animated.zoomTop{transform-origin:top}.et_animated.zoomRight{animation-name:et_pb_zoomLeft;transform-origin:right}.et_animated.zoomBottom{animation-name:et_pb_zoomLeft;transform-origin:bottom}@keyframes et_pb_zoomLeft{to{transform:scaleX(1);opacity:1}}.et_animated.zoomLeft{animation-name:et_pb_zoomLeft;transform-origin:left}.et_animated.flip,.et_animated.flipTop{animation-name:et_pb_foldBottom}.et_animated.flipRight,.et_animated.flipTop{transform-origin:center}.et_animated.flipRight{animation-name:et_pb_foldLeft}.et_animated.flipBottom{animation-name:et_pb_foldBottom;transform-origin:center}.et_animated.flipLeft,.et_animated.fold{animation-name:et_pb_foldLeft;transform-origin:center}.et_animated.foldTop{transform-origin:top;animation-name:et_pb_foldBottom}.et_animated.foldRight{transform-origin:right;animation-name:et_pb_foldLeft}@keyframes et_pb_foldBottom{to{opacity:1;transform:rotateX(0deg)}}.et_animated.foldBottom{transform-origin:bottom;animation-name:et_pb_foldBottom}@keyframes et_pb_foldLeft{to{opacity:1;transform:rotateY(0deg)}}.et_animated.foldLeft{transform-origin:left;animation-name:et_pb_foldLeft}@keyframes et_pb_roll{0%{transform-origin:center}to{transform-origin:center;transform:none;opacity:1}}.et_animated.roll{animation-name:et_pb_roll}@keyframes et_pb_rollTop{0%{transform-origin:top}to{transform-origin:top;transform:none;opacity:1}}.et_animated.rollTop{animation-name:et_pb_rollTop}@keyframes et_pb_rollRight{0%{transform-origin:right}to{transform-origin:right;transform:none;opacity:1}}.et_animated.rollRight{animation-name:et_pb_rollRight}@keyframes et_pb_rollBottom{0%{transform-origin:bottom}to{transform-origin:bottom;transform:none;opacity:1}}.et_animated.rollBottom{animation-name:et_pb_rollBottom}@keyframes et_pb_rollLeft{0%{transform-origin:left}to{transform-origin:left;transform:none;opacity:1}}.et_animated.rollLeft{animation-name:et_pb_rollLeft}
#et-secondary-menu li,#top-menu li{word-wrap:break-word}.nav li ul,.et_mobile_menu{border-color:#2EA3F2}.mobile_menu_bar:before,.mobile_menu_bar:after,#top-menu li.current-menu-ancestor>a,#top-menu li.current-menu-item>a{color:#2EA3F2}#main-header{-webkit-transition:background-color 0.4s, color 0.4s, opacity 0.4s ease-in-out, -webkit-transform 0.4s;transition:background-color 0.4s, color 0.4s, opacity 0.4s ease-in-out, -webkit-transform 0.4s;transition:background-color 0.4s, color 0.4s, transform 0.4s, opacity 0.4s ease-in-out;transition:background-color 0.4s, color 0.4s, transform 0.4s, opacity 0.4s ease-in-out, -webkit-transform 0.4s}#main-header.et-disabled-animations *{-webkit-transition-duration:0s !important;transition-duration:0s !important}.container{text-align:left;position:relative}.et_fixed_nav.et_show_nav #page-container{padding-top:80px}.et_fixed_nav.et_show_nav.et-tb #page-container,.et_fixed_nav.et_show_nav.et-tb-has-header #page-container{padding-top:0 !important}.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #page-container{padding-top:111px}.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et_header_style_centered #page-container{padding-top:177px}.et_fixed_nav.et_show_nav.et_header_style_centered #page-container{padding-top:147px}.et_fixed_nav #main-header{position:fixed}.et_header_style_left #et-top-navigation{padding-top:33px}.et_header_style_left #et-top-navigation nav>ul>li>a{padding-bottom:33px}.et_header_style_left .logo_container{position:absolute;height:100%;width:100%}.et_header_style_left #et-top-navigation .mobile_menu_bar{padding-bottom:24px}.et_hide_search_icon #et_top_search{display:none !important}#logo{width:auto;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out;margin-bottom:0;max-height:54%;display:inline-block;float:none;vertical-align:middle;-webkit-transform:translate3d(0, 0, 0)}.et_pb_svg_logo #logo{height:54%}.logo_container{-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}span.logo_helper{display:inline-block;height:100%;vertical-align:middle;width:0}.safari .centered-inline-logo-wrap{-webkit-transform:translate3d(0, 0, 0);-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}#et-define-logo-wrap img{width:100%}.gecko #et-define-logo-wrap.svg-logo{position:relative !important}#top-menu-nav,#top-menu{line-height:0}#et-top-navigation{font-weight:600}.et_fixed_nav #et-top-navigation{-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}.et-cart-info span:before{content:"\e07a";margin-right:10px;position:relative}nav#top-menu-nav,#top-menu,nav.et-menu-nav,.et-menu{float:left}#top-menu li{display:inline-block;font-size:14px;padding-right:22px}#top-menu>li:last-child{padding-right:0}.et_fullwidth_nav.et_non_fixed_nav.et_header_style_left #top-menu>li:last-child>ul.sub-menu{right:0}#top-menu a{color:rgba(0,0,0,0.6);text-decoration:none;display:block;position:relative;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}#top-menu-nav>ul>li>a:hover{opacity:0.7;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}#et_search_icon:before{content:"\55";font-size:17px;left:0;position:absolute;top:-3px}#et_search_icon:hover{cursor:pointer}#et_top_search{float:right;margin:3px 0 0 22px;position:relative;display:block;width:18px}#et_top_search.et_search_opened{position:absolute;width:100%}.et-search-form{top:0;bottom:0;right:0;position:absolute;z-index:1000;width:100%}.et-search-form input{width:90%;border:none;color:#333;position:absolute;top:0;bottom:0;right:30px;margin:auto;background:transparent}.et-search-form .et-search-field::-ms-clear{width:0;height:0;display:none}.et_search_form_container{-webkit-animation:none;animation:none;-o-animation:none}.container.et_search_form_container{position:relative;opacity:0;height:1px}.container.et_search_form_container.et_pb_search_visible{z-index:999;-webkit-animation:fadeInTop 1s 1 cubic-bezier(0.77, 0, 0.175, 1);animation:fadeInTop 1s 1 cubic-bezier(0.77, 0, 0.175, 1)}.et_pb_search_visible.et_pb_no_animation{opacity:1}.et_pb_search_form_hidden{-webkit-animation:fadeOutTop 1s 1 cubic-bezier(0.77, 0, 0.175, 1);animation:fadeOutTop 1s 1 cubic-bezier(0.77, 0, 0.175, 1)}span.et_close_search_field{display:block;width:30px;height:30px;z-index:99999;position:absolute;right:0;cursor:pointer;top:0;bottom:0;margin:auto}span.et_close_search_field:after{font-family:'ETmodules';content:'\4d';speak:none;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;font-size:32px;display:inline-block;-webkit-box-sizing:border-box;box-sizing:border-box}.container.et_menu_container{z-index:99}.container.et_search_form_container.et_pb_search_form_hidden{z-index:1 !important}.et_search_outer{width:100%;overflow:hidden;position:absolute;top:0}.container.et_pb_menu_hidden{z-index:-1}form.et-search-form{background:rgba(0,0,0,0) !important}input[type="search"]::-webkit-search-cancel-button{-webkit-appearance:none}.et-cart-info{color:inherit}#et-top-navigation .et-cart-info{float:left;margin:-2px 0 0 22px;font-size:16px}#et-top-navigation{float:right}#top-menu li li{padding:0 20px;margin:0}#top-menu li li a{padding:6px 20px;width:200px}.nav li.et-touch-hover>ul{opacity:1;visibility:visible}#top-menu .menu-item-has-children>a:first-child:after,#et-secondary-nav .menu-item-has-children>a:first-child:after{font-family:'ETmodules';content:"3";font-size:16px;position:absolute;right:0;top:0;font-weight:800}#top-menu .menu-item-has-children>a:first-child,#et-secondary-nav .menu-item-has-children>a:first-child{padding-right:20px}#top-menu li .menu-item-has-children>a:first-child{padding-right:40px}#top-menu li .menu-item-has-children>a:first-child:after{right:20px;top:6px}#top-menu li.mega-menu{position:inherit}#top-menu li.mega-menu>ul{padding:30px 20px;position:absolute !important;width:100%;left:0 !important}#top-menu li.mega-menu ul li{margin:0;float:left !important;display:block !important;padding:0 !important}#top-menu li.mega-menu>ul>li:nth-of-type(4n){clear:right}#top-menu li.mega-menu>ul>li:nth-of-type(4n+1){clear:left}#top-menu li.mega-menu ul li li{width:100%}#top-menu li.mega-menu li>ul{-webkit-animation:none !important;animation:none !important;padding:0px;border:none;left:auto;top:auto;width:90% !important;position:relative;-webkit-box-shadow:none;box-shadow:none}#top-menu li.mega-menu li ul{visibility:visible;opacity:1;display:none}#top-menu li.mega-menu.et-hover li ul{display:block}#top-menu li.mega-menu.et-hover>ul{opacity:1 !important;visibility:visible !important}#top-menu li.mega-menu>ul>li>a{width:90%;padding:0 20px 10px}#top-menu li.mega-menu>ul>li>a:first-child{padding-top:0 !important;font-weight:bold;border-bottom:1px solid rgba(0,0,0,0.03)}#top-menu li.mega-menu>ul>li>a:first-child:hover{background-color:transparent !important}#top-menu li.mega-menu li>a{width:100%}#top-menu li.mega-menu.mega-menu-parent li li,#top-menu li.mega-menu.mega-menu-parent li>a{width:100% !important}#top-menu li.mega-menu.mega-menu-parent li>.sub-menu{float:left;width:100% !important}#top-menu li.mega-menu>ul>li{width:25%;margin:0}#top-menu li.mega-menu.mega-menu-parent-3>ul>li{width:33.33%}#top-menu li.mega-menu.mega-menu-parent-2>ul>li{width:50%}#top-menu li.mega-menu.mega-menu-parent-1>ul>li{width:100%}#top-menu li.mega-menu .menu-item-has-children>a:first-child:after{display:none}#top-menu li.mega-menu>ul>li>ul>li{width:100%;margin:0}#et_mobile_nav_menu{float:right;display:none}.mobile_menu_bar{position:relative;display:block;line-height:0}.mobile_menu_bar:before,.et_toggle_slide_menu:after{content:"\61";font-size:32px;left:0;position:relative;top:0;cursor:pointer}.mobile_nav .select_page{display:none}.et_pb_menu_hidden #top-menu,.et_pb_menu_hidden #et_search_icon:before,.et_pb_menu_hidden .et-cart-info{opacity:0;-webkit-animation:fadeOutBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1);animation:fadeOutBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1)}.et_pb_menu_visible #top-menu,.et_pb_menu_visible #et_search_icon:before,.et_pb_menu_visible .et-cart-info{z-index:99;opacity:1;-webkit-animation:fadeInBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1);animation:fadeInBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1)}.et_pb_menu_hidden #top-menu,.et_pb_menu_hidden #et_search_icon:before,.et_pb_menu_hidden .mobile_menu_bar{opacity:0;-webkit-animation:fadeOutBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1);animation:fadeOutBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1)}.et_pb_menu_visible #top-menu,.et_pb_menu_visible #et_search_icon:before,.et_pb_menu_visible .mobile_menu_bar{z-index:99;opacity:1;-webkit-animation:fadeInBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1);animation:fadeInBottom 1s 1 cubic-bezier(0.77, 0, 0.175, 1)}.et_pb_no_animation #top-menu,.et_pb_no_animation #et_search_icon:before,.et_pb_no_animation .mobile_menu_bar,.et_pb_no_animation.et_search_form_container{animation:none !important;-o-animation:none !important;-webkit-animation:none !important;-moz-animation:none !important}body.admin-bar.et_fixed_nav #main-header{top:32px}body.et-wp-pre-3_8.admin-bar.et_fixed_nav #main-header{top:28px}body.et_fixed_nav.et_secondary_nav_enabled #main-header{top:30px}body.admin-bar.et_fixed_nav.et_secondary_nav_enabled #main-header{top:63px}@media all and (min-width: 981px){.et_hide_primary_logo #main-header:not(.et-fixed-header) .logo_container,.et_hide_fixed_logo #main-header.et-fixed-header .logo_container{height:0;opacity:0;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}.et_hide_primary_logo #main-header:not(.et-fixed-header) .centered-inline-logo-wrap,.et_hide_fixed_logo #main-header.et-fixed-header .centered-inline-logo-wrap{height:0;opacity:0;padding:0}.et-animated-content#page-container{-webkit-transition:margin-top 0.4s ease-in-out;transition:margin-top 0.4s ease-in-out}.et_hide_nav #page-container{-webkit-transition:none;transition:none}.et_fullwidth_nav .et-search-form,.et_fullwidth_nav .et_close_search_field{right:30px}#main-header.et-fixed-header{-webkit-box-shadow:0 0 7px rgba(0,0,0,0.1) !important;box-shadow:0 0 7px rgba(0,0,0,0.1) !important}.et_header_style_left .et-fixed-header #et-top-navigation{padding-top:20px}.et_header_style_left .et-fixed-header #et-top-navigation nav>ul>li>a{padding-bottom:20px}.et_hide_nav.et_fixed_nav #main-header{opacity:0}.et_hide_nav.et_fixed_nav .et-fixed-header#main-header{-webkit-transform:translateY(0px) !important;transform:translateY(0px) !important;opacity:1}.et_hide_nav .centered-inline-logo-wrap,.et_hide_nav.et_fixed_nav #main-header,.et_hide_nav.et_fixed_nav #main-header,.et_hide_nav .centered-inline-logo-wrap{-webkit-transition-duration:.7s;transition-duration:.7s}.et_hide_nav #page-container{padding-top:0 !important}.et_primary_nav_dropdown_animation_fade #et-top-navigation ul li:hover>ul,.et_secondary_nav_dropdown_animation_fade #et-secondary-nav li:hover>ul{-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.et_primary_nav_dropdown_animation_slide #et-top-navigation ul li:hover>ul,.et_secondary_nav_dropdown_animation_slide #et-secondary-nav li:hover>ul{-webkit-animation:fadeLeft .4s ease-in-out;animation:fadeLeft .4s ease-in-out}.et_primary_nav_dropdown_animation_expand #et-top-navigation ul li:hover>ul,.et_secondary_nav_dropdown_animation_expand #et-secondary-nav li:hover>ul{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-animation:Grow .4s ease-in-out;animation:Grow .4s ease-in-out;-webkit-backface-visibility:visible !important;backface-visibility:visible !important}.et_primary_nav_dropdown_animation_flip #et-top-navigation ul li ul li:hover>ul,.et_secondary_nav_dropdown_animation_flip #et-secondary-nav ul li:hover>ul{-webkit-animation:flipInX .6s ease-in-out;animation:flipInX .6s ease-in-out;-webkit-backface-visibility:visible !important;backface-visibility:visible !important}.et_primary_nav_dropdown_animation_flip #et-top-navigation ul li:hover>ul,.et_secondary_nav_dropdown_animation_flip #et-secondary-nav li:hover>ul{-webkit-animation:flipInY .6s ease-in-out;animation:flipInY .6s ease-in-out;-webkit-backface-visibility:visible !important;backface-visibility:visible !important}.et_fullwidth_nav #main-header .container{width:100%;max-width:100%;padding-right:30px;padding-left:30px}.et_non_fixed_nav.et_fullwidth_nav.et_header_style_left #main-header .container{padding-left:0}.et_non_fixed_nav.et_fullwidth_nav.et_header_style_left .logo_container{padding-left:30px}}@media all and (max-width: 980px){.et_fixed_nav.et_show_nav.et_secondary_nav_enabled #page-container,.et_fixed_nav.et_show_nav #page-container{padding-top:80px}.et_fixed_nav.et_show_nav.et-tb #page-container,.et_fixed_nav.et_show_nav.et-tb-has-header #page-container{padding-top:0 !important}.et_non_fixed_nav #page-container{padding-top:0}.et_fixed_nav.et_secondary_nav_only_menu.admin-bar #main-header{top:32px !important}.et_hide_mobile_logo #main-header .logo_container{display:none;opacity:0;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}#top-menu{display:none}.et_hide_nav.et_fixed_nav #main-header{-webkit-transform:translateY(0px) !important;transform:translateY(0px) !important;opacity:1}#et-top-navigation{margin-right:0;-webkit-transition:none;transition:none}.et_fixed_nav #main-header{position:absolute}.et_header_style_left .et-fixed-header #et-top-navigation,.et_header_style_left #et-top-navigation{padding-top:24px;display:block}.et_fixed_nav #main-header{-webkit-transition:none;transition:none}.et_fixed_nav_temp #main-header{top:0 !important}#logo,.logo_container,#main-header,.container{-webkit-transition:none;transition:none}.et_header_style_left #logo{max-width:50%}#et_top_search{margin:0 35px 0 0;float:left}#et_search_icon:before{top:7px}.et_header_style_left .et-search-form{width:50% !important;max-width:50% !important}#et_mobile_nav_menu{display:block}#et-top-navigation .et-cart-info{margin-top:5px}}@media screen and (max-width: 782px){body.admin-bar.et_fixed_nav #main-header{top:46px}}@media all and (max-width: 767px){#et-top-navigation{margin-right:0}body.admin-bar.et_fixed_nav #main-header{top:46px}}@media all and (max-width: 479px){#et-top-navigation{margin-right:0}}@media print{#top-header,#main-header{position:relative !important;top:auto !important;right:auto !important;bottom:auto !important;left:auto !important}}
@keyframes fadeOutTop{0%{opacity:1;transform:translatey(0)}to{opacity:0;transform:translatey(-60%)}}@keyframes fadeInTop{0%{opacity:0;transform:translatey(-60%)}to{opacity:1;transform:translatey(0)}}@keyframes fadeInBottom{0%{opacity:0;transform:translatey(60%)}to{opacity:1;transform:translatey(0)}}@keyframes fadeOutBottom{0%{opacity:1;transform:translatey(0)}to{opacity:0;transform:translatey(60%)}}@keyframes Grow{0%{opacity:0;transform:scaleY(.5)}to{opacity:1;transform:scale(1)}}

/*!
      * Animate.css - http://daneden.me/animate
      * Licensed under the MIT license - http://opensource.org/licenses/MIT
      * Copyright (c) 2015 Daniel Eden
     */@keyframes flipInX{0%{transform:perspective(400px) rotateX(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateX(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateX(10deg);opacity:1}80%{transform:perspective(400px) rotateX(-5deg)}to{transform:perspective(400px)}}@keyframes flipInY{0%{transform:perspective(400px) rotateY(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateY(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateY(10deg);opacity:1}80%{transform:perspective(400px) rotateY(-5deg)}to{transform:perspective(400px)}}
#main-header{line-height:23px;font-weight:500;top:0;background-color:#fff;width:100%;box-shadow:0 1px 0 rgba(0,0,0,.1);position:relative;z-index:99999}.nav li li{padding:0 20px;margin:0}.et-menu li li a{padding:6px 20px;width:200px}.nav li{position:relative;line-height:1em}.nav li li{position:relative;line-height:2em}.nav li ul{position:absolute;padding:20px 0;z-index:9999;width:240px;background:#fff;visibility:hidden;opacity:0;border-top:3px solid #2ea3f2;box-shadow:0 2px 5px rgba(0,0,0,.1);-moz-box-shadow:0 2px 5px rgba(0,0,0,.1);-webkit-box-shadow:0 2px 5px rgba(0,0,0,.1);-webkit-transform:translateZ(0);text-align:left}.nav li.et-hover>ul{visibility:visible}.nav li.et-touch-hover>ul,.nav li:hover>ul{opacity:1;visibility:visible}.nav li li ul{z-index:1000;top:-23px;left:240px}.nav li.et-reverse-direction-nav li ul{left:auto;right:240px}.nav li:hover{visibility:inherit}.et_mobile_menu li a,.nav li li a{font-size:14px;transition:all .2s ease-in-out}.et_mobile_menu li a:hover,.nav ul li a:hover{background-color:rgba(0,0,0,.03);opacity:.7}.et-dropdown-removing>ul{display:none}.mega-menu .et-dropdown-removing>ul{display:block}.et-menu .menu-item-has-children>a:first-child:after{font-family:ETmodules;content:"3";font-size:16px;position:absolute;right:0;top:0;font-weight:800}.et-menu .menu-item-has-children>a:first-child{padding-right:20px}.et-menu li li.menu-item-has-children>a:first-child:after{right:20px;top:6px}.et-menu-nav li.mega-menu{position:inherit}.et-menu-nav li.mega-menu>ul{padding:30px 20px;position:absolute!important;width:100%;left:0!important}.et-menu-nav li.mega-menu ul li{margin:0;float:left!important;display:block!important;padding:0!important}.et-menu-nav li.mega-menu li>ul{animation:none!important;padding:0;border:none;left:auto;top:auto;width:240px!important;position:relative;box-shadow:none;-webkit-box-shadow:none}.et-menu-nav li.mega-menu li ul{visibility:visible;opacity:1;display:none}.et-menu-nav li.mega-menu.et-hover li ul,.et-menu-nav li.mega-menu:hover li ul{display:block}.et-menu-nav li.mega-menu:hover>ul{opacity:1!important;visibility:visible!important}.et-menu-nav li.mega-menu>ul>li>a:first-child{padding-top:0!important;font-weight:700;border-bottom:1px solid rgba(0,0,0,.03)}.et-menu-nav li.mega-menu>ul>li>a:first-child:hover{background-color:transparent!important}.et-menu-nav li.mega-menu li>a{width:200px!important}.et-menu-nav li.mega-menu.mega-menu-parent li>a,.et-menu-nav li.mega-menu.mega-menu-parent li li{width:100%!important}.et-menu-nav li.mega-menu.mega-menu-parent li>.sub-menu{float:left;width:100%!important}.et-menu-nav li.mega-menu>ul>li{width:25%;margin:0}.et-menu-nav li.mega-menu.mega-menu-parent-3>ul>li{width:33.33%}.et-menu-nav li.mega-menu.mega-menu-parent-2>ul>li{width:50%}.et-menu-nav li.mega-menu.mega-menu-parent-1>ul>li{width:100%}.et_pb_fullwidth_menu li.mega-menu .menu-item-has-children>a:first-child:after,.et_pb_menu li.mega-menu .menu-item-has-children>a:first-child:after{display:none}.et_fullwidth_nav #top-menu li.mega-menu>ul{width:auto;left:30px!important;right:30px!important}.et_mobile_menu{position:absolute;left:0;padding:5%;background:#fff;width:100%;visibility:visible;opacity:1;display:none;z-index:9999;border-top:3px solid #2ea3f2;box-shadow:0 2px 5px rgba(0,0,0,.1);-moz-box-shadow:0 2px 5px rgba(0,0,0,.1);-webkit-box-shadow:0 2px 5px rgba(0,0,0,.1)}#main-header .et_mobile_menu li ul,.et_pb_fullwidth_menu .et_mobile_menu li ul,.et_pb_menu .et_mobile_menu li ul{visibility:visible!important;display:block!important;padding-left:10px}.et_mobile_menu li li{padding-left:5%}.et_mobile_menu li a{border-bottom:1px solid rgba(0,0,0,.03);color:#666;padding:10px 5%;display:block}.et_mobile_menu .menu-item-has-children>a{font-weight:700;background-color:rgba(0,0,0,.03)}.et_mobile_menu li .menu-item-has-children>a{background-color:transparent}.et_mobile_nav_menu{float:right;display:none}.mobile_menu_bar{position:relative;display:block;line-height:0}.mobile_menu_bar:before{content:"a";font-size:32px;position:relative;left:0;top:0;cursor:pointer}.et_pb_module .mobile_menu_bar:before{top:2px}.mobile_nav .select_page{display:none}
#et-secondary-menu li{word-wrap:break-word}#top-header,#et-secondary-nav li ul{background-color:#2EA3F2}#top-header{font-size:12px;line-height:13px;z-index:100000;color:#ffffff}#top-header a,#top-header a{color:#ffffff}#top-header,#et-secondary-nav{-webkit-transition:background-color 0.4s, opacity 0.4s ease-in-out, -webkit-transform 0.4s;transition:background-color 0.4s, opacity 0.4s ease-in-out, -webkit-transform 0.4s;transition:background-color 0.4s, transform 0.4s, opacity 0.4s ease-in-out;transition:background-color 0.4s, transform 0.4s, opacity 0.4s ease-in-out, -webkit-transform 0.4s}#top-header .container{padding-top:.75em;font-weight:600}#top-header,#top-header .container,#top-header #et-info,#top-header .et-social-icon a{line-height:1em}.et_fixed_nav #top-header{top:0;left:0;right:0;position:fixed}#et-info{float:left}#et-info-phone,#et-info-email{position:relative}#et-info-phone:before{content:"\e090";position:relative;top:2px;margin-right:2px}#et-info-phone{margin-right:13px}#et-info-email:before{content:"\e076";margin-right:4px}#top-header .et-social-icons{float:none;display:inline-block}#et-secondary-menu .et-social-icons{margin-right:20px}#top-header .et-social-icons li{margin-left:12px;margin-top:-2px}#top-header .et-social-icon a{font-size:14px}#et-secondary-menu{float:right}#et-info,#et-secondary-menu>ul>li a{padding-bottom:.75em;display:block}#et-secondary-nav,#et-secondary-nav li{display:inline-block}#et-secondary-nav a{-webkit-transition:background-color 0.4s, color 0.4s ease-in-out;transition:background-color 0.4s, color 0.4s ease-in-out}#et-secondary-nav li{margin-right:15px}#et-secondary-nav>li:last-child{margin-right:0}#et-secondary-menu>ul>li>a:hover,#et-info-email:hover{opacity:0.7;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}#et-secondary-nav li{position:relative;text-align:right}#et-secondary-nav li ul{position:absolute;right:0;padding:1em 0}#et-secondary-nav li ul ul{right:220px;top:0;margin-top:-1em}#et-secondary-nav li ul li{display:block}#et-secondary-nav li ul{z-index:999999;visibility:hidden;opacity:0;-webkit-box-shadow:0 2px 5px rgba(0,0,0,0.1);box-shadow:0 2px 5px rgba(0,0,0,0.1)}#et-secondary-nav li ul{-webkit-transform:translate3d(0, 0, 0)}#et-secondary-nav li.et-hover>ul{visibility:visible}#et-secondary-nav li>ul{width:220px}#et-secondary-nav li:hover>ul,#et-secondary-nav li.et-touch-hover>ul{opacity:1;visibility:visible}#et-secondary-nav li li{padding:0 2em;margin:0}#et-secondary-nav li li a{padding:1em;width:100%;font-size:12px;line-height:1em;margin-right:0;display:block;-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out}#et-secondary-nav ul li a:hover{background-color:rgba(0,0,0,0.03)}#et-secondary-nav li:hover{visibility:inherit}#top-header .et-cart-info{margin-left:15px}#et-secondary-nav .menu-item-has-children>a:first-child:after{top:0}#et-secondary-nav li .menu-item-has-children>a:first-child:after{top:.67em;right:auto;left:2.3em}body.admin-bar.et_fixed_nav #top-header{top:32px}body.et-wp-pre-3_8.admin-bar.et_fixed_nav #top-header{top:28px}@media all and (min-width: 981px){.et_fullwidth_secondary_nav #top-header .container{width:100%;max-width:100%;padding-right:30px;padding-left:30px}.et_hide_nav.et_fixed_nav #top-header{opacity:0}.et_hide_nav.et_fixed_nav .et-fixed-header#top-header{-webkit-transform:translateY(0px) !important;transform:translateY(0px) !important;opacity:1}.et_hide_nav.et_fixed_nav #top-header,.et_hide_nav.et_fixed_nav #top-header{-webkit-transition-duration:.7s;transition-duration:.7s}}@media all and (max-width: 980px){.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et-tb #page-container,.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et-tb-has-header #page-container{padding-top:0 !important}.et_secondary_nav_only_menu #top-header{display:none}#top-header{-webkit-transition:none;transition:none}.et_fixed_nav #top-header{position:absolute}.et_hide_nav.et_fixed_nav #top-header{-webkit-transform:translateY(0px) !important;transform:translateY(0px) !important;opacity:1}#top-header .container{padding-top:0}#et-info{padding-top:0.75em}#et-secondary-nav,#et-secondary-menu{display:none !important}.et_secondary_nav_only_menu #main-header,.et_secondary_nav_only_menu #main-header{top:0 !important}#top-header .et-social-icons{margin-bottom:0}#top-header .et-cart-info{margin-left:0}}@media screen and (max-width: 782px){body.admin-bar.et_fixed_nav #top-header{top:46px}.et_fixed_nav.et_secondary_nav_only_menu.admin-bar #main-header{top:46px !important}body.admin-bar.et_fixed_nav.et_secondary_nav_enabled #main-header{top:80px}}@media all and (max-width: 767px){#et-info .et-social-icons{display:none}#et-secondary-menu .et_duplicate_social_icons{display:inline-block}body.et_fixed_nav.et_secondary_nav_two_panels #main-header{top:58px}#et-info,#et-secondary-menu{text-align:center;display:block;float:none}.et_secondary_nav_two_panels #et-secondary-menu{margin-top:12px}body.admin-bar.et_fixed_nav #top-header{top:46px}body.admin-bar.et_fixed_nav.et_secondary_nav_two_panels #main-header{top:104px}}
.et_header_style_centered #main-header .container{text-align:center;height:inherit}.et_header_style_centered #main-header div#et-top-navigation{bottom:0;position:relative;width:100%}.et_header_style_centered #logo,.et_header_style_centered #et-top-navigation,.et_header_style_centered nav#top-menu-nav,.et_header_style_centered #top-menu{float:none}.et_header_style_centered #logo{max-height:64%}.et_header_style_centered #main-header .logo_container{height:100px;padding:0}.et_header_style_centered header#main-header.et-fixed-header .logo_container{height:70px}.et_header_style_centered #et_top_search{float:none;display:inline-block !important}.et_header_style_centered #et_search_icon:before{left:3px;top:-13px}.et_header_style_centered nav#top-menu-nav{display:inline-block}.et_header_style_centered #top-menu>li>a{padding-bottom:2em}.et_header_style_centered #et-top-navigation .et-cart-info{float:none}.et_header_style_centered .et-search-form input,.et_header_style_centered span.et_close_search_field{top:60%}@media all and (min-width: 981px){.et_header_style_centered.et_hide_primary_logo #main-header:not(.et-fixed-header) .logo_container,.et_header_style_centered.et_hide_fixed_logo #main-header.et-fixed-header .logo_container{height:0;opacity:0;padding:0}.et_header_style_centered .et-fixed-header .et-search-form{top:21px}.et_header_style_centered .et-fixed-header #et_search_icon:before{margin-top:0}}@media all and (max-width: 980px){.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_secondary_nav_enabled.et_header_style_centered #page-container,.et_non_fixed_nav.et_transparent_nav.et_show_nav.et_header_style_centered #page-container,.et_fixed_nav.et_show_nav.et_secondary_nav_enabled.et_header_style_centered #page-container,.et_fixed_nav.et_show_nav.et_header_style_centered #page-container{padding-top:136px}.et_header_style_centered #main-header{padding:20px 0}.et_header_style_centered nav#top-menu-nav{display:none}.et_header_style_centered #logo{max-height:60px}.et_header_style_centered header#main-header .logo_container{height:auto;max-height:100px;padding:0}.et_header_style_centered #et_top_search{display:none !important}.et_header_style_centered .et_search_outer{display:none}.et_header_style_centered .et_menu_container .mobile_menu_bar{opacity:1}.et_header_style_centered #et_mobile_nav_menu{float:none;position:relative;margin-top:20px}.et_header_style_centered #main-header .mobile_nav{display:block;text-align:left;background-color:rgba(0,0,0,0.05);border-radius:5px;padding:5px 10px}.et_header_style_centered .mobile_nav .select_page{display:inline-block;color:#666;font-size:14px}.et_header_style_centered .et_menu_container .mobile_menu_bar{position:absolute;right:5px;top:2px}.et_header_style_centered .et_mobile_menu{top:53px}.et_header_style_centered #et-top-navigation .et-cart-info{display:none}}
.et_header_style_split #et-top-navigation{padding-top:33px}.et_header_style_split #et-top-navigation nav>ul>li>a{padding-bottom:33px}.et_header_style_split #et-top-navigation nav>ul>li>a{z-index:3}.et_header_style_split #main-header .centered-inline-logo-wrap{margin:-33px 0;height:66px;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}.et_header_style_split #main-header .centered-inline-logo-wrap .logo_container{height:100%}.et_header_style_split #main-header .centered-inline-logo-wrap a{height:100%}.et_header_style_split #main-header .logo_container{position:initial}.et_header_style_split #top-menu-nav{display:inline-block}.et_header_style_split #et_top_search{float:none;display:inline-block}.et_header_style_split #et_search_icon:before{margin-top:-9px}.et_header_style_split #et-top-navigation .mobile_menu_bar{padding-bottom:24px}.et_header_style_split #et-top-navigation{float:none;text-align:center;display:inline-block;position:relative;vertical-align:middle;width:100%;line-height:1}.et_header_style_split #main-header .container,.et_header_style_split #main-header .logo_container{text-align:center;z-index:2}.et_header_style_split span.logo_helper{display:none}.et_header_style_split nav#top-menu-nav,.et_header_style_split #top-menu,.et_header_style_split #top-header nav.et-menu-nav,.et_header_style_split #main-header nav.et-menu-nav,.et_header_style_split #top-header .et-menu,.et_header_style_split #main-header .et-menu{float:none}.safari.et_header_style_split #et-top-navigation{-webkit-transform:translate3d(0, 0, 0)}.et_pb_svg_logo.et_header_style_split .et-fixed-header .centered-inline-logo-wrap #logo{height:54%}@media all and (min-width: 981px){.et_header_style_split.et_hide_primary_logo #main-header:not(.et-fixed-header) .logo_container,.et_header_style_split.et_hide_fixed_logo #main-header.et-fixed-header .logo_container{height:0;opacity:0;padding:0}.et_header_style_split #logo{display:none}.et_header_style_split .centered-inline-logo-wrap #logo{display:initial;-webkit-animation:fadeIn 1s 1 cubic-bezier(0.77, 0, 0.175, 1);animation:fadeIn 1s 1 cubic-bezier(0.77, 0, 0.175, 1)}.et_header_style_split.ie .centered-inline-logo-wrap #logo{display:inline}.et_header_style_split.et_hide_primary_logo .centered-inline-logo-wrap{width:0}.et_header_style_split .et-fixed-header #et-top-navigation{padding-top:20px}.et_header_style_split .et-fixed-header #et-top-navigation nav>ul>li>a{padding-bottom:20px}.et_header_style_split .et-fixed-header .centered-inline-logo-wrap{margin:-20px 0;height:54px;width:54px}}@media all and (max-width: 980px){.et_header_style_split #main-header{padding:20px 0}.et_header_style_split #et-top-navigation,.et_header_style_split .et-fixed-header #et-top-navigation{display:block;padding-top:0}.et_header_style_split header#main-header .logo_container{height:auto;max-height:100px;padding:0}.et_header_style_split #logo{max-height:60px}.et_header_style_split #logo{max-width:50%}.et_header_style_split .et_search_outer{display:none}.et_header_style_split #et_top_search{display:none !important}.et_header_style_split .et-search-form{width:50% !important;max-width:50% !important}.et_header_style_split .et_menu_container .mobile_menu_bar{opacity:1}.et_header_style_split .mobile_nav .select_page{display:inline-block;color:#666;font-size:14px}.et_header_style_split #et_mobile_nav_menu{float:none;position:relative;margin-top:20px;display:block}.et_header_style_split nav#top-menu-nav{display:none}.et_header_style_split #main-header .mobile_nav{display:block;text-align:left;background-color:rgba(0,0,0,0.05);border-radius:5px;padding:9px 10px}.et_header_style_split .et_menu_container .mobile_menu_bar{position:absolute;right:5px;top:2px}.et_header_style_split .et_mobile_menu{top:53px}}
.et-social-icons{float:right}.et-social-icons li{display:inline-block;margin-left:20px}.et-social-icon a{display:inline-block;font-size:24px;position:relative;text-align:center;-webkit-transition:color 300ms ease 0s;transition:color 300ms ease 0s;color:#666;text-decoration:none}.et-social-icons a:hover{opacity:0.7;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}.et-social-icon span{display:none}.et_duplicate_social_icons{display:none}@media all and (max-width: 980px){.et-social-icons{float:none;text-align:center}}@media all and (max-width: 980px){.et-social-icons{margin:0 0 5px}}
.et_pb_widget{float:left;max-width:100%;word-wrap:break-word}.et_pb_widget a{text-decoration:none;color:#666}.et_pb_widget li a:hover{color:#82c0c7}.et_pb_widget ol li,.et_pb_widget ul li{margin-bottom:.5em}.et_pb_widget ol li ol li,.et_pb_widget ul li ul li{margin-left:15px}.et_pb_widget select{width:100%;height:28px;padding:0 5px}.et_pb_widget_area .et_pb_widget a{color:inherit}.et_pb_bg_layout_light .et_pb_widget li a{color:#666}.et_pb_bg_layout_dark .et_pb_widget li a{color:inherit}
.widget_search .screen-reader-text,.et_pb_widget .wp-block-search__label{display:none}.widget_search input#s,.widget_search input#searchsubmit,.et_pb_widget .wp-block-search__input,.et_pb_widget .wp-block-search__button{padding:.7em;height:40px !important;margin:0;font-size:14px;line-height:normal !important;border:1px solid #ddd;color:#666}.widget_search #s,.et_pb_widget .wp-block-search__input{width:100%;border-radius:3px}.widget_search #searchform,.et_pb_widget .wp-block-search{position:relative}.widget_search #searchsubmit,.et_pb_widget .wp-block-search__button{background-color:#ddd;width:70px;-webkit-border-top-right-radius:3px;-webkit-border-bottom-right-radius:3px;-moz-border-radius-topright:3px;-moz-border-radius-bottomright:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;position:absolute;right:0;top:0}#searchsubmit,.et_pb_widget .wp-block-search__button{cursor:pointer}
.et_pb_section{position:relative;background-color:#fff;background-position:50%;background-size:100%;background-size:cover}.et_pb_section--absolute,.et_pb_section--fixed{width:100%}.et_pb_section.et_section_transparent{background-color:transparent}.et_pb_fullwidth_section{padding:0}.et_pb_fullwidth_section>.et_pb_module:not(.et_pb_post_content):not(.et_pb_fullwidth_post_content) .et_pb_row{padding:0!important}.et_pb_inner_shadow{box-shadow:inset 0 0 7px rgba(0,0,0,.07)}.et_pb_bottom_inside_divider,.et_pb_top_inside_divider{display:block;background-repeat-y:no-repeat;height:100%;position:absolute;pointer-events:none;width:100%;left:0;right:0}.et_pb_bottom_inside_divider.et-no-transition,.et_pb_top_inside_divider.et-no-transition{transition:none!important}.et_pb_top_inside_divider{margin-top:-1px}.et_pb_bottom_inside_divider{margin-bottom:-1px}.et-fb .section_has_divider.et_fb_element_controls_visible--child>.et_pb_bottom_inside_divider,.et-fb .section_has_divider.et_fb_element_controls_visible--child>.et_pb_top_inside_divider{z-index:1}.et_pb_section_video:not(.et_pb_menu):not(.et_pb_fullwidth_menu){overflow:hidden;position:relative}.et_pb_column>.et_pb_section_video_bg{z-index:-1}.et_pb_section_video_bg{visibility:visible;position:absolute;top:0;left:0;width:100%;height:100%;overflow:hidden;display:block;pointer-events:none;transition:display .3s}.et_pb_section_video_bg.et_pb_section_video_bg_hover,.et_pb_section_video_bg.et_pb_section_video_bg_phone,.et_pb_section_video_bg.et_pb_section_video_bg_tablet,.et_pb_section_video_bg.et_pb_section_video_bg_tablet_only{display:none}.et_pb_section_video_bg .mejs-controls,.et_pb_section_video_bg .mejs-overlay-play{display:none!important}.et_pb_section_video_bg embed,.et_pb_section_video_bg iframe,.et_pb_section_video_bg object,.et_pb_section_video_bg video{max-width:none}.et_pb_section_video_bg .mejs-video{left:50%;position:absolute;max-width:none}.et_pb_section_video_bg .mejs-overlay-loading{display:none!important}.et_pb_social_network_link .et_pb_section_video{overflow:visible}.et_pb_section_video_on_hover:hover>.et_pb_section_video_bg{display:none}.et_pb_section_video_on_hover:hover>.et_pb_section_video_bg_hover,.et_pb_section_video_on_hover:hover>.et_pb_section_video_bg_hover_inherit{display:block}@media (min-width:981px){.et_pb_section{padding:4% 0}body.et_pb_pagebuilder_layout.et_pb_show_title .post-password-required .et_pb_section,body:not(.et_pb_pagebuilder_layout) .post-password-required .et_pb_section{padding-top:0}.et_pb_fullwidth_section{padding:0}.et_pb_section_video_bg.et_pb_section_video_bg_desktop_only{display:block}}@media (max-width:980px){.et_pb_section{padding:50px 0}body.et_pb_pagebuilder_layout.et_pb_show_title .post-password-required .et_pb_section,body:not(.et_pb_pagebuilder_layout) .post-password-required .et_pb_section{padding-top:0}.et_pb_fullwidth_section{padding:0}.et_pb_section_video_bg.et_pb_section_video_bg_tablet{display:block}.et_pb_section_video_bg.et_pb_section_video_bg_desktop_only{display:none}}@media (min-width:768px){.et_pb_section_video_bg.et_pb_section_video_bg_desktop_tablet{display:block}}@media (min-width:768px) and (max-width:980px){.et_pb_section_video_bg.et_pb_section_video_bg_tablet_only{display:block}}@media (max-width:767px){.et_pb_section_video_bg.et_pb_section_video_bg_phone{display:block}.et_pb_section_video_bg.et_pb_section_video_bg_desktop_tablet{display:none}}
.et_pb_row{width:80%;max-width:1080px;margin:auto;position:relative}.section_has_divider .et_pb_row{z-index:5}.et_pb_row_inner{width:100%;position:relative}.et_pb_row.et_pb_row_empty,.et_pb_row_inner:nth-of-type(n+2).et_pb_row_empty{display:none}.et_pb_row:after,.et_pb_row_inner:after{content:"";display:block;clear:both;visibility:hidden;line-height:0;height:0;width:0}.et_pb_row_4col .et-last-child,.et_pb_row_4col .et-last-child-2,.et_pb_row_6col .et-last-child,.et_pb_row_6col .et-last-child-2,.et_pb_row_6col .et-last-child-3{margin-bottom:0}.et_pb_column{float:left;background-size:cover;background-position:50%;position:relative;z-index:2;min-height:1px}.et_pb_column--with-menu{z-index:3}.et_pb_column.et_pb_column_empty{min-height:1px}.et_pb_row .et_pb_column.et-last-child,.et_pb_row .et_pb_column:last-child,.et_pb_row_inner .et_pb_column.et-last-child,.et_pb_row_inner .et_pb_column:last-child{margin-right:0!important}.et_pb_column.et_pb_section_parallax{position:relative}.et_pb_column,.et_pb_row,.et_pb_row_inner{background-size:cover;background-position:50%;background-repeat:no-repeat}@media (min-width:981px){.et_pb_row{padding:2% 0}body.et_pb_pagebuilder_layout.et_pb_show_title .post-password-required .et_pb_row,body:not(.et_pb_pagebuilder_layout) .post-password-required .et_pb_row{padding:0;width:100%}.et_pb_column_3_4 .et_pb_row_inner{padding:3.735% 0}.et_pb_column_2_3 .et_pb_row_inner{padding:4.2415% 0}.et_pb_column_1_2 .et_pb_row_inner,.et_pb_column_3_5 .et_pb_row_inner{padding:5.82% 0}.et_section_specialty>.et_pb_row{padding:0}.et_pb_row_inner{width:100%}.et_pb_column_single{padding:2.855% 0}.et_pb_column_single .et_pb_module.et-first-child,.et_pb_column_single .et_pb_module:first-child{margin-top:0}.et_pb_column_single .et_pb_module.et-last-child,.et_pb_column_single .et_pb_module:last-child{margin-bottom:0}.et_pb_row .et_pb_column.et-last-child,.et_pb_row .et_pb_column:last-child,.et_pb_row_inner .et_pb_column.et-last-child,.et_pb_row_inner .et_pb_column:last-child{margin-right:0!important}.et_pb_row.et_pb_equal_columns,.et_pb_row_inner.et_pb_equal_columns,.et_pb_section.et_pb_equal_columns>.et_pb_row{display:-ms-flexbox;display:flex;direction:ltr}.et_pb_row.et_pb_equal_columns>.et_pb_column,.et_pb_section.et_pb_equal_columns>.et_pb_row>.et_pb_column{-ms-flex-order:1;order:1}}@media (max-width:980px){.et_pb_row{max-width:1080px}body.et_pb_pagebuilder_layout.et_pb_show_title .post-password-required .et_pb_row,body:not(.et_pb_pagebuilder_layout) .post-password-required .et_pb_row{padding:0;width:100%}.et_pb_column .et_pb_row_inner,.et_pb_row{padding:30px 0}.et_section_specialty>.et_pb_row{padding:0}.et_pb_column{width:100%;margin-bottom:30px}.et_pb_bottom_divider .et_pb_row:nth-last-child(2) .et_pb_column:last-child,.et_pb_row .et_pb_column.et-last-child,.et_pb_row .et_pb_column:last-child{margin-bottom:0}.et_section_specialty .et_pb_row>.et_pb_column{padding-bottom:0}.et_pb_column.et_pb_column_empty{display:none}.et_pb_row_1-2_1-4_1-4,.et_pb_row_1-2_1-6_1-6_1-6,.et_pb_row_1-4_1-4,.et_pb_row_1-4_1-4_1-2,.et_pb_row_1-5_1-5_3-5,.et_pb_row_1-6_1-6_1-6,.et_pb_row_1-6_1-6_1-6_1-2,.et_pb_row_1-6_1-6_1-6_1-6,.et_pb_row_3-5_1-5_1-5,.et_pb_row_4col,.et_pb_row_5col,.et_pb_row_6col{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.et_pb_row_1-4_1-4>.et_pb_column.et_pb_column_1_4,.et_pb_row_1-4_1-4_1-2>.et_pb_column.et_pb_column_1_4,.et_pb_row_4col>.et_pb_column.et_pb_column_1_4{width:47.25%;margin-right:5.5%}.et_pb_row_1-4_1-4>.et_pb_column.et_pb_column_1_4:nth-child(2n),.et_pb_row_1-4_1-4_1-2>.et_pb_column.et_pb_column_1_4:nth-child(2n),.et_pb_row_4col>.et_pb_column.et_pb_column_1_4:nth-child(2n){margin-right:0}.et_pb_row_1-2_1-4_1-4>.et_pb_column.et_pb_column_1_4{width:47.25%;margin-right:5.5%}.et_pb_row_1-2_1-4_1-4>.et_pb_column.et_pb_column_1_2,.et_pb_row_1-2_1-4_1-4>.et_pb_column.et_pb_column_1_4:nth-child(odd){margin-right:0}.et_pb_row_1-2_1-4_1-4 .et_pb_column:nth-last-child(-n+2),.et_pb_row_1-4_1-4 .et_pb_column:nth-last-child(-n+2),.et_pb_row_4col .et_pb_column:nth-last-child(-n+2){margin-bottom:0}.et_pb_row_1-5_1-5_3-5>.et_pb_column.et_pb_column_1_5,.et_pb_row_5col>.et_pb_column.et_pb_column_1_5{width:47.25%;margin-right:5.5%}.et_pb_row_1-5_1-5_3-5>.et_pb_column.et_pb_column_1_5:nth-child(2n),.et_pb_row_5col>.et_pb_column.et_pb_column_1_5:nth-child(2n){margin-right:0}.et_pb_row_3-5_1-5_1-5>.et_pb_column.et_pb_column_1_5{width:47.25%;margin-right:5.5%}.et_pb_row_3-5_1-5_1-5>.et_pb_column.et_pb_column_1_5:nth-child(odd),.et_pb_row_3-5_1-5_1-5>.et_pb_column.et_pb_column_3_5{margin-right:0}.et_pb_row_3-5_1-5_1-5 .et_pb_column:nth-last-child(-n+2),.et_pb_row_5col .et_pb_column:last-child{margin-bottom:0}.et_pb_row_1-6_1-6_1-6_1-2>.et_pb_column.et_pb_column_1_6,.et_pb_row_6col>.et_pb_column.et_pb_column_1_6{width:29.666%;margin-right:5.5%}.et_pb_row_1-6_1-6_1-6_1-2>.et_pb_column.et_pb_column_1_6:nth-child(3n),.et_pb_row_6col>.et_pb_column.et_pb_column_1_6:nth-child(3n){margin-right:0}.et_pb_row_1-2_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6{width:29.666%;margin-right:5.5%}.et_pb_row_1-2_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_2,.et_pb_row_1-2_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6:last-child{margin-right:0}.et_pb_row_1-2_1-2 .et_pb_column.et_pb_column_1_2,.et_pb_row_1-2_1-6_1-6_1-6 .et_pb_column:nth-last-child(-n+3),.et_pb_row_6col .et_pb_column:nth-last-child(-n+3){margin-bottom:0}.et_pb_row_1-2_1-2 .et_pb_column.et_pb_column_1_2 .et_pb_column.et_pb_column_1_6{width:29.666%;margin-right:5.5%;margin-bottom:0}.et_pb_row_1-2_1-2 .et_pb_column.et_pb_column_1_2 .et_pb_column.et_pb_column_1_6:last-child{margin-right:0}.et_pb_row_1-6_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6{width:47.25%;margin-right:5.5%}.et_pb_row_1-6_1-6_1-6_1-6>.et_pb_column.et_pb_column_1_6:nth-child(2n){margin-right:0}.et_pb_row_1-6_1-6_1-6_1-6:nth-last-child(-n+3){margin-bottom:0}}@media (max-width:479px){.et_pb_row .et_pb_column.et_pb_column_1_4,.et_pb_row .et_pb_column.et_pb_column_1_5,.et_pb_row .et_pb_column.et_pb_column_1_6{width:100%;margin:0 0 30px}.et_pb_row .et_pb_column.et_pb_column_1_4.et-last-child,.et_pb_row .et_pb_column.et_pb_column_1_4:last-child,.et_pb_row .et_pb_column.et_pb_column_1_5.et-last-child,.et_pb_row .et_pb_column.et_pb_column_1_5:last-child,.et_pb_row .et_pb_column.et_pb_column_1_6.et-last-child,.et_pb_row .et_pb_column.et_pb_column_1_6:last-child{margin-bottom:0}.et_pb_row_1-2_1-2 .et_pb_column.et_pb_column_1_2 .et_pb_column.et_pb_column_1_6{width:100%;margin:0 0 30px}.et_pb_row_1-2_1-2 .et_pb_column.et_pb_column_1_2 .et_pb_column.et_pb_column_1_6.et-last-child,.et_pb_row_1-2_1-2 .et_pb_column.et_pb_column_1_2 .et_pb_column.et_pb_column_1_6:last-child{margin-bottom:0}.et_pb_column{width:100%!important}}
.et_pb_with_border.et_pb_fullwidth_header .header-image-container img,.et_pb_with_border.et_pb_fullwidth_header .header-logo{border:0 solid #333}.et_pb_fullwidth_header{padding:50px 0;position:relative;background-position:50%;background-size:cover}.et_pb_fullwidth_header p{padding-bottom:0}.et_pb_fullwidth_header_subhead{display:block}.et_pb_fullscreen{padding:0}.et_pb_fullwidth_header .et_pb_fullwidth_header_container{position:relative;z-index:3;width:80%;max-width:1080px;margin-left:auto;margin-right:auto}.et_pb_fullscreen .et_pb_fullwidth_header_container{min-height:100vh;width:80%;max-width:none;height:100%}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.center{display:-moz-flex;display:-ms-flex;display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;-moz-justify-content:center;-ms-justify-content:center;-ms-flex-pack:center;justify-content:center}.et_pb_fullscreen .et_pb_fullwidth_header_container.center.bottom-bottom{-ms-flex-flow:column wrap;flex-flow:column wrap;-moz-justify-content:flex-end;-ms-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.et_pb_fullscreen .et_pb_fullwidth_header_container.center.center-center{-ms-flex-flow:column nowrap;flex-flow:column nowrap}.et_pb_fullscreen .et_pb_fullwidth_header_container.center.center-bottom .header-content-container{display:-moz-flex;display:-ms-flex;display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap}.et_pb_fullscreen .et_pb_fullwidth_header_container.center.center-bottom .header-content-container .header-content{-ms-align-self:center;-ms-flex-item-align:center;align-self:center}.et_pb_fullscreen .et_pb_fullwidth_header_container.center.bottom-center .header-image-container.center{-ms-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.center .header-content-container,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.center .header-image-container{width:100%;-ms-align-self:center;-ms-flex-item-align:center;align-self:center}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.center .header-content-container.center,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.center .header-image-container.center{-ms-align-self:center;-ms-flex-item-align:center;align-self:center}.et_pb_fullscreen .et_pb_fullwidth_header_container.center .header-content-container.bottom,.et_pb_fullscreen .et_pb_fullwidth_header_container.center .header-image-container.bottom{-ms-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left{display:-moz-flex;display:-ms-flexbox;display:flex;-ms-flex-flow:row;flex-flow:row}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right{display:-moz-flex;display:-ms-flexbox;display:flex;-ms-flex-flow:row-reverse;flex-flow:row-reverse}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content-container,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content-container{width:100%}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-image-container,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-image-container,.et_pb_fullwidth_header.et_pb_header_with_image .et_pb_fullwidth_header_container.left .header-content-container,.et_pb_fullwidth_header.et_pb_header_with_image .et_pb_fullwidth_header_container.right .header-content-container{width:50%;-ms-align-self:center;-ms-flex-item-align:center;align-self:center}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content-container.center,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-image-container.center,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content-container.center,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-image-container.center{-ms-align-self:center;-ms-flex-item-align:center;align-self:center}.et_pb_fullscreen .et_pb_fullwidth_header_container.left .header-content-container.bottom,.et_pb_fullscreen .et_pb_fullwidth_header_container.left .header-image-container.bottom,.et_pb_fullscreen .et_pb_fullwidth_header_container.right .header-content-container.bottom,.et_pb_fullscreen .et_pb_fullwidth_header_container.right .header-image-container.bottom,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content-container.bottom,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-image-container.bottom,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content-container.bottom,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-image-container.bottom{-ms-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content{text-align:left;margin-left:0}.et_pb_fullwidth_header.et_pb_header_with_image .et_pb_fullwidth_header_container.left .header-content{margin-right:6%}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content{text-align:right;margin-right:0;float:right}.et_pb_fullwidth_header.et_pb_header_with_image .et_pb_fullwidth_header_container.right .header-content{margin-left:6%}.et_pb_fullscreen .et_pb_fullwidth_header_container.left .header-content-container.bottom,.et_pb_fullscreen .et_pb_fullwidth_header_container.right .header-content-container.bottom{margin-bottom:80px}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content{padding-left:0}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content{padding-right:0}.et_pb_fullwidth_header .header-content{padding:10px;text-align:center}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.center .header-content{margin:20px auto;width:80%;max-width:800px}.et_pb_fullwidth_header .header-image{text-align:center;margin-left:2%;margin-right:2%;line-height:0}.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content a.et_pb_button{margin-top:20px;display:inline-block}.et_pb_fullwidth_header .et_pb_fullwidth_header_container .et_pb_button_one{margin-right:15px}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .et_pb_button_one{margin-right:0}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .et_pb_button_two{margin-left:15px}.et_pb_fullwidth_header .et_pb_fullwidth_header_overlay{content:"";position:absolute;top:0;left:0;bottom:0;right:0;z-index:2;pointer-events:none}.et_pb_fullwidth_header .et_pb_parallax_css{background-repeat:no-repeat;background-position:top;background-size:cover;background-attachment:fixed;position:absolute;width:100%;height:100%;overflow:hidden}.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll{width:100%;min-height:30px;text-align:center;padding-top:10px;padding-bottom:20px;margin:0 auto;position:absolute;z-index:3;right:0;bottom:0;left:0;pointer-events:none}.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a{display:inline-block;pointer-events:all}.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon{color:#fff;font-size:3.5em}.et_pb_fullwidth_header .scroll-down-container .scroll-down-phone,.et_pb_fullwidth_header .scroll-down-container .scroll-down-tablet{display:none}@media (max-width:980px){.et_pb_fullwidth_header .scroll-down-container-tablet .scroll-down,.et_pb_fullwidth_header .scroll-down-container-tablet .scroll-down-phone{display:none}.et_pb_fullwidth_header .scroll-down-container-tablet .scroll-down-tablet{display:inline-block}}@media (max-width:767px){.et_pb_fullwidth_header .scroll-down-container-phone .scroll-down,.et_pb_fullwidth_header .scroll-down-container-phone .scroll-down-tablet{display:none}.et_pb_fullwidth_header .scroll-down-container-phone .scroll-down-phone{display:inline-block}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right{-ms-flex-flow:column;flex-flow:column;-moz-justify-content:center;-ms-justify-content:center;-ms-flex-pack:center;justify-content:center}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content-container,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-image-container,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content-container,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-image-container,.et_pb_fullwidth_header.et_pb_header_with_image .et_pb_fullwidth_header_container.left .header-content-container,.et_pb_fullwidth_header.et_pb_header_with_image .et_pb_fullwidth_header_container.right .header-content-container{width:100%}.et_pb_fullwidth_header .et_pb_fullwidth_header_container.left .header-content,.et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content{margin:20px 2%}}.ie .et_pb_fullwidth_header.et_pb_fullscreen .et_pb_fullwidth_header_container.left,.ie .et_pb_fullwidth_header.et_pb_fullscreen .et_pb_fullwidth_header_container.right{height:100px}.ie .et_pb_fullwidth_header .et_pb_fullwidth_header_container.right .header-content{float:none}
.et_pb_with_border .et-pb-icon,.et_pb_with_border .et_pb_image_wrap{border:0 solid #333}.et_pb_blurb_content{max-width:550px;margin:0 auto;position:relative;text-align:center;word-wrap:break-word;width:100%}.et_pb_blurb.et_pb_text_align_left .et_pb_blurb_content .et_pb_blurb_container{text-align:left}.et_pb_blurb.et_pb_text_align_right .et_pb_blurb_content .et_pb_blurb_container{text-align:right}.et_pb_blurb.et_pb_text_align_justified .et_pb_blurb_content .et_pb_blurb_container{text-align:justify}.et_pb_blurb.et_pb_text_align_center .et_pb_blurb_content .et_pb_blurb_container{text-align:center}.et_pb_blurb_content p:last-of-type{padding-bottom:0}.et_pb_blurb .et_pb_module_header a,.et_pb_blurb h4 a{text-decoration:none}.et_pb_blurb .et_pb_image_wrap{display:block;margin:auto}.et_pb_main_blurb_image img{border-radius:inherit}.et_pb_main_blurb_image img[src*=".svg"]{width:auto}.et_pb_sticky_module .et_pb_main_blurb_image .et_pb_image_wrap{width:100%;max-width:100%}.et_pb_blurb_position_left .et_pb_blurb_content,.et_pb_blurb_position_right .et_pb_blurb_content{display:table}.et_pb_blurb_position_left .et_pb_main_blurb_image,.et_pb_blurb_position_right .et_pb_main_blurb_image{width:32px;display:table-cell;line-height:0}.et_pb_blurb_position_left .et_pb_main_blurb_image img,.et_pb_blurb_position_right .et_pb_main_blurb_image img{width:inherit}.et_pb_blurb_position_left .et-pb-icon,.et_pb_blurb_position_right .et-pb-icon{font-size:32px;display:table-cell}.et_pb_blurb_position_left .et_pb_blurb_container,.et_pb_blurb_position_right .et_pb_blurb_container{display:table-cell;vertical-align:top}.et_pb_blurb_position_left .et_pb_blurb_container{padding-left:15px}.et_pb_blurb_position_left .et_pb_blurb_content{text-align:left}.et_pb_blurb_position_right .et_pb_blurb_container{padding-right:15px}.et_pb_blurb_position_right .et_pb_blurb_content{text-align:right}.et_pb_blurb_position_right .et_pb_main_blurb_image{left:auto;right:0}.et_pb_blurb_position_right .et-pb-icon{margin-right:0;margin-left:20px}.et_pb_main_blurb_image{display:inline-block;margin-bottom:30px;line-height:0;max-width:100%}@media (max-width:980px){.et_pb_blurb_position_left_tablet .et_pb_main_blurb_image,.et_pb_blurb_position_right_tablet .et_pb_main_blurb_image{width:32px;display:table-cell;line-height:0}.et_pb_blurb_position_left_tablet .et_pb_main_blurb_image img,.et_pb_blurb_position_right_tablet .et_pb_main_blurb_image img{width:inherit}.et_pb_blurb_position_left_tablet .et-pb-icon,.et_pb_blurb_position_right_tablet .et-pb-icon{font-size:32px;display:table-cell}.et_pb_blurb_position_left_tablet .et_pb_blurb_container,.et_pb_blurb_position_right_tablet .et_pb_blurb_container{display:table-cell;vertical-align:top}.et_pb_blurb_position_left_tablet .et_pb_blurb_container{padding-left:15px}.et_pb_blurb_position_left_tablet .et_pb_blurb_content{text-align:left}.et_pb_blurb_position_right_tablet .et_pb_blurb_container{padding-right:15px}.et_pb_blurb_position_right_tablet .et_pb_blurb_content{padding-right:52px;text-align:right}.et_pb_blurb_position_right_tablet .et_pb_main_blurb_image{left:auto;right:0}.et_pb_blurb_position_right_tablet .et-pb-icon{margin-right:0;margin-left:20px}.et_pb_blurb_position_top_tablet .et_pb_main_blurb_image{display:block;width:auto}.et_pb_blurb_position_top_tablet .et-pb-icon{font-size:96px;display:initial}.et_pb_blurb_position_top_tablet .et_pb_blurb_container{display:block;padding-left:0;padding-right:0}.et_pb_blurb_position_top_tablet .et_pb_blurb_content{display:inline-block;text-align:center;padding-right:0}}@media (max-width:767px){.et_pb_blurb_position_left_phone .et_pb_main_blurb_image,.et_pb_blurb_position_right_phone .et_pb_main_blurb_image{width:32px;display:table-cell;line-height:0}.et_pb_blurb_position_left_phone .et_pb_main_blurb_image img,.et_pb_blurb_position_right_phone .et_pb_main_blurb_image img{width:inherit}.et_pb_blurb_position_left_phone .et-pb-icon,.et_pb_blurb_position_right_phone .et-pb-icon{font-size:32px;display:table-cell}.et_pb_blurb_position_left_phone .et_pb_blurb_container,.et_pb_blurb_position_right_phone .et_pb_blurb_container{display:table-cell;vertical-align:top}.et_pb_blurb_position_left_phone .et_pb_blurb_container{padding-left:15px}.et_pb_blurb_position_left_phone .et_pb_blurb_content{text-align:left}.et_pb_blurb_position_right_phone .et_pb_blurb_container{padding-right:15px}.et_pb_blurb_position_right_phone .et_pb_blurb_content{padding-right:52px;text-align:right}.et_pb_blurb_position_right_phone .et_pb_main_blurb_image{left:auto;right:0}.et_pb_blurb_position_right_phone .et-pb-icon{margin-right:0;margin-left:20px}.et_pb_blurb_position_top_phone .et_pb_main_blurb_image{display:block;width:auto}.et_pb_blurb_position_top_phone .et-pb-icon{font-size:96px;display:initial}.et_pb_blurb_position_top_phone .et_pb_blurb_container{display:block;padding-left:0;padding-right:0}.et_pb_blurb_position_top_phone .et_pb_blurb_content{display:inline-block;text-align:center;padding-right:0}}@media (max-width:980px){.et_pb_blurb.et_pb_text_align_left-tablet .et_pb_blurb_content .et_pb_blurb_container{text-align:left}.et_pb_blurb.et_pb_text_align_right-tablet .et_pb_blurb_content .et_pb_blurb_container{text-align:right}.et_pb_blurb.et_pb_text_align_justified-tablet .et_pb_blurb_content .et_pb_blurb_container{text-align:justify}.et_pb_blurb.et_pb_text_align_center-tablet .et_pb_blurb_content .et_pb_blurb_container{text-align:center}}@media (max-width:767px){.et_pb_blurb.et_pb_text_align_left-phone .et_pb_blurb_content .et_pb_blurb_container{text-align:left}.et_pb_blurb.et_pb_text_align_right-phone .et_pb_blurb_content .et_pb_blurb_container{text-align:right}.et_pb_blurb.et_pb_text_align_justified-phone .et_pb_blurb_content .et_pb_blurb_container{text-align:justify}.et_pb_blurb.et_pb_text_align_center-phone .et_pb_blurb_content .et_pb_blurb_container{text-align:center}}
.et-waypoint.et_pb_animation_off,.et-waypoint:not(.et_pb_counters).et_pb_animation_off,.et_pb_animation_off{opacity:1}.et-waypoint.et_pb_animation_left.et-animated,.et_pb_animation_left.et-animated{opacity:1;animation:fadeLeft 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_right.et-animated,.et_pb_animation_right.et-animated{opacity:1;animation:fadeRight 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_top.et-animated,.et_pb_animation_top.et-animated{opacity:1;animation:fadeTop 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_bottom.et-animated,.et_pb_animation_bottom.et-animated{opacity:1;animation:fadeBottom 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_fade_in.et-animated,.et_pb_animation_fade_in.et-animated{opacity:1;animation:fadeIn 1s 1 cubic-bezier(.77,0,.175,1)}@media (max-width:980px){.et-waypoint.et_pb_animation_off_tablet,.et-waypoint:not(.et_pb_counters).et_pb_animation_off_tablet,.et_pb_animation_off_tablet{opacity:1;animation:none}.et-waypoint.et_pb_animation_left_tablet.et-animated,.et_pb_animation_left_tablet.et-animated{opacity:1;animation:fadeLeft 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_right_tablet.et-animated,.et_pb_animation_right_tablet.et-animated{opacity:1;animation:fadeRight 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_top_tablet.et-animated,.et_pb_animation_top_tablet.et-animated{opacity:1;animation:fadeTop 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_bottom_tablet.et-animated,.et_pb_animation_bottom_tablet.et-animated{opacity:1;animation:fadeBottom 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_fade_in_tablet.et-animated,.et_pb_animation_fade_in_tablet.et-animated{opacity:1;animation:fadeIn 1s 1 cubic-bezier(.77,0,.175,1)}}@media (max-width:767px){.et-waypoint.et_pb_animation_off_phone,.et-waypoint:not(.et_pb_counters).et_pb_animation_off_phone,.et_pb_animation_off_phone{opacity:1;animation:none}.et-waypoint.et_pb_animation_left_phone.et-animated,.et_pb_animation_left_phone.et-animated{opacity:1;animation:fadeLeft 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_right_phone.et-animated,.et_pb_animation_right_phone.et-animated{opacity:1;animation:fadeRight 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_top_phone.et-animated,.et_pb_animation_top_phone.et-animated{opacity:1;animation:fadeTop 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_bottom_phone.et-animated,.et_pb_animation_bottom_phone.et-animated{opacity:1;animation:fadeBottom 1s 1 cubic-bezier(.77,0,.175,1)}.et-waypoint.et_pb_animation_fade_in_phone.et-animated,.et_pb_animation_fade_in_phone.et-animated{opacity:1;animation:fadeIn 1s 1 cubic-bezier(.77,0,.175,1)}}
.et_pb_bg_layout_light .et_pb_promo_button{color:#2ea3f2}.et-promo{background-color:#1f6581;padding:40px 0 25px}.et-promo-description{float:left;padding:0 60px;word-wrap:break-word;width:754px}.et-promo-description p{color:#fff}.et-promo-button{padding-right:60px;display:inline-block;font-weight:500;font-size:20px;color:#fff;background-color:rgba(0,0,0,.35);border-radius:5px;padding:14px 20px;margin-top:20px;float:left}.et_pb_promo{padding:40px 60px;text-align:center}.et_pb_promo_description{padding-bottom:20px;position:relative}.et_pb_promo_description p:last-of-type{padding-bottom:0}.et_pb_promo_button{display:inline-block;color:inherit}.et_pb_promo_button:hover{text-decoration:none}.et_pb_promo_button:hover:after{opacity:1;margin-left:0}.et_pb_column_1_2 .et_pb_promo,.et_pb_column_1_3 .et_pb_promo,.et_pb_column_1_4 .et_pb_promo,.et_pb_column_1_5 .et_pb_promo,.et_pb_column_1_6 .et_pb_promo,.et_pb_column_2_5 .et_pb_promo,.et_pb_column_3_5 .et_pb_promo{padding:40px}.et_pb_has_bg_hover.et_pb_promo:hover{padding:40px 60px!important;transition:padding .4s ease-in-out}.et_pb_column_1_2 .et_pb_has_bg_hover.et_pb_promo:hover,.et_pb_column_1_3 .et_pb_has_bg_hover.et_pb_promo:hover,.et_pb_column_1_4 .et_pb_has_bg_hover.et_pb_promo:hover,.et_pb_column_1_5 .et_pb_has_bg_hover.et_pb_promo:hover,.et_pb_column_1_6 .et_pb_has_bg_hover.et_pb_promo:hover,.et_pb_column_2_5 .et_pb_has_bg_hover.et_pb_promo:hover,.et_pb_column_3_5 .et_pb_has_bg_hover.et_pb_promo:hover{padding:40px!important}.et_pb_no_bg_hover.et_pb_promo:hover{padding:0!important}@media (max-width:980px){.et_pb_has_bg_tablet.et_pb_promo{padding:40px!important}.et_pb_no_bg_tablet.et_pb_promo{padding:0!important}.et_pb_bg_layout_light_tablet .et_pb_promo_button{color:#2ea3f2}.et_pb_bg_layout_dark_tablet .et_pb_promo_button{color:inherit}}@media (max-width:767px){.et_pb_promo{padding:40px}.et_pb_has_bg_phone.et_pb_promo{padding:40px!important}.et_pb_no_bg_phone.et_pb_promo{padding:0!important}.et_pb_bg_layout_light_phone .et_pb_promo_button{color:#2ea3f2}.et_pb_bg_layout_dark_phone .et_pb_promo_button{color:inherit}}@media (max-width:479px){.et_pb_promo{padding:40px}}
.et_pb_text{word-wrap:break-word}.et_pb_text ol,.et_pb_text ul{padding-bottom:1em}.et_pb_text>:last-child{padding-bottom:0}.et_pb_text_inner{position:relative}
.et_pb_bg_layout_light.et_pb_module.et_pb_button{color:#2ea3f2}.et_pb_module.et_pb_button{display:inline-block;color:inherit}.et_pb_button_module_wrapper.et_pb_button_alignment_left{text-align:left}.et_pb_button_module_wrapper.et_pb_button_alignment_right{text-align:right}.et_pb_button_module_wrapper.et_pb_button_alignment_center{text-align:center}.et_pb_button_module_wrapper>a{display:inline-block}@media (max-width:980px){.et_pb_button_module_wrapper.et_pb_button_alignment_tablet_left{text-align:left}.et_pb_button_module_wrapper.et_pb_button_alignment_tablet_right{text-align:right}.et_pb_button_module_wrapper.et_pb_button_alignment_tablet_center{text-align:center}}@media (max-width:767px){.et_pb_button_module_wrapper.et_pb_button_alignment_phone_left{text-align:left}.et_pb_button_module_wrapper.et_pb_button_alignment_phone_right{text-align:right}.et_pb_button_module_wrapper.et_pb_button_alignment_phone_center{text-align:center}}
.et_pb_button[data-icon]:not([data-icon=""]):after{content:attr(data-icon)}@media (max-width:980px){.et_pb_button[data-icon-tablet]:not([data-icon-tablet=""]):after{content:attr(data-icon-tablet)}}@media (max-width:767px){.et_pb_button[data-icon-phone]:not([data-icon-phone=""]):after{content:attr(data-icon-phone)}}.et_pb_button[data-icon]:not([data-icon=""]):after{content:attr(data-icon)}@media (max-width:980px){.et_pb_button[data-icon-tablet]:not([data-icon-tablet=""]):after{content:attr(data-icon-tablet)}}@media (max-width:767px){.et_pb_button[data-icon-phone]:not([data-icon-phone=""]):after{content:attr(data-icon-phone)}}
</style>
<link rel="stylesheet" id="divi-dynamic-late-css" href="<?php echo root();?>css/et-divi-dynamic-294-late(1).css" as="style" media="all" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
<link rel="stylesheet" id="divi-dynamic-css" href="<?php echo root();?>css/et-divi-dynamic-294.css" as="style" media="all" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
<link rel="stylesheet" id="supreme-modules-for-divi-styles-css" href="<?php echo root();?>css/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="divi-style-css" href="<?php echo root();?>css/style.css" type="text/css" media="all">
<link rel="https://api.w.org/" href="https://einsteinacademy.us/wp-json/"><link rel="alternate" type="application/json" href="https://einsteinacademy.us/wp-json/wp/v2/pages/294"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://einsteinacademy.us/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://einsteinacademy.us/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 6.0">
<link rel="canonical" href="https://einsteinacademy.us/home-page-4/">
<link rel="shortlink" href="https://einsteinacademy.us/?p=294">
<link rel="alternate" type="application/json+oembed" href="https://einsteinacademy.us/wp-json/oembed/1.0/embed?url=https%3A%2F%2Feinsteinacademy.us%2Fhome-page-4%2F">
<link rel="alternate" type="text/xml+oembed" href="https://einsteinacademy.us/wp-json/oembed/1.0/embed?url=https%3A%2F%2Feinsteinacademy.us%2Fhome-page-4%2F&amp;format=xml">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53F48L3');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".et-social-icon a").attr('target', '_blank');
    });
</script>
<style id="et-critical-inline-css">
#top-header,#et-secondary-nav li ul{background-color:#8300e9}
#top-menu li a{font-size:16px}
body.et_vertical_nav .container.et_search_form_container .et-search-form input{font-size:16px!important}
#top-menu li.current-menu-ancestor>a,#top-menu li.current-menu-item>a,#top-menu li.current_page_item>a{color:#8300e9}
@media only screen and (min-width:981px){.et_header_style_left #et-top-navigation,.et_header_style_split #et-top-navigation{padding:52px 0 0 0}
.et_header_style_left #et-top-navigation nav>ul>li>a,.et_header_style_split #et-top-navigation nav>ul>li>a{padding-bottom:52px}
.et_header_style_split .centered-inline-logo-wrap{width:103px;margin:-103px 0}
.et_header_style_split .centered-inline-logo-wrap #logo{max-height:103px}
.et_pb_svg_logo.et_header_style_split .centered-inline-logo-wrap #logo{height:103px}
.et_header_style_centered #top-menu>li>a{padding-bottom:19px}
.et_header_style_slide #et-top-navigation,.et_header_style_fullscreen #et-top-navigation{padding:43px 0 43px 0!important}
.et_header_style_centered #main-header .logo_container{height:103px}
.et_header_style_left .et-fixed-header #et-top-navigation,.et_header_style_split .et-fixed-header #et-top-navigation{padding:36px 0 0 0}
    .et_header_style_left .et-fixed-header #et-top-navigation nav>ul>li>a,.et_header_style_split .et-fixed-header #et-top-navigation nav>ul>li>a{ padding-bottom:36p}
    .et_header_style_centered header#main-header.et-fixed-header .logo_container{height:72px}
    .et_header_style_split #main-header.et-fixed-header .centered-inline-logo-wrap{width:72px;margin:-72px 0}
    .et_header_style_split .et-fixed-header .centered-inline-logo-wrap #logo{max-height:72px}
    .et_pb_svg_logo.et_header_style_split .et-fixed-header .centered-inline-logo-wrap #logo{height:72px}
    .et_header_style_slide .et-fixed-header #et-top-navigation,.et_header_style_fullscreen .et-fixed-header #et-top-navigation{padding:27px 0 27px 0!important}
    .et_header_style_split #main-header .centered-inline-logo-wrap{width:auto;height:84.04px}
    .et_header_style_split #main-header.et-fixed-header .centered-inline-logo-wrap{width:auto;height:62.96px}
    .et_header_style_split .centered-inline-logo-wrap #logo,.et_header_style_split .et-fixed-header .centered-inline-logo-wrap #logo{height:auto;max-height:100%}
    .et-fixed-header#top-header,.et-fixed-header#top-header #et-secondary-nav li ul{background-color:#8300e9}
    .et-fixed-header #top-menu li.current-menu-ancestor>a,.et-fixed-header #top-menu li.current-menu-item>a,.et-fixed-header #top-menu li.current_page_item>a{color:#8300e9!important}
    }
    @media only screen and (min-width:1350px){.et_pb_row{padding:27px 0}
    .et_pb_section{padding:54px 0}
    .single.et_pb_pagebuilder_layout.et_full_width_page .et_post_meta_wrapper{padding-top:81px}
    .et_pb_fullwidth_section{padding:0}
    }
    .nav li ul{visibility:hidden;z-index:9999;width:300px}
    #top-menu li li a{width:300px;padding:6px 20px}
    div.et_pb_section.et_pb_section_0{background-image:linear-gradient(180deg,rgba(255,255,255,0.16) 0%,rgba(255,255,255,0.24) 100%)!important}
    .et_pb_section_0.section_has_divider.et_pb_top_divider .et_pb_top_inside_divider{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIzMCUiIHZpZXdCb3g9IjAgMCAxMjgwIDg2IiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCBzbGljZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJyZ2JhKDI1NSwyNTUsMjU1LDAuNikiPjxwYXRoIGQ9Ik04MzMuOSAyNy41Yy01LjggMy4yLTExIDcuMy0xNS41IDEyLjItNy4xLTYuOS0xNy41LTguOC0yNi42LTUtMzAuNi0zOS4yLTg3LjMtNDYuMS0xMjYuNS0xNS41LTEuNCAxLjEtMi44IDIuMi00LjEgMy40QzY3NC40IDMzLjQgNjg0IDQ4IDY4OC44IDY0LjNjNC43LjYgOS4zIDEuOCAxMy42IDMuOCA3LjgtMjQuNyAzNC4yLTM4LjMgNTguOS0zMC41IDE0LjQgNC42IDI1LjYgMTUuNyAzMC4zIDMwIDE0LjIgMS4yIDI3LjcgNi45IDM4LjUgMTYuMkM4NDAuNiA0OS42IDg3NiAyOS41IDkxMC44IDM4Yy0yMC40LTIwLjMtNTEuOC0yNC42LTc2LjktMTAuNXpNMzg0IDQzLjljLTkgNS0xNi43IDExLjktMjIuNyAyMC4zIDE1LjQtNy44IDMzLjMtOC43IDQ5LjQtMi42IDMuNy0xMC4xIDkuOS0xOS4xIDE4LjEtMjYtMTUuNC0yLjMtMzEuMi42LTQ0LjggOC4zem01NjAuMiAxMy42YzIgMi4yIDMuOSA0LjUgNS43IDYuOSA1LjYtMi42IDExLjYtNCAxNy44LTQuMS03LjYtMi40LTE1LjYtMy4zLTIzLjUtMi44ek0xNzguNyA3YzI5LTQuMiA1Ny4zIDEwLjggNzAuMyAzNyA4LjktOC4zIDIwLjctMTIuOCAzMi45LTEyLjVDMjU2LjQgMS44IDIxNC43LTguMSAxNzguNyA3em0xNDYuNSA1Ni4zYzEuNSA0LjUgMi40IDkuMiAyLjUgMTQgLjQuMi44LjQgMS4yLjcgMy4zIDEuOSA2LjMgNC4yIDguOSA2LjkgNS44LTguNyAxMy43LTE1LjcgMjIuOS0yMC41LTExLjEtNS4yLTIzLjktNS42LTM1LjUtMS4xek0zMy41IDU0LjljMjEuNi0xNC40IDUwLjctOC41IDY1IDEzIC4xLjIuMi4zLjMuNSA3LjMtMS4yIDE0LjgtLjYgMjEuOCAxLjYuNi0xMC4zIDMuNS0yMC40IDguNi0yOS40LjMtLjYuNy0xLjIgMS4xLTEuOC0zMi4xLTE3LjItNzEuOS0xMC42LTk2LjggMTYuMXptMTIyOC45IDIuN2MyLjMgMi45IDQuNCA1LjkgNi4yIDkuMSAzLjgtLjUgNy42LS44IDExLjQtLjhWNDguM2MtNi40IDEuOC0xMi40IDUtMTcuNiA5LjN6TTExMjcuMyAxMWMxLjkuOSAzLjcgMS44IDUuNiAyLjggMTQuMiA3LjkgMjUuOCAxOS43IDMzLjUgMzQgMTMuOS0xMS40IDMxLjctMTYuOSA0OS42LTE1LjMtMjAuNS0yNy43LTU3LjgtMzYuOC04OC43LTIxLjV6IiBmaWxsLW9wYWNpdHk9Ii41Ii8+PHBhdGggZD0iTTAgMHY2NmM2LjggMCAxMy41LjkgMjAuMSAyLjYgMy41LTUuNCA4LjEtMTAuMSAxMy40LTEzLjYgMjQuOS0yNi44IDY0LjctMzMuNCA5Ni44LTE2IDEwLjUtMTcuNCAyOC4yLTI5LjEgNDguMy0zMiAzNi4xLTE1LjEgNzcuNy01LjIgMTAzLjIgMjQuNSAxOS43LjQgMzcuMSAxMy4xIDQzLjQgMzEuOCAxMS41LTQuNSAyNC40LTQuMiAzNS42IDEuMWwuNC0uMmMxNS40LTIxLjQgNDEuNS0zMi40IDY3LjYtMjguNiAyNS0yMSA2Mi4xLTE4LjggODQuNCA1LjEgNi43LTYuNiAxNi43LTguNCAyNS40LTQuOCAyOS4yLTM3LjQgODMuMy00NC4xIDEyMC43LTE0LjhsMS44IDEuNWMzNy4zLTMyLjkgOTQuMy0yOS4zIDEyNy4yIDggMS4yIDEuMyAyLjMgMi43IDMuNCA0LjEgOS4xLTMuOCAxOS41LTEuOSAyNi42IDUgMjQuMy0yNiA2NS0yNy4zIDkxLTMuMS41LjUgMSAuOSAxLjUgMS40IDEyLjggMy4xIDI0LjQgOS45IDMzLjQgMTkuNSA3LjktLjUgMTUuOS40IDIzLjUgMi44IDctLjEgMTMuOSAxLjUgMjAuMSA0LjcgMy45LTExLjYgMTUuNS0xOC45IDI3LjctMTcuNS4yLS4zLjMtLjYuNS0uOSAyMi4xLTM5LjIgNzAuNy01NC43IDExMS40LTM1LjYgMzAuOC0xNS4zIDY4LjItNi4yIDg4LjYgMjEuNSAxOC4zIDEuNyAzNSAxMC44IDQ2LjUgMjUuMSA1LjItNC4zIDExLjEtNy40IDE3LjYtOS4zVjBIMHoiLz48L2c+PC9zdmc+);background-size:cover;background-position:center top;top:0;height:30%;z-index:10;background-color:transparent}
.et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h1,.et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h2.et_pb_module_header,.et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h3.et_pb_module_header,.et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h4.et_pb_module_header,.et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h5.et_pb_module_header,.et_pb_fullwidth_header_0.et_pb_fullwidth_header .header-content h6.et_pb_module_header{font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif;font-weight:700;text-transform:uppercase;font-size:24px;color:#8300e9!important;letter-spacing:5px;line-height:2em}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_header_content_wrapper{font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif;font-size:18px;line-height:2em}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_subhead{font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif;font-weight:700;font-size:50px;color:rgba(0,0,0,0.8)!important;line-height:1.4em}.et_pb_fullwidth_header.et_pb_fullwidth_header_0{background-size:contain;background-position:bottom center;background-image:linear-gradient(180deg,rgba(131,0,233,0.39) 0%,rgba(255,255,255,0.48) 100%),url("<?php echo root();?>images/AdobeStock_202605157.jpeg");background-color:#7EBEC5}.et_pb_fullwidth_header_0{padding-top:10vw;padding-bottom:24vw;box-shadow:inset 0px -10px 18px 0px rgba(0,0,0,0.2)}body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_one.et_pb_button{color:#ffffff!important;border-width:15px!important;border-color:rgba(210,159,104,0);border-radius:100px;font-size:16px;font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif!important;font-weight:700!important;background-color:#8300e9}body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_two.et_pb_button:hover,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_one.et_pb_button:hover{border-radius:100px!important;padding-right:2em;padding-left:0.7em;background-image:initial;background-color:#7f5aff}body #page-container .et_pb_section .et_pb_cta_1.et_pb_promo .et_pb_promo_button.et_pb_button,body #page-container .et_pb_section .et_pb_cta_1.et_pb_promo .et_pb_promo_button.et_pb_button:hover,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_two.et_pb_button,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_two.et_pb_button:hover,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_one.et_pb_button,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_one.et_pb_button:hover,body #page-container .et_pb_section .et_pb_cta_0.et_pb_promo .et_pb_promo_button.et_pb_button,body #page-container .et_pb_section .et_pb_cta_0.et_pb_promo .et_pb_promo_button.et_pb_button:hover{padding:0.3em 1em!important}body #page-container .et_pb_section .et_pb_cta_0.et_pb_promo .et_pb_promo_button.et_pb_button:before,body #page-container .et_pb_section .et_pb_cta_0.et_pb_promo .et_pb_promo_button.et_pb_button:after,body #page-container .et_pb_section .et_pb_cta_1.et_pb_promo .et_pb_promo_button.et_pb_button:before,body #page-container .et_pb_section .et_pb_cta_1.et_pb_promo .et_pb_promo_button.et_pb_button:after,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_one.et_pb_button:before,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_one.et_pb_button:after,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_two.et_pb_button:before,body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_two.et_pb_button:after{display:none!important}body #page-container .et_pb_section .et_pb_fullwidth_header_0 .et_pb_button_two.et_pb_button{color:#ffffff!important;border-width:15px!important;border-color:rgba(210,159,104,0);border-radius:100px;font-size:16px;font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif!important;font-weight:700!important;background-color:#466177}.et_pb_fullwidth_header_0 .et_pb_button_one.et_pb_button,.et_pb_fullwidth_header_0 .et_pb_button_two.et_pb_button{transition:background-color 300ms ease 0ms,border-radius 300ms ease 0ms}.et_pb_section_1.et_pb_section{padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px}.et_pb_blurb_2.et_pb_blurb .et_pb_module_header,.et_pb_blurb_2.et_pb_blurb .et_pb_module_header a,.et_pb_blurb_0.et_pb_blurb .et_pb_module_header,.et_pb_blurb_0.et_pb_blurb .et_pb_module_header a,.et_pb_blurb_1.et_pb_blurb .et_pb_module_header,.et_pb_blurb_1.et_pb_blurb .et_pb_module_header a{font-family:'Montserrat',Helvetica,Arial,Lucida,sans-serif;font-weight:700;line-height:1.5em}.et_pb_blurb_1.et_pb_blurb p,.et_pb_blurb_0.et_pb_blurb p,.et_pb_blurb_2.et_pb_blurb p{line-height:1.8em}.et_pb_blurb_0.et_pb_blurb,.et_pb_blurb_2.et_pb_blurb,.et_pb_blurb_1.et_pb_blurb{font-family:'Montserrat',Helvetica,Arial,Lucida,sans-serif;line-height:1.8em;border-radius:6px 6px 6px 6px;overflow:hidden}.et_pb_blurb_0 .et_pb_blurb_content,.et_pb_blurb_2 .et_pb_blurb_content,.et_pb_blurb_1 .et_pb_blurb_content{max-width:100%}.et_pb_blurb_0 .et-pb-icon,.et_pb_blurb_2 .et-pb-icon{color:#8300e9;font-family:ETmodules!important;font-weight:400!important}.et_pb_section_2.et_pb_section{padding-top:0px;padding-bottom:0px}.et_pb_row_1.et_pb_row{padding-top:0px!important;padding-right:0px!important;padding-bottom:0px!important;padding-left:0px!important;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_cta_1.et_pb_promo h2,.et_pb_cta_1.et_pb_promo h1.et_pb_module_header,.et_pb_cta_1.et_pb_promo h3.et_pb_module_header,.et_pb_cta_1.et_pb_promo h4.et_pb_module_header,.et_pb_cta_1.et_pb_promo h5.et_pb_module_header,.et_pb_cta_1.et_pb_promo h6.et_pb_module_header,.et_pb_cta_0.et_pb_promo h2,.et_pb_cta_0.et_pb_promo h1.et_pb_module_header,.et_pb_cta_0.et_pb_promo h3.et_pb_module_header,.et_pb_cta_0.et_pb_promo h4.et_pb_module_header,.et_pb_cta_0.et_pb_promo h5.et_pb_module_header,.et_pb_cta_0.et_pb_promo h6.et_pb_module_header{font-family:'Cabin Sketch',display!important;font-weight:700!important;text-transform:uppercase!important;font-size:40px!important;letter-spacing:6px!important;line-height:1.5em!important}.et_pb_cta_0.et_pb_promo .et_pb_promo_description div,.et_pb_cta_1.et_pb_promo .et_pb_promo_description div{font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif;font-weight:500;line-height:2em}.et_pb_cta_0,.et_pb_cta_1{max-width:600px}body #page-container .et_pb_section .et_pb_cta_0.et_pb_promo .et_pb_promo_button.et_pb_button{color:#ffffff!important;border-width:10px!important;border-color:rgba(65,65,144,0);border-radius:70px;font-size:16px;font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif!important;font-weight:700!important;background-color:#8300e9}body #page-container .et_pb_section .et_pb_cta_1.et_pb_promo .et_pb_promo_button.et_pb_button:hover,body #page-container .et_pb_section .et_pb_cta_0.et_pb_promo .et_pb_promo_button.et_pb_button:hover{color:#ffffff!important;border-radius:70px!important;background-image:initial;background-color:#7f5aff}.et_pb_cta_0.et_pb_promo .et_pb_promo_button.et_pb_button,.et_pb_cta_1.et_pb_promo .et_pb_promo_button.et_pb_button{transition:color 300ms ease 0ms,background-color 300ms ease 0ms,border-radius 300ms ease 0ms}.et_pb_text_0{font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif;margin-top:40px!important}.et_pb_text_0.et_pb_text a{color:#000000!important}body #page-container .et_pb_section .et_pb_cta_1.et_pb_promo .et_pb_promo_button.et_pb_button{color:#ffffff!important;border-width:10px!important;border-color:rgba(65,65,144,0);border-radius:70px;font-size:16px;font-family:'Rubik',Helvetica,Arial,Lucida,sans-serif!important;font-weight:700!important;background-color:#466177}.et_pb_section_3.et_pb_section{padding-top:54px;padding-right:0px;padding-bottom:0px;padding-left:0px}.et_pb_blurb_3.et_pb_blurb .et_pb_module_header,.et_pb_blurb_3.et_pb_blurb .et_pb_module_header a,.et_pb_blurb_5.et_pb_blurb .et_pb_module_header,.et_pb_blurb_5.et_pb_blurb .et_pb_module_header a{font-family:'Montserrat',Helvetica,Arial,Lucida,sans-serif;font-weight:600;color:rgba(255,255,255,0.9)!important;line-height:1.5em}.et_pb_blurb_3.et_pb_blurb{background-image:radial-gradient(circle at right,rgba(149,244,137,0.3) 20%,#81e079 100%),url("<?php echo root();?>images/einstein-early-childhood.jpeg");background-color:#81e079;border-radius:6px 6px 6px 6px;overflow:hidden;padding-top:20px!important;padding-right:40%!important;padding-bottom:20px!important;padding-left:10px!important}.et_pb_blurb_3 .et_pb_main_blurb_image .et_pb_only_image_mode_wrap,.et_pb_blurb_3 .et_pb_main_blurb_image .et-pb-icon{border-radius:100% 100% 100% 100%;overflow:hidden;border-width:3px;border-color:rgba(12,7,8,0);padding-top:25px!important;padding-right:25px!important;padding-bottom:25px!important;padding-left:25px!important;background-color:rgba(106,186,31,0.9)}.et_pb_blurb_4 .et-pb-icon,.et_pb_blurb_5 .et-pb-icon,.et_pb_blurb_3 .et-pb-icon,.et_pb_blurb_6 .et-pb-icon{font-size:20px;color:#ffffff;font-family:ETmodules!important;font-weight:400!important}.et_pb_blurb_6.et_pb_blurb .et_pb_module_header,.et_pb_blurb_6.et_pb_blurb .et_pb_module_header a,.et_pb_blurb_4.et_pb_blurb .et_pb_module_header,.et_pb_blurb_4.et_pb_blurb .et_pb_module_header a{font-family:'Montserrat',Helvetica,Arial,Lucida,sans-serif;font-weight:600;color:#ffffff!important;line-height:1.5em}.et_pb_blurb_4.et_pb_blurb{background-position:top center;background-image:radial-gradient(circle at right,rgba(249,192,203,0.3) 20%,#f9c0cb 100%),url("<?php echo root();?>images/einstein-middle-school.jpg");background-color:#f9c0cb;border-radius:6px 6px 6px 6px;overflow:hidden;padding-top:20px!important;padding-right:40%!important;padding-bottom:20px!important;padding-left:10px!important}.et_pb_blurb_4 .et_pb_main_blurb_image .et_pb_only_image_mode_wrap,.et_pb_blurb_4 .et_pb_main_blurb_image .et-pb-icon{border-radius:100% 100% 100% 100%;overflow:hidden;border-width:3px;border-color:rgba(12,7,8,0);padding-top:25px!important;padding-right:25px!important;padding-bottom:25px!important;padding-left:25px!important;background-color:#fa546d}.et_pb_blurb_5.et_pb_blurb{background-image:radial-gradient(circle at right,rgba(138,182,247,0.3) 20%,#8ab6f7 100%),url("<?php echo root();?>images/einstein-lower-school-v3.jpg");background-color:#8ab6f7;border-radius:6px 6px 6px 6px;overflow:hidden;padding-top:20px!important;padding-right:40%!important;padding-bottom:20px!important;padding-left:10px!important}.et_pb_blurb_5 .et_pb_main_blurb_image .et_pb_only_image_mode_wrap,.et_pb_blurb_5 .et_pb_main_blurb_image .et-pb-icon{border-radius:100% 100% 100% 100%;overflow:hidden;border-width:3px;border-color:rgba(12,7,8,0);padding-top:25px!important;padding-right:25px!important;padding-bottom:25px!important;padding-left:25px!important;background-color:rgba(1,77,183,0.9)}.et_pb_blurb_6.et_pb_blurb{background-image:radial-gradient(circle at right,rgba(255,226,181,0.3) 20%,#ffe2b5 100%),url("<?php echo root();?>images/einstein-upper-school.jpg");background-color:#ffe2b5;border-radius:6px 6px 6px 6px;overflow:hidden;padding-top:20px!important;padding-right:40%!important;padding-bottom:20px!important;padding-left:10px!important}.et_pb_blurb_6 .et_pb_main_blurb_image .et_pb_only_image_mode_wrap,.et_pb_blurb_6 .et_pb_main_blurb_image .et-pb-icon{border-radius:100% 100% 100% 100%;overflow:hidden;border-width:3px;border-color:rgba(12,7,8,0);padding-top:25px!important;padding-right:25px!important;padding-bottom:25px!important;padding-left:25px!important;background-color:#ff9900}.et_pb_column_3{background-image:linear-gradient(90deg,rgba(227,232,242,0.72) 0%,#e3e8f2 60%),url("<?php echo root();?>images/EinsteinVideoOverlay.png");padding-top:120px;padding-right:80px;padding-bottom:120px;padding-left:10%}.et_pb_column_4{background-image:linear-gradient(90deg,rgba(131,0,233,0.88) 40%,rgba(131,0,233,0.44) 100%),url("<?php echo root();?>images/home-page-1.jpg");padding-top:120px;padding-right:10%;padding-bottom:120px;padding-left:80px}.et_pb_cta_1.et_pb_promo.et_pb_module{margin-left:0px!important;margin-right:auto!important}@media only screen and (min-width:981px){.et_pb_row_1,body #page-container .et-db #et-boc .et-l .et_pb_row_1.et_pb_row,body.et_pb_pagebuilder_layout.single #page-container #et-boc .et-l .et_pb_row_1.et_pb_row,body.et_pb_pagebuilder_layout.single.et_full_width_page #page-container #et-boc .et-l .et_pb_row_1.et_pb_row{width:100%;max-width:100%}}@media only screen and (max-width:980px){.et_pb_row_1,body #page-container .et-db #et-boc .et-l .et_pb_row_1.et_pb_row,body.et_pb_pagebuilder_layout.single #page-container #et-boc .et-l .et_pb_row_1.et_pb_row,body.et_pb_pagebuilder_layout.single.et_full_width_page #page-container #et-boc .et-l .et_pb_row_1.et_pb_row{width:100%;max-width:100%}.et_pb_column_4,.et_pb_column_3{padding-right:10%;padding-left:10%}.et_pb_column_6{padding-top:0px;padding-right:0%}}@media only screen and (max-width:767px){.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_header_content_wrapper{font-size:16px}.et_pb_fullwidth_header_0.et_pb_fullwidth_header .et_pb_fullwidth_header_subhead{font-size:30px}.et_pb_cta_1.et_pb_promo h2,.et_pb_cta_1.et_pb_promo h1.et_pb_module_header,.et_pb_cta_1.et_pb_promo h3.et_pb_module_header,.et_pb_cta_1.et_pb_promo h4.et_pb_module_header,.et_pb_cta_1.et_pb_promo h5.et_pb_module_header,.et_pb_cta_1.et_pb_promo h6.et_pb_module_header,.et_pb_cta_0.et_pb_promo h2,.et_pb_cta_0.et_pb_promo h1.et_pb_module_header,.et_pb_cta_0.et_pb_promo h3.et_pb_module_header,.et_pb_cta_0.et_pb_promo h4.et_pb_module_header,.et_pb_cta_0.et_pb_promo h5.et_pb_module_header,.et_pb_cta_0.et_pb_promo h6.et_pb_module_header{font-size:30px!important}}</style>

<link rel="stylesheet" as="style" id="et-core-unified-deferred-294-cached-inline-styles" href="<?php echo root('css/et-core-unified-deferred-294.min.css');?>" onload="this.onload=null;this.rel=&#39;stylesheet&#39;;"><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>
<body class="page-template-default page page-id-294 et_pb_button_helper_class et_fixed_nav et_show_nav et_secondary_nav_enabled et_secondary_nav_two_panels et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_split et_pb_footer_columns4 et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db chrome" style="overflow-x: hidden;"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  /*min-width:800px !important;*/
}
</style>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 0.49803921568627"></fefuncr><fefuncg type="table" tableValues="0 0.49803921568627"></fefuncg><fefuncb type="table" tableValues="0 0.49803921568627"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 1"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0 1"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.54901960784314 0.98823529411765"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0.71764705882353 0.25490196078431"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 1"></fefuncr><fefuncg type="table" tableValues="0 0.27843137254902"></fefuncg><fefuncb type="table" tableValues="0.5921568627451 0.27843137254902"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 0"></fefuncr><fefuncg type="table" tableValues="0 0.64705882352941"></fefuncg><fefuncb type="table" tableValues="0 1"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.78039215686275 1"></fefuncr><fefuncg type="table" tableValues="0 0.94901960784314"></fefuncg><fefuncb type="table" tableValues="0.35294117647059 0.47058823529412"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.65098039215686 0.40392156862745"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0.44705882352941 0.4"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.098039215686275 1"></fefuncr><fefuncg type="table" tableValues="0 0.66274509803922"></fefuncg><fefuncb type="table" tableValues="0.84705882352941 0.41960784313725"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg>   <div id="page-container" class="et-animated-content" style="padding-top: 149px; overflow-y: hidden; margin-top: -1px;">

                    <div id="top-header" class="">
            <div class="container clearfix">

            
                <div id="et-info">
                                    <span id="et-info-phone">(847)697-3836</span>
                
                                    <a href="mailto:info@einsteinacademy.us"><span id="et-info-email">info@einsteinacademy.us</span></a>
                
                <ul class="et-social-icons">

    <li class="et-social-icon et-social-facebook">
        <a href="https://www.facebook.com/TheEinsteinAcademy" class="icon" target="_blank">
            <span>Facebook</span>
        </a>
    </li>
    <li class="et-social-icon et-social-twitter">
        <a href="https://twitter.com/TheEinsteinAcad" class="icon" target="_blank">
            <span>Twitter</span>
        </a>
    </li>

</ul>               </div>

            
                <div id="et-secondary-menu">
                <div class="et_duplicate_social_icons">
                                <ul class="et-social-icons">

    <li class="et-social-icon et-social-facebook">
        <a href="https://www.facebook.com/TheEinsteinAcademy" class="icon" target="_blank">
            <span>Facebook</span>
        </a>
    </li>
    <li class="et-social-icon et-social-twitter">
        <a href="https://twitter.com/TheEinsteinAcad" class="icon" target="_blank">
            <span>Twitter</span>
        </a>
    </li>

</ul>
                            </div><ul id="et-secondary-nav" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-300"><a href="<?php echo root();?>home-page-4/" aria-current="page">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="<?php echo root();?>contact/">Contact</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2110"><a href="<?php echo root();?>admissions/domestic-application/">Apply Now</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370"><a href="<?php echo root();?>school-closure-emergencies/">Emergency School Closures</a></li>
</ul>               </div>

            </div>
        </div>
        
    
            <header id="main-header" data-height-onload="118" data-height-loaded="true" data-fixed-height-onload="118" class="" style="top: 31px;">
            <div class="container clearfix et_menu_container">
                            
                            <div id="et-top-navigation" data-height="103" data-fixed-height="72">
                                            <nav id="top-menu-nav">
                        <ul id="top-menu" class="nav"><li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-303"><a href="<?php echo root();?>home-page-4/" aria-current="page">Home</a></li>
<li id="menu-item-1022" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022"><a href="http://einsteinacademy.us/home-page-4/#">About Us</a>
<ul class="sub-menu">
    <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="<?php echo root();?>accreditation/">Accreditation</a></li>
    <li id="menu-item-435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a href="<?php echo root();?>about-us/our-mission/">Our Mission</a></li>
    <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?php echo root();?>faculty/">Faculty</a></li>
    <li id="menu-item-434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-434"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
    <li id="menu-item-1712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1712"><a href="<?php echo root();?>about-us/employment-opportunities/">Employment Opportunities</a></li>
    <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328"><a href="<?php echo root();?>contact/">Contact Us</a></li>
</ul>
</li>
<li id="menu-item-349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-349"><a href="http://einsteinacademy.us/home-page-4/#">Academics</a>
<ul class="sub-menu">
    <li id="menu-item-439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-439"><a href="<?php echo root();?>academics/early-childhood-education/">Early Childhood</a></li>
    <li id="menu-item-361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361"><a href="<?php echo root();?>academics/lower-school/">Lower School</a></li>
    <li id="menu-item-360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360"><a href="<?php echo root();?>academics/middle-school/">Middle School</a></li>
    <li id="menu-item-359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359"><a href="<?php echo root();?>academics/upper-school/">Upper School</a></li>
    <li id="menu-item-1270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1270"><a href="<?php echo root();?>academics/electives-enrichment/">Electives &amp; Enrichment</a></li>
    <li id="menu-item-1333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1333"><a href="<?php echo root();?>academics/experiential-learning/">Experiential Learning</a></li>
    <li id="menu-item-1332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1332"><a href="<?php echo root();?>academics/educational-testing/">Educational Testing</a></li>
    <li id="menu-item-1698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1698"><a href="<?php echo root();?>academics/college-career-readiness/">College &amp; Career Readiness</a></li>
    <li id="menu-item-1264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1264"><a href="<?php echo root();?>academics/summer-programs/">Summer Programs</a></li>
    <li id="menu-item-1005" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1005"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
</ul>
</li>
<li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-987"><a href="http://einsteinacademy.us/home-page-4/#">Admissions</a>
<ul class="sub-menu">
    <li id="menu-item-1508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1508"><a href="<?php echo root();?>admissions/apply-domestic/">Apply Domestic</a></li>
    <li id="menu-item-1509" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1509"><a href="<?php echo root();?>admissions/apply-international/">Apply International</a></li>
    <li id="menu-item-1510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1510"><a href="<?php echo root();?>admissions/tuition-financial-aid/">Tuition &amp; Financial Aid</a></li>
</ul>
</li><li class="centered-inline-logo-wrap" style="width: 92.04px;"><div class="logo_container">
                    <span class="logo_helper"></span>
                    <a href="<?php echo root();?>">
                        <img src="<?php echo root();?>images/TEA_logo.png" width="512" height="512" alt="The Einstein Academy" id="logo" data-height-percentage="68" data-actual-width="512" data-actual-height="512">
                    </a>
                </div></li>
<li id="menu-item-1071" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1071"><a href="http://einsteinacademy.us/home-page-4/#">Resources</a>
<ul class="sub-menu">
    <li id="menu-item-2514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2514"><a href="<?php echo root();?>newsletters/">Panther Periodical</a></li>
    <li id="menu-item-422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-422"><a href="<?php echo root();?>resources/forms-information/">Forms &amp; Information</a></li>
    <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-421"><a href="<?php echo root();?>resources/parent-student-resources/">Parent &amp; Student Resources</a></li>
    <li id="menu-item-2365" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2365"><a href="<?php echo root();?>wp-content/uploads/2021/07/2021-2022-Calendar.pdf">Calendar</a></li>
</ul>
</li>
<li id="menu-item-1673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1673"><a href="<?php echo root();?>giving/">Giving</a></li>
<li id="menu-item-1234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1234"><a href="<?php echo root();?>student-life/">Student Life</a>
<ul class="sub-menu">
    <li id="menu-item-2332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2332"><a href="<?php echo root();?>einstein-virtual-community-social-events/">Einstein (Virtual) Community Social Events</a></li>
</ul>
</li>
<li id="menu-item-379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-379"><a href="<?php echo root();?>contact/">Contact Us</a></li>
</ul>                       </nav>
                    
                    
                    
                                            <div id="et_top_search">
                            <span id="et_search_icon"></span>
                        </div>
                    
                    <div id="et_mobile_nav_menu">
                <div class="mobile_nav closed">
                    <span class="select_page">Select Page</span>
                    <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                <ul id="mobile_menu" class="et_mobile_menu"><li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-303 et_first_mobile_item"><a href="<?php echo root();?>home-page-4/" aria-current="page">Home</a></li>
<li id="menu-item-1022" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022"><a href="http://einsteinacademy.us/home-page-4/#">About Us</a>
<ul class="sub-menu">
    <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="<?php echo root();?>accreditation/">Accreditation</a></li>
    <li id="menu-item-435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a href="<?php echo root();?>about-us/our-mission/">Our Mission</a></li>
    <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?php echo root();?>faculty/">Faculty</a></li>
    <li id="menu-item-434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-434"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
    <li id="menu-item-1712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1712"><a href="<?php echo root();?>about-us/employment-opportunities/">Employment Opportunities</a></li>
    <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328"><a href="<?php echo root();?>contact/">Contact Us</a></li>
</ul>
</li>
<li id="menu-item-349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-349"><a href="http://einsteinacademy.us/home-page-4/#">Academics</a>
<ul class="sub-menu">
    <li id="menu-item-439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-439"><a href="<?php echo root();?>academics/early-childhood-education/">Early Childhood</a></li>
    <li id="menu-item-361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361"><a href="<?php echo root();?>academics/lower-school/">Lower School</a></li>
    <li id="menu-item-360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360"><a href="<?php echo root();?>academics/middle-school/">Middle School</a></li>
    <li id="menu-item-359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359"><a href="<?php echo root();?>academics/upper-school/">Upper School</a></li>
    <li id="menu-item-1270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1270"><a href="<?php echo root();?>academics/electives-enrichment/">Electives &amp; Enrichment</a></li>
    <li id="menu-item-1333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1333"><a href="<?php echo root();?>academics/experiential-learning/">Experiential Learning</a></li>
    <li id="menu-item-1332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1332"><a href="<?php echo root();?>academics/educational-testing/">Educational Testing</a></li>
    <li id="menu-item-1698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1698"><a href="<?php echo root();?>academics/college-career-readiness/">College &amp; Career Readiness</a></li>
    <li id="menu-item-1264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1264"><a href="<?php echo root();?>academics/summer-programs/">Summer Programs</a></li>
    <li id="menu-item-1005" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1005"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
</ul>
</li>
<li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-987"><a href="http://einsteinacademy.us/home-page-4/#">Admissions</a>
<ul class="sub-menu">
    <li id="menu-item-1508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1508"><a href="<?php echo root();?>admissions/apply-domestic/">Apply Domestic</a></li>
    <li id="menu-item-1509" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1509"><a href="<?php echo root();?>admissions/apply-international/">Apply International</a></li>
    <li id="menu-item-1510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1510"><a href="<?php echo root();?>admissions/tuition-financial-aid/">Tuition &amp; Financial Aid</a></li>
</ul>
</li>
<li id="menu-item-1071" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1071"><a href="http://einsteinacademy.us/home-page-4/#">Resources</a>
<ul class="sub-menu">
    <li id="menu-item-2514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2514"><a href="<?php echo root();?>newsletters/">Panther Periodical</a></li>
    <li id="menu-item-422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-422"><a href="<?php echo root();?>resources/forms-information/">Forms &amp; Information</a></li>
    <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-421"><a href="<?php echo root();?>resources/parent-student-resources/">Parent &amp; Student Resources</a></li>
    <li id="menu-item-2365" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2365"><a href="<?php echo root();?>wp-content/uploads/2021/07/2021-2022-Calendar.pdf">Calendar</a></li>
</ul>
</li>
<li id="menu-item-1673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1673"><a href="<?php echo root();?>giving/">Giving</a></li>
<li id="menu-item-1234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1234"><a href="<?php echo root();?>student-life/">Student Life</a>
<ul class="sub-menu">
    <li id="menu-item-2332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2332"><a href="<?php echo root();?>einstein-virtual-community-social-events/">Einstein (Virtual) Community Social Events</a></li>
</ul>
</li>
<li id="menu-item-379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-379"><a href="<?php echo root();?>contact/">Contact Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-300"><a href="<?php echo root();?>home-page-4/" aria-current="page">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="<?php echo root();?>contact/">Contact</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2110"><a href="<?php echo root();?>admissions/domestic-application/">Apply Now</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370"><a href="<?php echo root();?>school-closure-emergencies/">Emergency School Closures</a></li>
</ul></div>
            </div>              </div> <!-- #et-top-navigation -->
            </div> <!-- .container -->
                        <div class="et_search_outer">
                <div class="container et_search_form_container">
                    <form role="search" method="get" class="et-search-form" action="https://einsteinacademy.us/">
                    <input type="search" class="et-search-field" placeholder="Search …" value="" name="s" title="Search for:">                  </form>
                    <span class="et_close_search_field"></span>
                </div>
            </div>
                    </header> <!-- #main-header -->
            <div id="et-main-area">
    
<div id="main-content">


            
                <article id="post-294" class="post-294 page type-page status-publish hentry">

                
                    <div class="entry-content">
                    <div id="et-boc" class="et-boc">
            
        <div class="et-l et-l--post">
            <div class="et_builder_inner_content et_pb_gutters3">
        <div class="et_pb_section et_pb_section_0 et_pb_section_parallax et_pb_fullwidth_section et_section_regular section_has_divider et_pb_top_divider">
                <div class="et_pb_top_inside_divider" style=""></div>
                
                
                
                    <section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_hover_enabled et_pb_text_align_center et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_fullwidth_header_container center">
                    <div class="header-content-container center">
                    <div class="header-content">
                        
                        <h2 class="et_pb_module_header">The Einstein Academy</h2>
                        <span class="et_pb_fullwidth_header_subhead">Elevate Your Child's Education</span>
                        <div class="et_pb_header_content_wrapper"><p><span style="color: #1c1c1c;">The Einstein Academy is dedicated to creating the ideal environment for the academically talented. We offer&nbsp;<span style="text-align: center;">an accelerated curriculum, small class sizes, a nurturing atmosphere, fabulous enrichment opportunities, individualized learning, and more.</span></span></p></div>
                        <a class="et_pb_button et_pb_more_button et_pb_button_one" href="http://einsteinacademy.us/admissions/domestic-application/">Apply Now</a><a class="et_pb_button et_pb_more_button et_pb_button_two" href="http://einsteinacademy.us/contact">Contact Us</a>
                    </div>
                </div>
                    
                </div>
                <div class="et_pb_fullwidth_header_overlay"></div>
                <div class="et_pb_fullwidth_header_scroll"></div>
            </section>
                
                
            </div><div class="et_pb_section et_pb_section_1 et_section_regular">
                
                
                
                
                    <div class="et_pb_row et_pb_row_0">
                <div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
                
                
                <div class="et_pb_module et_pb_blurb et_pb_blurb_0 et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><a href="http://einsteinacademy.us/admissions/domestic-application/"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone et-pb-icon et-animated">l</span></span></a></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><a href="http://einsteinacademy.us/admissions/domestic-application/">Apply Online</a></h4>
                        <div class="et_pb_blurb_description"><p><span>The first step to providing your child with a top-notch education, individual attention and the ability to grow intellectually and creatively is filling out an application.</span></p></div>
                    </div>
                </div>
            </div>
            </div><div class="et_pb_column et_pb_column_1_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough">
                
                
                <div class="et_pb_module et_pb_blurb et_pb_blurb_1 et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><a href="http://einsteinacademy.us/giving/"><span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img width="96" height="96" src="<?php echo root();?>images/life-raft-v2.png" alt="" class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-2379 et-animated"></span></a></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><a href="http://einsteinacademy.us/giving/">Donate Online</a></h4>
                        <div class="et_pb_blurb_description"><p>Not all families can afford the education their children deserve. The Einstein Academy accepts donations for other families from caring individuals like you.</p></div>
                    </div>
                </div>
            </div>
            </div><div class="et_pb_column et_pb_column_1_3 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
                
                
                <div class="et_pb_module et_pb_blurb et_pb_blurb_2 et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><a href="http://einsteinacademy.us/contact"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone et-pb-icon et-animated"></span></span></a></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><a href="http://einsteinacademy.us/contact">Request Information</a></h4>
                        <div class="et_pb_blurb_description"><p><span>&nbsp;We understand that selecting a school for your child is an important and personal decision. Our friendly faculty is always happy to answer any questions you might have.</span></p></div>
                    </div>
                </div>
            </div>
            </div>
                
                
            </div>
                
                
            </div><div class="et_pb_section et_pb_section_2 et_section_regular">
                
                
                
                
                    <div class="et_pb_row et_pb_row_1 et_pb_row_fullwidth et_pb_equal_columns et_pb_gutters1">
                <div class="et_pb_column et_pb_column_1_2 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough">
                
                
                <div class="et_pb_module et_pb_cta_0 et_hover_enabled et_pb_promo  et_pb_text_align_left et_pb_bg_layout_light et_pb_no_bg">
                
                
                <div class="et_pb_promo_description"><h2 class="et_pb_module_header">Welcome</h2><div><p>At The Einstein Academy, we’re all about educating children creatively and catering to each student’s uniqueness. We believe in enriching our students with hands-on curriculum and educational fun.</p>
<p>At The Einstein Academy, we guarantee that no class size will ever exceed 14 students. With small classes, our teachers can focus on the specific needs of students and let them tackle math or Latin at their own pace.</p>
<p>Of course, small class size is not the&nbsp;only&nbsp;thing that makes us unique. We offer a very&nbsp;interactive and challenging curriculum&nbsp;that helps nurture each&nbsp;child’s individual strengths. At the same time, we offer&nbsp;activities outside of the classroom&nbsp;that are intended to enrich our students’ lives and help them discover their unique passion. Please look around our site to see what makes The Einstein Academy exceptional!</p></div></div>
                <div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button" href="http://einsteinacademy.us/contact">Schedule a Tour</a></div>
            </div><div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                
            </div>
            </div><div class="et_pb_column et_pb_column_1_2 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough et-last-child">
                
                
                <div class="et_pb_module et_pb_cta_1 et_hover_enabled et_pb_promo  et_pb_text_align_left et_pb_bg_layout_dark et_pb_no_bg">
                
                
                <div class="et_pb_promo_description"><h2 class="et_pb_module_header">What we Believe</h2><div><p><span>At The Einstein Academy, we believe that education is a collaborative experience. Parents, teachers, staff, and students work together as a team to maximize each student’s learning potential. We are devoted to creating and maintaining the ideal environment for the academically talented. This is why we guarantee that our class size will never exceed 14 students. In addition, we incorporate themes such as community, teamwork, responsibility, respect, and kindness. We strive for quality and consistency through a student’s lifelong experience with us.</span></p>
<p><span></span></p>
<p><span>The mission of The Einstein Academy is “to implement an individualized and nurturing program that provides gifted and talented students with skills and knowledge necessary to become productive members of society and lifelong learners.”</span></p>
<p><span></span></p></div></div>
                <div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button" href="http://einsteinacademy.us/admissions/domestic-application/">Apply Now</a></div>
            </div>
            </div>
                
                
            </div>
                
                
            </div><div class="et_pb_section et_pb_section_3 et_section_regular">
                
                
                
                
                    <div class="et_pb_row et_pb_row_2">
                <div class="et_pb_column et_pb_column_1_2 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough">
                
                
                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_3 et_clickable et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-pb-icon-circle-border et-animated"></span></span></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><span>Early Childhood</span></h4>
                        
                    </div>
                </div>
            </div><div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_4 et_clickable et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-pb-icon-circle-border et-animated"></span></span></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><span>Middle School</span></h4>
                        
                    </div>
                </div>
            </div>
            </div><div class="et_pb_column et_pb_column_1_2 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">
                
                
                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_5 et_clickable et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-pb-icon-circle-border et-animated"></span></span></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><span>Lower School</span></h4>
                        
                    </div>
                </div>
            </div><div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_6 et_clickable et_pb_text_align_center et_pb_blurb_position_top et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-pb-icon-circle-border et-animated"></span></span></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><span>Upper School</span></h4>
                        
                    </div>
                </div>
            </div>
            </div>
                
                
            </div>
                
                
            </div><div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular">
                
                
                
                
                    <div class="et_pb_row et_pb_row_3">
                <div class="et_pb_column et_pb_column_4_4 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough et-last-child">
                
                
                <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_text_inner"><h2 style="text-align: center;">The Einstein Academy believes that education should elevate you, not hold you back</h2></div>
            </div>
            </div>
                
                
            </div>
                
                
            </div><div class="et_pb_section et_pb_section_9 et_pb_section_parallax et_pb_with_background et_section_regular">
                
                <div class="et_parallax_bg_wrap"><div class="et_parallax_bg" style="background-image: url('<?php echo root();?>images/shapes-bg-1.png'); height: 867.469px; transform: translate(0px, -719.1px);"></div></div>
                
                
                    <div class="et_pb_row et_pb_row_4">
                <div class="et_pb_column et_pb_column_1_2 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough">
                
                
                <div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_text_inner"><h5>Registration</h5>
<h2>How To Register Your Child for The Einstein Academy</h2>
<p>If you would like to have your child considered for admission to The Einstein Academy for the current or upcoming school year, you can <a href="http://einsteinacademy.us/admissions/domestic-application/">apply online.</a></p>
<p>See the guidelines to the right to make sure you have everything necessary to complete the application process.</p>
<p><a href="http://einsteinacademy.us/admissions/apply-international">International Applicants visit here</a></p>
<p><strong>If you have any questions, please contact the Admissions Office:</strong></p></div>
            </div><div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_7  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-pb-icon-circle-border et-animated"></span></span></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><span>Call For Inquiry</span></h4>
                        <div class="et_pb_blurb_description"><p>(847) 697-3836</p></div>
                    </div>
                </div>
            </div><div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_8  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_blurb_content">
                    <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone et-pb-icon et-pb-icon-circle et-pb-icon-circle-border et-animated"></span></span></div>
                    <div class="et_pb_blurb_container">
                        <h4 class="et_pb_module_header"><span>Mail For Inquiry</span></h4>
                        <div class="et_pb_blurb_description"><p><a href="mailto:info@einsteinacademy.us">info@einsteinacademy.us</a></p></div>
                    </div>
                </div>
            </div>
            </div><div class="et_pb_column et_pb_column_1_2 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
                
                
                <div class="et_pb_module et_pb_text et_pb_text_3 et_pb_text_align_left et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_text_inner"><h3></h3>
<h3></h3>
<h3></h3>
<h3></h3>
<h3></h3>
<h3>01.</h3>
<p><span>Due to our rolling admissions process, we accept applications throughout the year. A non-refundable fee of $50 (or&nbsp;$100 for International) must accompany the application, payable to&nbsp;</span><em>The Einstein Academy</em><span>.&nbsp;</span></p></div>
            </div><div class="et_pb_module et_pb_text et_pb_text_4 et_pb_text_align_left et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_text_inner"><h3>02.</h3>
<p><span>Each applicant is required to schedule a class visit as part of the admissions process.</span></p></div>
            </div><div class="et_pb_module et_pb_text et_pb_text_5 et_pb_text_align_left et_pb_bg_layout_light et_had_animation" style="">
                
                
                <div class="et_pb_text_inner"><h3>03.</h3>
<p><span>To be considered for acceptance by The Einstein Academy the following must be provided by the applicant:</span></p>
<ol>
<li><span>Copy of birth certificate</span></li>
<li><span>Copy of report cards or assessment reports</span></li>
<li><span>Teacher’s recommendation form</span></li>
<li><span>Copy of results from any standardized test taken in the past three years</span></li>
</ol></div>
            </div>
            </div>
                
                
            </div>
                
                
            </div><div class="et_pb_section et_pb_section_11 et_pb_with_background et_pb_section_parallax et_section_regular">
                
                
                
                
                    <div class="et_pb_row et_pb_row_5 et_pb_equal_columns et_pb_gutters2 et_had_animation" style="">
                <div class="et_pb_column et_pb_column_1_3 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
                
                
                <div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_text_inner"><h2>Quick Links</h2></div>
            </div><div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_text_inner"><p><a href="http://einsteinacademy.us/faculty">Faculty</a></p>
<p><a href="http://einsteinacademy.us/about-us/employment-opportunities/">Employment</a></p>
<p><a href="http://einsteinacademy.us/contact">Contact Us</a></p>
<p><a href="http://einsteinacademy.us/resources/forms-information/">Forms &amp; Information</a></p>
<p><a href="http://einsteinacademy.us/school-closure-emergencies/">School Closures</a></p></div>
            </div>
            </div><div class="et_pb_column et_pb_column_1_3 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough">
                
                
                <div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_text_inner"><p><a href="http://einsteinacademy.us/admissions/apply-domestic/">Domestic Applicants</a></p>
<p><a href="http://einsteinacademy.us/admissions/tuition-financial-aid/">Tuition &amp; Financial Aid</a></p>
<p><a href="http://einsteinacademy.us/admissions/apply-international/">International Applicants</a></p>
<p><a href="http://einsteinacademy.us/giving">Giving</a></p>
<p><a href="https://www.paypal.me/TheEinsteinAcademy">Pay Online</a></p></div>
            </div>
            </div><div class="et_pb_column et_pb_column_1_3 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough et-last-child">
                
                
                <div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_text_inner"><h2>Get in Touch</h2></div>
            </div><div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_left et_pb_bg_layout_light">
                
                
                <div class="et_pb_text_inner"><p><strong>Location:</strong> 747 Davis Road, Elgin, IL 60123</p>
<p><strong>Telephone:</strong> (847) 697 - 3836</p>
<p><strong>Email:</strong>&nbsp;<a style="font-size: 14px;" href="mailto:info@einsteinacademy.us">info@einsteinacademy.us</a></p>
<p><strong>School Hours:</strong> M-F: 8:00am - 2:30pm</p>
<p><strong>Extended Care:</strong> M-F: 7:00am - 6:00pm</p></div>
            </div><div class="et_pb_module et_pb_cta_2 et_hover_enabled et_pb_promo  et_pb_text_align_left et_pb_bg_layout_dark et_pb_no_bg">
                
                
                <div class="et_pb_promo_description et_multi_view_hidden"></div>
                <div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button" href="http://einsteinacademy.us/contact/">Contact Us</a></div>
            </div>
            </div>
                
                
            </div>
                
                
            </div>      </div>
    </div>
    
            
        </div>
                            </div>

                
                </article>

            

</div>


            <footer id="main-footer">
                

        
                <div id="footer-bottom">
                    <div class="container clearfix">
                <ul class="et-social-icons">

    <li class="et-social-icon et-social-facebook">
        <a href="https://www.facebook.com/TheEinsteinAcademy" class="icon" target="_blank">
            <span>Facebook</span>
        </a>
    </li>
    <li class="et-social-icon et-social-twitter">
        <a href="https://twitter.com/TheEinsteinAcad" class="icon" target="_blank">
            <span>Twitter</span>
        </a>
    </li>

</ul><div id="footer-info">Website by Twin Tiger Design</div>                   </div>
                </div>
            </footer>
        </div>


    </div>

            <script type="application/javascript">
            (function() {
                var file     = ["<?php echo root();?>css/et-divi-dynamic-294-late.css"];
                var handle   = document.getElementById('divi-style-parent-inline-inline-css');
                var location = handle.parentNode;

                if (0===document.querySelectorAll('link[href="' + file + '"]').length) {
                    var link  = document.createElement('link');
                    link.rel  = 'stylesheet';
                    link.id   = 'et-dynamic-late-css';
                    link.href = file;

                    location.insertBefore(link, handle.nextSibling);
                }
            })();
        </script>
            <script type="text/javascript">
                var et_animation_data = [{"class":"et_pb_fullwidth_header_0","style":"slideBottom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"1%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_0","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_1","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_2","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_3","style":"fold","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_4","style":"fold","repeat":"once","duration":"1000ms","delay":"150ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_5","style":"fold","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_6","style":"fold","repeat":"once","duration":"1000ms","delay":"300ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_text_3","style":"zoom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_text_4","style":"zoom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_text_5","style":"zoom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_row_5","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"}];
                    var et_link_options_data = [{"class":"et_pb_blurb_3","url":"\/academics\/early-childhood-education\/","target":"_self"},{"class":"et_pb_blurb_4","url":"\/academics\/middle-school\/","target":"_self"},{"class":"et_pb_blurb_5","url":"\/academics\/lower-school\/","target":"_self"},{"class":"et_pb_blurb_6","url":"\/academics\/upper-school\/","target":"_self"}];
            </script>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53F48L3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><link rel="stylesheet" id="wp-block-library-css" href="<?php echo root();?>css/style.min(1).css" type="text/css" media="all" onload="media=&#39;all&#39;">
<script type="text/javascript" src="<?php echo root();?>js/jquery.min.js.download" id="jquery-core-js"></script>
<script type="text/javascript" src="<?php echo root();?>js/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>
<script type="text/javascript" id="jquery-js-after">
jqueryParams.length&&$.each(jqueryParams,function(e,r){if("function"==typeof r){var n=String(r);n.replace("$","jQuery");var a=new Function("return "+n)();$(document).ready(a)}});
</script>
<script type="text/javascript" id="divi-custom-script-js-extra">
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_builder_utils_params = {"condition":{"diviTheme":true,"extraTheme":false},"scrollLocations":["app","top"],"builderScrollLocations":{"desktop":"app","tablet":"app","phone":"app"},"onloadScrollLocation":"app","builderType":"fe"};
var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_custom = {"ajaxurl":"http:\/\/einsteinacademy.us\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/einsteinacademy.us\/wp-content\/themes\/Divi\/images","builder_images_uri":"http:\/\/einsteinacademy.us\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"dba2f31428","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"1ca9a9299b","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","wrong_checkbox":"Checkbox","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"294","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":"","tinymce_uri":""};
var et_pb_box_shadow_elements = [];
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo root();?>js/scripts.min.js.download" id="divi-custom-script-js"></script>
<script type="text/javascript" src="<?php echo root();?>js/jquery.fitvids.js.download" id="fitvids-js"></script>
<script type="text/javascript" src="<?php echo root();?>js/hashchange.js.download" id="hashchange-js"></script>
<script type="text/javascript" src="<?php echo root();?>js/frontend-bundle.min.js.download" id="supreme-modules-for-divi-frontend-bundle-js"></script>
<script type="text/javascript" src="<?php echo root();?>js/common.js.download" id="et-core-common-js"></script>



</body></html>