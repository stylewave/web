<?php
use phpmailer\phpmailer;

/**
 *foreach遍历后unset删除,这种方法也是最容易想到的方法
 */
function delByValue($arr, $value){
    if(!is_array($arr)){
        return $arr;
    }
    foreach($arr as $k=>$v){
        if($v == $value){
            unset($arr[$k]);
        }
    }
    return $arr;
}
/**
 * @desc 根据生日获取年龄
 * @param     string $birthday
 * @return    integer
 */
function getAge($birthday) {
    $birthday = getDate(strtotime($birthday));
    $now = getDate();
    $month = 0;
    if($now['month'] > $birthday['month'])
        $month=1;
    if($now['month'] == $birthday['month'])
        if($now['mday'] >= $birthday['mday'])
            $month=1;
    return $now['year']-$birthday['year']+$month;
}
/**
 * 判断当前访问的用户是  PC端  还是 手机端  返回true 为手机端  false 为PC 端
 * @return boolean
 * 是否移动端访问访问
 * @return bool
 */
function isMobile()
{
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        return true;

    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    {
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    // 判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile');
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            return true;
    }
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        }
    }
    return false;
}
/**
 * 从当前URL中去掉某个参数之后的URL
 * @param unknown_type $param
 * 可以查看 hmb 的用法
 */
function filterUrl($param)
{
    // 先取出当前的URL地址
    $url = $_SERVER['PHP_SELF'];
    // 正则去掉某个参数
    $re = "/\/$param\/[^\/]+/";
    return preg_replace($re, '', $url);
}
//中文字串截取无乱码
function getSubstr($string, $start, $length) {
    if(mb_strlen($string,'utf-8')>$length){
        $str = mb_substr($string, $start, $length,'utf-8');
        return $str.'...';
        //return $str;
    }else{
        return $string;
    }
}

//中文字串截取无乱码-时间
function getSubstrTime($string, $start, $length,$type) {
    // if(mb_strlen($string,'utf-8')>$length){
        if($type==1){
            $str = mb_substr($string, $start, $length,'utf-8');
            if(strpos($str,"月") > 0){
               
            }else{
                $length =$length+1;
                $str = mb_substr($string, $start, $length,'utf-8');
            }
        }else{
            $str = mb_substr($string,$start,$length,'utf-8');
            $str = preg_replace('/([\x80-\xff]*)/i','',$str);  
            // $b = strpos($str,"日");
            // if($b > 0){
            //     $length =$length-1;
            //     $str= mb_substr($string, $start, $length,'utf-8');
            // }
            // echo $b;
        }
       

        return $str;
        //return $str;
    // }else{
    //     return $string;
    // }
}

/**
 *用户名、邮箱、手机账号中间字符串以 * 隐藏
 **/
function hideStar($str) {
    if (strpos($str, '@')) {
        $email_array = explode("@", $str);
        $prevfix = (strlen($email_array[0]) < 4) ? "" : substr($str, 0, 3); //邮箱前缀
        $count = 0;
        $str = preg_replace('/([\d\w+_-]{0,100})@/', '***@', $str, -1, $count);
        $rs = $prevfix . $str;
    } else {
        $pattern = '/(1[34758]{1}[0-9])[0-9]{4}([0-9]{4})/i';
        if (preg_match($pattern, $str)) {
            $rs = preg_replace($pattern, '$1****$2', $str); // substr_replace($name,'****',3,4);
        } else {
            $rs = substr($str, 0, 3) . "***" . substr($str, -1);
        }
    }
    return $rs;
}
/**
 * 系统邮件发送函数
 * @param string $to    接收邮件者邮箱
 * @param string $name  接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body    邮件内容
 * @param string $attachment 附件列表
 * @return boolean
 */
