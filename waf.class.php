<?php



class WAF

{

    public function __construct()

    {

        $this->IPHeader = "REMOTE_ADDR";

        $this->CookieCheck = true;

        $this->CookieCheckParam = 'username';

        $this->SessionCheck = true;

        $this->SessionCheckParam = 'username';

        $this->HostMYSQL = 'localhost';

        $this->UserMYSQL = 'root';

        $this->PasswordMYSQL = 'senha12345';

        $this->DbnMYSQL = 'bancodedados';

        $this->HTMLFirewall = 'PCEtLQoKCiAgIOKUjeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUkQoKICAg4pSCICAgICAgRklSRVdBTEwgREVTRU5WT0xWSURPIFBPUiBKVklOSUNJVVMuICAgICAgICDilIIKCiAgIOKUneKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUpQoKICAg4pSCIEVzdMOhIHByZWNpc2FuZG8gZGUgdW0/IEVudHJlIGVtIGNvbnRhdG8gY29taWdvISAg4pSCCgogICDilIIgICBEaXNjb3JkOiBKVmluaWNpdXMjOTIxMiAgICAgICAgICAgICAgICAgICAgICAgIOKUggoKICAg4pSCICAgRW1haWw6IGV1QGp2aW5pY2l1cy5jb20gICAgICAgICAgICAgICAgICAgICAgICDilIIKICAgCiAgIOKUleKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUgeKUmQoKCi0tPgo8aHRtbD4KCjxoZWFkPgogICAgPHRpdGxlPkFjZXNzbyBOZWdhZG88L3RpdGxlPgogICAgPGxpbmsgcmVsPSJpY29uIiB0eXBlPSJpbWcvcG5nIiBocmVmPSIvYXJxdWl2b3MvY29udGV1ZG8vcHVibGljby9pbWcvRmF2aWNvbi5wbmciPgogICAgPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiBocmVmPSJodHRwczovL21heGNkbi5ib290c3RyYXBjZG4uY29tL2ZvbnQtYXdlc29tZS80LjQuMC9jc3MvZm9udC1hd2Vzb21lLm1pbi5jc3MiPgogICAgPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiBocmVmPSJodHRwczovL3VzZS5mb250YXdlc29tZS5jb20vcmVsZWFzZXMvdjUuOC4xL2Nzcy9hbGwuY3NzIiBpbnRlZ3JpdHk9InNoYTM4NC01MG9CVUhFbXZwUSsxbFc0eTU3UFRGbWhDYVhwME1MNWQ2ME0xTTd1SDIrbnFVaXZ6SWViaG5kT0pLMjhhbnZmIiBjcm9zc29yaWdpbj0iYW5vbnltb3VzIj4KICA8IS0tIE1hdGVyaWFsIERlc2lnbiBCb290c3RyYXAgLS0+CiAgPGxpbmsgaHJlZj0iaHR0cHM6Ly9jZG5qcy5jbG91ZGZsYXJlLmNvbS9hamF4L2xpYnMvbWRib290c3RyYXAvNC40LjEvY3NzL21kYi5taW4uY3NzIiByZWw9InN0eWxlc2hlZXQiPgoKICA8bGluayByZWw9InN0eWxlc2hlZXQiIGhyZWY9Imh0dHBzOi8vY2RuanMuY2xvdWRmbGFyZS5jb20vYWpheC9saWJzL2ZvbnQtYXdlc29tZS1hbmltYXRpb24vMC4wLjEwL2ZvbnQtYXdlc29tZS1hbmltYXRpb24ubWluLmNzcyI+CiAgICA8c3R5bGU+CiAgICAgICAgQGltcG9ydCB1cmwoJ2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1Mb2JzdGVyfE9wZW4rU2FucycpOwoKICAgICAgICBib2R5IHsKICAgICAgICAgICAgYmFja2dyb3VuZDogbGluZWFyLWdyYWRpZW50KHRvIHJpZ2h0LCAjMjgyNzI5LCAjMTcxNTE4KTsKICAgICAgICAgICAgOwogICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjM0UzRTNFIGFuaW1hdGlvbjogc2Nyb2xsIDcwcyBpbmZpbml0ZSBsaW5lYXI7CiAgICAgICAgICAgIGZvbnQtZmFtaWx5OiAiT3BlbiBTYW5zIiwgc2Fucy1zZXJpZjsKICAgICAgICAgICAgY29sb3I6IHdoaXRlOwogICAgICAgIH0KCiAgICAgICAgQGtleWZyYW1lcyBzY3JvbGwgewogICAgICAgICAgICBmcm9tIHsKICAgICAgICAgICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IDAgMDsKICAgICAgICAgICAgfQoKICAgICAgICAgICAgdG8gewogICAgICAgICAgICAgICAgYmFja2dyb3VuZC1wb3NpdGlvbjogMTAwJSAwOwogICAgICAgICAgICB9CiAgICAgICAgfQoKICAgICAgICAubG9nbyB7CiAgICAgICAgICAgIG1hcmdpbi1sZWZ0OiBhdXRvOwoKCgogICAgICAgICAgICBtYXJnaW4tcmlnaHQ6IGF1dG87CiAgICAgICAgICAgIGZvbnQtZmFtaWx5OiBsb2JzdGVyOwogICAgICAgICAgICBmb250LXNpemU6IDEyMHB4OwogICAgICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7CiAgICAgICAgfQoKICAgICAgICAuZXJyb3IgewogICAgICAgICAgICBtYXJnaW4tbGVmdDogYXV0bzsKICAgICAgICAgICAgbWFyZ2luLXJpZ2h0OiBhdXRvOwogICAgICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7CiAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IDZweDsKCiAgICAgICAgICAgIGZvbnQtc2l6ZTogMzBweDsKICAgICAgICAgICAgYmFja2dyb3VuZDogcmdiYSgwLCAwLCAwLCAuMyk7CiAgICAgICAgICAgIHdpZHRoOiAyNDBweDsKICAgICAgICB9CgogICAgICAgIC5lcnJvcjIgewogICAgICAgICAgICBtYXJnaW4tbGVmdDogYXV0bzsKICAgICAgICAgICAgbWFyZ2luLXJpZ2h0OiBhdXRvOwogICAgICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7CiAgICAgICAgICAgIGJhY2tncm91bmQ6IHJnYmEoMCwgMCwgMCwgLjMpOwogICAgICAgICAgICB3aWR0aDogNTYwcHg7CiAgICAgICAgICAgIHBhZGRpbmc6IDEwcHg7CiAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IDZweDsKICAgICAgICB9CgogICAgICAgIGE6bGluaywKICAgICAgICBhOnZpc2l0ZWQsCiAgICAgICAgYTphY3RpdmUgewogICAgICAgICAgICBjb2xvcjogd2hpdGU7CiAgICAgICAgICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTsKICAgICAgICB9CiAgICA8L3N0eWxlPgoKPC9oZWFkPgoKPGJvZHk+CiAgICA8ZGl2IGNsYXNzPSJsb2dvIGFuaW1hdGVkIGZhZGVJbiIgPgogICAgICAgIDxpbWcgc3R5bGU9IndpZHRoOiAyNTBweDsiIHNyYz0iaHR0cHM6Ly9pbWFnZXMudmV4ZWxzLmNvbS9tZWRpYS91c2Vycy8zLzE1MTczMy9pc29sYXRlZC9wcmV2aWV3LzQ1NmQ5NjAzM2YzYzM3ODNiZDFlYTBjNTQ5OTY5Nzg0LWZveC1ib25pdG8tZG9zLWRlc2VuaG9zLWFuaW1hZG9zLWJ5LXZleGVscy5wbmciPgogICAgPC9kaXY+CiAgICA8YnI+CiAgICA8ZGl2IGNsYXNzPSJlcnJvciBhbmltYXRlZCBmYWRlSW4iPgogICAgICAgIDxzdHJvbmc+QWNlc3NvIE5lZ2Fkbzwvc3Ryb25nPgogICAgPC9kaXY+CiAgICA8YnI+CiAgICA8ZGl2IGNsYXNzPSJlcnJvcjIgYW5pbWF0ZWQgZmFkZUluIj4KICAgICAgICA8cD48c3Ryb25nPkluZm9ybWHDp8O1ZXMgZG8gQmFuaW1lbnRvPC9zdHJvbmc+PGJyPjxicj48c3Ryb25nPkNvZGlnbyBkZSBiYW5pbWVudG86PC9zdHJvbmc+IHtSX0JJRH08YnI+PHN0cm9uZz5TZXUKICAgICAgICAgICAgICAgIEVuZGVyZcOnbyBkZSBJUDo8L3N0cm9uZz4ge1JfSVB9PGJyPjxzdHJvbmc+U2V1IG5hdmVnYWRvcjo8L3N0cm9uZz4KICAgICAgICAgICAge1JfQlJPV1NFUn08YnI+PHN0cm9uZz5TZXUgU2lzdGVtYSBPcGVyYWNpb25hbDo8L3N0cm9uZz4ge1JfT1N9PGJyPjxzdHJvbmc+TW90aXZvOjwvc3Ryb25nPgogICAgICAgICAgICB7Ul9CUkV9PGJyPjxicj48c3Ryb25nPkFWSVNPOjwvc3Ryb25nPiBTZXUgZW5kZXJlw6dvIGRlIElQIGZpY2FyYSBiYW5pZG8gcG9yIDUgaG9yYXMuPC9wPgogICAgICAgIDxicj4KICAgIDwvZGl2PgogICAgPGNlbnRlcj4KICAgICAgICA8cCBjbGFzcz0iYW5pbWF0ZWQgZmFkZUluIiBzdHlsZT0icGFkZGluZzogMjBweDtjb2xvcjogI2QzZDNkMztmb250LXNpemU6IDE1cHg7d2lkdGg6IDQwMHB4OyI+Rm94IEFwcGxpY2F0aW9uIEZpcmV3YWxsIMKpIDIwMTk8L3A+CiAgICA8L2NlbnRlcj4KPC9ib2R5PgoKPC9odG1sPg==';

        $this->BanTime = 5;

        



        return true;

    }

