<?php

namespace App\Console\Script;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TimingScript extends Command
{
    // 命令名称
    protected $name = 'script:timing';
    // 命令描述
    protected $description = '定时脚本测试';

    // 执行的方法
    public function handle()
    {
        Log::info('执行时间=' . date('Y-m-d H:i:s'));
    }
}
