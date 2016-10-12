<?php
defined('BASEPATH') OR exit('No direct script access allowed');

print_r ($this->session->all_userdata());
?>
<a href="<?php echo base_ur1() . "main/logout" ?>">ログアウト</a>
