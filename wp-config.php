<?php


if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) $_SERVER['HTTPS']='on';


/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress_news' );

/** Username của database */
define( 'DB_USER', 'wordpressuser' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '4BX0LnqAw6' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(o}kK3R#X|3,oUjUmvl[d0?sPe@RS_(mR:IPTVvf@vdxI&=BMjbaC{=~7d!@)5gB' );
define( 'SECURE_AUTH_KEY',  '51x^k]Iin_2D5~OdZK8+|WUn(pnQ]D_>T$%)!<xAX+g0|3axcS8yiMG>9GCbGDZ1' );
define( 'LOGGED_IN_KEY',    'S5!gT[=W:w=.fAk83! 2iT:]q1,~;UUuV~t6Q@rCTy7Z7 C*r?[(Ty5_UZ9bo>9O' );
define( 'NONCE_KEY',        '0bImi.O7c?O$D7Hf<;G-F;:ka:r` YXn$lmrS>swm/xK0tcn3$deg-;?keUkUb#J' );
define( 'AUTH_SALT',        '@bK_9H0Q+3DF?e(AZS4hA`CX8op{a#3/|P@gxrI?h?~ci<Q(TrVF>O1Wh|BclCCs' );
define( 'SECURE_AUTH_SALT', 'AHifvy9oQE}*@<w% &Geu=/0UHY[QJ%>:l|c77[b?pkkw=P]+T&3be9_0N4K:,af' );
define( 'LOGGED_IN_SALT',   'xCWyVFMT@mN7?NdRm&%.S>WpG#s/!]1:jNR*zf^6<H6?Qsrm%(5=A4w[{t3|RPx&' );
define( 'NONCE_SALT',       '2c!QK;E4>W+awIP;Sf]uA4 3Ke-||]4=gp&4Vvl}LJ|LZ0)m2=xWf=VxEg~`;DCB' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){

    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
    /** define('FORCE_SSL_ADMIN', true); */
}