function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null){
    $config = Db::name('config')->where('id',1)->find();
    $mail = new PHPMailer(); //实例化
    $mail->CharSet    = 'UTF-8';  //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();  // 设定使用SMTP服务
    $mail->SMTPAuth   = true;                   // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';                  // 使用安全协议
    $mail->Host       = $config['sms'];         // SMTP 服务器
    $mail->Port       = $config['smdk'];        // SMTP服务器的端口号
    $mail->Username   = $config['smuser'];      // SMTP服务器用户名
    $mail->Password   = $config['smpwd'];       // SMTP服务器密码
    $mail->SetFrom($config['sendemail'], $config['smname']);
    $mail->Subject    = $subject;
    $mail->Body    = $body;
    $mail->isHTML(true);
    $mail->AddAddress($to, $name);
    if(is_array($attachment)){ // 添加附件
        foreach ($attachment as $file){
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    return $mail->Send() ? true : $mail->ErrorInfo;
}
/**
 * 时间显示(时、分、秒 ...)
 *
 * @param int    $sTime 待显示的时间
 * @param string $type  类型. normal | mohu | full | ymd | other
 * @param string $alt   已失效
 * @return string
 */
function friendlyDate($sTime,$type = 'normal',$alt = 'false') {
    if (!$sTime)
        return '';
    //sTime=源时间，cTime=当前时间，dTime=时间差
    $cTime      =   time();
    $dTime      =   $cTime - $sTime;
    $dDay       =   intval(date("z",$cTime)) - intval(date("z",$sTime));
    $dYear      =   intval(date("Y",$cTime)) - intval(date("Y",$sTime));
    if($type=='normal'){
        if( $dTime < 60 ){
            if($dTime < 10){
                return '刚刚';
            }else{
                return intval(floor($dTime / 10) * 10)."秒前";
            }
        }elseif( $dTime < 3600 ){
            return intval($dTime/60)."分钟前";
            //今天的数据.年份相同.日期相同.
        }elseif( $dYear==0 && $dDay == 0  ){
            return '今天'.date('H:i',$sTime);
        }elseif($dYear==0){
            return date("m月d日 H:i",$sTime);
        }else{
            return date("Y-m-d H:i",$sTime);
        }
    }elseif($type=='mohu'){
        if( $dTime < 60 ){
            return $dTime."秒前";
        }elseif( $dTime < 3600 ){
            return intval($dTime/60)."分钟前";
        }elseif( $dTime >= 3600 && $dDay == 0  ){
            return intval($dTime/3600)."小时前";
        }elseif( $dDay > 0 && $dDay<=7 ){
            return intval($dDay)."天前";
        }elseif( $dDay > 7 &&  $dDay <= 30 ){
            return intval($dDay/7) . '周前';
        }elseif( $dDay > 30 ){
            return intval($dDay/30) . '个月前';
        }
    }elseif($type=='full'){
        return date("Y-m-d , H:i:s",$sTime);
    }elseif($type=='ymd'){
        return date("Y-m-d",$sTime);
    }else{
        if( $dTime < 60 ){
            return $dTime."秒前";
        }elseif( $dTime < 3600 ){
            return intval($dTime/60)."分钟前";
        }elseif( $dTime >= 3600 && $dDay == 0  ){
            return intval($dTime/3600)."小时前";
        }elseif($dYear==0){
            return date("Y-m-d H:i:s",$sTime);
        }else{
            return date("Y-m-d H:i:s",$sTime);
        }
    }
}


function change_array($data, $key_field, $value_field) {
    $array = array();
    if (is_array($data[0])) {
        foreach ($data as $item) {
            $array[$item[$key_field]] = $item[$value_field];
        }
    }
    return $array;
}

function asterisk($data)
{
 $mobile_asterisk = substr($data,0,4)."************".substr($data,-5,5);
 return $mobile_asterisk;
}

//获取访客IP地址。
function getIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //如果变量是非空或非零的值，则 empty()返回 FALSE。
        $IP = explode(',',$_SERVER['HTTP_CLIENT_IP']);
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $IP = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
    }
    elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $IP = explode(',',$_SERVER['REMOTE_ADDR']);
    }
    else {
        $IP[0] = 'None';
    }
    return $IP[0];
}

function baidu($url){
    $baidu="http://www.baidu.com/s?wd=site:".$url;
    $site=file_get_contents($baidu);
    // dump($site);
    // ereg("该网站共有(.*)个网页被百度收录", $site,$count);
    // preg("该网站共有(.*)个网页被百度收录", $site,$count);
    // $count=str_replace("该网站共有","",$count);
    // $count=str_replace("个网页被百度收录","",$count);
    // $count=str_replace(",","",$count);
    // $count=str_replace(" ","",$count);
    // return strip_tags($count[0]);


    $domain = "www.yuntianxia.com/"; 
    $site_url = 'http://www.baidu.com/s?wd=site:';
    $all = $site_url.$domain; /*域名所有收录的网址*/
    $today = $all.'&lm=1'; /*域名今日收录的网址*/
    $utf_pattern = "/找到相关结果数(.*)个/";
    $kz_pattern = "/<span class='g'>(.*)</span>/"; 
    $times = "/d{4}-d{1,2}-d{1,2}/"; /*匹配快照日期的正则表达式，如:2011-8-4*/
    $s0 = @file_get_contents($all); /*将site:www.jb51.net的网页置入$s0字符串中*/
    $s1 = @file_get_contents($today);
    preg_match($utf_pattern,$s0,$all_num); /*匹配"找到相关结果数*个"*/
    preg_match($utf_pattern,$s1,$today_num);
    dump($s1);
    // preg_match($kz_pattern,$s0,$temp);
    // preg_match($times,$temp[0],$screenshot);
    // if($all_num[1] == "")
    // $all_num[1] = 0;
    // if($today_num[1] == "")
    // $today_num[1] = 0;
    // if($screenshot[0] == "")
    // $screenshot[0] = "暂无快照";
    dump($today_num);
    dump($all_num);die;
    // dump($screenshot);
  }
