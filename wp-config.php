<?php
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
define( 'DB_NAME', 'wp_organi' );

/** Username của database */
define( 'DB_USER', 'wp_organi' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'organi' );

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
define( 'AUTH_KEY',         'mo~X8e^4aODhMGCUI(0c_HF*jZrpWh-?4J0b/noUPH1NSXG;?`VDP-H5o.)@]`|U' );
define( 'SECURE_AUTH_KEY',  'r;^udOMLa1O2/1k8JZ]O6]]*BDI>PcKAtY8^e!.nm,Ea.fx-ZCrcqp avjB@7&LW' );
define( 'LOGGED_IN_KEY',    '}Hb;lL9 |j!>n;$j?D*!aCtG$sL<fWuH-r[a<)1rGNcO}AMEOx`XRBK#&(!+*@,b' );
define( 'NONCE_KEY',        '6s]VU(vQ@dvJ7pwmrzacTL~O?0#G:p{e80Si=*!gS~vp`x6s+*Y_#@rZ2YOc8>oH' );
define( 'AUTH_SALT',        '8vy5Nn~z|U5hS2w0YNIpC!Q9%vQ|Z9Q0&&W>[iHex O:Hw5_[b Gu^;sx2F8^]y!' );
define( 'SECURE_AUTH_SALT', '9uhVwK[pj|R%b,`;&-e~87V/AYu{v}Ym7BtK:[ZC4v-*cU~}u4YOxW/U2^AMf4&b' );
define( 'LOGGED_IN_SALT',   '=_-nC3Xq:T0DAl9!t&|Cof5%h;sszE%Kl[bVyk:{ zJ[e/4g$ _!5Y<(pKUm%@+R' );
define( 'NONCE_SALT',       'YkLEg|4NNnQ#o?o>p1}vh-V`d,rLk!IdRs^3Q (Bma_b@&&O_XL>uNPvws@RrQ/&' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp3_';

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
