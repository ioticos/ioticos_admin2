<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-29 08:17:36 --> Invalid file: content_realtime.php
#0 /home/adminiot/public_html/application/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('content_realtim...')
#1 /home/adminiot/public_html/application/system/Common.php(176): CodeIgniter\View\View->render('content_realtim...', Array, NULL)
#2 /home/adminiot/public_html/application/app/Controllers/Realtime.php(9): view('content_realtim...')
#3 /home/adminiot/public_html/application/system/CodeIgniter.php(847): App\Controllers\Realtime->index()
#4 /home/adminiot/public_html/application/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Realtime))
#5 /home/adminiot/public_html/application/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /home/adminiot/public_html/application/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
