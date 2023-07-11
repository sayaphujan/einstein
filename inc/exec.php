<?
require_once( 'functions.php' );

switch ( $_GET[ 'act' ] ) 
{

case 'add_user':

        $eChk = mysqli_query( $link, 'SELECT username FROM users WHERE username=\'' . make_safe( $_POST[ 'username' ] ) . '\' AND deleted=\'0\' LIMIT 1' );
                    if ( mysqli_num_rows( $eChk ) == 0 ) 
                    {
                        
                        $salt = hash( 'sha256', uniqid( mt_rand(), true ) . time() . strtolower( $_POST[ 'username' ] ) );
                        $hash = $salt . $_POST[ 'password' ];
                        for ( $i = 0; $i < 100000; ++$i ) {
                            $hash = hash( 'sha256', $hash );
                        }
                        $hash = $salt . $hash;
                        
                        $query =    "INSERT INTO users (created, fullname, username, salt, password) 
                                            VALUES (
                                                NOW(),
                                                '".make_safe($_POST['fullname'])."',
                                                
                                                '".make_safe($_POST['username'])."',
                                                '".make_safe($salt)."',
                                                '".make_safe($hash)."'
                                            )";
                                            mysqli_query($link, $query);
                                            $id = mysqli_insert_id($link);
                        
                        }else{
                            $que = mysqli_query($link, 'SELECT * FROM users WHERE username=\'' . make_safe( $_POST[ 'username' ] ) . '\' AND deleted=\'0\' LIMIT 1');
                            $res  = mysqli_fetch_assoc($que);
                            
                            //print_r($res);
                            
                            $id = $res['id'];
                            
                            $salt = hash( 'sha256', uniqid( mt_rand(), true ) . time() . strtolower( $_POST[ 'username' ] ) );
                            
                            if(empty($_POST['password'])){
                                $hash = $res['password'];
                            }else{
                                $hash = $salt . $_POST[ 'password' ];
                            }
                            
                            for ( $i = 0; $i < 100000; ++$i ) {
                                $hash = hash( 'sha256', $hash );
                            }
                            $hash = $salt . $hash;
                            
                             $query =    "UPDATE users SET 
                                                        salt = '".make_safe($salt)."', 
                                                        password = '".make_safe($hash)."',
                                                        username = '".make_safe($_POST['username'])."', 
                                                        fullname = '".make_safe($_POST['fullname'])."',
                                                        date_modified = NOW()
                                                WHERE id = '".make_safe($_POST['uid'])."'";
                            //echo $query;
                            mysqli_query($link, $query);
                        }
                        //print_r($_POST);
                        //echo $query;
                        header( 'Location: ' . root().'admin/users?id='.$id );
        break;
        
    case 'delete_user':
            
            $id = intval($_GET['id']);
            
            $delete = mysqli_query($link, "UPDATE `users` SET deleted='1', date_modified='".make_safe(date('Y-m-d H:i:s'))."' WHERE `id` = ".make_safe($id));
            
            header( 'Location: ' . root('admin/users/') );
            
            break;
            
    case 'login':
       
            if ( !empty( $_POST[ 'username' ] ) && !empty( $_POST[ 'password' ] ) ) {
               
                //checking referal login
                $chk = mysqli_query( $link, 'SELECT * FROM users WHERE username=\'' . make_safe( $_POST[ 'username' ] ) . '\' AND deleted=\'0\' LIMIT 1' );

                if ( mysqli_num_rows( $chk ) == 1 ) {
                     $hash = mysqli_result( $chk, 0, 'salt' ) . $_POST[ 'password' ];
                        for ( $i = 0; $i < 100000; ++$i ) {
                            $hash = hash( 'sha256', $hash );
                        }
                        $hash = mysqli_result( $chk, 0, 'salt' ) . $hash;
                        
                    if ( $hash == mysqli_result( $chk, 0, 'password' ) ) {
                        $_SESSION[ 'uid' ] = mysqli_result( $chk, 0, 'id' );
                        $_SESSION[ 'cname' ] = mysqli_result( $chk, 0, 'fullname' );
                        $_SESSION[ 'error' ] = '<div class="alert alert-success mt-5"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Welcome, ' . $_SESSION[ 'cname' ] . '</div>';
                        header( 'Location: ' . root( 'admin/comments/' ) );
                        exit();
                    } else {
                        $_SESSION[ 'error' ] = '<div class="alert alert-danger mt-5"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Could not be logged in! Please check your password.</div>';
                    }
                }
               
            } else {
                $_SESSION[ 'error' ] = '<div class="alert alert-danger mt-5"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Could not be logged in! Please check your login details.</div>';
            }
           
            header( 'Location: ' . root( 'login/' ) );
            exit();
        break;

    case 'logout':
            session_destroy();
            header( 'Location: ' . root() );
            exit();
        break;
        
    case 'users_list':
            $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
            $limit  = isset($_POST['length']) ? $_POST['length'] : 10; // Ambil data limit per page
            $start  = isset($_POST['start']) ? $_POST['start'] : 0; // Ambil data start
            
            if(empty($search)){
                $where = "WHERE deleted='0'";
            }else{
            $where = "WHERE (fullname LIKE '%".$search."%' OR username LIKE '%".$search."%') AND deleted='0'";
            }
            
            $que        = mysqli_query($link, "SELECT COUNT(*) as total FROM `users` WHERE deleted='0'");
            $sql        = mysqli_fetch_all($que, MYSQLI_ASSOC);
            $sql_count  = $sql[0]['total'];
            
            $query = "SELECT * FROM `users` $where";
                        
            $order_field    = $_POST['order'][0]['column']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
            $order_ascdesc  = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
            $order          = isset($_POST['columns'][$order_field]['data']) ? " ORDER BY ".$_POST['columns'][$order_field]['data']." ".$order_ascdesc : " ORDER BY id DESC";
            
            //echo $query.$order." LIMIT ".$limit." OFFSET ".$start;
            
            $sql_data = mysqli_query($link, $query.$order." LIMIT ".$limit." OFFSET ".$start); // Query untuk data yang akan di tampilkan
            $sql_filter = mysqli_query($link, $query); // Query untuk count jumlah data sesuai dengan filter pada textbox pencarian
            $sql_filter_count = mysqli_num_rows($sql_filter); // Hitung data yg ada pada query $sql_filt
            
            $data = mysqli_fetch_all($sql_data, MYSQLI_ASSOC); // Untuk mengambil data hasil query menjadi array
            $callback = array(
                'draw'=>$_POST['draw'], // Ini dari datatablenya
                'recordsTotal'=>$sql_count,
                'recordsFiltered'=>$sql_filter_count,
                'data'=>$data
            );
            header('Content-Type: application/json');
            echo json_encode($callback);
        break;
            
    case 'contact_us':
    if(isset($_POST['url']) && $_POST['url'] != '')
    {
        header( 'Location: ' . root().'contact#form' );  
    }
    else
    {
         if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] !='') {
            //PHP Code
            $secret = "6Lf3zx8kAAAAAMpKd-r86xwBw-iyJ2dJOnhYoHC-";
            $response = $_POST['g-recaptcha-response'];
            $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
            $captcha_success = json_decode($verify);
            
            //echo "<pre>";
            //print_r($captcha_success);
            //echo "</pre>";
            
            if ($captcha_success->success == true || $captcha_success->success == "true" || $captcha_success->success == 1) {
                    $insert = mysqli_query($link, 
                                "INSERT INTO `contact_us` (
                                `id`
                                , `name`
                                , `email`
                                , `message`
                                , `date_created`
                                ) VALUES (
                                NULL
                                , '".make_safe($_POST['name'])."'
                                , '".make_safe($_POST['email'])."'
                                , '".make_safe($_POST['message'])."'
                                , '".make_safe(date('Y-m-d H:i:s'))."'
                                )");
                    if($insert)
                    {
                        $to = 'info@einsteinacademy.us';
                                    $subject = "Einstein Academy US";
                                    $message = "
                                    <html>
                                    <head>
                                    <title>Message | Einstein Academy US</title>
                                    </head>
                                    <body>
                                    <p>Name: " . make_safe( $_POST[ 'name' ] ) . "</p>
                                    <p>Email: " . make_safe( $_POST[ 'email' ] ) . "</p>
                                    <p>Questions/Comments: " . make_safe( $_POST[ 'message' ] ) . "</p>
                                    <p>Thank You!</p>
                                    <p>--</p>
                                    <p>Einstein Academy US</p>
                                    </body>
                                    </html>
                                    ";
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    $headers .= 'From: <admin@einsteinacademy.us>' . "\r\n";
                                    mail( $to, $subject, $message, $headers );
                                    //mail( 'irawan.wijanarko@gmail.com', $subject, $message, $headers );
                                    //mail( 'shinta.setiawati@gmail.com', $subject, $message, $headers );
                                    
                        $_SESSION[ 'message' ] = '<div class="alert alert-success mt-5">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Successfully sent your message!
                                        </div>';
                                        
                        header( 'Location: ' . root().'success/' );            
                    }
            } else {
                $_SESSION[ 'error' ] = '<div class="alert alert-danger mt-5"><h4 style="color:red">Captcha Invalid</h4></div>';
                $_SESSION['name']       =  make_safe($_POST['name']);
                $_SESSION['email']      =  make_safe($_POST['email']);
                $_SESSION['message']    =  make_safe($_POST['message']);
                header( 'Location: ' . root().'contact#form' );  
            }
        }else{
                $_SESSION[ 'error' ] = '<div class="alert alert-danger mt-5"><h4 style="color:red">Please click Captcha</h4></div>';
                $_SESSION['name']       =  make_safe($_POST['name']);
                $_SESSION['email']      =  make_safe($_POST['email']);
                $_SESSION['message']    =  make_safe($_POST['message']);
                header( 'Location: ' . root().'contact#form' );  
        }
    }
                
        break;
        
        case 'comments_list':
            $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
            $limit  = isset($_POST['length']) ? $_POST['length'] : 10; // Ambil data limit per page
            $start  = isset($_POST['start']) ? $_POST['start'] : 0; // Ambil data start
            
            if(empty($search)){
                $where = '';
            }else{
            $where = "WHERE (name LIKE '%".$search."%' OR email LIKE '%".$search."%')";
            }
            
            $que        = mysqli_query($link, "SELECT COUNT(*) as total FROM `contact_us`");
            $sql        = mysqli_fetch_all($que, MYSQLI_ASSOC);
            $sql_count  = $sql[0]['total'];
            
            $query = "SELECT * FROM `contact_us` $where";
                        
            $order_field    = $_POST['order'][0]['column']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
            $order_ascdesc  = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
            $order          = isset($_POST['columns'][$order_field]['data']) ? " ORDER BY ".$_POST['columns'][$order_field]['data']." ".$order_ascdesc : " ORDER BY id DESC";
            
            //echo $query.$order." LIMIT ".$limit." OFFSET ".$start;
            
            $sql_data = mysqli_query($link, $query.$order." LIMIT ".$limit." OFFSET ".$start); // Query untuk data yang akan di tampilkan
            $sql_filter = mysqli_query($link, $query); // Query untuk count jumlah data sesuai dengan filter pada textbox pencarian
            $sql_filter_count = mysqli_num_rows($sql_filter); // Hitung data yg ada pada query $sql_filt
            
            $data = mysqli_fetch_all($sql_data, MYSQLI_ASSOC); // Untuk mengambil data hasil query menjadi array
            $callback = array(
                'draw'=>$_POST['draw'], // Ini dari datatablenya
                'recordsTotal'=>$sql_count,
                'recordsFiltered'=>$sql_filter_count,
                'data'=>$data
            );
            header('Content-Type: application/json');
            echo json_encode($callback);
        break;

        default:
            header( 'Location: ' . root() );
            exit();
            break;
    
}
?>