    public function shorten_string($string, $wordsreturned)

    {

        $retval = $string;

        $array = explode(" ", $string);

        if (count($array) <= $wordsreturned) {

            $retval = $string;

        } else {

            array_splice($array, $wordsreturned);

            $retval = implode(" ", $array) . " ...";

        }

        return $retval;

    }

    public function vulnDetectedHTML($Method, $BadWord, $DisplayName, $TypeVuln)

    {

        date_default_timezone_set("America/Sao_Paulo");

        $dbhost = $this->HostMYSQL;

        $dbuser = $this->UserMYSQL;

        $dbpass = $this->PasswordMYSQL;

        $dbname = $this->DbnMYSQL;

        $dbdsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8;";

        try { $pdosql = new PDO($dbdsn, $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));} catch (PDOException $e) {}





        $tempo_fim = date('Y-m-d H:i:s', mktime(date('H') + $this->BanTime, date('i'), date('s'), date('m'), date('d'), date('Y'))); //DATA E HORA DO FIM DO BAN (NAO ALTERAR)



        $sqll = "SELECT * FROM bans WHERE LOWER(ip)=?;";

        $queryy = $pdosql->prepare($sqll);

        $queryy->execute(array($_SERVER[$this->IPHeader]));

        if (!($userr = $queryy->fetch())) {

            $q = $pdosql->prepare("INSERT INTO `bans`( `ban_code`, `ip`, `useragent`, `reason`, `time`) VALUES (?,?,?,?,?);");

            $q->execute(array($this->shorten_string(md5($TypeVuln . $Method . $DisplayName . $_SERVER[$this->IPHeader] . date('DmY')),

                7), $_SERVER[$this->IPHeader], $_SERVER['HTTP_USER_AGENT'], "Tentativa de " . htmlentities($TypeVuln) . " foi detectada pelo nosso sistema de segurança.", $tempo_fim));



            header('HTTP/1.0 403 Forbidden');

            $htmlPage = base64_decode($this->HTMLFirewall);

            $htmlPage = str_replace("{R_IP}", $_SERVER[$this->IPHeader], $htmlPage);



                

            $htmlPage = str_replace("{R_BID}", $this->shorten_string(md5($TypeVuln . $Method . $DisplayName . $_SERVER[$this->IPHeader] . date('DmY')),

                7), $htmlPage);

            $htmlPage = str_replace("{R_BRE}", "Tentativa de " . htmlentities($TypeVuln) . " foi detectada pelo nosso sistema de segurança.", $htmlPage);

            $htmlPage = str_replace("{R_OS}", $this->getOS($_SERVER['HTTP_USER_AGENT']), $htmlPage);

            $htmlPage = str_replace("{R_BROWSER}", $this->getBrowser($_SERVER['HTTP_USER_AGENT']), $htmlPage);



            die($htmlPage); // Block request.

        } else {



        }

    }



    public function CheckBanned()

    {

        date_default_timezone_set("America/Sao_Paulo");

        $time = date('Y-m-d H:i:s');



        $dbhost = $this->HostMYSQL;

        $dbuser = $this->UserMYSQL;

        $dbpass = $this->PasswordMYSQL;

        $dbname = $this->DbnMYSQL;

        $dbdsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8;";

        try { $pdosql = new PDO($dbdsn, $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));} catch (PDOException $e) {}



        $sqll = "SELECT * FROM bans WHERE LOWER(ip)=?;";

        $queryy = $pdosql->prepare($sqll);

        $queryy->execute(array($_SERVER[$this->IPHeader]));

        if ($userr = $queryy->fetch()) {

            if ($time >= $userr['time']) {



                $sql = "DELETE FROM bans WHERE ip=?";



                $query = $pdosql->prepare($sql);



                $query->execute(array($_SERVER[$this->IPHeader]));



            } else {

                header('HTTP/1.0 403 Forbidden');

                $htmlPage = base64_decode($this->HTMLFirewall);

                $htmlPage = str_replace("{R_IP}", $_SERVER[$this->IPHeader], $htmlPage);

    

                

                $htmlPage = str_replace("{R_BID}", $userr['ban_code'], $htmlPage);

                $htmlPage = str_replace("{R_BRE}", $userr['reason'], $htmlPage);

                $htmlPage = str_replace("{R_OS}", $this->getOS($userr['useragent']), $htmlPage);

                $htmlPage = str_replace("{R_BROWSER}", $this->getBrowser($userr['useragent']), $htmlPage);



                die($htmlPage); // Block request.

            }

        } else {



        }

    }



    public function getArray($Type)

    {

        switch ($Type) {

            case 'SQL':

                return array(

                    "'",

                    '?',

                    'SELECT FROM',

                    'SELECT * FROM',

                    'ONION',

                    'union',

                    'UNION',

                    'UDPATE users SET',

                    'WHERE username',

                    'DROP TABLE',

                    '0x50',

                    'mid((select',

                    'union(((((((',

                    'concat(0x',

                    'concat(',

                    'OR boolean',

                    'or HAVING',

                    "OR '1", # Famous skid Poc.

                    '0x3c62723e3c62723e3c62723e',

                    '0x3c696d67207372633d22',

                    '+#1q%0AuNiOn all#qa%0A#%0AsEleCt',

                    'unhex(hex(Concat(',

                    'Table_schema,0x3e,',

                    '0x00', // \0  [This is a zero, not the letter O]

                    '0x08', // \b

                    '0x09', // \t

                    '0x0a', // \n

                    '0x0d', // \r

                    '0x1a', // \Z

                    '0x22', // \"

                    '0x25', // \%

                    '0x27', // \'

                    '0x5c', // \\

                    '0x5f', // \_

                     "#"

                );

                break;

            case 'XSS':

                return array('<img',

                    'img>',

                    '<image',

                    'document.cookie',

                    'onerror()',

                    'script>',

                    '<script',

                    'script',

                    '<',

                    '>',

                    

                    'alert(',

                    'window.',

                    'String.fromCharCode(',

                    'javascript:',

                    'onmouseover="',

                    '<BODY onload',

                    '<style',

                    'svg onload'

                    );

                break;



            default:

                return false;

                break;

        }

    }

    public function getOS($user_agent)

    {



        $os_platform = "Unknown OS Platform";



        $os_array = array(

            '/windows nt 10/i' => 'Windows 10',

            '/windows nt 6.3/i' => 'Windows 8.1',

            '/windows nt 6.2/i' => 'Windows 8',

            '/windows nt 6.1/i' => 'Windows 7',

            '/windows nt 6.0/i' => 'Windows Vista',

            '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',

            '/windows nt 5.1/i' => 'Windows XP',

            '/windows xp/i' => 'Windows XP',

            '/windows nt 5.0/i' => 'Windows 2000',

            '/windows me/i' => 'Windows ME',

            '/win98/i' => 'Windows 98',

            '/win95/i' => 'Windows 95',

            '/win16/i' => 'Windows 3.11',

            '/macintosh|mac os x/i' => 'Mac OS X',

            '/mac_powerpc/i' => 'Mac OS 9',

            '/linux/i' => 'Linux',

            '/ubuntu/i' => 'Ubuntu',

            '/iphone/i' => 'iPhone',

            '/ipod/i' => 'iPod',

            '/ipad/i' => 'iPad',

            '/android/i' => 'Android',

            '/blackberry/i' => 'BlackBerry',

            '/webos/i' => 'Mobile',

        );



        foreach ($os_array as $regex => $value) {

            if (preg_match($regex, $user_agent)) {

                $os_platform = $value;

            }

        }



        return $os_platform;

    }



    public function getBrowser($user_agent)

    {



        $browser = "Unknown Browser";



        $browser_array = array(

            '/msie/i' => 'Internet Explorer',

            '/firefox/i' => 'Firefox',

            '/safari/i' => 'Safari',

            '/chrome/i' => 'Chrome',

            '/edge/i' => 'Edge',

            '/opera/i' => 'Opera',

            '/netscape/i' => 'Netscape',

            '/maxthon/i' => 'Maxthon',

            '/konqueror/i' => 'Konqueror',

            '/mobile/i' => 'Handheld Browser',

        );



        foreach ($browser_array as $regex => $value) {

            if (preg_match($regex, $user_agent)) {

                $browser = $value;

            }

        }



        return $browser;

    }

    public function arrayFlatten(array $array)

    {

        $flatten = array();

        array_walk_recursive($array, function ($value) use (&$flatten) {

            $flatten[] = $value;

        });

        return $flatten;

    }

    public function sqlCheck($Value, $Method, $DisplayName)

    {

        // For false alerts.

        $Replace = array("can't" => "cant",

            "don't" => "dont");

        foreach ($Replace as $key => $value_rep) {

            $Value = str_replace($key, $value_rep, $Value);

        }

        $BadWords = $this->getArray('SQL');

        foreach ($BadWords as $BadWord) {

            if (strpos(strtolower($Value), strtolower($BadWord)) !== false) {

                // String contains some Vuln.

                $this->vulnDetectedHTML($Method, $BadWord, $Value, 'SQL Injection');

            }

        }

    }

    public function xssCheck($Value, $Method, $DisplayName)

    {

        // For false alerts.

        $Replace = array("<3" => ":heart:");

        foreach ($Replace as $key => $value_rep) {

            $Value = str_replace($key, $value_rep, $Value);

        }

        $BadWords = $this->getArray('XSS');



        foreach ($BadWords as $BadWord) {

            if (strpos(strtolower($Value), strtolower($BadWord)) !== false) {

                // String contains some Vuln.



                $this->vulnDetectedHTML($Method, $BadWord, $DisplayName, 'XSS (Cross-Site-Scripting)');

            }

        }

    }

    public function is_html($string)

    {

        return $string != strip_tags($string) ? true : false;



    }

    public function santizeString($String)

    {

        $String = escapeshellarg($String);

        $String = htmlentities($String);

        $XSS = $this->getArray('XSS');

        foreach ($XSS as $replace) {

            $String = str_replace($replace, '', $String);

        }

        $SQL = $this->getArray('SQL');

        foreach ($SQL as $replace) {

            $String = str_replace($replace, '', $String);

        }

        return $String;

    }

    public function htmlCheck($value, $Method, $DisplayName)

    {

        if ($this->is_html(strtolower($value)) !== false) {

            // HTML Detected!

            $this->vulnDetectedHTML($Method, "HTML CHARS", $DisplayName, 'XSS (HTML)');

        }

    }

    public function arrayValues($Array)

    {

        return array_values($Array);

    }

    public function checkGET()

    {

        foreach ($_GET as $key => $value) {

            if (is_array($value)) {

                $flattened = $this->arrayFlatten($value);

                foreach ($flattened as $sub_key => $sub_value) {

                    $this->sqlCheck($sub_value, "_GET", $sub_key);

                    $this->xssCheck($sub_value, "_GET", $sub_key);

                    $this->htmlCheck($sub_value, "_GET", $sub_key);

                }

            } else {

                $this->sqlCheck($value, "_GET", $key);

                $this->xssCheck($value, "_GET", $key);

                $this->htmlCheck($value, "_GET", $key);

            }

        }

    }

    public function checkPOST()

    {

        foreach ($_POST as $key => $value) {

            if (is_array($value)) {

                $flattened = $this->arrayFlatten($value);

                foreach ($flattened as $sub_key => $sub_value) {

                    $this->sqlCheck($sub_value, "_POST", $sub_key);

                    $this->xssCheck($sub_value, "_POST", $sub_key);

                    $this->htmlCheck($sub_value, "_POST", $sub_key);

                }

            } else {

                $this->sqlCheck($value, "_POST", $key);

                $this->xssCheck($value, "_POST", $key);

                $this->htmlCheck($value, "_POST", $key);

            }

        }

    }

    public function checkCOOKIE()

    {

        foreach ($_COOKIE as $key => $value) {

            if (is_array($value)) {

                $flattened = $this->arrayFlatten($value);

                foreach ($flattened as $sub_key => $sub_value) {

                    $this->sqlCheck($sub_value, "_COOKIE", $sub_key);

                    $this->xssCheck($sub_value, "_COOKIE", $sub_key);

                    $this->htmlCheck($sub_value, "_COOKIE", $sub_key);

                }

            } else {

                $this->sqlCheck($value, "_COOKIE", $key);

                $this->xssCheck($value, "_COOKIE", $key);

                $this->htmlCheck($value, "_COOKIE", $key);

            }

        }

    }

    public function checkSESSION()

    {

        foreach ($_SESSION as $key => $value) {

            if (is_array($value)) {

                $flattened = $this->arrayFlatten($value);

                foreach ($flattened as $sub_key => $sub_value) {

                    $this->sqlCheck($sub_value, "_SESSION", $sub_key);

                    $this->xssCheck($sub_value, "_SESSION", $sub_key);

                    $this->htmlCheck($sub_value, "_SESSION", $sub_key);

                }

            } else {

                $this->sqlCheck($value, "_SESSION", $key);

                $this->xssCheck($value, "_SESSION", $key);

                $this->htmlCheck($value, "_SESSION", $key);

            }

        }

    }

    public function checkFiles()

    {

        foreach ($_FILES as $key => $value) {

            if (is_array($value)) {

                $flattened = $this->arrayFlatten($value);

                foreach ($flattened as $sub_key => $sub_value) {

                    $this->sqlCheck($sub_value, "_FILES", $sub_key);

                    $this->xssCheck($sub_value, "_FILES", $sub_key);

                    $this->htmlCheck($sub_value, "_FILES", $sub_key);

                }

            } else {

                $this->sqlCheck($value, "_FILES", $key);
                $this->xssCheck($value, "_FILES", $key);

                $this->htmlCheck($value, "v", $key);

            }

        }

    }

    public function gua()

    {

        if (isset($_SERVER['HTTP_USER_AGENT'])) {

            return $_SERVER['HTTP_USER_AGENT'];

        }

        return md5(rand());

    }

    public function cutGua($string)

    {

        $five = substr($string, 0, 4);

        $last = substr($string, -3);

        return md5($five . $last);

    }

    public function getCSRF()

    {

        if (isset($_SESSION['token'])) {

            $token_age = time() - $_SESSION['token_time'];

            if ($token_age <= 300) { /* Less than five minutes has passed. */

                return $_SESSION['token'];

            } else {

                $token = md5(uniqid(rand(), true));

                $_SESSION['token'] = $token . "asd648" . $this->cutGua($this->gua());

                $_SESSION['token_time'] = time();

                return $_SESSION['token'];

            }

        } else {

            $token = md5(uniqid(rand(), true));

            $_SESSION['token'] = $token . "asd648" . $this->cutGua($this->gua());

            $_SESSION['token_time'] = time();

            return $_SESSION['token'];

        }

    }

    public function verifyCSRF($Value)

    {

        if (isset($_SESSION['token'])) {

            $token_age = time() - $_SESSION['token_time'];

            if ($token_age <= 300) { /* Less than five minutes has passed. */

                if ($Value == $_SESSION['token']) {

                    $Explode = explode('asd648', $_SESSION['token']);

                    $gua = $Explode[1];

                    if ($this->cutGua($this->gua()) == $gua) {

                        // Validated, Done!

                        unset($_SESSION['token']);

                        unset($_SESSION['token_time']);

                        return true;

                    }

                    unset($_SESSION['token']);

                    unset($_SESSION['token_time']);

                    return false;

                }

            } else {

                return false;

            }

        } else {

            return false;

        }

    }

    public function useCloudflare()

    {

        $this->IPHeader = "HTTP_CF_CONNECTING_IP";

    }

    public function useBlazingfast()

    {

        $this->IPHeader = "X-Real-IP";

    }

    public function useDDoSGuard()

    {

       $this->IPHeader = "HTTP_X_FORWARDED_FOR";



    }



    public function customIPHeader($String = 'REMOTE_ADDR')

    {

        $this->IPHeader = $String;

    }

    public function antiCookieSteal($listparams = 'username')

    {

        $this->CookieCheck = true;

        $this->CookieCheckParam = $listparams;

    }

    public function cookieCheck()

    {

        if ($this->CookieCheck == true) {

            if (isset($_SESSION)) {

                if (isset($_SESSION[$this->CookieCheckParam])) {

                    if (!(isset($_SESSION['JV-IP']))) {

                        $_SESSION['JV-IP'] = $_SERVER[$this->IPHeader];

                        return true;

                    } else {

                        if (!($_SESSION['JV-IP'] == $_SERVER[$this->IPHeader])) {

                            unset($_SESSION['JV-IP']);

                            unset($_SESSION);

                            @session_destroy();

                            @session_start();

                            return true;

                        }

                    }

                }

            }

        }

    }

    public function start()

    {

        @$this->CheckBanned();

        @$this->checkGET();

        @$this->checkFiles();

        @$this->checkPOST();

        @$this->checkCOOKIE();

        @$this->checkSESSION();



        if ($this->CookieCheck == true) {

            $this->cookieCheck();

        }

    }



}

